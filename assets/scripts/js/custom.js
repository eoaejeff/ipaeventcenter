jQuery(document).ready(function( $ ) {
	
	//STICKY HEADER
	$(window).scroll(function() {        
	  
	  var scroll = $(window).scrollTop();    
	  
	  var scrolled = $('.utility').height();
	  var topbar =  $('.top-bar').height();
	  
	  if (scroll >= scrolled) {
	    $(".top-bar").addClass("sticky");
	    $("body").css("padding-top", topbar );     
	  
	  } else {
		  
	    $(".top-bar").removeClass("sticky");
	    $("body").css("padding-top", 0 );    
	         
	  }
	  
	});
	
});



//LOAD YOUTUBE VIDEO BACKGROUND
var tag = document.createElement('script');	
tag.src = "https://www.youtube.com/iframe_api";

var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var player;
function onYouTubeIframeAPIReady() {
	player = new YT.Player('videoPlayer', {
		height: '853',
		width: '1400',
		videoId: videoID,
		host: 'https://www.youtube.com',
		playerVars: {
			playlist: videoID,
				autoplay: 1,
				playsinline: 1,
				controls: 0,
				modestbranding: 1,
				disablekb: 1,
				enablejsapi: 1,
				rel: 0,
				showinfo: 0,
				ecver: 2,
				fs: 1,
				cc_load_policy: 0,
				iv_load_policy: 3, 		     
				autohide: 0,		  
				loop: 1,            	
				mute: 1,
				vq: 'default'
			},
		events: {
			onReady: function(e) {			
			    e.target.mute();
			    //e.target.setPlaybackQuality('hd1080');
			},
			onStateChange: function(e) {
				var videoForeground = document.getElementById('video-foreground');
				if(e && e.data === 1){
					var videoHolder = document.getElementById('video-hero');
					if(videoHolder && videoHolder.id){
						videoHolder.classList.remove('loading');
						videoForeground.style.opacity = '1';
					}
				  
				} else if(e && e.data === 0){
					e.target.playVideo()
					videoForeground.style.opacity = '0';
				}
			}
	  	}
	});
}
//SIZE THE VIDEO APPROPRIATELY
jQuery(document).ready(function( $ ) {
	$(window).on("load resize ",function() {		
		var height = $("#video-foreground").outerHeight();  		   
		$("#videoPlayer").css("width", height / 0.5625 + "px");
	    $("#videoPlayer").css("height", height + "px");	    	    	    
	});
});