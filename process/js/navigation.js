/**
 * File navigation.js.
 *
 * Enables the active page (news) or section (front-page) to correspond to
 * a distinct nave style.
 */

(function($) {

$(document).ready(function() {

	var primaryNavItems = $("#primary-menu li");
	$(primaryNavItems[0]).addClass("active");

	var footerNavItems = $("#footer-menu li");
	var bookmarks = $(".front-page-menu-link");

	var primaryArray = [];
	var footerArray = [];
	var bookmarkArray = [];
	// check if on home or news page
	if ( bookmarks.length ){
		for (var i = 0; i < bookmarks.length; i++) {
			var menuLink = bookmarks[i];
			var id = $(menuLink).attr('id');

			bookmarkArray.push('#'+id);
		}
		bookmarkArray.splice(3, 0, '#tuff-news');
	} else {
		$(primaryNavItems[0]).removeClass("active");
		$(footerNavItems[0]).removeClass("active");
		$(primaryNavItems[3]).addClass("active");
		$(footerNavItems[3]).addClass("active");
	}

	var activeArray = new Array(5);

	for( var i = 0; i < activeArray.length; i++ ){
		// var aChild = primaryNavItems[i];
		// var id = $(aChild).attr('id'); 
		// activeArray[i] = '#' + id;

		activeArray[i] = new Array;

		activeArray[i]['primary'] = '#' + $(primaryNavItems[i]).attr('id');
		activeArray[i]['footer'] = '#' + $(footerNavItems[i]).attr('id');
		activeArray[i]['bookmark'] = bookmarkArray[i];
	}
	console.log(activeArray);

	function makeActive(activate){
		for (var i = 0; i < bookmarkArray.length; i++) {
			if (activeArray[i]['bookmark'] === activate){
				$(activeArray[i]['primary']).addClass("active");
				$(activeArray[i]['footer']).addClass("active");
			} 
			else {
				$(primaryNavItems[i]).removeClass("active");
				$(footerNavItems[i]).removeClass("active");
			}
		}
	}

	// scrolling
    $(window).scroll(function() {

		if ( bookmarks.length ){
		
			var windowPos = $(window).scrollTop();
			var windowHeight = $(window).height();
			var docHeight = $(document).height();
			console.log(windowPos);
			console.log(windowHeight);
			console.log(docHeight);


			for (var i = 0; i < bookmarks.length; i++) {
				if( activeArray[i]['bookmark'] != '#tuff-news' ) {
					// section info
					var sectionID = activeArray[i]['bookmark'];
					//menu info
					var primaryMenuID = activeArray[i]['primary'];
					var footerMenuID = activeArray[i]['footer'];

					var secPosition = $(sectionID).offset().top;
					secPosition = secPosition - 55;
			
					var divHeight = $(sectionID).height();
					if (windowPos >= secPosition && windowPos){
						
						makeActive(sectionID);
						//console.log(sectionID, 'is active', 'windowPos:secPosition',windowPos,':', secPosition);

						console.log('windowPos:',windowPos);
						console.log('windowHeight', windowHeight);
						console.log('docHeight', docHeight);
						if (docHeight - windowPos < 930){
							console.log ('make contact active')
							makeActive('#tuff-contacts')
						}
					}
				}
			}
		} 
    });

});

})(jQuery);
