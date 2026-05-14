const searchInput =
document.getElementById('searchInput');

const genreFilter =
document.getElementById('genreFilter');

const gameItems =
document.querySelectorAll('.game-item');

searchInput.addEventListener(
    'keyup',
    filterGames
);

genreFilter.addEventListener(
    'change',
    filterGames
);

function filterGames(){

    const searchValue =
    searchInput.value.toLowerCase();

    const genreValue =
    genreFilter.value;

    gameItems.forEach(item => {

        const title =
        item.dataset.title;

        const genre =
        item.dataset.genre;

        const matchSearch =
        title.includes(searchValue);

        const matchGenre =
        genreValue === 'all'
        || genre === genreValue;

        if(matchSearch && matchGenre){

            item.style.display = 'block';

        } else {

            item.style.display = 'none';

        }

    });

}