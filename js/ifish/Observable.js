function Observable() {
	
	this.observers = new Array();
	this.changed = false;
	
	this.addObserver = addObserver;
	function addObserver(o) {
		if (o == null) {
			return;
		}
		
		//Don't double add observers
		for (i=0; i<this.observers.length; i++) {
			if (this.observers[i] == o) {
				return false;
			}
		}
		
		this.observers.push(o);
		return true;
	}
	
	this.removeOberver = removeOberver;
	function removeOberver(o) {
		var len = this.observers.length;
		
		for (i=0; i<len; i++) {
			if (this.observers[i] == o) {
				this.observers.splice(i,1);
				return true;
			}
		}
		return false;
	}
	
	
	this.notifyObservers = notifyObservers;
	function notifyObservers(infoObj) {
		if (infoObj == undefined) {
			infoObj = null;
		}
		
		if (this.changed == false) {
			return;
		}
		
		//we take a copy in case it changes from underneath us...
		var observerSnapshot = this.observers.slice(0);
		this.clearChanged();
	
		//tell all observers to update()
		for (var ee=0; ee<observerSnapshot.length; ee++) {
		
			observerSnapshot[ee].update(infoObj);
			
		}

	}

	this.clearObservers = clearObservers;
	function clearObservers() {
		this.observers = new Array();
	}
	
	this.clearChanged = clearChanged;
	function clearChanged() {
		this.changed = false;
	}
	
	this.countObservers = countObservers;
	function countObservers() {
		return this.observers.length;
	}
	
	this.setChanged = setChanged;
	function setChanged() {
		this.changed = true;
	}
	
	this.hasChanged = hasChanged;
	function hasChanged() {
		return this.changed;
	}
	
}