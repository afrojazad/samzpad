<?php 
namespace App\Controllers;
use App\Configs\Controller;
class Home_Controller extends Controller{
    public function __construct()
    {
        // echo "Hello from New Home Controller<hr>";
    }

    public function index()
    {
        return 'This is index Method from Home<hr>';
    }
    public function about()
    {
        return 'This is about Method from Home<hr>';
    }
    public function test()
    {
        return 'This is test Method from Home<hr>';
    }
}
