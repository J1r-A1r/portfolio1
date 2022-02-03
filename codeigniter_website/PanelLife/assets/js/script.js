$(window).on('load', function() {
	$('#loading').hide();
	var x = true;
	var music = document.getElementById('music');
	$('#musicBtn').on('click', function(){
		if(x == true) {
			music.play();
			x = false;
			$('#musicBtn').css({'cursor':'url(assets/img/pause.png),pointer'});
		}
		else if(x == false){
			music.pause();
			x = true;
			$('#musicBtn').css({'cursor':'url(assets/img/play-button.png),pointer'});
		}
	})

	// var blog_media = $('.blog_media');
	var y = true;
	function show(current) {
		  current.setAttribute("style", "height: 100%");
		}
	function hide(current) {
		  current.setAttribute("style", "height: 90px");
		}
	var bullet = document.querySelectorAll(".blog_media");

	for (var z in bullet) { 
		  bullet[z].onclick = function() {
		  	if (y == true) {
		  		show(this);
		  		y = false;
		  	}
		  	else{
				hide(this);
				y = true;
		  	}
		    
		  };
		};

});