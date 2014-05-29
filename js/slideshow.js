$(document).ready(function(){	
	
	$("#slideshow > div:gt(0)").hide();
	
	startShow(0);
	
});

function startShow(x) {
	$("#slideshow > div:gt(0)").hide();
	
	
	var index = x;
	var maxindex = $('#slideshow > div').length;
	
	setInterval(function () {
		$('#slideshow > div:first')
			.fadeOut(2000)
			.next()
			.fadeIn(2000)
			.end()
			.appendTo('#slideshow');

		$('#ulss li').remove();
		
		index = index < maxindex - 1 ? index + 1 : 0;
		
		for (var i = 0; i < maxindex; i++) {
			$('#ulss').append('<li class="' + (i == index ? 'active' : '') + '"></li>');
			console.log("index = " + index);
		}
		console.log("In set Interval index = " + index);
	}, 8000);
	
	for (var i = 0; i < maxindex; i++) {
		$('#ulss').append('<li class="' + (i == x ? 'active' : '') + '"></li>');
		console.log("index = " + index);
	}

}