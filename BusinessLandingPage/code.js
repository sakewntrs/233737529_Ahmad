document.addEventListener("DOMContentLoaded", function() {
    const ctaButton = document.querySelector(".cta");
    const menuToggle = document.querySelector(".menu-toggle");
    const navList = document.querySelector("#nav-list");

    ctaButton.addEventListener("click", function() {
        alert("Thanks for signing up! We'll contact you soon.");
    });

    menuToggle.addEventListener("click", function() {
        navList.style.display = (navList.style.display === "flex") ? "none" : "flex";
    });
});