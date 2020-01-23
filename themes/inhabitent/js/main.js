searchIcon =getElementsByClassName('search-submit')[0];
searchField= getElementsByClassName('search-field')[0];

searchIcon.addEventListener('click',function () {

    if (searchField.className = 'search-field') {
        searchField.className += " opened-search"
    } else {
        searchField.className = 'search-field'
    }

});