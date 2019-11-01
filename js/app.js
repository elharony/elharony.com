/*
 * Responsive Menu
 */
 const openMenuIcon = document.querySelector(".open-menu");
 const closeMenuIcon = document.querySelector(".close-menu");
 const menu = document.querySelector(".menu-links"); 

 function openMenu() {
   menu.style.left = 0;
   openMenuIcon.style.display = "none";
   closeMenuIcon.style.display = "block";
 }

 function closeMenu() {
   menu.style.left = "-100%";
   closeMenuIcon.style.display = "none";
   openMenuIcon.style.display = "block";
 }

 openMenuIcon.addEventListener("click", () => {
    openMenu();
 })

 closeMenuIcon.addEventListener("click", () => {
    closeMenu();
 })

 // Hide menu after clicking on a link
 const menuLinks = document.querySelectorAll(".menu-item");
 for(let i = 0; i < menuLinks.length; i++) {
   menuLinks[i].addEventListener('click', function () {
      closeMenu();
   })
 }



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