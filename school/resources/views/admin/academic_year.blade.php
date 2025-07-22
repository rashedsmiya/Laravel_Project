@extends('admin.layout') 
@section('content')


<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<h1>General Form</h1>
</div>
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
<li class="breadcrumb-item active">Academic Year</li>
</ol>
</div>
</div>
</div>
</section>

<section class="content">
<div class="container-fluid">
<div class="row">

<div class="col-md-12">

<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Add Academic Year</h3>
</div>


<form action="" method="post">
<div class="card-body">
<div class="form-group">
Academic Year<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
</div> 
</div>

<div class="card-footer">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</div>
 
 

</div>


</div>

</div>
</section>

</div>

@endsection
 