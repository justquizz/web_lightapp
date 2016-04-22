<?php
/*
 * 
 * 
 */



// if $view not isset - make it = 'index'
$view = empty($_GET['view']) ? 'index' : $_GET['view'];





switch($view){
	
	case('index'):
            $view = 'index';

	break;
	
	case('just_quizz'):
            $view = 'justquizz';
	break;
    
        case('contacts'):
            $view = 'contacts';       

	break;
	
}

$description = 'Быстрые и легкие приложения для повседневной жизни';
$keywords = 'android app software';
$title = 'Welcome!';

// Load template page
include_once 'template.php';
