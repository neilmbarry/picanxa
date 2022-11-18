const navIcon = document.querySelector(".nav-burger");

navIcon.addEventListener("click", () => {
  document.querySelector(".nav-items").classList.toggle("reveal-menu");
  document.querySelector(".burger-icon").classList.toggle("hide");
  document.querySelector(".close-icon").classList.toggle("hide");
});

const navLinks = document.querySelectorAll(".nav-items-item");

navLinks.forEach((el) => {
  el.addEventListener("click", () => {
    document.querySelector(".nav-items").classList.toggle("reveal-menu");

    document.querySelector(".burger-icon").classList.toggle("hide");
    document.querySelector(".close-icon").classList.toggle("hide");
  });
});
