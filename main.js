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
});
