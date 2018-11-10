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



// /*
//  * Automatic Scrolling
//  */
// const autoScrollingOn = document.querySelector(".auto-scrolling-on");
// const autoScrollingOff = document.querySelector(".auto-scrolling-off");
// const moreSection = document.querySelector(".related-articles");

// // Interval
// let autoScrolling;

// // On/Off Switches
// autoScrollingOn.addEventListener("click", () => {
//     // Start Scrolling
//     autoScrollOn();
//     // Hide me
//     autoScrollingOn.classList.replace("show", "hide");
//     // Show the other Switch
//     autoScrollingOff.classList.replace("hide", "show");
// });

// autoScrollingOff.addEventListener("click", () => {
//     // Start Scrolling
//     autoScrollOff();
//     // Hide me
//     autoScrollingOff.classList.replace("show", "hide");
//     // Show the other Switch
//     autoScrollingOn.classList.replace("hide", "show");
// });

// // Auto Scrolling [ON]
// function autoScrollOn() {
//     let scrollTop = window.scrollY;
//     autoScrolling = setInterval( () => {
//         scrollTop += 1;
//         window.scrollTo({
//             top: scrollTop,
//             behavior: "smooth"
//         })
        
//         // Stop Scrolling if reaches the end of article
//         if(scrollTop > moreSection.offsetTop) {
//             clearInterval(autoScrolling);
//         }
//     }, 100);
// }

// // Auto Scrolling [OFF]
// function autoScrollOff() {
//     clearInterval(autoScrolling);
// }