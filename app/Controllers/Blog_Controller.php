<?php 
namespace App\Controllers;
use App\Configs\Controller as Controller;
use App\Models\Home_Model;

class Blog_Controller extends Controller{
    public function __construct()
    {
        // echo "Hello from Blog_Model<hr>";
        // print($this->base_url);
    }

    public function index()
    {
        
        var_dump(Home_Model::seo());
        $home_model = new Home_Model;
        var_dump($home_model->seo());
        return 'This is index Method from Blog<hr>';
    }
    public function about()
    {
        $home_model = new Home_Model;
        $data['user'] = $home_model->all('users');	
        // $data['container'] = 'contact';
        return $this->view('contact', $data);
        //return 'This is about Method from Blog<hr>';
    }
    public function test()
    {
        return 'This is test Method from Blog<hr>';
    }
}
