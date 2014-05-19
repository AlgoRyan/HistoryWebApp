function iFishery(target,api_key, pond_token, fish_html_template_url) {
	//Model
	this.iFish_model = new iFishModel();
	this.iFish_model.main(api_key, pond_token); 

	this.iFish_controller = new iFishController();
	this.iFish_controller.main(this.iFish_model);
	
	this.slider_view = new SliderView();
	this.slider_view.main(target);
	this.iFish_model.observable.addObserver(this.slider_view);
	this.slider_view.observable.addObserver(this.iFish_controller);
	
	this.filter_view = new FilterView();
	this.filter_view.main(target);
	this.iFish_model.observable.addObserver(this.filter_view);
	this.filter_view.observable.addObserver(this.iFish_controller);
	
	this.aquarium_view = new AquariumView();
	this.aquarium_view.main(target.getElementById("swiming_area"),fish_html_template_url);
	this.iFish_model.observable.addObserver(this.aquarium_view);

	
	this.iFish_model.init();//get it all running
	
}