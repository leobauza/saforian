/* safo2.js - jquery required */

/* 
 * =============================================================
 * VA SLIDER LIGHBULB FADE IN/OUT
 * =============================================================
 */
	
	window.addEvent('domready', function() {
	  //time to implement fancy show / hide
	  Element.implement({
	    //implement show
	    fancyShow: function() {
	      this.fade('in');
	    },
	    //implement hide
	    fancyHide: function() {
	      this.fade('out');
	    }
	  });
	});
	
	
	
	$('#lightbulb-yellow').click(function() {
		$('#yellow').toggle('slow', function() {
		});
	});