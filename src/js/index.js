document.addEventListener("DOMContentLoaded", function () {
    const today = new Date().toISOString().split("T")[0];
    const start = document.getElementById("start");
    const stop = document.getElementById("stop");
    const closeButton = document.getElementById("modal__close");
    const openButton = document.getElementById("open_modal");
    const modal = document.getElementById("modal");
    const mobileMenu = document.getElementById("mobile-menu");
    const mobileMenuOpen = document.getElementById("menu__open");
    const mobileMenuClose = document.getElementById("menu__close");

    document.querySelectorAll('input[type="date"]').forEach(function (input) {
        input.valueAsDate = new Date();
        input.min = today;
    });

    if (start && stop) {
        start.addEventListener("change", function () {
            if (start.value && start.value > stop.value) {
                stop.value = start.value;
                stop.min = start.value;
            }
        });
    }

    if (openButton && closeButton && modal) {
        openButton.addEventListener("click", modalToggle);
        closeButton.addEventListener("click", modalToggle);
        
        function modalToggle() {
            modal.classList.toggle("opened");
        }
    }

    if (mobileMenuOpen && mobileMenuClose && mobileMenu) {
        mobileMenuOpen.addEventListener("click", menuToggle);
        mobileMenuClose.addEventListener("click", menuToggle);
        
        function menuToggle() {
            mobileMenu.classList.toggle("opened");
        }
    }
});
