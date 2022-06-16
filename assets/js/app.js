// Nav menu
const btn = document.querySelector("#mobile-button");
const ul = document.querySelector("nav ul");
const nav = document.querySelector("nav");

btn.addEventListener("click", () => {
    ul.classList.toggle("show");
});

// Close menu when link is clicked

// Select nav links
const navLink = document.querySelectorAll(".nav-link");

navLink.forEach((link) =>
  link.addEventListener("click", () => {
    ul.classList.remove("show");
  })
);


// Show resume preview when "View Resume" button is clicked
const resumeBtn = document.querySelector("#resume-btn");
const resumeDiv = document.querySelector("#adobe-dc-view");

resumeBtn.addEventListener("click", () => {
  resumeDiv.classList.toggle("show");
});