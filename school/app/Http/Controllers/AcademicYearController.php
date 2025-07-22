<?php

namespace App\Http\Controllers;

use App\Models\AcademicYear;
use Illuminate\Http\Request;
use App\Models\Model;
 
use App\Models\AcademicYear as ModelsAcademicYear;
class AcademicYearController extends Model
{
    public function index(){
        return view('admin.academic_year');
    }
}
