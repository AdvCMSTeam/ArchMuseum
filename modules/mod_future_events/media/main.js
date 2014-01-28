$(document).ready(function(){
	$('#articles').flexslider({animation: "slide", slideshowSpeed: 4000, controlNav:true, start: function(slider){$('body').removeClass('loading');}
	});
})