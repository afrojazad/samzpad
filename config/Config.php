<?php 
	namespace App\Controllers;
	use App\Controllers\Home_Controller;

	$url = isset($_SERVER['PATH_INFO']) ? explode('/', ltrim($_SERVER['PATH_INFO'],'/')) : '/';
	
    $indexController = New Home_Controller();
    if ($url == '/')
    {    	
    	print $indexController->index();
    }else{
    	//The first element should be a controller
        $requestedController = $url[0]; 
        // If a second part is added in the URI, 
        // it should be a method
        $requestedAction = isset($url[1])? $url[1] :'';
        if(method_exists($indexController, $requestedController)){
        	print $indexController->$requestedController();
        } else {
			// Process Class Name
			$requestedController = strtolower($requestedController);
			$ctrl = ucfirst($requestedController)."_Controller";
			// Test
			// echo "Other Controller = $requestedController  method - $requestedAction<hr>";
			// print($ctrl);
			// echo "<hr>";
			
			if(property_exists("\\App\Controllers\\".$ctrl, "base_url")){				
				$setCtrl = "\\App\Controllers\\".$ctrl;
				$myController = new $setCtrl;
	        	//if have method
	        	if(method_exists($myController, $requestedAction)){
		        	print $myController->$requestedAction();
		        }
		        else{					
		        	print $myController->index();
		        }
			} else {
				header('HTTP/1.1 404 Not Found');
            	die('404 - The page not found');
			}
        }  
    }