// Text animation
console.log("J.A.R.V.I.S Online & Ready");


var ml4 = {};
ml4.opacityIn = [0, 1];
ml4.scaleIn = [0.2, 1];
ml4.scaleOut = 3;
ml4.durationIn = 800;
ml4.durationOut = 600;
ml4.delay = 500;

anime.timeline({
		loop: true
	})
	.add({
		targets: '.ml4 .letters-1',
		opacity: ml4.opacityIn,
		scale: ml4.scaleIn,
		duration: ml4.durationIn
	}).add({
		targets: '.ml4 .letters-1',
		opacity: 0,
		scale: ml4.scaleOut,
		duration: ml4.durationOut,
		easing: "easeInExpo",
		delay: ml4.delay
	}).add({
		targets: '.ml4 .letters-2',
		opacity: ml4.opacityIn,
		scale: ml4.scaleIn,
		duration: ml4.durationIn
	}).add({
		targets: '.ml4 .letters-2',
		opacity: 0,
		scale: ml4.scaleOut,
		duration: ml4.durationOut,
		easing: "easeInExpo",
		delay: ml4.delay
	}).add({
		targets: '.ml4 .letters-3',
		opacity: ml4.opacityIn,
		scale: ml4.scaleIn,
		duration: ml4.durationIn
	}).add({
		targets: '.ml4 .letters-3',
		opacity: 0,
		scale: ml4.scaleOut,
		duration: ml4.durationOut,
		easing: "easeInExpo",
		delay: ml4.delay
	}).add({
		targets: '.ml4 .letters-4',
		opacity: ml4.opacityIn,
		scale: ml4.scaleIn,
		duration: ml4.durationIn
	}).add({
		targets: '.ml4 .letters-4',
		opacity: 0,
		scale: ml4.scaleOut,
		duration: ml4.durationOut,
		easing: "easeInExpo",
		delay: ml4.delay
	}).add({
		targets: '.ml4 .letters-5',
		opacity: ml4.opacityIn,
		scale: ml4.scaleIn,
		duration: ml4.durationIn
	}).add({
		targets: '.ml4 .letters-5',
		opacity: 0,
		scale: ml4.scaleOut,
		duration: ml4.durationOut,
		easing: "easeInExpo",
		delay: ml4.delay
	}).add({
		targets: '.ml4 .letters-6',
		opacity: ml4.opacityIn,
		scale: ml4.scaleIn,
		duration: ml4.durationIn
	}).add({
		targets: '.ml4 .letters-6',
		opacity: 0,
		scale: ml4.scaleOut,
		duration: ml4.durationOut,
		easing: "easeInExpo",
		delay: ml4.delay
	}).add({
		targets: '.ml4',
		opacity: 0,
		duration: 0,
		delay: 0
	});

// End Text Animation



// Tracking Animation
let triangleContainer = document.querySelector('.mouseMoveContainer');

triangleContainer.addEventListener('mousemove', (e) => {
	let eyes = document.querySelector('.circle12');
	let mouseX = (eyes.getBoundingClientRect().left);
	let mouseY = (eyes.getBoundingClientRect().top);
	//console.log(e.pageY - mouseY);
	let radianDegrees = Math.atan2(e.clientX - mouseX, e.clientY - mouseY);
	let rotationDegrees = (radianDegrees * (180 / Math.PI) * -1) + 180;
	//console.log(radianDegrees);
	//console.log(radianDegrees);
	//console.log(rotationDegrees);
	eyes.style.transform = `rotate(${rotationDegrees}deg)`
});


