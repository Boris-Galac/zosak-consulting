////// 💡💡💡 HOME PAGE
if (
  !window.location.href.includes("galerija") &&
  !window.location.href.includes("privatnost") &&
  !window.location.href.includes("uvjeti")
) {
  // KONTAKT
  document.getElementById("emailForm").addEventListener("submit", (e) => {
    e.preventDefault(); // Spriječava slanje obrasca

    // Dohvati uneseni e-mail korisnika
    const userEmail = document.getElementById("userEmail").value;

    // Provjeri ispravnost e-mail adrese
    if (!isValidEmail(userEmail)) {
      alert("Molimo unesite ispravnu e-mail adresu.");
      return;
    }

    // Pošalji e-mail na određenu adresu
    const emailBody = `Korisnikov e-mail: ${userEmail}`;
    const mailtoLink = `mailto:zosak@zosak.hr?subject=Upit za ponudu&body=${encodeURIComponent(
      emailBody
    )}`;
    window.location.href = mailtoLink;
  });

  // Funkcija za provjeru ispravnosti e-mail adrese
  function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
  }
  // PROJECT COUNTER
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

  //// HAM BTN

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
  ///// PADDING HEADER HEIGHT

  const header = document.querySelector(".nav").scrollHeight;
  const main = document.querySelector("body section:first-child");
  main.style = `
      padding-top: ${header}px;
  `;

  //// SHOW DIFFERENT NAV ON SCROLL

  window.addEventListener("scroll", (e) => {
    if (window.scrollY > 100) {
      document.querySelector(".nav__logo").setAttribute("data-visible", "true");
      document.querySelector(".nav").classList.add("nav-active");
    } else {
      document
        .querySelector(".nav__logo")
        .setAttribute("data-visible", "false");
      document.querySelector(".nav").classList.remove("nav-active");
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
  // ANIMATIONS

  const observerElements = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("show-right-left");
      }
      //  else{
      //    entry.target.classList.remove("show");
      // }
    });
  });

  const hiddenRight = document.querySelectorAll(".right");
  hiddenRight.forEach((el) => observerElements.observe(el));
  const hiddenLeft = document.querySelectorAll(".left");
  hiddenLeft.forEach((el) => observerElements.observe(el));
  const oapcity = document.querySelectorAll(".opacity");
  oapcity.forEach((el) => observerElements.observe(el));

  //// CONTACT MSG
  const msg = document.querySelector(".msg-contact-form");
  if (msg) {
    function overlayImage(element) {
      const overlayImage = document.querySelector(".overlay-image");
      overlayImage.append(element);
      overlayImage.setAttribute("data-visible", "true");
      document.body.append(overlayImage);
      overlayImage.addEventListener("click", (e) => {
        if (e.target.matches(".overlay-image")) {
          overlayImage.setAttribute("data-visible", "false");
          if (overlayImage.hasChildNodes()) {
            overlayImage.firstElementChild.remove();
          }
        } else return;
      });
    }
    overlayImage(msg);
  }
  // print PDF file
  document.querySelectorAll(".prospects").forEach((btn) => {
    btn.addEventListener("click", (e) => {
      window.open(
        "/wp-content/themes/zosak-consulting/src/assets/prospekt-zosak.pdf",
        "_blank"
      );
    });
  });
}
////////// end of index page ////////////

//// GALERIJA PAGE 💡💡💡

if (window.location.href.includes("galerija")) {
  const galleryImgs = document.querySelectorAll(
    ".gallery__wrapper .gallery__img"
  );
  let currentIndex = 0;

  galleryImgs.forEach((img) => {
    img.addEventListener("click", (e) => {
      e.preventDefault();
      displayImage(img, e.target.parentElement.href);
    });
  });

  function overlayImage(element) {
    const overlayImage = document.querySelector(".overlay-image");
    overlayImage.append(element);
    overlayImage.setAttribute("data-visible", "true");
    document.body.append(overlayImage);
    overlayImage.addEventListener("click", (e) => {
      if (e.target.matches(".overlay-image")) {
        overlayImage.setAttribute("data-visible", "false");
        if (overlayImage.hasChildNodes()) {
          overlayImage.firstElementChild.remove();
        }
      } else return;
    });
  }

  function displayImage(element, elementSrc) {
    const image = document.createElement("img");
    image.classList.add("current-gallery-img");
    image.setAttribute("src", `${elementSrc}`);
    // Reset currentIndex to the index of the clicked image
    currentIndex = Array.from(galleryImgs).indexOf(element);
    createButtons();
    overlayImage(image);
  }

  function createButtons() {
    if (!document.querySelector(".gallery-btn--prev")) {
      const prevBtn = document.createElement("button");
      prevBtn.setAttribute("class", "gallery-btn gallery-btn--prev");
      prevBtn.addEventListener("click", () => {
        changeImg("prev");
      });
      const prevImgIcon = document.createElement("i");
      prevImgIcon.setAttribute("class", "fa-solid fa-chevron-left");
      prevBtn.append(prevImgIcon);
      overlayImage(prevBtn);
    }

    if (!document.querySelector(".gallery-btn--next")) {
      const nextBtn = document.createElement("button");
      nextBtn.setAttribute("class", "gallery-btn gallery-btn--next ");
      nextBtn.addEventListener("click", (e) => {
        changeImg("next");
      });
      const nextImgIcon = document.createElement("i");
      nextImgIcon.setAttribute("class", "fa-solid fa-chevron-right");
      nextBtn.append(nextImgIcon);
      overlayImage(nextBtn);
    }
  }

  function changeImg(direction) {
    const galleryImgs = document.querySelectorAll(".gallery img");
    const totalImages = galleryImgs.length;

    if (direction === "prev") {
      currentIndex = (currentIndex - 1 + totalImages) % totalImages;
    } else if (direction === "next") {
      currentIndex = (currentIndex + 1) % totalImages;
    }

    const newImgSrc = galleryImgs[currentIndex].src;
    const currentGalleryImg = document.querySelector(".current-gallery-img");

    // Remove both classes
    currentGalleryImg.classList.remove("left-image");
    currentGalleryImg.classList.remove("right-image");

    // Trigger a reflow to force the CSS to reset
    void currentGalleryImg.offsetWidth;

    // Add the appropriate class
    if (direction === "prev") {
      currentGalleryImg.classList.add("left-image");
    } else if (direction === "next") {
      currentGalleryImg.classList.add("right-image");
    }

    currentGalleryImg.setAttribute("src", newImgSrc);
  }
}
/////// end of GALERIJA

/////// GLOBAL 💡💡💡

// PAGE TRANSITIONS

window.addEventListener("load", (e) => {
  const transitionElement = document.querySelector(".transition");
  const allLinksOnPage = document.querySelectorAll(".nav__link--trans");
  setTimeout(() => {
    transitionElement.setAttribute("data-active", "false");
  }, 500);
  allLinksOnPage.forEach((link) => {
    link.addEventListener("click", (e) => {
      e.preventDefault();
      const target = e.target.href;
      transitionElement.setAttribute("data-active", "true");
      setTimeout(() => {
        window.location.href = target;
      }, 1000);
    });
  });
});
