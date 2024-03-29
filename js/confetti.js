
window.onload = function() {
	var canvas = document.getElementById("canvas");
	var ctx = canvas.getContext("2d");
	var W = window.innerWidth;
	var H = window.innerHeight;
	canvas.width = W;
	canvas.height = H;
  
	var mp = 1000; //max particles
	var particles = [];
	for (var i = 0; i < mp; i++) {
	  particles.push({
		x: Math.random() * W, //x-coordinate
		y: Math.random() * H, //y-coordinate
		r: Math.random() * 18 + 1, //radius
		d: Math.random() * mp, //density
		color: "rgba(" + Math.floor((Math.random() * 255)) + ", " + Math.floor((Math.random() * 255)) + ", " + Math.floor((Math.random() * 255)) + ", 0.8)",
		tilt: Math.floor(Math.random() * 5) - 5
	  });
	}
  
	//Lets draw the flakes
	function draw() {
	  ctx.clearRect(0, 0, W, H);
	  for (var i = 0; i < mp; i++) {
		var p = particles[i];
		ctx.beginPath();
		ctx.lineWidth = p.r;
		ctx.strokeStyle = p.color; // Green path
		ctx.moveTo(p.x, p.y);
		ctx.lineTo(p.x + p.tilt + p.r / 2, p.y + p.tilt);
		ctx.stroke(); // Draw it
	  }
  
	  update();
	}
  
	var angle = 0;
  
	function update() {
	  angle += 0.01;
	  for (var i = 0; i < mp; i++) {
		var p = particles[i];
		p.y += Math.cos(angle + p.d) + 1 + p.r / 2;
		p.x += Math.sin(angle) * 2;
		if (p.x > W + 5 || p.x < -5 || p.y > H) {
		  if (i % 3 > 0) //66.67% of the flakes
		  {
			particles[i] = {
			  x: Math.random() * W,
			  y: -10,
			  r: p.r,
			  d: p.d,
			  color: p.color,
			  tilt: p.tilt
			};
		  }
		}
	  }
	}
	setInterval(draw, 20);
  }