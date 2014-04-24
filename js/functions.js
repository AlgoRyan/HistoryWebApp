// created by cjbosua on 8/4/14

$(document).ready(function(){
		$("#hide").click(function(){
				$("p").hide();
		});
		$("#show").click(function(){
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
// 
