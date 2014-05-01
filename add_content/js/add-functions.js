// created by cjbosua on 28/4/14
results = 1;
$(document).ready(function(){
	adjustDivHeight("#slide-content",results,290,3);
	adjustDivHeight2("#slide1", results, 290,3)
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
	item.style.display =  "block";
	results++;
	adjustDivHeight("#slide-content",results,290,3);
	adjustDivHeight2("#slide1", results, 290,3);
}

function test() {
	document.getElementById("template-p").innerHTML=document.getElementById("filter-img").value;

}

function writeMessage()
{
	document.getElementById("result").innerHTML=document.getElementById("filter-img").value;
	//document.getElementById("template-p").innerHTML = "weeeeeeeeeeeeeeee";
}

function search() {
	var found_id;
	var len = document.getElementById("filter-img").value.length;
	
	var search_string = document.getElementById("filter-img").value;
	//document.getElementById("template-p").innerHTML = search_string;
	var myPattern = new RegExp(search_string, "i");
	
	console.log(myPattern);
	var array_len = document.getElementsByClassName("added-image").length;
	var results_count = 0;
	
	for (var n=0; n < array_len; n++) {
		var z =(myPattern.test(document.getElementsByClassName("added-image")[n].innerHTML) && len > 0);
		console.log(z);
		
		if (myPattern.test(document.getElementsByClassName("added-image")[n].innerHTML) && len >= 0) {
			//document.getElementsByClassName("added-image")[n].style.visibility = "visible";
			document.getElementsByClassName("added-image")[n].style.display = "block";
			
		} else {
			//document.getElementsByClassName("added-image")[n].style.visibility = "hidden";
			document.getElementsByClassName("added-image")[n].style.display = "none";
		}
		
	}
	
	for (var n=0; n < array_len; n++) {
		if (document.getElementsByClassName("added-image")[n].style.display === "block") {
			results_count++;
		}
	}
	
	//results_count = countByClass("added-image");
	
	document.getElementById("result").innerHTML = "There are: " + results_count + " results";
	adjustDivHeight("#slide-content",results_count,290,3);
	adjustDivHeight2("#slide1", results_count, 290,3);

}
/*
function countByClass(id) {
	sum = 0;
	for (var n=0; n < array_len; n++) {
		if (document.getElementsByClassName(id)[n].style.display === "block") {
			sum++;
		}
	}
	return sum;
}*/

function adjustDivHeight(id, num, x,i) {
	if (num === 0) {
		$(id).height(0);
	} else {
		$(id).height(parseInt((num+2)/i)*x);
	}
}

function adjustDivHeight2(id, num, x,i) {
	if (num === 0) {
		$(id).height(172);
	} else {
		$(id).height(180+(parseInt((num+2)/i)*x));
	}
}