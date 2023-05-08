// Fixed Navbar
window.onscroll = function () {
    const header = document.querySelector("header");
    const fixedNavbar = header.offsetTop;
    const toTop = document.querySelector("#backtop");

    if (window.pageYOffset > fixedNavbar) {
        header.classList.add("navbar-fixed");
        toTop.classList.remove("hidden");
        toTop.classList.add("flex");
    } else {
        header.classList.remove("navbar-fixed");
        toTop.classList.remove("flex");
        toTop.classList.add("hidden");
    }
};
// Hamburger
const Hamburger = document.querySelector("#hamburger");
const NavMenu = document.querySelector("#nav-menu");

Hamburger.addEventListener("click", function () {
    Hamburger.classList.toggle("hamburger-active");
    NavMenu.classList.toggle("hidden");
});
window.addEventListener("click", function (e) {
    if (e.target != Hamburger && e.target != NavMenu) {
        Hamburger.classList.remove("hamburger-active");
        NavMenu.classList.add("hidden");
    }
});
