


<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestion des Envois de Colis</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <style>
    .largeur{
      width: 900px;
    }
  </style>
</head>

<body class="bg-gray-100 ">
  <!-- Barre de navigation -->
  <nav class="bg-[#374151] py-4 ml-20">
    <div class="container mx-auto flex justify-between items-center">
      <h1 class="text-white text-2xl font-semibold">Gestion des Envois de Colis</h1>
      <ul class="flex space-x-4 text-white text-lg font-medium">
        <li><a href="#" class="hover:underline">Accueil</a></li>
        <li><a href="#creer-cargaison" class="hover:underline">Créer une Cargaison</a></li>
        <li><a href="#rechercher-colis" class="hover:underline">Rechercher un Colis</a></li>
      </ul>
    </div>
  </nav>




  

  <!-- Contenu principal -->
  <div class="container mx-auto py-10  mr-20">
    <!-- Section Créer une Cargaison -->
    <section id="creer-cargaison" class="my-8">
      <h2 class="text-2xl font-semibold mb-4">Créer une Cargaison</h2>
      <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <!-- Champs du formulaire -->
        <!-- Exemple : Numéro de Cargaison -->
        
        <div class="mb-4">
          <label for="numero" class="block text-sm font-medium text-gray-700">Numéro de Cargaison</label>
          <input type="text" id="numero" name="numero" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
        </div>
        <!-- Autres champs du formulaire -->
        <!-- Ajoutez ici les autres champs comme poids max, produits, trajet, etc. -->

        <!-- Bouton de soumission -->
        <div class="flex items-center justify-between">
          <button type="button" id="createButton" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Créer</button>
        </div>
      </form>
    </section>

    <!-- Section Rechercher un Colis -->
    <section id="rechercher-colis" class="my-8">
      <h2 class="text-2xl font-semibold mb-4">Rechercher un Cargo</h2>
      <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <!-- Barre de recherche -->
        <div class="mb-4">
          <label for="search" class="block text-sm font-medium text-gray-700">Rechercher par Code</label>
          <input type="text" id="search" name="search" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
        </div>
       
        <!-- Liste des résultats de recherche -->
        <div class="overflow-x-auto">
          <!-- Utilisez des cartes ou des éléments de liste pour afficher les résultats -->
          <!-- Exemple de carte pour un colis -->
          <div class="bg-gray-100 rounded-lg p-4 mb-4">
           
            <section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="lg:w-2/3 w-full mx-auto overflow-auto">
      <table class="table-auto w-full text-left whitespace-no-wrap" id="">
        <thead>
          <tr>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">Type</th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">	Depart</th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Arriver</th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Etat</th>
            <th class="w-10 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tr rounded-br"></th>
          </tr>
        </thead>
        <tbody>
        <tr id=" cargoList">
            <td class="border-t-2 border-gray-200 px-4 py-3">Route</td>
            <td class="border-t-2 border-gray-200 px-4 py-3">10/09/2002</td>
            <td class="border-t-2 border-gray-200 px-4 py-3">10/09/2002</td>
            <td class="border-t-2 border-gray-200 px-4 py-3 text-lg text-gray-900">terminer</td>
            <td class="border-t-2 border-gray-200 w-10 text-center">
              <input name="plan" type="radio">
            </td>
          </tr>
      
        </tbody>
      </table>
    </div>
    <div class="flex pl-4 mt-4 lg:w-2/3 w-full mx-auto">
     
      <button class="flex ml-auto text-white bg-blue-500 border-0 py-2 px-6 focus:outline-none hover:bg-blue-600 rounded">paginer</button>
    </div>
  </div>
</section>
            <!-- Autres informations sur le colis -->
          </div>
        </div>
      </div>
    </section>
    
  </div>

  <!-- Pied de page -->
  <footer class="bg-gray-200 py-4 mt-10">
    <div class="container mx-auto text-center text-gray-600 text-sm">
      &copy; 2024 Gestion des Envois de Colis. Tous droits réservés.
    </div>
  </footer>

  <!-- Overlay -->
  <!-- Overlay -->
  <div class="fixed top-0 left-0 w-full h-full bg-gray-800 bg-opacity-50 flex items-center justify-center z-50 hidden" id="modalOverlay">
  <!-- Modal -->
  <form method="POST" >
    <div class="bg-white p-8 rounded-lg shadow-xl flex flex-row" id="modalContent largeur">
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
            <select id="cargo-type" class="grow outline-none p-2 border border-gray-300 rounded-lg focus:border-red-500 focus:ring focus:ring-red-200 transition duration-200" id="cargo" name="cargo">
              <option value="0">choix</option>
              <option value="aerial">Aérienne</option>
              <option value="maritime">Maritime</option>
              <option value="road">Routière</option>
            </select>
          </div>
        
        </div>
        <label for="maxWeight" class="block mb-2">Distance :</label>
        <input type="number" id="distance" name="distance" class="w-full border border-gray-300 rounded px-3 py-2 mb-4 focus:outline-none focus:border-blue-500">
        <label for="maxWeight" class="block mb-2">Poids Max :</label>
        <input type="text" id="maxWeight" name="maxWeight" class="w-full border border-gray-300 rounded px-3 py-2 mb-4 focus:outline-none focus:border-blue-500">
        <div class="flex justify-end">
          <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Ajouter</button>
          <button type="button" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline ml-2" id="modalClose">Annuler</button>
        </div>
      </div>

      <!-- Carte Map -->
      <div class="w-1/2 pl-4">
        <div id="map" class="h-96 w-full rounded-lg shadow-md"></div>
        <div class="mt-4">
          <label for="country1" class="block mb-2">Pays de départ :</label>
          <input type="text" value="Senegal" id="country1" name="country1" class="w-full border border-gray-300 rounded px-3 py-2 mb-4 focus:outline-none focus:border-blue-500">
          <label for="country2" class="block mb-2">Pays de destination :</label>
          <input type="text" id="country2" name="country2" class="w-full border border-gray-300 rounded px-3 py-2 mb-4 focus:outline-none focus:border-blue-500">
          <button type="button" id="calculateMapDistance" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Calculer Distance</button>
          <p id="distanceOutput" class="mt-2"></p>
        </div>
      </div>
    </div>
  </form>
</div>



  <script>
    // Sélectionner les éléments du modal
    const modalOverlay = document.getElementById('modalOverlay');
    const modalClose = document.getElementById('modalClose');
    const createButton = document.getElementById('createButton');
    const calculateDistanceButton = document.getElementById('calculateDistance');

    // Afficher le modal
    function openModal() {
      modalOverlay.classList.remove('hidden');
    }

    // Cacher le modal
    function closeModal() {
      modalOverlay.classList.add('hidden');
    }

    // Écouter les événements pour ouvrir/fermer le modal
    modalClose.addEventListener('click', closeModal);

   
// Écouter l'événement clic sur le bouton "Créer"
createButton.addEventListener('click', (event) => {
  event.preventDefault(); // Empêcher la soumission du formulaire
  openModal();
});

// Écouter l'événement clic sur le bouton "Calculer la Distance"
calculateDistanceButton.addEventListener('click', calculateDistance);

// Fonction pour calculer la distance sur la carte
function calculateDistance() {
  // Remplacez 'YOUR_ORIGIN' et 'YOUR_DESTINATION' par les coordonnées de départ et d'arrivée respectivement
  const origin = new google.maps.LatLng(YOUR_ORIGIN_LATITUDE, YOUR_ORIGIN_LONGITUDE);
  const destination = new google.maps.LatLng(YOUR_DESTINATION_LATITUDE, YOUR_DESTINATION_LONGITUDE);

  // Calculer la distance
  const distance = google.maps.geometry.spherical.computeDistanceBetween(origin, destination);

  // Afficher la distance dans une alerte (vous pouvez l'afficher autrement selon vos besoins)
  alert(`La distance entre les points est de ${distance.toFixed(2)} mètres.`);
}
</script>
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const map = L.map('map').setView([20, 0], 2);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      maxZoom: 18,
    }).addTo(map);

    document.getElementById('calculateMapDistance').addEventListener('click', async function() {
      const country1 = document.getElementById('country1').value;
      const country2 = document.getElementById('country2').value;

      if (country1 && country2) {
        try {
          const response1 = await axios.get(`https://nominatim.openstreetmap.org/search?country=${country1}&format=json`);
          const response2 = await axios.get(`https://nominatim.openstreetmap.org/search?country=${country2}&format=json`);

          if (response1.data.length > 0 && response2.data.length > 0) {
            const coordinates1 = [response1.data[0].lat, response1.data[0].lon];
            const coordinates2 = [response2.data[0].lat, response2.data[0].lon];

            const distance = calculateDistance(coordinates1, coordinates2);
            document.getElementById('distanceOutput').textContent = `Distance: ${distance.toFixed(2)} km`;
            
            // Ajouter des marqueurs et dessiner une ligne sur la carte
            L.marker(coordinates1).addTo(map).bindPopup(country1).openPopup();
            L.marker(coordinates2).addTo(map).bindPopup(country2).openPopup();
            L.polyline([coordinates1, coordinates2], {color: 'red'}).addTo(map);
          } else {
            document.getElementById('distanceOutput').textContent = 'Impossible de trouver les coordonnées des pays spécifiés.';
          }
        } catch (error) {
          console.error(error);
          document.getElementById('distanceOutput').textContent = 'Erreur lors de la récupération des coordonnées.';
        }
      } else {
        document.getElementById('distanceOutput').textContent = 'Veuillez entrer les noms des deux pays.';
      }
    });

    function calculateDistance(coords1, coords2) {
      const R = 6371; // Rayon de la Terre en km
      const dLat = toRad(coords2[0] - coords1[0]);
      const dLon = toRad(coords2[1] - coords1[1]);
      const lat1 = toRad(coords1[0]);
      const lat2 = toRad(coords2[0]);

      const a = Math.sin(dLat / 2) * Math.sin(dLat / 2) +
                Math.sin(dLon / 2) * Math.sin(dLon / 2) * Math.cos(lat1) * Math.cos(lat2);
      const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
      return R * c;
    }

    function toRad(value) {
      return value * Math.PI / 180;
    }
  });
</script>


</body>
</html>