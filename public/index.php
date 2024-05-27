<?php





   
    $_SESSION['user_data'] = $_POST;
    $fichier=[
        "air",
        "maritine",
        "route",
     
        ];
    
       if(isset($_GET["page"])){
    
        $page=$_GET["page"];
          if(in_array($page,$fichier)){
               include("../templates/layout.html.php");
                 require_once '../templates/'.$page.'.html.php';
            }else{
             
               }








//    }else{

//     if(isset($_POST["page"])){
   
//         $page=$_POST["page"];
//         if($page=="filter"){

//                 include("../templates/layout.html.php");
//                 require_once '../templates/'.$page.'.html.php';
//     } else if($page=="search"){
            
//           include("../templates/layout.html.php");
//           require_once '../templates/'.$page.'.html.php';
//           }else if($page=="filter2"){
            
//           include("../templates/layout.html.php");
//           require_once '../templates/'.$page.'.html.php';
//           }
//        }


//        if($_POST["status"]=="salut"){
//         $presents=$students;
//        }
     
   
    
    //amadousy343@gmaol.com lettre ,otive
   }

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ajouter une Cargaison</title>
  <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css">
  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css">
  <style>
    #map { height: 400px; }
  </style>
</head>
<body>

<!-- Overlay -->
<div class="fixed top-0 left-0 w-full h-full bg-gray-800 bg-opacity-50 flex items-center justify-center z-50 hidden" id="modalOverlay">
  <!-- Modal -->
  <div class="bg-white p-8 rounded-lg shadow-xl largeur flex flex-row" id="modalContent">
    <div class="w-1/2 pr-4">
      <h2 class="text-xl font-bold mb-4">Ajouter une Cargaison</h2>
      
      <label for="type" class="block mb-2">Type :</label>
      <div class="flex space-x-4 p-4 bg-white border-gray-200 border rounded-sm overflow-x-scroll custom-scrollbar">
        <a class="flex flex-col items-center" href="#">
          <img class="h-14 w-14 rounded-full p-[1.5px] border-2 border-red-500 flex justify-center items-center hover:cursor-pointer hover:scale-110 transition-transform duration-200 ease-out" src="https://www.inc-conso.fr/sites/default/files/avion-800_1.png" alt="Cargaison Aérienne">
          <p class="text-xs w-14 text-center mt-2">Aérienne</p>
        </a>
        <a class="flex flex-col items-center" href="#">
          <img class="h-14 w-14 rounded-full p-[1.5px] border-2 border-red-500 flex justify-center items-center hover:cursor-pointer hover:scale-110 transition-transform duration-200 ease-out" src="https://www.actu-environnement.com/images/illustrations/news/36586_large.jpg" alt="Cargaison Maritime">
          <p class="text-xs w-14 text-center mt-2">Maritime</p>
        </a>
        <a class="flex flex-col items-center" href="#">
          <img class="h-14 w-14 rounded-full p-[1.5px] border-2 border-red-500 flex justify-center items-center hover:cursor-pointer hover:scale-110 transition-transform duration-200 ease-out" src="https://img.freepik.com/vecteurs-libre/camion-transport-dessine-main_23-2149161394.jpg" alt="Cargaison Routière">
          <p class="text-xs w-14 text-center mt-2">Routière</p>
        </a>
        <div class="flex items-center">
          <select class="grow outline-none p-2 border border-gray-300 rounded-lg focus:border-red-500 focus:ring focus:ring-red-200 transition duration-200" id="cargo" name="cargo">
            <option value="0">Choisir un type de cargaison</option>
            <option value="air">Aérienne</option>
            <option value="maritime">Maritime</option>
            <option value="road">Routière</option>
          </select>
        </div>
      </div>

      <label for="maxWeight" class="block mb-2">Poids Max :</label>
      <input type="text" id="maxWeight" class="w-full border border-gray-300 rounded px-3 py-2 mb-4 focus:outline-none focus:border-blue-500">
      
      <label for="calculateDistance" class="block mb-2">Calculer la Distance :</label>
      <button id="calculateDistance" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Calculer</button>

      <div class="flex justify-end mt-4">
        <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Ajouter</button>
        <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline ml-2" id="modalClose">Annuler</button>
      </div>
    </div>

    <!-- Carte Map -->
    <div class="w-1/2 pl-4">
      <div id="map" class="h-96 w-full rounded-lg shadow-md"></div>
      <div class="mt-4">
        <button id="startPointBtn" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Définir Point de Départ</button>
        <button id="endPointBtn" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline ml-2">Définir Point d'Arrivée</button>
        <button id="calculateMapDistance" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline ml-2">Calculer Distance</button>
        <p id="distanceOutput" class="mt-2"></p>
      </div>
    </div>
  </div>
</div>

<!-- Script -->
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
  const map = L.map('map').setView([20, 0], 2);
  let startPoint = null;
  let endPoint = null;
  let polyline = null;

  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 18,
  }).addTo(map);

  map.on('click', function(e) {
    if (startPoint && !endPoint) {
      endPoint = e.latlng;
      L.marker(endPoint).addTo(map).bindPopup('Point d\'Arrivée').openPopup();
    } else if (!startPoint) {
      startPoint = e.latlng;
      L.marker(startPoint).addTo(map).bindPopup('Point de Départ').openPopup();
    }

    if (startPoint && endPoint) {
      if (polyline) {
        map.removeLayer(polyline);
      }
      polyline = L.polyline([startPoint, endPoint], { color: 'red' }).addTo(map);
    }
  });

  document.getElementById('calculateMapDistance').addEventListener('click', function() {
    if (startPoint && endPoint) {
      const distance = startPoint.distanceTo(endPoint) / 1000; // Convertir en kilomètres
      document.getElementById('distanceOutput').textContent = `Distance: ${distance.toFixed(2)} km`;
    } else {
      document.getElementById('distanceOutput').textContent = 'Veuillez définir un point de départ et un point d\'arrivée sur la carte.';
    }
  });

  document.getElementById('startPointBtn').addEventListener('click', function() {
    startPoint = null;
    endPoint = null;
    if (polyline) {
      map.removeLayer(polyline);
    }
    map.eachLayer(function(layer) {
      if (layer instanceof L.Marker) {
        map.removeLayer(layer);
      }
    });
    document.getElementById('distanceOutput').textContent = '';
    alert('Cliquez sur la carte pour définir le point de départ.');
  });

  document.getElementById('endPointBtn').addEventListener('click', function() {
    endPoint = null;
    if (polyline) {
      map.removeLayer(polyline);
    }
    map.eachLayer(function(layer) {
      if (layer instanceof L.Marker && layer.getLatLng() !== startPoint) {
        map.removeLayer(layer);
      }
    });
    document.getElementById('distanceOutput').textContent = '';
    alert('Cliquez sur la carte pour définir le point d\'arrivée.');
  });
});
</script>

</body>
</html>
