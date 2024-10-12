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
