const searchIcon = document.getElementsByClassName('search-submit')[0];
const searchField= document.getElementsByClassName('search-field')[0];
const searchform= document.getElementsByTagName('fieldset')[0];
searchIcon.addEventListener('click',function (event) {
    if (searchField.className == 'search-field') {
         event.preventDefault();
        searchField.className += " opened-search"
    } else {
        searchform.submit();
        searchField.className = 'search-field'
    }

});
