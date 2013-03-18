// tecsis
// by thiago lima <thiagoaslima@gmail.com>

(function(win, doc, $, Mod){
	console.log($('html').hasClass("cssanimations"))

	if(!$('html').hasClass("cssanimations")){
		var count = 0,
			width = -5525,
			mask = $('#fotos').children('.mask'),
			r, spin;

		spin = function spin(){
			var left = (width * count) / 100;
			mask.animate({'left': left + 'em'}, 1000, function(){
				count += 1;
				if (count >= 6){
					mask.css('left', 0);
					count = 1;
				}
				r = win.setTimeout(spin, 4500);
			});
		}

		r = win.setTimeout(spin, 0);
		win.spin = r;
	};


	if(!Mod.mq('only all')) {
		var $win = $(win);

		$win.on('resize', function(){
			var W = $(win).width();

			if (W <= 1020){
				$('body').css('fontSize','100%');
			} else if ( W <= 1240 ) {
				$('body').css('fontSize','110%');
			} else if ( W <= 1440 ) {
				$('body').css('fontSize','120%');
			} else {
				$('body').css('fontSize','130%');
			}
		})
	}

}(this, this.document, this.jQuery, this.Modernizr))