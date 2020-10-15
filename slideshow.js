const images = document.querySelectorAll(".header-slides img");
const delay = 3000;
let counter = 0;
images[counter].style.opacity = 1;
setInterval(nextImg, delay);

function nextImg() {
    images[counter].style.opacity = 0;
    counter = (counter + 1) % images.length;
    images[counter].style.opacity = 1;
}