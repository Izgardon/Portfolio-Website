const navItems = document.querySelector("#nav-items")
const navButton = document.querySelector(".mobile-nav-button")

const navLink = document.querySelectorAll(".nav-item")

const navBar = document.querySelector(".nav-bar")

const navBackground = document.querySelector(".nav-background")

const home = document.querySelector("#home")

const wrapper = document.querySelector(".wrapper")

const mainHeading = document.querySelector(".heading-container")

const logo = document.querySelector(".logo")

//Phone navigation on side

for (let i = 0; i < navLink.length; i++) {
    navLink[i].addEventListener("click", toggle)

}

navButton.addEventListener("click", toggle)


home.addEventListener('click', scroll)
logo.addEventListener('click', scroll)

function scroll() {
    wrapper.scrollTo(0, 0);
}


function toggle() {
    const visible = navItems.getAttribute('data-visible')

    if (visible === "false") {
        navItems.setAttribute("data-visible", "true")
        navButton.setAttribute("data-open", "true")
    } else if (visible === "true") {
        navItems.setAttribute("data-visible", "false")
        navButton.setAttribute("data-open", "false")
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