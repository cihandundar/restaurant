// header - hamburger
const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav");

hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
});

// hero - slider
var swiper = new Swiper(".heroSlider", {
    loop: true,
    pagination: {
        el: ".swiper-pagination",
    },
});

// special menu

document.addEventListener("DOMContentLoaded", function () {
    const buttons = document.querySelectorAll(".menu-btn button");
    const menus = document.querySelectorAll(".menu");

    function showMenu(category) {
        menus.forEach((menu) => (menu.style.display = "none"));

        const selectedMenu = document.querySelector(`.${category}-menu`);
        if (selectedMenu) {
            selectedMenu.style.display = "block";
        }
    }

    buttons.forEach((button) => {
        button.addEventListener("click", function () {
            const category = this.getAttribute("data-category");
            showMenu(category);
        });
    });

    showMenu("breakfast");
});
