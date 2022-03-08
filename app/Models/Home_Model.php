<?php
namespace App\Models;
use App\Configs\Model;
class Home_Model extends Model{
    
    function __construct()
    {
        // $this->db();
        // echo "This is Model<hr>";
    }
    public function index()
    {
        $all = $this->all('users'); //Parametar for table name
        // foreach($all as $row){
        //     echo "<div><td>".$row["id"]."</td><td>".$row["name"]." ".$row["email"]."</td></div>";
        // }
        return $all;
    }
    public function selected()
    {
        $all = $this->all('users', 'id,fname,email,user_type'); //table, select field
        
        return $all;
    }
    public static function seo()
    {
        $data = ['mabc', 'mdef', 'mghi'];
        return $data;
    }
}