<?php
/**
 * Template Name: Front Page Template
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 *
 * @package filiprastovic
 */

get_header();
?>
<script type="text/javascript">

window.addEventListener("load", windowLoadHandler, false);

//for debug messages while testing code
var Debugger = function() { };
Debugger.log = function(message) {
	try {
		console.log(message);
	}
	catch (exception) {
		return;
	}
}

function windowLoadHandler() {
	canvasApp();
}

function canvasSupport() {
	return Modernizr.canvas;
}

function canvasApp() {
	if (!canvasSupport()) {
		return;
	}
	
	var displayCanvas = document.getElementById("displayCanvas");
	displayCanvas.style.width ='100%';
	displayCanvas.style.height='100%';
	// ...then set the internal size to match
	displayCanvas.width  = displayCanvas.offsetWidth;
	displayCanvas.height = displayCanvas.offsetHeight;


	var context = displayCanvas.getContext("2d");
	var displayWidth = displayCanvas.width;
	var displayHeight = displayCanvas.height;
	
	//off screen canvas used only when exporting image
	var exportCanvas = document.createElement('canvas');
	exportCanvas.width = displayWidth;
	exportCanvas.height = displayHeight;
	var exportCanvasContext = exportCanvas.getContext("2d");
	
	//var exportImage = document.createElement('img');
	
	
	var numCircles;
	var maxMaxRad;
	var minMaxRad;
	var minRadFactor;
	var circles;
	var iterations;
	var timer;
	var drawsPerFrame;
	var drawCount;
	var bgColor,urlColor;
	var TWO_PI = 2*Math.PI;
	var lineWidth;
	
	init();
	
	function init() {
		/*
		In other experiments, you may wish to use more fractal curves ("circles")
		and allow the radius of them to vary. If so, modify the next three variables.
		*/
		numCircles = 1;
		maxMaxRad = 200;
		minMaxRad = 200;
		
		/*
		We draw closed curves with varying radius. The factor below should be set between 0 and 1,
		representing the size of the smallest radius with respect to the largest possible.
		*/ 
		minRadFactor = 0;
		
		/*
		The number of subdividing steps to take when creating a single fractal curve. 
		Can use more, but anything over 10 (thus 1024 points) is overkill for a moderately sized canvas.
		*/
		iterations = 8;
		
		//number of curves to draw on every tick of the timer
		drawsPerFrame = 4;
		
		bgColor = "#FFFFFF";
		urlColor = "#EEEEEE";
		
		lineWidth = 1.01;
		
		startGenerate();
	}
	
	function startGenerate() {
		drawCount = 0;
		context.setTransform(1,0,0,1,0,0);
		
		context.clearRect(0,0,displayWidth,displayHeight);
		
		setCircles();
		
		if(timer) {clearInterval(timer);}
		timer = setInterval(onTimer,1000/50);
	}
	
	function setCircles() {
		var i;
		var r,g,b,a;
		var maxR, minR;
		var grad;
		
		circles = [];
		
		for (i = 0; i < numCircles; i++) {
			maxR = minMaxRad+Math.random()*(maxMaxRad-minMaxRad);
			minR = minRadFactor*maxR;
			
			//define gradient
			grad = context.createRadialGradient(0,0,minR,0,0,maxR);
			grad.addColorStop(1,"rgba(180,200,250,0.1)");
			grad.addColorStop(0,"rgba(180,200,250,0.1)"); 
			
			var newCircle = {
				centerX: -maxR,
				centerY: displayHeight/2-50,
				maxRad : maxR,
				minRad : minR,
				color: grad, //can set a gradient or solid color here.
				//fillColor: "rgba(0,0,0,1)",
				param : 0,
				changeSpeed : 1/250,
				phase : Math.random()*TWO_PI, //the phase to use for a single fractal curve.
				globalPhase: Math.random()*TWO_PI //the curve as a whole will rise and fall by a sinusoid.
				};
			circles.push(newCircle);
			newCircle.pointList1 = setLinePoints(iterations);
			newCircle.pointList2 = setLinePoints(iterations);
		}
	}
	
	function onTimer() {
		var i,j;
		var c;
		var rad;
		var point1,point2;
		var x0,y0;
		var cosParam;
		
		var xSqueeze = 0.75; //cheap 3D effect by shortening in x direction.
		
		var yOffset;
		
		//draw circles
		for (j = 0; j < drawsPerFrame; j++) {
			
			drawCount++;
			
			for (i = 0; i < numCircles; i++) {
				c = circles[i];
				c.param += c.changeSpeed;
				if (c.param >= 1) {
					c.param = 0;
					
					c.pointList1 = c.pointList2;
					c.pointList2 = setLinePoints(iterations);
				}
				cosParam = 0.5-0.5*Math.cos(Math.PI*c.param);
				
				context.strokeStyle = c.color;
				context.lineWidth = lineWidth;
				//context.fillStyle = c.fillColor;
				context.beginPath();
				point1 = c.pointList1.first;
				point2 = c.pointList2.first;
				
				//slowly rotate
				c.phase += 0.0002;
				
				theta = c.phase;
				rad = c.minRad + (point1.y + cosParam*(point2.y-point1.y))*(c.maxRad - c.minRad);
				
				//move center
				c.centerX += 0.5;
				c.centerY += 0.04;
				yOffset = 40*Math.sin(c.globalPhase + drawCount/1000*TWO_PI);
				//stop when off screen
				if (c.centerX > displayWidth + maxMaxRad) {
					clearInterval(timer);
					timer = null;
				}			
				
				//we are drawing in new position by applying a transform. We are doing this so the gradient will move with the drawing.
				context.setTransform(xSqueeze,0,0,1,c.centerX,c.centerY+yOffset)
				
				//Drawing the curve involves stepping through a linked list of points defined by a fractal subdivision process.
				//It is like drawing a circle, except with varying radius.
				x0 = xSqueeze*rad*Math.cos(theta);
				y0 = rad*Math.sin(theta);
				context.lineTo(x0, y0);
				while (point1.next != null) {
					point1 = point1.next;
					point2 = point2.next;
					theta = TWO_PI*(point1.x + cosParam*(point2.x-point1.x)) + c.phase;
					rad = c.minRad + (point1.y + cosParam*(point2.y-point1.y))*(c.maxRad - c.minRad);
					x0 = xSqueeze*rad*Math.cos(theta);
					y0 = rad*Math.sin(theta);
					context.lineTo(x0, y0);
				}
				context.closePath();
				context.stroke();
				//context.fill();		
					
			}
		}
	}
		
	//Here is the function that defines a noisy (but not wildly varying) data set which we will use to draw the curves.
	function setLinePoints(iterations) {
		var pointList = {};
		pointList.first = {x:0, y:1};
		var lastPoint = {x:1, y:1}
		var minY = 1;
		var maxY = 1;
		var point;
		var nextPoint;
		var dx, newX, newY;
		var ratio;
		
		var minRatio = 0.5;
				
		pointList.first.next = lastPoint;
		for (var i = 0; i < iterations; i++) {
			point = pointList.first;
			while (point.next != null) {
				nextPoint = point.next;
				
				dx = nextPoint.x - point.x;
				newX = 0.5*(point.x + nextPoint.x);
				newY = 0.5*(point.y + nextPoint.y);
				newY += dx*(Math.random()*2 - 1);
				
				var newPoint = {x:newX, y:newY};
				
				//min, max
				if (newY < minY) {
					minY = newY;
				}
				else if (newY > maxY) {
					maxY = newY;
				}
				
				//put between points
				newPoint.next = nextPoint;
				point.next = newPoint;
				
				point = nextPoint;
			}
		}
		
		//normalize to values between 0 and 1
		if (maxY != minY) {
			var normalizeRate = 1/(maxY - minY);
			point = pointList.first;
			while (point != null) {
				point.y = normalizeRate*(point.y - minY);
				point = point.next;
			}
		}
		//unlikely that max = min, but could happen if using zero iterations. In this case, set all points equal to 1.
		else {
			point = pointList.first;
			while (point != null) {
				point.y = 1;
				point = point.next;
			}
		}
		
		return pointList;		
	}
		
	function exportPressed(evt) {
		//background - otherwise background will be transparent.
		exportCanvasContext.fillStyle = bgColor;
		exportCanvasContext.fillRect(0,0,displayWidth,displayHeight);
		
		//draw
		exportCanvasContext.drawImage(displayCanvas, 0,0,displayWidth,displayHeight,0,0,displayWidth,displayHeight);
		
		//add printed url to image
		exportCanvasContext.fillStyle = urlColor;
		exportCanvasContext.font = 'bold italic 16px Helvetica, Arial, sans-serif';
		exportCanvasContext.textBaseline = "top";
		var metrics = exportCanvasContext.measureText("rectangleworld.com");
		exportCanvasContext.fillText("rectangleworld.com", displayWidth - metrics.width - 10, 5);
		
		//we will open a new window with the image contained within:		
		//retrieve canvas image as data URL:
		var dataURL = exportCanvas.toDataURL("image/png");
		//open a new window of appropriate size to hold the image:
		var imageWindow = window.open("", "fractalLineImage", "left=0,top=0,width="+displayWidth+",height="+displayHeight+",toolbar=0,resizable=0");
		//write some html into the new window, creating an empty image:
		imageWindow.document.write("<title>Export Image</title>")
		imageWindow.document.write("<img id='exportImage'"
									+ " alt=''"
									+ " height='" + displayHeight + "'"
									+ " width='"  + displayWidth  + "'"
									+ " style='position:absolute;left:0;top:0'/>");
		imageWindow.document.close();
		//copy the image into the empty img in the newly opened window:
		var exportImage = imageWindow.document.getElementById("exportImage");
		exportImage.src = dataURL;
	}
	
	function regeneratePressed(evt) {
		startGenerate();
	}
	
}

</script>

<header class="header">
	<div class="container h-100">
		<div class="row h-100 justify-content-center text-center">
		<!-- <canvas id="displayCanvas" width="1200px" height="576px">
			
			</canvas> -->
			<canvas id="displayCanvas">
			
			</canvas>

			<div class="col-lg-10 align-self-end">
				<h1 class="text-uppercase font-weight-bold">Expert Landing Page Design</h1>
				<hr class="divider my-4">
			</div>

			<div class="col-lg-10 align-self-baseline">
				<p class="font-weight-light mb-5">I increase <strong class="font-weight-bold">quality leads</strong> for your established firm, turning your landing pages into most effective 24/7 salesperson. 
				</p>
				<a href="#content" class="btn btn-primary btn-xl shadow js-scroll-trigger wow animated fadeInUp" data-wow-duration="2s" data-wow-delay=".2s"><i class="fas fa-info-circle"></i>LEARN MORE</a>
			</div>

		</div>
	</div>
</header>

<section class="page-section bg-grey" id="content">
	<div class="container">
		<div class="row justify-content-center mb-5">

			<div class="col-lg-10 align-self-end text-center">
				<h2 class="text-uppercase font-weight-bold mb-3">Your Landing Pages have a unique sales cycle</h2>
			</div>

			<div class="col-lg-7 align-self-baseline text-center">
				<p class="font-weight-light text-muted mb-4">I understand the nuances of landing page transactions. Knowing what motivates buyers to create online purchases, I help you...</p>
			</div>

		</div>

		<div class="row justify-content-center animatedParent animateOnce">
			<div class="col-lg-4 mb-5 wow animated fadeIn" data-wow-duration="3s" data-wow-delay=".3s" data-wow-offset="10"  >
				<div class="circle-icon">
					<div class="icon">1</div>
					<div class="text">
						<h5 class="text-uppercase text-primary mb-3">Generate more leads</h5>
						<p class="font-weight-light text-muted">Well-written copy and persuasive calls to action, present your offerings in a way that visitors can't help but follow your sales funnel.</p>
					</div>
				</div>
				
			</div>
			<div class="col-lg-4 mb-5 wow animated fadeIn" data-wow-duration="3s" data-wow-delay=".4s">
				<div class="circle-icon">
					<div class="icon">2</div>
					<div class="text">
						<h5 class="text-uppercase text-primary mb-3">Market your brand</h5>
						<p class="font-weight-light text-muted">You only get one chance to make a first impression. I make sure your landing page provides best possible reflection of your brand.</p>
					</div>
				</div>
				
			</div>
			<div class="col-lg-4 mb-5 wow animated fadeIn" data-wow-duration="3s" data-wow-delay=".5s">
				<div class="circle-icon">
					<div class="icon">3</div>
					<div class="text">
						<h5 class="text-uppercase text-primary mb-3">Optimize &amp; Grow</h5>
						<p class="font-weight-light text-muted">Unbounce allows you to update the content on your pages and create variation easy, without needing to be coders or designers.</p>
					</div>
				</div>
				
			</div>

			<div class="col-lg-12 mb-3 text-center wow animated fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
				<a href="/portfolio" class="btn btn-primary btn-xl shadow js-scroll-trigger"><i class="fas fa-info-circle"></i>SEE PORTFOLIO</a>
			</div>
		</div>
	</div>
</section>

<section class="page-section" id="recent-work">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
					<img class="img-fluid mb-5"
					src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/customr-small.png"
					alt="Portfolio image">
					<div class="row mt-4">
						<div class="col-4 col-md-2 mb-3 wow animated fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">

							<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/clients/0.png" alt="Brand Logo 1">

						</div>
						<div class="col-4 col-md-2 mb-3 wow animated fadeInUp" data-wow-duration="2s" data-wow-delay=".3s">

							<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/clients/Crewdox-1.png" alt="Brand Logo 2">
						
						</div>
						<div class="col-4 col-md-2 mb-3 wow animated fadeInUp" data-wow-duration="2s" data-wow-delay=".4s">

							<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/clients/download.png" alt="Brand Logo 3">

						</div>
						<div class="col-4 col-md-2 mb-3 wow animated fadeInUp" data-wow-duration="2s" data-wow-delay=".5s">

							<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/clients/GearLogoVertical.png" alt="Brand Logo 4">

						</div>
						<div class="col-4 col-md-2 mb-3 wow animated fadeInUp" data-wow-duration="2s" data-wow-delay=".6s">

							<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/clients/header-728x180.png" alt="Brand Logo 5">
						
						</div>
						<div class="col-4 col-md-2 mb-3 wow animated fadeInUp" data-wow-duration="2s" data-wow-delay=".7s">

							<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/clients/think3.jpg" alt="Brand Logo 6">

						</div>
					</div>
			</div>
			<div class="col-lg-4">
				<h2 class="text-uppercase font-weight-bold mb-3">
					40+ Satisfied Clients
				</h2>
				<p class="font-weight-light text-muted mb-4">
					Our design process has been critical to success of my clients. In partnership with you and your team, I guide you from start to finish through the process of 
					designing and developing a landing page that speaks directly to your customers.
				</p>
				<h5 class="text-uppercase font-weight-bold text-primary mb-3">
					Focus on conversions
				</h5>
				<p class="font-weight-light text-muted mb-5">
					Conversion centered design is a combination of both graphic design and marketing principles that are aware of low attention span the average human has today.
					There is too much content on the web, and the way to capture someone's attention is to leverage the principles of visual design with a strong persuasive copy.
				</p>
				<a href="/case-studies" class="btn btn-primary btn-xl shadow js-scroll-trigger"><i class="fas fa-book"></i>READ CASE STUIDY</a>

			</div>


		</div>
	</div>
</section>

<section class="page-section bg-grey bg-help-you">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 self-align-end">
				<h2 class="text-uppercase font-weight-bold mb-5">I can help you to ...</h2>
			</div>
			<div class="col-lg-8 align-self-end">
				<div class="accordion" id="accordionExample">
					<div class="card shadow wow animated fadeInLeft" data-wow-duration="2s" data-wow-delay=".1s">
						<div class="card-header" id="headingOne">
							<h2 class="mb-0">
								<button class="btn font-weight-bold text-uppercase text-primary" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									<span>Generate more quality leads</span><i class="fas fa-chevron-up"></i>
								</button>
							</h2>
							
						</div>
					
						<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
						<div class="card-body">
							<p class="font-weight-light">Your landing pages get a lot of traffic but not enough of these visitors are converted into viable leads? Those that do take action are frequently not ideal clients.</p>
							<p class=" font-weight-light">A good design has:</p>
							<ul>
								<li class=" font-weight-light">Strong Messaging</li>
								<li class=" font-weight-light">Enticing Content</li>
								<li class=" font-weight-light">Authority</li>
								<li class=" font-weight-light">Trustworthiness</li>
							</ul>
						</div>
						</div>
					</div>
					<div class="card shadow wow animated fadeInLeft" data-wow-duration="2s" data-wow-delay=".4s">
						<div class="card-header" id="headingTwo">
							<h2 class="mb-0">
								<button class="btn collapsed font-weight-bold text-uppercase text-primary" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									Redesign outdated and embarrassing old web design<i class="fas fa-chevron-up"></i>
								</button>
								
							</h2>
							
						</div>
						<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
						<div class="card-body">
							<p class="font-weight-light ">Web design trends change over time so it's important to keep up to date. But it is not only the aesthetics that increase conversions, it is the thorough research and strategy behind
								design decisions that make the visitors fall in love with your offerings.</p>
						</div>
						</div>
					</div>
					<div class="card shadow wow animated fadeInLeft" data-wow-duration="2s" data-wow-delay=".8s">
						<div class="card-header" id="headingThree">
							<h2 class="mb-0">
								<button class="btn collapsed font-weight-bold text-uppercase text-primary" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									Make your pages work on mobile<i class="fas fa-chevron-up"></i>
								</button>
							</h2>
						</div>
						<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
						<div class="card-body">
							<p class="font-weight-light ">People surf the web using mobile devices, it's a fact. Responsive web design is a term coined for this purpose. It's a 
								set of techniques that allow the landing pages to have a fluid layout that changes based on device screen width.
							</p>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="page-section testimonials">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-4 text-center wow animated fadeIn" data-wow-duration="2s" data-wow-delay=".2s">
					<img class="img-fluid rounded shadow mb-5" src="<?php echo get_template_directory_uri() ?>/assets/img/molnar.jpeg" alt="Testimonial">
			</div>
			<div class="col-lg-8 wow animated fadeIn" data-wow-duration="1s" data-wow-delay=".1s">
				<p class="font-weight-light text-muted testimonial-paragraph text-left mb-4"><i>Filip has a unique combo of skills: design & development. He proactively suggested some great ideas on how to make the website not just functional but esthetic. He created awesome visual mocks, iterated quickly based on my input and then coded all of it into a superb website. Throughout the process Filip was a charm to work with. All All in all great designer-developer with an outstanding sense for client service.</i></p>
				<p class="text-primary font-weight-bold mb-2 text-left">Robert Molnar</p>
				<p class="font-weight-light text-muted text-left">CEO Of Stratolytics</p>
			</div>
		</div>
	</div>
</section>


<?php

get_footer();