// created by cjbosua on 8/4/14
// For a full explanation of this code, please refer to the blogpost at http://www.bram.us/2014/01/01/skrollr-css-animations-linked-to-scroll-position/

// setSkrollr function extracted from https://www.pingdom.com/2013/
var setSkrollr = function($el, data) {
    for (var i = 0, l = data.length; i < l; i++) {
        var d = data[i],
            px = d[0];
            css = d[1];
        $el.attr('data-' + px, css);
    }
}

jQuery(function($) {
    /* for parallax testing
    setSkrollr($('#box1'), [[0, 'width:100%'], [1500, 'width:0%']]);
    setSkrollr($('#box2'), [[0, 'transform:translateX(-100%)'], [750, 'transform:translateX(100%)'], [1500, 'transform:translateX(-100%)']]);
    */
    
    setSkrollr($('#welcome'), [[0, 'opacity:1'], [400, 'opacity:0'],]);
    setSkrollr($('#homesection'), [[0, 'opacity:1'], [800, 'opacity:0'],]);
    //setSkrollr($('#welcome'), [[0, 'font-size:150%'], [1000, 'font-size:50%'],]); doesn't work
    
    //setSkrollr($('#homesection'), [[0, 'left:0px'], [800, 'left:30px'],]);
    
    // change opacity for slide 1
   	//setSkrollr($('#slide1'), [[0, 'opacity:0.5'], [800, 'opacity:1'],]);
    //setSkrollr($('#slide1'), [[800, 'opacity:1'], [1600, 'opacity:0'],]);
    
    /* these simply make them slide in from right
    setSkrollr($('#slide1'), [[400, 'margin: 0px 0px 0px 1000px'], [800, 'margin: 0px 0px 0px 120px'],]);
    setSkrollr($('#slide2'), [[800, 'margin: 0px 0px 0px 1000px'], [1600, 'margin: 0px 0px 0px 120px'],]);
    setSkrollr($('#slide3'), [[1600, 'margin: 0px 0px 0px 1000px'], [2400, 'margin: 0px 0px 0px 120px'],]);
    setSkrollr($('#slide4'), [[2400, 'margin: 0px 0px 0px 1000px'], [3200, 'margin: 0px 0px 0px 120px'],]);    
    */
    
    
    skrollr.init({
        smoothScrolling: false
    });
    skrollr.menu.init(s);
});

setTimeout(function() {
    var s = skrollr.init({
        forceHeight: false
    });
    
    skrollr.menu.init(s);
}, 500);
/*
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
		
		
		//$("#homesection").click(function(){
		//		$("#title").hide();
		//});
		
		
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
*/