<?php

namespace App\Http\Controllers;

use App\Models\AcademicYear;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
class AcademicYearController extends Model
{
    public function index(){
        return view('admin.academic_year');
    }
}
