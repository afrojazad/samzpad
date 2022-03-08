<?php 
namespace App\Configs;
class Controller{
	public $base_url = 'My MVC';
	public $root_dir;
	public function __construct()
    {
		$this->root_dir = dirname(__DIR__);
    }
	public function segment($uri){
		$url = isset($_SERVER['PATH_INFO']) ? explode('/', ltrim($_SERVER['PATH_INFO'],'/')) : '/';
		echo $url[$uri];
	}
	public function view($file=False, $data=False){
		// echo "my view";
		$template = 'theme';
		$template_part = $this->template_part($template);		
		$content_part = $this->content_part($file, $data);			
		return str_replace("{{content}}", $content_part, $template_part);
	}
	protected function template_part($template=False)
	{
		ob_start();
		//theme
		$template = 'templates/templates';
		require_once $this->root_dir."Views/".$template.".php";		
		return ob_get_clean();
	}
	protected function content_part($file=False, $data=False)
	{
		ob_start();
		require_once $this->root_dir."Views/".$file.".php";
		return ob_get_clean();
	}
	public function model($my_model){
		// echo "This is my model";
		$modelPath = __DIR__.'/../Models/'.$my_model.'_model.php';
		if (file_exists($modelPath))
	        {
				require_once($modelPath);
				return $myModel = New $my_model();
			} else {
				header('HTTP/1.1 404 Not Found');
            	die('404 - The '.$my_model.'_model.php model not found');
			}
	}
	
}