const light = document.querySelector('.light');
const grid = document.querySelector('#hexgrid');
const container = document.querySelector('.container');
let scroll = document.querySelector('body');

container.addEventListener('mousemove', moveLight);

function moveLight(e) {
  const scrollY = document.documentElement.scrollTop;
  light.style.left = `${e.clientX}px`;
  light.style.top = `${e.clientY + scrollY}px`;
}