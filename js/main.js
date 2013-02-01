$(function(){
  
	// container is the DOM element;
	// userText is the textbox
	
	var milesContainer = $("#miles")
	
	// Shuffle the contents of container
	milesContainer.shuffleLetters();

	// Bind events


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
		var feed = $("#feed")
		feed.fadeIn();
	},3000);
	
});

