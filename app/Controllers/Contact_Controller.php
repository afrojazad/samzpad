<?php 
namespace App\Controllers;
use App\Configs\Controller;

class Contact_Controller extends Controller{
    public function __construct()
    {
        echo "Hello from Contact_Controller<hr>";
    }

    public function index()
    {
        return 'This is index Method from Contact<hr>';
    }
    public function about()
    {
        return 'This is about Method from Contact<hr>';
    }
    public function test()
    {
        return 'This is test Method from Contact<hr>';
    }
}
