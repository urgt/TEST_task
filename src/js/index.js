document.addEventListener("DOMContentLoaded", function () {
    const today = new Date().toISOString().split("T")[0];
    const start = document.getElementById("start");
    const stop = document.getElementById("stop");
    const closeButton = document.getElementById("modal__close");
    const openButton = document.getElementById("open_modal");
    const modal = document.getElementById("modal");

    document.querySelectorAll('input[type="date"]').forEach(function (input) {
        input.valueAsDate = new Date();
        input.min = today;
    });

    start.addEventListener("change", function () {
        if (start.value && start.value > stop.value) {
            stop.value = start.value;
            stop.min = start.value;
        }
    });

    openButton.addEventListener("click", modalToggle);
    closeButton.addEventListener("click", modalToggle);
    
    function modalToggle() {
        modal.classList.toggle("opened");
    }
});
