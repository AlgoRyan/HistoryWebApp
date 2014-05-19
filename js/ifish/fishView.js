function fishView() { 

	this.id;
	this.title;
	this.iFish_physics_engine;
	this.target;


	this.main = main;
	function main(anID, aTitle, aTarget) {
	
		this.id = anID;
		this.title = aTitle;
		this.target = aTarget;
		this.createFish();
	}
	
	this.createFish = createFish;
	function createFish() {
	
		var item = $("#fish-template").clone();
		item.attr("id", "lilFishyNumber" + this.id);
		item.attr("style", "");
		item.find("[data-bind=title]").html(this.title);
		item.appendTo(this.target);
		
		this.iFish_physics_engine = new iFish_physics();
		this.iFish_physics_engine.startIt(document.getElementById("lilFishyNumber" + this.id));

	}
		
	this.get_id = get_id;
	function get_id() {
		return this.id;
	}

}