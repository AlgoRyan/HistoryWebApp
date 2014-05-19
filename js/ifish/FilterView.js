function FilterView() {

	this.observable;

	this.main = main;
	function main(target) {
		this.observable = new Observable();
	}

	this.addFilterEventListeners = addFilterEventListeners;
	function addFilterEventListeners() {
		console.log("add some filters");
		//Tells the filters to call processQuery when change. 
		//use jquery magic to add change events for all the objects with class slider 
		
		var javascriptHack = this;
		$(".filter").each( function(index) {
    		$(this).change( function() {
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
		switch (infoObj.update_type) {
			case "fishpondReady":
				this.addFilterEventListeners();
			break;
		}

	}

}