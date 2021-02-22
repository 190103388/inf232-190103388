<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    //
    public function get_name(){
        static $students = array("0" => "Arsen", "1" => "Alikhan", "2" => "Kenzhatai","3" => "Balapan");
         
         return $students;
    }

    public function get_date($id){
        static $students = array("0" => "01/04/2002", "1" => "12/11/1998", "2" => "21/03/2000","3" => "19/11/2005");
         
        return $students[$id];
    }

    public function get_age($id){
        static $students = array("0" => "18", "1" => "22", "2" => "20","3" => "15");
        return $students[$id];
    }

     public function show($id){
        $name = $this -> get_name();
        $date = $this ->get_date($id);
        $age = $this -> get_age($id);

        return view('lab5', ['name' => $name[$id]], compact('age'))-> with('date',$date);
    }

}


?>