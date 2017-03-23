(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// Mobile menu...
		$(".mobile-btn a").click(function(event) {
			$("#navigations").slideToggle(400);
		});

		// Smooth scroll effect...
		$('.contact a').each(function() {
		  $(this).attr('data-scroll', '');
		});

		smoothScroll.init({
		    offset: 98 // Integer. How far to offset the scrolling anchor location in pixels
		});

		// isotope

	    // mapsFilter, activates when click on the tab maps
	    var desc = $('#descargasTablist a[href="#maps"]');
	    
	    desc.click(function (e) {
	      // first show the tab-content
	      e.preventDefault();
	      $(this).tab('show');
	      // then isotope can do whatever he want with it
	      var $containerMap = $('#container-maps').imagesLoaded(function(){
	          $containerMap.isotope({
	            itemSelector: '.item-map',
	            layoutMode: 'fitRows',
	          });
	          var $selectsMap = $('.filter-maps select');   
	          $selectsMap.change(function() {
	            var mapClasses = [];  
	            $selectsMap.each( function( i, elem ) {
	              if ( elem.value ) {
	                mapClasses.push( elem.value );
	              }
	            });

	            mapClasses = mapClasses.join('');
	            console.log("mapClases: " + mapClasses);
	            $containerMap.isotope({ filter: mapClasses });
	          });
	      });
	    });
	    
	    // end 

		$('.wagwep-container').addClass("container");
		
	}); // end of customized scripts

	$(function() {
    var $containerPoster = $('#container-posters').imagesLoaded(function (){
      $containerPoster.isotope({
        itemSelector: '.item-poster',
        layoutMode: 'fitRows',
      });
      var $selectsPoster = $('.filter-posters select');   
      $selectsPoster.change(function() {
        var posterClasses = []; 
        $selectsPoster.each( function( i, elem ) {
          if ( elem.value ) {
            posterClasses.push( elem.value );
          }
        });

        posterClasses = posterClasses.join('');
        console.log("posterClases: " + posterClasses);
        $containerPoster.isotope({ filter: posterClasses });

      });
    });

  });
	
})(jQuery, this);
