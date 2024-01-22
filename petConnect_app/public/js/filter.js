document.addEventListener('DOMContentLoaded', function () {
    // Récupérer la liste des races
    const raceList = document.getElementById('race-list');

    // Récupérer tous les éléments de la liste des races
    const raceItems = raceList.getElementsByTagName('li');

    // Récupérer toutes les cartes de chiens
    const dogCards = document.querySelectorAll('.dogo');

    // Ajouter un gestionnaire de clic à chaque élément de la liste des races
    Array.from(raceItems).forEach(function (item) {
        item.addEventListener('click', function () {
            // Réinitialiser le soulignement pour tous les éléments de la liste
            Array.from(raceItems).forEach(function (resetItem) {
                resetItem.style.textDecorationLine = 'none';
            });

            // Récupérer la race correspondante au clic
            const race_id = item.dataset.race_id;

            // Filtrer les chiens en fonction de la race
            dogCards.forEach(function (card) {
                const cardRace_id = card.dataset.race_id.toLowerCase();


                // Vérifier si la race de la carte correspond à la race cliquée
                if (cardRace_id === race_id || race_id === 'all') {
                    card.style.display = 'block';  // Afficher la carte
                    item.style.textDecorationLine = 'underline';
                    item.style.textDecorationThickness = '2px';
                    item.style.textDecorationColor = 'blue';

                    card.style.transition = 'opacity 0.5s ease-in-out';
                    card.style.opacity = '1';
                } else {
                    card.style.transition = 'opacity 0.5s ease-in-out';
                    card.style.opacity = '0';
                    setTimeout(() => {
                        card.style.display = 'none';
                    }, 500);  // Attendre la fin de la transition avant de masquer la carte
                }


            });
        });
    });
});

