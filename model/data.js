const url = 'data.json';
async function fetchJsonData() {
    try {
        const response = await fetch(url);
        if (!response.ok) {
            throw new Error('Erreur lors de la récupération du fichier JSON.');
        }
        const jsonData = await response.json();
       
        console.log(jsonData);
    } catch (error) {
        console.error('Erreur:', error.message);
    }
}

fetchJsonData();

