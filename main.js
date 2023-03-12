
// const swiper = new Swiper(".home", {
//   slidesPerView: 5,
//   spaceBetween: 10,
//   freeMode: true,
//   centeredSlides: false,
//   autoplay: {
//     delay: 3000,
//     displayOnInteraction: true,
//   },
//   pagination: {
//     el: ".swiper-pagination",
//     clickable: true,
//   },
// });

// ---Tabs Switch---
// function setupTabs() {
//   document.querySelectorAll(".tabs__button").forEach((button) => {
//     button.addEventListener("click", () => {
//       const sidebar = button.parentElement;
//       const headerContainer = sidebar.parentElement;
//       const tabsContainer = headerContainer.parentElement;
//       const tabNumber = button.dataset.forTab;
//       const tabToActivate = tabsContainer.querySelector(
//         `.tabs__content[data-tab="${tabNumber}"]`
//       );

//       tabsContainer.querySelectorAll(".tabs__content").forEach((tab) => {
//         tab.classList.remove("tabs__content--active");
//       });

//       tabToActivate.classList.add("tabs__content--active");
//     });
//   });
// }
// console.log(setupTabs);


// function setupTabs() {
//   document.querySelectorAll(".tabs__button").forEach(function (button) {
//     button.addEventListener("click", function () {
//       const switchTopics = button.parentElement;
//       const mainContainer = switchTopics.parentElement;
//       const headerContainer = mainContainer.parentElement;
//       const tabsContainer = headerContainer.parentElement;
//       const tabNumber = button.dataset.forTab;
//       const tabToActivate = tabsContainer.querySelector(
//         `.tabs__content[data-tab="${tabNumber}"]`
//       );

//       tabsContainer.querySelectorAll(".tabs__content").forEach(function (tab) {
//         tab.classList.remove("tabs__content--active");
//       });

//       tabToActivate.classList.add("tabs__content--active");
//     });
//   });
// }
// document.addEventListener("DOMContentLoaded", function () {
//   setupTabs();

//   document.querySelectorAll("body").forEach(function (tabsContainer) {
//     tabsContainer.querySelector(".navbar .tabs__button").click();
//   });
// });