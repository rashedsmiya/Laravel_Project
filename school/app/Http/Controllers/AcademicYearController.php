<?php

namespace App\Http\Controllers;

use App\Models\AcademicYear;
use Illuminate\Http\Request;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
=======
use App\Models\Model;
 
use App\Models\AcademicYear as ModelsAcademicYear;
>>>>>>> 35e56007ded3b65eff3118c82182e6babf530427
class AcademicYearController extends Model
{
    public function index(){
        return view('admin.academic_year');
    }
}
