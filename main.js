const hamBtn = document.querySelector(".ham-btn");
const navList = document.querySelector(".nav__list");

hamBtn.addEventListener("click", (e) => {
  const navListAttr = navList.getAttribute("data-open");
  if (navListAttr === "false") {
    navList.setAttribute("data-open", "true");
    e.currentTarget.setAttribute("data-open", "true");
  } else {
    navList.setAttribute("data-open", "false");
    e.currentTarget.setAttribute("data-open", "false");
  }
});
navList.addEventListener("click", (e) => {
  if (e.target.className === "nav__list") {
    navList.setAttribute("data-open", "false");
    hamBtn.setAttribute("data-open", "false");
  }
  if (e.target.className === "nav__link") {
    navList.setAttribute("data-open", "false");
    hamBtn.setAttribute("data-open", "false");
  }
});

const header = document.querySelector(".nav").scrollHeight;
const main = document.querySelector("body section:first-child");
main.style = `
    padding-top: ${header}px;
`;

window.addEventListener("scroll", (e) => {
  if (window.scrollY > 100) {
    document.querySelector(".nav__logo").setAttribute("data-visible", "true");
  } else {
    document.querySelector(".nav__logo").setAttribute("data-visible", "false");
  }
  const backToTopBtn = document.querySelector(".scroll-to-top-btn");
  if (window.scrollY > 300) {
    backToTopBtn.setAttribute("data-visible", "true");
  } else {
    backToTopBtn.setAttribute("data-visible", "false");
  }
  backToTopBtn.addEventListener("click", (e) => {
    window.scrollTo({ top: 0 });
  });
});

// PROJECT COUNTER

// let valueDisplays = document.querySelectorAll(".count");
// let interval = 5000;

// valueDisplays.forEach((valueDisplay) => {
//   let startValue = 0;
//   let endValue = Number(valueDisplay.getAttribute("data-num"));
//   let duration = Math.floor(interval / endValue);
//   let counter = setInterval(() => {
//     startValue += 1;
//     valueDisplay.textContent = startValue;
//     if (startValue == endValue) {
//       clearInterval(counter);
//     }
//   }, duration);
// });

function startCounterAnimation() {
  let valueDisplays = document.querySelectorAll(".count");
  let interval = 5000;

  valueDisplays.forEach((valueDisplay) => {
    let startValue = 0;
    let endValue = Number(valueDisplay.getAttribute("data-num"));
    let duration = Math.floor(interval / endValue);
    let counter = setInterval(() => {
      startValue += 1;
      valueDisplay.textContent = startValue;
      if (startValue == endValue) {
        clearInterval(counter);
      }
    }, duration);
  });
}

const options = {
  root: null,
  rootMargin: "0px",
  threshold: 0.5,
};

const observer = new IntersectionObserver((entries, observer) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      startCounterAnimation();
      observer.unobserve(entry.target);
    }
  });
}, options);

const projectCounterSection = document.querySelector(".project-counter");
observer.observe(projectCounterSection);
