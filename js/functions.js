function createTest(){

	alert('Hello!');

}

function hideRules(){
	//alert('hideRules!');
	var rules = document.getElementById("rules");
	var button = document.getElementById("button_hide_rules");
	var test = document.getElementById("test");
	
	if (rules.style.display == "none")
		{
			//alert('block!');
			rules.style.display = "block"
			button.innerHTML = "Скрыть правила"
		}
	else
		{
			//alert('none!');
			rules.style.display = "none"
			button.style.display = "none";
			test.style.display = "block";
		}

	
	
	
}