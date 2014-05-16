// created by cjbosua on 28/4/14
results = 1;

$(document).ready(function(){
	adjustDivHeight("#slide-content",results,290,3);
});

function addImage() {
	var aDataId = "template-img";
	var item = $("#template-img").clone();
	var title = $("#add-img-title").val();
	var descript = $("#add-img-description").val();
	item.attr("id", aDataId);
	item.find("#template-h2").html(title);
	item.find("#template-p").html(descript);
	item.appendTo("#slide-content");
}

function test() {
	document.getElementById("template-p").innerHTML=document.getElementById("filter-img").value;

}

function search() {
	var found_id;
	var classname = "item"
	var len = document.getElementById("filter-img").value.length;
	
	var search_string = document.getElementById("filter-img").value;
	//document.getElementById("template-p").innerHTML = search_string;
	var myPattern = new RegExp(search_string, "i");
	
	console.log(myPattern);
	var array_len = document.getElementsByClassName(classname).length;
	var results_count = 0;
	
	for (var n=0; n < array_len; n++) {
		var z =(myPattern.test(document.getElementsByClassName(classname)[n].innerHTML) && len > 0);
		console.log(z);
		
		if (myPattern.test(document.getElementsByClassName(classname)[n].innerHTML) && len >= 0) {
			//document.getElementsByClassName(classname)[n].style.visibility = "visible";
			document.getElementsByClassName(classname)[n].style.display = "block";
			
		} else {
			//document.getElementsByClassName(classname)[n].style.visibility = "hidden";
			document.getElementsByClassName(classname)[n].style.display = "none";
		}
		
	}
	
	for (var n=0; n < array_len; n++) {
		if (document.getElementsByClassName(classname)[n].style.display === "block") {
			results_count++;
		}
	}
	
	document.getElementById("result").innerHTML = "There are: " + results_count + " results";
	
	adjustDivHeight("#slide-content",results_count,290,3);
}

function adjustDivHeight(id,num,x,i) {
	if (num === 0) {
		$(id).height(0);
	} else {
		$(id).height(parseInt((num+2)/i)*x);
	}
}