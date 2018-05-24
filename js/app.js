/*
 * Responsive Menu
 */
 const openMenu = document.querySelector(".open-menu");
 const closeMenu = document.querySelector(".close-menu");
 const menu = document.querySelector(".menu-links"); 

 // Toggle Menu
 openMenu.addEventListener("click", () => {
    menu.style.left = 0;
    openMenu.style.display = "none";
    closeMenu.style.display = "block";
 });

 closeMenu.addEventListener("click", () => {
    menu.style.left = "-100%";
    closeMenu.style.display = "none";
    openMenu.style.display = "block";
 });

