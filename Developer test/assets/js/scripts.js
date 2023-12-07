document.addEventListener('DOMContentLoaded', function() {
    if (window.innerWidth < 768) {
        var menuContainer = document.querySelector('.menu-header-menu-container');
        var menuButton = document.createElement('div');
        menuButton.className = 'hamburger';
        var menu = document.querySelector('.menu');
        menu.style.display = 'none';
        menuContainer.addEventListener('click', function() {
            if (menu.style.display === 'none') {
                menu.style.display = 'block';
            } else if(menu.style.display === 'block'){
                menu.style.display = 'none';
            }
        });
        menuContainer.insertBefore(menuButton, menuContainer.firstChild);
    }
});