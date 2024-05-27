a<form action="traitement.php" method="POST" id="cargo-form">
    <div class="flex items-center">
        <select id="cargo-select" class="grow outline-none p-2 border border-gray-300 rounded-lg focus:border-red-500 focus:ring focus:ring-red-200 transition duration-200" name="cargo">
            <option value="0">choix</option>
            <option value="aerial">Aérienne</option>
            <option value="maritime">Maritime</option>
            <option value="road">Routière</option>
        </select>
    </div>

    <label for="maxWeight" class="block mb-2">Poids Max :</label>
    <input type="text" id="maxWeight" name="maxWeight" class="w-full border border-gray-300 rounded px-3 py-2 mb-4 focus:outline-none focus:border-blue-500">

    <div class="flex justify-end">
        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Ajouter</button>

        <button type="button" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline ml-2" id="modalClose">Annuler</button>
    </div>
</form>
