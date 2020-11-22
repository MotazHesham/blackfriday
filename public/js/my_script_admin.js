(function($) {

	"use strict";

	var fullHeight = function() {

		$('.js-fullheight').css('height', $(window).height());
		$(window).resize(function(){
			$('.js-fullheight').css('height', $(window).height());
		});

	};
	fullHeight();

	$('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
	});
	
	$('.confirm').on("click",function ()
	{
		return confirm("Are You Sure Delete ?");
	});

})(jQuery);
