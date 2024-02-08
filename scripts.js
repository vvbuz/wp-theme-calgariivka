window.addEventListener('load', function() {
    const mobileMenu = document.querySelector('.mobile-menu');
    const mobileMenuButton = document.getElementById('mobile-menu-button');

    mobileMenuButton.addEventListener('click', function() {
        if (mobileMenu.classList.contains('mobile-menu--active')) {
            mobileMenu.classList.remove('mobile-menu--active');
        } else {
            mobileMenu.classList.add('mobile-menu--active');
        }
    });
});