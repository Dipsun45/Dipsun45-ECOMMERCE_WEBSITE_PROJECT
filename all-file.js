let lastScrollY = window.scrollY;

window.addEventListener("scroll", () => {
    const nav = document.querySelector("nav");
    const header = document.querySelector(".header");

    if (window.scrollY > lastScrollY) {
        // Scrolling down
        nav.classList.add("hidden");
        header.classList.add("hidden");
    } else {
        // Scrolling up
        nav.classList.remove("hidden");
        header.classList.remove("hidden");
    }
    lastScrollY = window.scrollY;
});
