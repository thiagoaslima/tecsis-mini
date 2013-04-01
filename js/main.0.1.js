// tecsis
// by thiago lima <thiagoaslima@gmail.com>

(function(win, doc, $, Mod){

	'use strict';

	var count = 0,
		$win = $(win),
		$fotos = $('#fotos'),
		$mask = $fotos.children('.mask'),
		width = ~~($mask.children("img").width()),
		r, spin;

	spin = function spin(){
		var left = (width * count) * -1;
		$mask.animate({'left': left + 'px'}, 1000, function(){
			count += 1;
			if (count >= 6){
				$mask.css('left', 0);
				count = 1;
			}
			win.console.log(width);
			r = win.setTimeout(spin, 4500);
		});
	};

	if(!$('html').hasClass("cssanimations")){
		r = win.setTimeout(spin, 0);
		win.spin = r;

		$win.on('resize', function () {
			width = ~~($mask.children("img").width());
			left = (width * count) * -1;
			$mask.css('left', left + 'px');

			win.console.log('resized: ', width);
		});
	}

	if(!Mod.mq('only all')) {

		var fontSize = function (winSize) {
			if (winSize <= 1020){
				$('body').css('fontSize','100%');
			} else if ( winSize <= 1240 ) {
				$('body').css('fontSize','110%');
			} else if ( winSize <= 1440 ) {
				$('body').css('fontSize','120%');
			} else {
				$('body').css('fontSize','130%');
			}
		};

		fontSize($(win).width());
		$win.on('resize', function(){
			fontSize($(win).width());
		});
	}

	if (!Mod.input.placeholder) {
		$('[placeholder]').each(function() {
			var field = $(this),
				v = field.attr('placeholder');
			console.log(v);

			if(field.val() === ""){
				field
					.val(v)
					.on('focus', function(){
						field.val("");
					})
					.on('blur', function(){
						if($.trim(field.val()) === ""){
							field.val(v);
						}
					});
			}
		});

	}

}(this, this.document, this.jQuery, this.Modernizr));