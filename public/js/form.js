// document Ready 
jQuery(document).ready(function() {
	
	jQuery("#msgbox").hide();
    jQuery(".nav-item").mouseenter(function() {
        jQuery(this).find("span.arrow").html('<i class="fa fa-angle-up"></i>');
	});
    jQuery(".nav-item").mouseleave(function() {
        jQuery(this).find("span.arrow").html('<i class="fa fa-angle-down"></i>');
	});
});
// Document Closed
jQuery(window).on('load', function() {
    jQuery('#newsletterModal').modal('show');
	// setTimeout(function() {
	// jQuery("#newsletterModal").modal('hide');	
	// },3000);
	
});

// setTimeout(function() {
// jQuery("#newsletterModal").modal('hide');

// }, 800); 



setTimeout(function() {
    jQuery("#discountModal").modal('show');
	
}, 20000);

// function FeedbackModal() {
// jQuery("#myModalfeed").modal('show');
// }

// setTimeout(function() {

// jQuery("#discountModal").modal('hide');

// }, 200); 



jQuery(".main-manu").click(function(e){
	// e.preventDefault();
	// var currentIsActive = jQuery(this).hasClass('collapsed');
	// jQuery(this).next('.sub-manu').find('> *').removeClass('show');
	// if(currentIsActive != 1) {
	// jQuery(this).addClass('show');
	// jQuery(this).next('.sub-manu').addClass('show');
	// }
	
})	


jQuery("#likebtn").click(function(){
	Confetti();
})

const Confetti = () => {
	'use strict';
	// If set to true, the user must press
	// UP UP DOWN ODWN LEFT RIGHT LEFT RIGHT A B
	// to trigger the confetti with a random color theme.
	// Otherwise the confetti constantly falls.
	var onlyOnKonami = false;
	$(function() {
		// Globals
		var $window = $(window),
		random = Math.random,
		cos = Math.cos,
		sin = Math.sin,
		PI = Math.PI,
		PI2 = PI * 2,
		timer = undefined,
		frame = undefined,
		confetti = [];
		
		var runFor = 2000
		var isRunning = true
		setTimeout(() => {
			isRunning = false
		}, runFor);
		
		// Settings
		var konami = [38, 38, 40, 40, 37, 39, 37, 39, 66, 65],
		pointer = 0;
		var particles = 150,
		spread = 20,
		sizeMin = 5,
		sizeMax = 12 - sizeMin,
		eccentricity = 10,
		deviation = 100,
		dxThetaMin = -.1,
		dxThetaMax = -dxThetaMin - dxThetaMin,
		dyMin = .13,
		dyMax = .18,
		dThetaMin = .4,
		dThetaMax = .7 - dThetaMin;
		var colorThemes = [
			function() {
				return color(200 * random() | 0, 200 * random() | 0, 200 * random() | 0);
			},
			function() {
				var black = 200 * random() | 0;
				return color(200, black, black);
			},
			function() {
				var black = 200 * random() | 0;
				return color(black, 200, black);
			},
			function() {
				var black = 200 * random() | 0;
				return color(black, black, 200);
			},
			function() {
				return color(200, 100, 200 * random() | 0);
			},
			function() {
				return color(200 * random() | 0, 200, 200);
			},
			function() {
				var black = 256 * random() | 0;
				return color(black, black, black);
			},
			function() {
				return colorThemes[random() < .5 ? 1 : 2]();
			},
			function() {
				return colorThemes[random() < .5 ? 3 : 5]();
			},
			function() {
				return colorThemes[random() < .5 ? 2 : 4]();
			}
		];
		function color(r, g, b) {
			return 'rgb(' + r + ',' + g + ',' + b + ')';
		}
		
		// Cosine interpolation
		function interpolation(a, b, t) {
			return (1 - cos(PI * t)) / 2 * (b - a) + a;
		}
		// Create a 1D Maximal Poisson Disc over [0, 1]
		var radius = 1 / eccentricity,
		radius2 = radius + radius;
		
		function createPoisson() {
			// domain is the set of points which are still available to pick from
			// D = union{ [d_i, d_i+1] | i is even }
			var domain = [radius, 1 - radius],
			measure = 1 - radius2,
			spline = [0, 1];
			while (measure) {
				var dart = measure * random(),
				i, l, interval, a, b, c, d;
				// Find where dart lies
				for (i = 0, l = domain.length, measure = 0; i < l; i += 2) {
					a = domain[i], b = domain[i + 1], interval = b - a;
					if (dart < measure + interval) {
						spline.push(dart += a - measure);
						break;
					}
					measure += interval;
				}
				c = dart - radius, d = dart + radius;
				// Update the domain
				for (i = domain.length - 1; i > 0; i -= 2) {
					l = i - 1, a = domain[l], b = domain[i];
					// c---d          c---d  Do nothing
					//   c-----d  c-----d    Move interior
					//   c--------------d    Delete interval
					//         c--d          Split interval
					//       a------b
					if (a >= c && a < d)
					if (b > d) domain[l] = d; // Move interior (Left case)
					else domain.splice(l, 2); // Delete interval
					else if (a < c && b > c)
					if (b <= d) domain[i] = c; // Move interior (Right case)
					else domain.splice(i, 0, c, d); // Split interval
				}
				// Re-measure the domain
				for (i = 0, l = domain.length, measure = 0; i < l; i += 2)
				measure += domain[i + 1] - domain[i];
			}
			return spline.sort();
		}
		// Create the overarching container
		var container = document.createElement('div');
		container.style.position = 'fixed';
		container.style.top = '0';
		container.style.left = '0';
		container.style.width = '100%';
		container.style.height = '0';
		container.style.overflow = 'visible';
		container.style.zIndex = '9999';
		// Confetto constructor
		function Confetto(theme) {
			this.frame = 0;
			this.outer = document.createElement('div');
			this.inner = document.createElement('div');
			this.outer.appendChild(this.inner);
			
			var outerStyle = this.outer.style,
			innerStyle = this.inner.style;
			outerStyle.position = 'absolute';
			outerStyle.width = (sizeMin + sizeMax * random()) + 'px';
			outerStyle.height = (sizeMin + sizeMax * random()) + 'px';
			innerStyle.width = '100%';
			innerStyle.height = '100%';
			innerStyle.backgroundColor = theme();
			
			outerStyle.perspective = '50px';
			outerStyle.transform = 'rotate(' + (360 * random()) + 'deg)';
			this.axis = 'rotate3D(' +
			cos(360 * random()) + ',' +
			cos(360 * random()) + ',0,';
			this.theta = 360 * random();
			this.dTheta = dThetaMin + dThetaMax * random();
			innerStyle.transform = this.axis + this.theta + 'deg)';
			
			this.x = $window.width() * random();
			this.y = -deviation;
			this.dx = sin(dxThetaMin + dxThetaMax * random());
			this.dy = dyMin + dyMax * random();
			outerStyle.left = this.x + 'px';
			outerStyle.top = this.y + 'px';
			
			// Create the periodic spline
			this.splineX = createPoisson();
			this.splineY = [];
			for (var i = 1, l = this.splineX.length - 1; i < l; ++i)
			this.splineY[i] = deviation * random();
			this.splineY[0] = this.splineY[l] = deviation * random();
			this.update = function(height, delta) {
				this.frame += delta;
				this.x += this.dx * delta;
				this.y += this.dy * delta;
				this.theta += this.dTheta * delta;
				// Compute spline and convert to polar
				var phi = this.frame % 7777 / 7777,
				i = 0,
				j = 1;
				while (phi >= this.splineX[j]) i = j++;
				var rho = interpolation(
					this.splineY[i],
					this.splineY[j],
					(phi - this.splineX[i]) / (this.splineX[j] - this.splineX[i])
				);
				phi *= PI2;
				outerStyle.left = this.x + rho * cos(phi) + 'px';
				outerStyle.top = this.y + rho * sin(phi) + 'px';
				innerStyle.transform = this.axis + this.theta + 'deg)';
				return this.y > height + deviation;
			};
		}
		function poof() {
			if (!frame) {
				// Append the container
				document.body.appendChild(container);
				// Add confetti
				var theme = colorThemes[onlyOnKonami ? colorThemes.length * random() | 0 : 0],
				count = 0;
				(function addConfetto() {
					if (onlyOnKonami && ++count > particles)
					return timer = undefined;
					if (isRunning) {
						var confetto = new Confetto(theme);
						confetti.push(confetto);
						
						container.appendChild(confetto.outer);
						timer = setTimeout(addConfetto, spread * random());
					}
				})(0);
				
				// Start the loop
				var prev = undefined;
				requestAnimationFrame(function loop(timestamp) {
					var delta = prev ? timestamp - prev : 0;
					prev = timestamp;
					var height = $window.height();
					for (var i = confetti.length - 1; i >= 0; --i) {
						if (confetti[i].update(height, delta)) {
							container.removeChild(confetti[i].outer);
							confetti.splice(i, 1);
						}
					}
					if (timer || confetti.length)
					return frame = requestAnimationFrame(loop);
					// Cleanup
					document.body.removeChild(container);
					frame = undefined;
				});
			}
		}
		$window.keydown(function(event) {
			pointer = konami[pointer] === event.which ?
			pointer + 1 :
			+(event.which === konami[0]);
			if (pointer === konami.length) {
				pointer = 0;
				poof();
			}
		});
		if (!onlyOnKonami) poof();
	});
}


function getForm(e)
{
	jQuery("#msgbox").show();
}

jQuery("button.close").click(function(){
	var id = this.id;
	
})


function flyHearts(){
	var love = setInterval(function() {
		var r_num = Math.floor(Math.random() * 40) + 1;
		var r_size = Math.floor(Math.random() * 65) + 10;
		var r_left = Math.floor(Math.random() * 100) + 1;
		var r_bg = Math.floor(Math.random() * 25) + 100;
		var r_time = Math.floor(Math.random() * 5) + 5;
		
		// jQuery('.bg_heart').append("<div class='heart' style='width:" + r_size + "px;height:" + r_size + "px;left:" + r_left + "%;background:rgba(255," + (r_bg - 25) + "," + r_bg + ",1);-webkit-animation:love " + r_time + "s ease;-moz-animation:love " + r_time + "s ease;-ms-animation:love " + r_time + "s ease;animation:love " + r_time + "s ease'></div>");
		
		jQuery('.bg_heart').append("<div class='heart' style='width:" + (r_size - 10) + "px;height:" + (r_size - 10) + "px;left:" + (r_left + r_num) + "%;background:rgba(255," + (r_bg - 25) + "," + (r_bg + 25) + ",1);-webkit-animation:love " + (r_time + 5) + "s ease;-moz-animation:love " + (r_time + 5) + "s ease;-ms-animation:love " + (r_time + 5) + "s ease;animation:love " + (r_time + 5) + "s ease'></div>");
		
		// jQuery('.heart').each(function() {
		// var top = jQuery(this).css("top").replace(/[^-\d\.]/g, '');
		// var width = jQuery(this).css("width").replace(/[^-\d\.]/g, '');
		// if (top <= -100 || width >= 150) {
		// jQuery(this).detach();
		// }
		// });
	}, 500);
	
}





// Star Ratind Js Start
function starRatingWidget(         
	appendTo,
	maxStars = 5,
	emojis = ['😤', '😞', '🙂', '😀', '🤩']
	) {
	const wrapper = document.querySelector([appendTo]);
	
	if (!wrapper) return;
	
	const highlightClass = 'star-rating-widget__btn--highlight';
	const animateClass = 'star-rating-widget__btn--animate';
	const widgetWrapper = document.createElement('div');
	widgetWrapper.classList.add('star-rating-widget');
	
	if (emojis.length) {
		widgetWrapper.classList.add('star-rating-widget--with-emojis');
	}
	
	wrapper.innerHTML = '';
	wrapper.insertAdjacentElement('beforeend', widgetWrapper);
	
	function getEmoji(rating) {
		const emojisPerStar = Math.ceil(maxStars / emojis.length);
		const emojiIndex = Math.ceil(rating / emojisPerStar) - 1;
		
		return emojis[emojiIndex];
	}
	
	function handleStarBtnClick(e) {
		const starBtns = document.querySelectorAll('.star-rating-widget__btn');
		const rating = e.currentTarget.dataset.rating;
		const submittedClassName = '.star-rating-widget__submitted';
		
		starBtns.forEach((btn, index) => {
			index < rating
			? btn.classList.add(animateClass, highlightClass)
			: btn.classList.remove(animateClass, highlightClass);
		});
		
		e.currentTarget.classList.add('star-rating-widget__btn--selected');
		
		e.currentTarget.addEventListener('animationend', function (e) {
			if (e.animationName === 'EmojiIn') {
				e.currentTarget.classList.remove('star-rating-widget__btn--selected');
				} else {
				starBtns.forEach((btn) => {
					btn.classList.remove(animateClass);
				});
			}
		});
		
		function handleSubmittedText() {
			const widgetWrapper = document.querySelector('.star-rating-widget');
			const submittedDiv = document.createElement('div');
			const hasSubmittedDiv = document.querySelector([submittedClassName]);
			
			function addSubmittedText() {
				submittedDiv.classList.add('star-rating-widget__submitted');
				submittedDiv.innerHTML = `<p role="alert">✓ Rating submitted!</p>`;
				widgetWrapper.insertAdjacentElement('beforeend', submittedDiv);
			}
			
			if (!hasSubmittedDiv) {
				addSubmittedText();
				} else {
				hasSubmittedDiv.remove(setTimeout(addSubmittedText, 50));
			}
		}
		
		handleSubmittedText();
	}
	
	function starBtnEvents() {
		const starBtns = document.querySelectorAll('.star-rating-widget__btn');
		
		starBtns.forEach((button) => {
			button.addEventListener('click', handleStarBtnClick);
		});
	}
	
	const buttons = Array.from({
		length: maxStars,
	})
	.map((star, index) => {
		return `<button type="button"
		class="star-rating-widget__btn" data-rating=${index + 1}
		aria-label="Give a rating of ${index + 1}">
		<span class="star-rating-widget__btn-content" tabindex="-1">
		<span class="star-rating-widget__star"
		style=${`"animation-delay: ${index / (maxStars * 4)}s"`}
		aria-hidden="true"></span>
		${
		emojis.length
		? `<span class="star-rating-widget__emoji" aria-hidden="true">
		${emojis.length ? `${getEmoji(index + 1)}` : ''}
		</span>`
		: ''
		}
		</span>
		</button>`;
	})
	.join('');
	
	widgetWrapper.innerHTML = `${buttons}`;
	starBtnEvents();
}

(function () {
	starRatingWidget('.rating');   
})();

// Star Rating Js End



//blink 
// var blink = 
// document.getElementById('blink');

// setInterval(function () {
	// blink.style.opacity = 
	// (blink.style.opacity == 0 ? 1 : 0);
// }, 1000);     
