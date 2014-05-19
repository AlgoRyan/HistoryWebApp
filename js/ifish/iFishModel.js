function iFishModel() {
	this.fishpond;
	this.observable;
	this.pond_token;
	
    this.main = main;
   	function main(api_key,pond_token) {
		this.observable = new Observable();
	
    	// Setup fishpond object
		this.fishpond = new Fishpond(api_key);
		
		var javascriptHack = this;
		
		// Bind fishpond events to functions defined here...
		this.fishpond.ready(function (pond) { javascriptHack.fishpondReady(pond); });
		this.fishpond.error(function (message) { javascriptHack.fishpondError(message); } );
		this.fishpond.loading(function (percentage) { javascriptHack.fishpondLoading(percentage); } );
		this.fishpond.resultsUpdated(function (results) { javascriptHack.fishpondResultsUpdated(results); } );
		
		this.pond_token = pond_token;
		
   	}
	
	this.init = init;
	function init() {
	
		// Initialise fishpond
		this.fishpond.init(this.pond_token);
	
	}
	
	// Fishpond::ready
	this.fishpondReady = fishpondReady;
    function fishpondReady(pond){
		//Notify observers that the fish pond is ready
		this.observable.setChanged();
		
		var tmp1 = 	{	"update_type":"fishpondReady",
						"payload":"true"
					}
		this.observable.notifyObservers(tmp1);
    }
	
	// Fishpond::error
	this.fishpondError = this.fishpondError;
	function fishpondError(message) {
		console.log(message);
	}
	
	// Fishpond::loading
	this.fishpondLoading = fishpondLoading;
	function fishpondLoading(percentage) {
		$("#loading h1").html("Loading... " + parseInt((percentage * 100), 10) + "%");
	}
	
	this.fishpondResultsUpdated = fishpondResultsUpdated;
	function fishpondResultsUpdated(results) {
		console.log("Results updated");
		
		//Notify observers that the fishpond results have been updated and here they are in our payload...
		this.observable.setChanged();
		
		var tmp2 = 	{	"update_type":"fishpondResultsUpdated",
						"payload":results
					}
		this.observable.notifyObservers(tmp2);
		
	}
}