
 // JavaScript pour récupérer les données du fichier JSON et les afficher dans le tbody

// Sélectionner le tbody avec l'ID cargoList
const tbody = document.getElementById('cargoList');

// Fonction pour récupérer les données du fichier JSON
async function fetchCargos() {
    try {
        // Récupérer les données du fichier JSON
        const response = await fetch('cargos.json');
        const cargos = await response.json();

        // Parcourir les données de cargos et les afficher dans le tbody
        cargos.forEach(cargo => {
            // Créer une nouvelle ligne de tableau
            const row = document.createElement('tr');

            // Ajouter les cellules avec les données du cargo
            row.innerHTML = `
                <td>oooooooooo</td>
                <td>${cargo.country1}</td>
                <td>${cargo.country2}</td>
                <td>${cargo.etat_globale}</td>
                <td><input type="radio" name="plan"></td>
            `;

            // Ajouter la ligne au tbody
            tbody.appendChild(row);
        });
    } catch (error) {
        console.error('Une erreur s\'est produite lors de la récupération des données du fichier JSON:', error);
    }
}

// Appeler la fonction pour récupérer les données
fetchCargos();

