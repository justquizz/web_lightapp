function createTest(){

	alert('Hello!');

}

function hideRules(){
	//alert('hideRules!');
	var rules = document.getElementById("rules");
	
	if (rules.style.display == "none")
		{rules.style.display = "block"}
	else
		{rules.style.display = "none"}

}