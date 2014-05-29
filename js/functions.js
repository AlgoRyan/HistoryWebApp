// created by cjbosua on 8/4/14

$(document).ready(function(){
		$("#hide").click(function(){
				$("p").hide();
		});
		$("#show").click(function(){
				$("p").show();
		});
		
		$("#rabout").click(function(){
				$("p").show();
		});
		
		/*
		$("#homesection").click(function(){
				$("#title").hide();
		});
		*/
		
		var element = document.getElementById('id');
		element.style.opacity = "0.9";
		element.style.filter  = 'alpha(opacity=90)';
});

var moderator = document.getElementById("moderator");
var mode_init = document.getElementById("moderator").innerHTML;
moderator.onmouseover = function myFunction()
{
	document.getElementById("moderator").innerHTML = " Moderate <br> (admin only)"
}
moderator.onmouseout = function myFunction()
{
	document.getElementById("moderator").innerHTML= mode_init;
}

var ac = document.getElementById("add-content");
var ac_init = document.getElementById("add-content").innerHTML;
ac.onmouseover = function myFunction2()
{
	document.getElementById("add-content").innerHTML = " Add-Content"
}
ac.onmouseout = function myFunction2()
{
	document.getElementById("add-content").innerHTML= ac_init;
}