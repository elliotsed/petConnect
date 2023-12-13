document.addEventListener('DOMContentLoaded', function () {
    // Récupérer la liste des races
    const raceList = document.getElementById('race-list');

    // Récupérer tous les éléments de la liste des races
    const raceItems = raceList.getElementsByTagName('li');

    // Récupérer toutes les cartes de chiens
    const dogCards = document.querySelectorAll('.card');

    // Ajouter un gestionnaire de clic à chaque élément de la liste des races
    Array.from(raceItems).forEach(function (item) {
        item.addEventListener('click', function () {
            // Récupérer la race correspondante au clic
            const race_id = item.dataset.race_id;
            console.log(race_id)

            // Filtrer les chiens en fonction de la race
            dogCards.forEach(function (card) {
                const cardRace_id = card.dataset.race_id.toLowerCase();
                console.log(cardRace_id)
                const row = document.querySelector('.rowDog');


                // Vérifier si la race de la carte correspond à la race cliquée
                if (cardRace_id === race_id || race_id === 'all') {
                    card.style.display = 'block';  // Afficher la carte
                } else {
                    card.style.display = 'none';   // Masquer les autres cartes
                }


            });
        });
    });
});

