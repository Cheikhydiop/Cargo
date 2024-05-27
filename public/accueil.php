<?php
session_start();
  if (isset($_POST['valide'])){ 
   header('Location: http://www.cheikh.diop:8001/Cargo/public/?page=route');
   exit();
} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
  <!-- <script src="./tailwind3.js"></script> -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;800&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>
<body>

<span class="absolute text-white text-4xl top-5 left-4 cursor-pointer" onclick="Openbar()">
    <i class="bi bi-filter-left px-2 bg-gray-900 rounded-md"></i>
  </span>
  <div class="sidebar fixed top-0 bottom-0 lg:left-0 left-[-300px] duration-1000
    p-2 w-[300px] overflow-y-auto text-center bg-gray-900 shadow h-screen">
    <div class="text-gray-100 text-xl">
      <div class="p-2.5 mt-1 flex items-center rounded-md ">
        <i class="bi bi-app-indicator px-2 py-1 bg-blue-600 rounded-md"></i>
        <h1 class="text-[15px]  ml-3 text-xl text-gray-200 font-bold">GP Monde</h1>
        <i class="bi bi-x ml-20 cursor-pointer lg:hidden" onclick="Openbar()"></i>
      </div>
      <!-- <hr class="my-2 text-gray-200 shadow-sm"> -->

     
       
       
      <div class="flex justify-center items-center bg-indigo-600">
    <div class="w-96 p-6 shadow-lg bg-[#333B4C] rounded-md">
        <h1 class="text-3xl block text-center font-semibold"><i class="fa-solid fa-user"></i> Admin</h1>
        <hr class="mt-3">
        <form method="POST">
            <div class="mt-3">
                <label for="username" class="block text-base mb-2">Username</label>
                <input type="text" id="username" name="username" class="border w-full text-base px-2 py-1 focus:outline-none focus:ring-0 focus:border-gray-600" placeholder="Enter Username..." />
            </div>
            <div class="mt-3">
                <label for="password" class="block text-base mb-2">Password</label>
                <input type="password" id="password" name="password" class="border w-full text-base px-2 py-1 focus:outline-none focus:ring-0 focus:border-gray-600" placeholder="Enter Password..." />
            </div>
            <div class="mt-3 flex justify-between items-center">
                <div>
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember" class="text-white"></label>
                </div>
                <div>
                    <a href="#" class="text-indigo-800 font-semibold"></a>
                </div>
            </div>
            <div class="mt-5">
                <button type="submit" name="valide" class="border-2 border-indigo-700 bg-[#111827] text-white py-1 w-full rounded-md hover:bg-transparent hover:text-indigo-700 font-semibold">
                    <i class="fa-solid fa-right-to-bracket"></i>&nbsp;&nbsp;Login
                </button>
            </div>
        </form>
    </div>
</div>


        </div>
      

      </div>
    </div>
  </div>



<footer class="text-gray-600 body-font">
  <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
    
    <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">© 2020 Tailblocks —
      <a href="https://twitter.com/knyttneve" class="text-gray-600 ml-1" rel="noopener noreferrer" target="_blank">@knyttneve</a>
    </p>
    <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
      <a class="text-gray-500">
        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
        </svg>
      </a>
      <a class="ml-3 text-gray-500">
        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
        </svg>
      </a>
      <a class="ml-3 text-gray-500">
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
          <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
        </svg>
      </a>
      <a class="ml-3 text-gray-500">
        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
          <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
          <circle cx="4" cy="4" r="2" stroke="none"></circle>
        </svg>
      </a>
    </span>
  </div>
</footer>

<section class="text-gray-600 body-font">
  <div class="container px-5 py-18 ml-auto  flex flex-wrap">
    <div class="flex w-full mt-0 flex-wrap">
      <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 lg:w-1/3 lg:mb-0 mb-4"></h1>
      <p class="lg:pl-6 lg:w-2/3 mx-auto leading-relaxed text-base"></p>
    </div>
    <div class="flex flex-wrap md:-m-2 -m-1">
    
        <div class="md:p-2 p-1 w-full">
        
  <div class="w-full lg:w-2/3 px-4 mb-8 lg:mb-0">
    <div class="flex relative pb-12">
      <div class="h-full w-10 absolute inset-1 flex items-center justify-center">
        <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
      </div>
      <div class="flex-shrink-0 w-10 h-10 rounded-full bg-indigo-500 inline-flex items-center justify-center text-white relative z-10">
        <!-- Icône pour l'étape 1 -->
        <img class="w-6 h-6" src="https://example.com/step1-icon.png" alt="Étape 1">
      </div>
      <div class="flex-grow pl-4">
        <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider">ÉTAPE 1</h2>
        <p class="leading-relaxed">Se présenter au guichet avec le colis et les informations à envoyer.</p>
      </div>
    </div>

    <div class="flex relative pb-12">
      <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
        <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
      </div>
      <div class="flex-shrink-0 w-10 h-10 rounded-full bg-indigo-500 inline-flex items-center justify-center text-white relative z-10">
        <!-- Icône pour l'étape 2 -->
        <img class="w-6 h-6" src="https://example.com/step2-icon.png" alt="Étape 2">
      </div>
      <div class="flex-grow pl-4">
        <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider">ÉTAPE 2</h2>
        <p class="leading-relaxed">Payer les frais de livraison en fonction de la distance.</p>
      </div>
    </div>

    <div class="flex relative">
      <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
        <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
      </div>
      <div class="flex-shrink-0 w-10 h-10 rounded-full bg-indigo-500 inline-flex items-center justify-center text-white relative z-10">
        <!-- Icône pour l'étape 3 -->
        <img class="w-6 h-6" src="https://example.com/step3-icon.png" alt="Étape 3">
      </div>
      <div class="flex-grow pl-4">
        <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider">ÉTAPE 3</h2>
        <p class="leading-relaxed">Recevoir un reçu de validation et un message indiquant que le colis est en cours.</p>
      </div>
    </div>
  </div>
  


  <div class="max-w-md mt-24 bg-white shadow-md rounded-md p-4">
    <h2 class="text-xl font-bold mb-2">Détails de la cargaison</h2>
    <div>
        <p class="text-gray-700 mb-2">Type de cargaison: Maritime</p>
        <p class="text-gray-700 mb-2">Distance du trajet: 1500 km</p>
    </div>
    <h3 class="text-lg font-semibold mt-4 mb-2">Frais de livraison</h3>
    <div class="flex justify-between mb-2">
        <p class="text-gray-700">Produit Alimentaire (poids 1 kg)</p>
        <p class="text-green-700 font-semibold">10000</p>
    </div>
    <div class="flex justify-between mb-2">
        <p class="text-gray-700">Produit Chimique (poids 1 kg)</p>
        <p class="text-green-700 font-semibold">20000</p>
    </div>
    <div class="flex justify-between mb-2">
        <p class="text-gray-700">Produit Matériel (fragile, poids 1 kg)</p>
        <p class="text-green-700 font-semibold">10000</p>
    </div>
    <div class="flex justify-between mb-2">
        <p class="text-gray-700">Produit Matériel (incassable, poids 1 kg)</p>
        <p class="text-green-700 font-semibold">10000</p>
    </div>
    <div class="mt-4">
        <p class="text-gray-700">Total des frais de livraison:</p>
        <p class="text-red-700 font-semibold">14500</p>
    </div>
</div>



        </div>
      </div>
      <div class="flex flex-wrap w-1/2">
        
        <div class="md:p-2 p-1 w-full">
      
    <div class="bg-white p-4">
    <h1 class="text-2xl font-bold mb-4">Bienvenue dans votre espace client</h1>
    
    <!-- Formulaire de recherche de colis -->
    <!-- <form action="#" method="GET" class="mb-4">
        <div class="flex items-center">
            <input type="text" placeholder="Numéro de colis" class="py-2 px-4 border border-gray-300 rounded-l-md focus:outline-none focus:border-blue-500 flex-grow">
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-r-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Rechercher</button>
        </div>
    </form> -->

    <div class="container mx-auto">
    <!-- En-tête de la page -->
    <h1 class="text-2xl font-bold mb-4">Suivi de colis</h1>

    <!-- Barre de recherche -->
    <div class="flex mb-4">
        <input type="text" placeholder="Entrez le numéro de suivi du colis" class="px-4 py-2 border border-gray-300 rounded-l-md w-full focus:outline-none focus:border-blue-500">
        <button class="px-4 py-2 bg-blue-500 text-white rounded-r-md hover:bg-blue-600 focus:outline-none">Rechercher</button>
    </div>

    <!-- Informations sur le colis -->
    <div class="bg-gray-100 p-4 rounded-lg mb-4">
        <!-- Informations principales -->
        <div class="flex justify-between items-center mb-2">
            <span class="font-semibold">Date d'arrivée prévue:</span>
            <span class="text-gray-800">10-09-2024</span>
        </div>
        <div class="flex justify-between items-center mb-2">
            <span class="font-semibold">Date de retard (si retard):</span>
            <span class="text-gray-800">24 heures</span>
        </div>
        <div class="flex justify-between items-center mb-2">
            <span class="font-semibold">État du colis:</span>
            <span class="text-gray-800">bon etat</span>
        </div>
    </div>

    <!-- Autres colis, le cas échéant -->
    <!-- Ajoutez des blocs similaires pour chaque colis, ou utilisez une boucle si vous générez dynamiquement le contenu -->

</div>

</div>

        </div>
        <div class="md:p-2 p-1 w-full">
          <img alt="gallery" class="w-full h-full object-cover object-center block" src="data:image/jpeg;base64,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">
        </div>
      </div>
    </div>
  </div>
</section>
  </div>
</section>




<footer class="text-gray-600 body-font">

  <div class="border-t border-gray-200">
    <div class="container px-5 py-8 flex flex-wrap mx-auto items-center mr-1">
      <div class="flex md:flex-nowrap flex-wrap justify-center items-end md:justify-start">
        <div class="relative sm:w-64 w-40 sm:mr-4 mr-2">
          <label for="footer-field" class="leading-7 text-sm text-gray-600">Aide Et Reclamation</label>
          <input type="text" id="footer-field" name="footer-field" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:ring-2 focus:bg-transparent focus:ring-indigo-200 focus:border-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Envoyer</button>
        <p class="text-gray-500 text-sm md:ml-6 md:mt-0 mt-2 sm:text-left text-center">Votre numéro de suivi nous permet de trouver la bonne division à contacter pour répondre à vos questions.
          <br class="lg:block hidden">Si
        </p>
      </div>
      <span class="inline-flex lg:ml-auto lg:mt-0 mt-6 w-full justify-center md:justify-start md:w-auto">
        <a class="text-gray-500">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
            <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
            <circle cx="4" cy="4" r="2" stroke="none"></circle>
          </svg>
        </a>
      </span>
    </div>
  </div>
  <div class="bg-gray-100">
    <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
      <p class="text-gray-500 text-sm text-center sm:text-left">© 2024 Sonatel —
        <a href="https://twitter.com/knyttneve" class="text-gray-600 ml-1" target="_blank" rel="noopener noreferrer">Sonatel@orange.sn</a>
      </p>
      <span class="sm:ml-auto sm:mt-0 mt-2 sm:w-auto w-full sm:text-left text-center text-gray-500 text-sm">Contact</span>
    </div>
  </div>
</footer>

    
</body>
</html>