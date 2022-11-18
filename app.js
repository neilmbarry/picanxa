// document.querySelector("html").addEventListener("click", () => {
//   console.log("ypu");
// });

// const test = document.querySelector(".navi").getBoundingClientRect();
// const landing = document
//   .querySelector(".landing-box-title")
//   .getBoundingClientRect();

// const testy = () => console.log(test, landing);

// testy();

const sauceImages = document.querySelectorAll(".bottle-img");

sauceImages.forEach((el) => {
  el.addEventListener("mouseover", (e) => {
    console.log(e.target.closest(".button-overlay"));
    e.target.closest(".button-overlay").classList.add("show");
  });
});

const sauceImage1 = document.querySelector(".bottle-img1");
const sauceImage2 = document.querySelector(".bottle-img2");
const sauceImage3 = document.querySelector(".bottle-img3");

sauceImage1.addEventListener("mouseover", (e) => {
  document.querySelector(".button-overlay1").classList.add("show");
  console.log("here");
  document.querySelector(".bottle1").classList.add("scale");
});

sauceImage1.addEventListener("mouseleave", (e) => {
  document.querySelector(".button-overlay1").classList.remove("show");
  console.log("here");
  document.querySelector(".bottle1").classList.remove("scale");
});

sauceImage2.addEventListener("mouseover", (e) => {
  document.querySelector(".button-overlay2").classList.add("show");
  document.querySelector(".bottle2").classList.add("scale");
});

sauceImage2.addEventListener("mouseleave", (e) => {
  document.querySelector(".button-overlay2").classList.remove("show");
  document.querySelector(".bottle2").classList.remove("scale");
});

sauceImage3.addEventListener("mouseover", (e) => {
  document.querySelector(".button-overlay3").classList.add("show");
  document.querySelector(".bottle3").classList.add("scale");
});

sauceImage3.addEventListener("mouseleave", (e) => {
  document.querySelector(".button-overlay3").classList.remove("show");
  document.querySelector(".bottle3").classList.remove("scale");
});

const navIcon = document.querySelector(".nav-burger");

navIcon.addEventListener("click", () => {
  document.querySelector(".nav-items").classList.toggle("reveal-menu");
  console.log("here");
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

const modalOverlay = document.querySelector(".modal-overlay");

modalOverlay.addEventListener("click", () => {
  toggleOverlay();
  if (!modal1.classList.contains("modal-close1")) {
    modal1.classList.add("modal-close1");
  }
  if (!modal2.classList.contains("modal-close2")) {
    modal2.classList.add("modal-close2");
  }
  if (!modal3.classList.contains("modal-close3")) {
    modal3.classList.add("modal-close3");
  }
});

const modalCloseBtns = document.querySelectorAll(".modal-close-btn");
const modal1 = document.querySelector(".modal1");
const modal2 = document.querySelector(".modal2");
const modal3 = document.querySelector(".modal3");
const openModal1 = document.querySelector(".open-modal1");
const openModal2 = document.querySelector(".open-modal2");
const openModal3 = document.querySelector(".open-modal3");

modalCloseBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    toggleOverlay();
    if (!modal1.classList.contains("modal-close1")) {
      modal1.classList.add("modal-close1");
    }
    if (!modal2.classList.contains("modal-close2")) {
      modal2.classList.add("modal-close2");
    }
    if (!modal3.classList.contains("modal-close3")) {
      modal3.classList.add("modal-close3");
    }
  });
});

function toggleOverlay() {
  modalOverlay.classList.toggle("modal-hide");
}

openModal1.addEventListener("click", () => {
  toggleOverlay();
  modal1.classList.toggle("modal-close1");
});

openModal2.addEventListener("click", () => {
  toggleOverlay();
  modal2.classList.toggle("modal-close2");
});

openModal3.addEventListener("click", () => {
  toggleOverlay();
  modal3.classList.toggle("modal-close3");
});

// openModal3.addEventListener("click", () => {
//   toggleOverlay();
//   modal3.classList.toggle("modal-close3");
// });

const mirepoixWaitlists = [
  document.getElementById("mirepoix-waitliast-modal"),
  document.getElementById("mirepoix-overlay-waitlist"),
];

const dijonWaitlists = [
  document.getElementById("dijon-waitliast-modal"),
  document.getElementById("dijon-overlay-waitlist"),
];

const mirepoixStockCheck = () => true;
const dijonStockCheck = () => true;

setTimeout(() => {
  if (mirepoixStockCheck()) {
    console.log("in stock!");
  } else {
    console.log("out of stock");
    mirepoixWaitlists.forEach((el) => {
      el.classList.remove("item-hide");
    });
  }
}, 2000);

setTimeout(() => {
  if (dijonStockCheck()) {
    console.log("dijon in stock!");
  } else {
    console.log("out of stock");
    dijonWaitlists.forEach((el) => {
      el.classList.remove("item-hide");
    });
  }
}, 2000);

const shopifyBtn = document.querySelector(".shopify-buy__btn");

// shopifyBtn.innerText === "Out of stock";
///////////////////////////////////////////

// document.getElementById("button").addEventListener("click", function () {
//   document.querySelector(".pop-up").style.display = "flex";
// });

// document.querySelector(".pop-up").addEventListener("click", () => {
//   console.log("will close");
// });

// document.querySelector(".close").addEventListener("click", function () {
//   // document.querySelector(".bg-modal").style.display = "none";
// });

// openModal3.addEventListener("click", () => {
//   toggleOverlay();
//   modal3.classList.toggle("modal-close3");
// });

// setTimeout(() => {
//   toggleOverlay();
//   modal3.classList.toggle("modal-close3");
// }, 1000);
