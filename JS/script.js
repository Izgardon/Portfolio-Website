const navItems = document.querySelector("#nav-items");
const navButton = document.querySelector(".mobile-nav-button");

const navLink = document.querySelectorAll(".nav-item");

const navBar = document.querySelector(".nav-bar");

const navBackground = document.querySelector(".nav-background");

const home = document.querySelector("#home");

const wrapper = document.querySelector(".wrapper");

const mainHeading = document.querySelector(".heading-fade");

const logo = document.querySelector(".logo");

//Phone navigation on side

for (let i = 0; i < navLink.length; i++) {
  navLink[i].addEventListener("click", toggle);
}

navButton.addEventListener("click", toggle);

home.addEventListener("click", scroll);
logo.addEventListener("click", scroll);

function scroll() {
  wrapper.scrollTo(0, 0);
}

function toggle() {
  const visible = navItems.getAttribute("data-visible");

  if (visible === "false") {
    navItems.setAttribute("data-visible", "true");
    navButton.setAttribute("data-open", "true");
    navButton.setAttribute("aria-expanded", "true");
  } else if (visible === "true") {
    navItems.setAttribute("data-visible", "false");
    navButton.setAttribute("data-open", "false");
    navButton.setAttribute("aria-expanded", "false");
  }
}
//Desktop navigation on scroll

const checkpointNavBar = 500;

wrapper.addEventListener("scroll", () => {
  const currentScroll = wrapper.scrollTop;

  if (currentScroll <= checkpointNavBar) {
    opacity = 0 + currentScroll / checkpointNavBar;
  } else {
    opacity = 1;
  }
  navBackground.style.opacity = opacity;
});

//Fading the H1

const checkpointHeader = 250;

wrapper.addEventListener("scroll", () => {
  const currentScroll = wrapper.scrollTop;

  if (currentScroll <= checkpointHeader) {
    opacity = 1 - currentScroll / checkpointHeader;
  } else {
    opacity = 0;
  }
  mainHeading.style.opacity = opacity;
});

//----Contact

//About slides

const slides = document.querySelectorAll(".slide");

const btnLeft = document.querySelector(".slider__btn--left");
const btnRight = document.querySelector(".slider__btn--right");
const dotContainer = document.querySelector(".dots");

let curSlide = 0;
const maxSlide = slides.length - 1;

const goToSlide = function (slide) {
  slides.forEach(
    (s, i) => (s.style.transform = `translateX(${(i - slide) * 100}%)`)
  );
};

goToSlide(0);

//Next slide
btnRight.addEventListener("click", function () {
  if (curSlide == maxSlide) curSlide = 0;
  else curSlide++;

  goToSlide(curSlide);
  activateDot(curSlide);
});

btnLeft.addEventListener("click", function () {
  if (curSlide == 0) curSlide = maxSlide;
  else curSlide--;

  goToSlide(curSlide);
  activateDot(curSlide);
});

//Dots

const createDots = function () {
  slides.forEach((s, i) => {
    dotContainer.insertAdjacentHTML(
      "beforeend",
      `<button class="dots__dot" data-slide="${i}"></button>`
    );
  });
};
createDots();

dotContainer.addEventListener("click", function (e) {
  if (e.target.classList.contains("dots__dot")) {
    const { slide } = e.target.dataset;
    goToSlide(slide);
    activateDot(slide);
  }
});

function activateDot(slide) {
  document
    .querySelectorAll(".dots__dot")
    .forEach((dot) => dot.classList.remove("dots__dot--active"));

  document
    .querySelector(`.dots__dot[data-slide="${slide}"]`)
    .classList.add("dots__dot--active");
}

activateDot(0);

console.log(8 * "hello");
