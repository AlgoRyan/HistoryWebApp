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


var setSkrollr = function($el, data) {
    for (var i = 0, l = data.length; i < l; i++) {
        var d = data[i],
            px = d[0];
            css = d[1];
        $el.attr('data-' + px, css);
    }
}

jQuery(function($) {
    setSkrollr($('#box1'), [[0, 'width:100%'], [1500, 'width:0%']]);
    setSkrollr($('#box2'), [[0, 'transform:translateX(-100%)'], [750, 'transform:translateX(100%)'], [1500, 'transform:translateX(-100%)']]);
    
    skrollr.init({
        smoothScrolling: false
    });
});
