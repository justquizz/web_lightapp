function createTest(){

	alert('Hello!');

}

/*
* Функция скрывает правила создания тестов
*/
function hideRules(){
	//alert('hideRules!');
	var rules = document.getElementById("rules");
	var button = document.getElementById("button_hide_rules");
	var test = document.getElementById("test");
	
	if (rules.style.display != "none"){	
			rules.style.display = "none"
			button.style.display = "none";
			test.style.display = "block";
	}
}



function addQuestion(){
	
	
}