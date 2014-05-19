function AquariumView() {
	/*
		Thar be fish swimming here
	*/

	this.observable;
	this.fishInTheSea = new Array();
	this.target;
	
	this.numberOfFishToSwim = 30; // To do: this should come from iFish_layout length instead
	this.fishStartingPositionY = 200; // To do: this should be in a config file instead

	this.main = main;
	function main(target,a_html_template) {
		this.observable = new Observable();
		this.target = target;
		
		//load our template and hide it
		$("#template-parent").load(a_html_template + " #fish-template");
		
		/*
		To Do: there is no guarantee this will load before the results have loaded. At the moment works fine because always a delay with involved server
		Should use code like this instead:
		
		$.get(a_html_template, function(data){
			console.log(data);
		});
		
		*/
		
	}
	
	this.update = update;
	function update(infoObj) {
		//infoObj is case is some json

		switch (infoObj.update_type) {
			case "fishpondResultsUpdated":
				this.resultsUpdated(infoObj.payload);
			break;
		}
	}
	

	
	this.resultsUpdated = resultsUpdated;
	function resultsUpdated(results){

		//We're doing this an inefficient silly way just to get it working for now...
		//Work out which fish not in this result set... that hence need to drop off stage...
		var flagFound = false;
		for (var cc=0; cc < this.fishInTheSea.length; cc++) {
			for (var dd=0; dd < results.length; dd++) {
				if (this.fishInTheSea[cc].get_id() == results[dd].fish.id) {
					flagFound = true;
				}
			}
			
			if (flagFound == false) {
				//drop off stage
				this.fishInTheSea[cc].iFish_physics_engine.set_targetY(this.fishStartingPositionY);
				this.fishInTheSea[cc].iFish_physics_engine.commit();
			}
			flagFound = false;
		}

		

	  	var mh_temp = "nope";
		
		for(var resultIndex in results){
	  		var result = results[resultIndex];

			
			
			//loop through to find if there is a relevant index
			for (var bb=0; bb < this.fishInTheSea.length; bb++) {
				if (this.fishInTheSea[bb].get_id() == result.fish.id) {
					mh_temp = bb;
				}
			}

		  	if (mh_temp == "nope") {
				mh_temp = this.fishInTheSea.length;
				//Have not added fish before. Create it!
				
				var myFishy = new fishView();
				myFishy.main(result.fish.id, result.fish.title, this.target);
				this.fishInTheSea.push(myFishy);
				
				
				/*
					This code will need some thinking. It's a request for more data for this particular fish
				
				fishpond.get_fish(result.fish.id, function(fish){
        			document.getElementById("lilFishyNumber" + fish.id).style.background = "url('" + fish.metadata.thumbnail_url + "') no-repeat";
      			});
				
				*/

			}
			
			
			if (resultIndex < this.numberOfFishToSwim) {
			
				/*
					To do:
						iFish_layout should be a property of AquariumView rather than a global variable. 
						iFishView should provide nice wrapper functions for setting all of these instead of relying on knowledge of internal workings of physics_engine. 
				
				*/
				//it is on stage
				this.fishInTheSea[mh_temp].iFish_physics_engine.set_targetX(iFish_layout[resultIndex].rankingPosX);
				this.fishInTheSea[mh_temp].iFish_physics_engine.set_targetY(iFish_layout[resultIndex].rankingPosY);
				this.fishInTheSea[mh_temp].iFish_physics_engine.set_targetWidth(iFish_layout[resultIndex].rankingWidth);
				this.fishInTheSea[mh_temp].iFish_physics_engine.set_targetHeight(iFish_layout[resultIndex].rankingHeight);
				this.fishInTheSea[mh_temp].iFish_physics_engine.commit();
				
			} else {
				//drop off stage
				this.fishInTheSea[mh_temp].iFish_physics_engine.set_targetY(this.fishStartingPositionY);
				this.fishInTheSea[mh_temp].iFish_physics_engine.commit();
			}
			mh_temp = "nope";	
    	}
    }
	
}