<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>Inner Page</h1>
                <a href="{{ route('dashboard') }}" class="btn btn-danger">Back to Dashboard</a>
                <a href="{{route('logout')}}" class="btn btn-danger">Logout</a> 
            </div>
        </div>
    </div>
</body>
</html>