// header - hamburger
const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav");
const overlay = document.querySelector(".overlay");

hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
    overlay.classList.toggle("active");

    // Sayfa kaydırmasını devre dışı bırak veya aktif et
    document.body.classList.toggle("no-scroll");
});

// Overlay'e tıklanıldığında menüyü kapat
overlay.addEventListener("click", () => {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
    overlay.classList.remove("active");
    document.body.classList.remove("no-scroll");
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

    function showMenu(category, clickedButton) {
        menus.forEach((menu) => (menu.style.display = "none"));

        const selectedMenu = document.querySelector(`.${category}-menu`);
        if (selectedMenu) {
            selectedMenu.style.display = "block";
        }

        buttons.forEach((button) => button.classList.remove("active"));

        clickedButton.classList.add("active");
    }

    buttons.forEach((button) => {
        button.addEventListener("click", function () {
            const category = this.getAttribute("data-category");
            showMenu(category, this);
        });
    });
    buttons[0].classList.add("active");
    showMenu("breakfast", buttons[0]);
});

// testimonial - slider
var swiper = new Swiper(".testimonialsSlider", {
    loop: true,
    slidesPerView: 3,
    spaceBetween: 30,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        1024: {
            slidesPerView: 3,
            spaceBetween: 30,
        },

        768: {
            slidesPerView: 2,
            spaceBetween: 20,
        },

        0: {
            slidesPerView: 1,
            spaceBetween: 10,
        },
    },
});

// blog -slider

var swiper = new Swiper(".blogSlider", {
    loop: true,
    slidesPerView: 3,
    spaceBetween: 30,
    cssMode: true,
    grabCursor: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        1024: {
            slidesPerView: 3,
            spaceBetween: 30,
        },

        768: {
            slidesPerView: 2,
            spaceBetween: 20,
        },

        0: {
            slidesPerView: 1,
            spaceBetween: 10,
        },
    },
});

var swiper = new Swiper(".chefsSlider", {
    loop: true,
    slidesPerView: 4,
    spaceBetween: 30,
    cssMode: true,
    grabCursor: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        1024: {
            slidesPerView: 4,
            spaceBetween: 30,
        },

        768: {
            slidesPerView: 2,
            spaceBetween: 20,
        },

        0: {
            slidesPerView: 1,
            spaceBetween: 10,
        },
    },
});

// scroll effect

window.addEventListener("scroll", () => {
    const header = document.querySelector(".header");

    if (window.scrollY > 50 && window.innerWidth > 992) {
        header.classList.add("sticky");
    } else {
        header.classList.remove("sticky");
    }
});

// Ekran boyutu değiştiğinde yeniden kontrol etmek için bir resize eventi ekleyin
window.addEventListener("resize", () => {
    const header = document.querySelector(".header");

    // Ekran genişliği 992px'den küçükse sticky sınıfını kaldır
    if (window.innerWidth <= 992) {
        header.classList.remove("sticky");
    }
});
