function SliderView() {

	this.observable;

	this.main = main;
	function main(target) {
		this.observable = new Observable();
	}

	this.addSliderEventListeners = addSliderEventListeners;
	function addSliderEventListeners() {
		//Tells the sliders to call processQuery function when change. 
		//use jquery magic to add change events for all the objects with class slider 
		
		var javascriptHack = this;
		$(".slider").each( function(index) {
    		$(this).change( function() {
				console.log("Slider change");
				javascriptHack.observable.setChanged();
				javascriptHack.observable.notifyObservers({		"update_type":"processQuery",
																"payload":"true"
														});
        	})
		})
		
		//Let the controller know we are ready now
		this.observable.setChanged();
		this.observable.notifyObservers({	"update_type":"fishpondReady",
											"payload":"true"
										});
	}

	
	this.update = update;
	function update(infoObj) {
		//infoObj is case is some json

		console.log("Update the Slider View " + infoObj);
		switch (infoObj.update_type) {
			case "fishpondReady":
				this.addSliderEventListeners();
			break;
		}

	}
	
	
	
}