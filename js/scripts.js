/* ------------------------------------------------------------------------------------------------------------------------
 * Loading the captions and lightbox
 */
$(document).ready(function() {
		$('#da-thumbs > li').hoverdir();
		$('#da-thumbs a').lightBox({fixedNavigation:true});
});

/* ------------------------------------------------------------------------------------------------------------------------
 * Isotope init
 */
$(document).ready(function() {
	// cache container
	var $container = $('#da-thumbs');
	$container.imagesLoaded( function(){
		// initialize isotope
		$container.isotope({
			itemSelector: '.element',
			layoutMode : 'masonry',
			masonry : {
				columnWidth: $('.element').width() / 8
			},
			resizable : 'false',
			animationEngine : 'jquery',
			animationOptions: {
				duration : 500,
				easing: 'linear',
				queue : false
			}

		});

		// filter items when filter link is clicked
		$('.filters a').click(function(){
			event.preventDefault();
		  var selector = $(this).attr('data-filter');
		  $container.isotope({ filter: selector });
		  // Adding the active class
		  var $filterType = $('.filters li.active a').attr('class');
		  $('.filters li').removeClass('active');
		  //var $filterType = $(this).attr('class');
		  $(this).parent().addClass('active');
		  if ($filterType == 'all') {
				// assign all li items to the $filteredData var when
				// the 'All' filter option is clicked
				var $filteredData = $data.find('li');
			}
			else {
				// find all li elements that have our required $filterType
				// values for the data-type element
				var $filteredData = $data.find('li[data-type=' + $filterType + ']');
			}
		  return false;
		});
	});

});