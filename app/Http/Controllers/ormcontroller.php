<?php

namespace App\Http\Controllers;

use App\Models\apprentice;
use App\Models\area;
use App\Models\computer;
use App\Models\course;
use App\Models\teacher;
use App\Models\training_center;
use Illuminate\Http\Request;

class ormcontroller extends Controller
{
   public function consultas()
    {
    //consultas de la tabla apprentice
       
        // $apprentices = apprentice::find(1);
        // return $apprentices->computer;

        // $apprentice = apprentice::find(1);
        // return $apprentice->courses;
    ////////////////////////////////////////////
    //consultas de la tabla area
      
        // $area = area::find(1);
        //return $area->teacher;

        // $area = area::find(1);
        // return $area->course;
    ///////////////////////////////////////
    
    //consulta de la tabla computer
     
         //$computer = computer::find(4);
         //return $computer->apprentice;
    //////////////////////////////////////
    //consultas de la tabla course

        //$course = course::find(1);
        //return $course->area;

        //  $course = course::find(1);
        //return $course->teachers;

       // $course = course::find(1);
       // return $course->apprentices;

        //$course = course::find(1);
        //return $course->training_center;
        ////////////////////////////////////////

    //consultas de la tabla teacher
         //$teacher = teacher::find(2);
         //return $teacher->area;

         //$teacher = teacher::find(3);
         //return $teacher->training_center;

         //$teacher = teacher::find(3);
         //return $teacher->courses;
        ////////////////////////////////////////

    //consultas de la tabla training_center
         //$training_center = training_center::find(1);
         //return $training_center->teacher;

         //$training_center = training_center::find(1);
         //return $training_center->courses;
    }


}
