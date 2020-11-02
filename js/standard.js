// Text animation
console.log("Greetings Sir!");

var buttonEl = document.querySelectorAll('.bounce-btn');
console.log(buttonEl.length);
function animateButton(el, scale, duration, elasticity) {
  anime.remove(el);
  anime({
    targets: el,
	scale: scale,
    duration: duration,
    elasticity: elasticity
  });
}

function enterButton(el) {
  animateButton(el, 1.2, 800, 400)
};

function leaveButton(el) {
  animateButton(el, 1.0, 600, 300)
};

for (i = 0; i < buttonEl.length; i++){
buttonEl[i].addEventListener('mouseenter', function(e) {
    enterButton(e.target);
  }, false);
  
  buttonEl[i].addEventListener('mouseleave', function(e) {
    leaveButton(e.target)
  }, false);  
}