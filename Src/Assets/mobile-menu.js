// Mobile menu toggle functionality
document.addEventListener('DOMContentLoaded', function() {
    const burgerMenuBtn = document.getElementById('burger-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIcon = document.getElementById('menu-icon');

    if (burgerMenuBtn && mobileMenu && menuIcon) {
        burgerMenuBtn.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
            if (mobileMenu.classList.contains('hidden')) {
                menuIcon.textContent = 'menu';
            } else {
                menuIcon.textContent = 'close';
            }
        });

        // Close menu when clicking on a link
        const mobileMenuLinks = mobileMenu.querySelectorAll('a');
        mobileMenuLinks.forEach(link => {
            link.addEventListener('click', function() {
                mobileMenu.classList.add('hidden');
                menuIcon.textContent = 'menu';
            });
        });
    }
});


