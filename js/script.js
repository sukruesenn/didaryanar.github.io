// Animation
new WOW().init();

// Smooth Scroll Run
(function () {
    const locomotiveScroll = new LocomotiveScroll();
})();

// Header Settings
let hamburgerBtn = document.getElementById("menuBtn");
let hamburgerBtnLine = document.querySelectorAll(".line");
let mobileNav = document.getElementById("mobileNav");
let defaultLogo = document.getElementById("defaultLogo");
let overlay = document.getElementById("mobileNavOverlay");

hamburgerBtn.addEventListener("click", function(){
    hamburgerBtn.classList.toggle("is-active");
    mobileNav.classList.toggle("is-active");

    hamburgerBtnLine.forEach(line => {
        line.classList.toggle("black-line");
    });
    
    defaultLogo.classList.toggle("logo-none");
    overlay.classList.toggle("is-active");
});

/*
let header = document.querySelector("header");
let logo = document.getElementById("logo-black");
let logo2 = document.getElementById("logo");
let loginBtn = document.querySelector(".login-btn");

window.addEventListener("scroll", () => {
    const currentScroll = window.pageYOffset;
    if (currentScroll > 85){
        header.classList.add("sticky-header");
        loginBtn.classList.add("black-btn");
        logo.style.display = "block";
        logo2.style.display = "none";
        logo.style.width = "80px";
    }else{
        header.classList.remove("sticky-header");
        loginBtn.classList.remove("black-btn");
        logo.style.display = "none";
        logo2.style.display = "block";
    }
});
*/