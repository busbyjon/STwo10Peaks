$(function(){
  
	// container is the DOM element;
	// userText is the textbox
	
	var milesContainer = $("#miles")
	
	// Shuffle the contents of container
	milesContainer.shuffleLetters();

	// Bind events


	// I could do these setTimeouts with a .delay instead - TODO Jon Busby
	
	setTimeout(function(){
		var milesDescription = $("#miles-description")
		milesDescription.show();
		// Shuffle the container with custom text
		milesDescription.shuffleLetters();
	},800);
	
	setTimeout(function(){
		var donate = $("#donate")
		donate.show();
		// Shuffle the container with custom text
		donate.shuffleLetters();
	},2000);
	
	setTimeout(function(){
		$(".feeddiv").hide().each(function(i) {
		  $(this).delay(i*1000).fadeIn(1000);
		});
	},3000);
	

	
	
});

