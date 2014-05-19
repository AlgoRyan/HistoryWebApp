(function(window) {

	function iFish_physics() {
		//nope
	}
	
	iFish_physics.prototype.startIt = function(target_element) {
		
	
		//'public' properties, some of which should not be. But fuck it. Too much javascript based effort
		this.target_element = target_element;//the html element we will be animating. Will of whatever type this returns: document.getElementById("...")
		this.x = 0;//where we think the current element is... but this may not really be the case. Don't get too confused about this. It's a Cross-Browser thing. 
		this.y = 0;
		this.targetWidth = 10;
		this.targetHeight = 10;
		this.theWidth=10;//what width we currently think the target element is... may not be the case. Again, don't get confused
		this.theHeight=10;
		this.friction = 0.4; //lower number is like it is moving through custard, lower number like air or water
		this.vx = 0;//velocity in pixels per frame in the x axis direction. Negative/Positive give it a direction
		this.vy = 0;//velocity in pixels per frame in the y axis direction. Negative/Positive give it a direction
		this.spring = 0.1;//how elastic objects are to a particular point. bigger number has more snap back
		this.targetX = 30;//x of where to snap to using spring. where the html element wants to be.
		this.targetY = 30;//y of where to snap to using spring. where the html element wants to be.	
	}	
	
	iFish_physics.prototype.commit = function() {
		
		tmpX = window.innerWidth * (this.targetX/100);
		tmpY = window.innerHeight * (this.targetY/100);
		tmpHeight = window.innerHeight * (this.targetHeight/100);
		tmpWidth = window.innerWidth * (this.targetWidth/100);
		
		this.target_element.style.position = "absolute";
		this.target_element.style.display = "block";
		this.target_element.style.webkitTransform = 'translate('  + tmpX + 'px,' + tmpY + 'px)';
		this.target_element.style.transform = 'translate('  + tmpX + 'px,' + tmpY + 'px)';
		this.target_element.style.width = tmpWidth + "px";
		this.target_element.style.height = tmpHeight + "px";
		
		/*
			To do:
			
			Look at the iPadiFish version. It has some maths to determine the duration of the animation based on how far the object needs to move. Should improve the fish feel.
			Use on next line. 
		
		*/
		
		this.target_element.style.webkitTransitionDuration = '2s';
	}
	
	
	iFish_physics.prototype.moveIt = function() {
		//called just about every frame. Or as much as the browser can handle
		
		//Work out x and y stuff first
		var axs = (this.targetX - this.x) * this.spring ;//ax is acceleration in the x axis
		var ays = (this.targetY - this.y) * this.spring;//ay is acceleration in the y axis
		
		this.vx += axs;//add whatever we worked the acceleration to the current velocity
		this.vy += ays;	
		
		this.vx *= this.friction;//reduce our velocity by friction (a number less than one)
		this.vy *= this.friction;	
	
		this.x += this.vx;
		this.y += this.vy;
	
	
		this.target_element.style.left = this.x + "%";//actually change the x and y of the target element/object
		this.target_element.style.top = this.y + "%";
	
		//Second, work out the width and height
		//notice the * 0.10, this could be a variable number, just like the spring in the x and y stuff. Hard coded for now.
		this.theWidth += (this.targetWidth - this.theWidth) * 0.10;
		this.theHeight += (this.targetHeight - this.theHeight) * 0.10;
		
		this.target_element.style.width = this.theWidth + "%";
		this.target_element.style.height = this.theHeight + "%";	
	}
	
	iFish_physics.prototype.set_targetX = function(newTargetX) {
		this.targetX = newTargetX;
	}
	
	iFish_physics.prototype.set_targetY = function(newTargetY) {
		this.targetY = newTargetY;
	}
	
	iFish_physics.prototype.set_targetWidth = function(newTargetWidth) {
		this.targetWidth = newTargetWidth;
	}
	
	iFish_physics.prototype.set_targetHeight = function(newTargetHeight) {
		this.targetHeight = newTargetHeight;
	}
	
	
	window.iFish_physics = iFish_physics;//crazy archaic javascript stuff to get "classes" working

}(window));//crazy archaic javascript stuff to get 'classes' working