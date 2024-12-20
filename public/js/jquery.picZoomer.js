/*!     
	jquery.picZoomer.js
	v 1.0
	David
	http://www.CodingSerf.com
*/


;(function($){
	$.fn.picZoomer = function(options){
		var opts = $.extend({}, $.fn.picZoomer.defaults, options), 
		$this = this,
		$picBD = $('<div class="picZoomer-pic-wp"></div>').css({'width':opts.picWidth+'px', 'height':opts.picHeight+'px'}).appendTo($this),
		$pic = $this.children('img').addClass('picZoomer-pic').appendTo($picBD),
		$cursor = $('<div class="picZoomer-cursor"><i class="f-is picZoomCursor-ico"></i></div>').appendTo($picBD),
		cursorSizeHalf = {w:$cursor.width()/2 ,h:$cursor.height()/2},
		$zoomWP = $('<div class="picZoomer-zoom-wp"><img src="" alt="" class="picZoomer-zoom-pic"></div>').appendTo($this),
		$zoomPic = $zoomWP.find('.picZoomer-zoom-pic'),
		picBDOffset = {x:$picBD.offset().left,y:$picBD.offset().top};
		
		
		opts.zoomWidth = opts.zoomWidth||opts.picWidth;
		opts.zoomHeight = opts.zoomHeight||opts.picHeight;
		var zoomWPSizeHalf = {w:opts.zoomWidth/2 ,h:opts.zoomHeight/2};
		
		
		$zoomWP.css({'width':opts.zoomWidth+'px', 'height':opts.zoomHeight+'px', 'z-index':1});
		$zoomWP.css(opts.zoomerPosition || {top: 0, left: opts.picWidth+30+'px','z-index':1});
		
		
		$zoomPic.css({'width':opts.picWidth*opts.scale+'px', 'height':opts.picHeight*opts.scale+'px','z-index:':1});
		
		
		$picBD.on('mouseenter',function(event){
			$cursor.show();
			$zoomWP.show();
			$zoomPic.attr('src',$pic.attr('src'))
			}).on('mouseleave',function(event){
			$cursor.hide();
			$zoomWP.hide();
			}).on('mousemove', function(event){
			var x = event.pageX-picBDOffset.x,
			y = event.pageY-picBDOffset.y;
			
			$cursor.css({'left':x-cursorSizeHalf.w+70+'px', 'top':y-cursorSizeHalf.h+9+'px'});
			$zoomPic.css({'left':-(x*opts.scale-zoomWPSizeHalf.w)+'px', 'top':-(y*opts.scale-zoomWPSizeHalf.h)-220+'px'});
		});
		return $this;
		
	}; 
	// $.fn.picZoomer.defaults = {
	// picWidth: 340,
	// picHeight: 510,
	// scale: 2.5,
	// zoomerPosition: {top: '0', left: '350px'}
	
	// };
	
	var mq = window.matchMedia( "(min-width: 1200px)" );
	if (mq.matches) {
		$.fn.picZoomer.defaults = {
			picWidth: 520,
			picHeight: 510,
			scale: 2.5,
			zoomerPosition: {top: '0', left: '530px'}
			
		};
	}
	else {
		$.fn.picZoomer.defaults = {
			picWidth: 520,
			picHeight: 510,
			scale: 2.5,
			zoomerPosition: {top: '0', left: '530px'}
			
		};
	}
	
	
})(jQuery);




