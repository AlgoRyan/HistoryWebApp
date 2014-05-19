function iFishController() {
	this.model;
	this.view;
	
	// Storage for previous tags, to test if query needs to be processed
	this.lastTags = {};
	this.lastFilters = {};
	
	
	this.main = main;
	function main(cm) {
		this.model = cm;
	}
	
	
	this.update = update;
	function update(infoObj) {
		//infoObj is case is some json

		switch (infoObj.update_type) {
			case "processQuery":
				this.processQuery();
			break;
			
			case "fishpondReady":
				this.processQuery();
			
				//this.makeYoutubeResults(infoObj.payload);
			break;
		}
	}
	
	this.processQuery = processQuery;
	function processQuery(){
    
		var tags = {};
      	var filters = {};
		var shouldProcessQuery = false;
		
		
		/*
		
		
			TO DO: Instead of going directly to the HTML to get the values... this should call methods from our views to collect this information...
			
			
			
		*/
		
		// Collect slider values
		$(".slider").each(function(){
        	var slider = $(this);
        	
        	//should be doing a check here to see if slider is disabled
        	//if it is disabled, then the tags[slider.attr('data-slug')] = false;
        	
			var value = Math.round(parseFloat(slider.attr('value')));
          	tags[slider.attr('data-slug')] = value;
      	});
      					
      	// Collect filter values and put them in the filter array
      	$(".filter:checked").each(function(){
        	var filter = $(this);
        	filters[filter.attr('data-slug')] = 1;
      	});
      	

		for(var tagKey in tags){
			if(tags[tagKey] != this.lastTags[tagKey]) shouldProcessQuery = true
		}
				
		if(shouldProcessQuery == false){
			for(var filterKey in filters){
				if(filters[filterKey] != this.lastFilters[filterKey]) shouldProcessQuery = true
			}
		}
				
		if(shouldProcessQuery){
          	this.model.fishpond.query(tags, filters);
		}

			
		lastTags = tags;
		lastFilters = filters;
		
    }
	
}