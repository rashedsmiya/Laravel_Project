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
            <div class="col-6 md-3">
                <h1>Welcome {{Auth::user()->name}}</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <a href="{{ rounte('inner') }}" class="btn btn-danger">Go to Inner Page</a>
                <a href="{{ rounte('logout') }}" class="btn btn-danger">Logout</a>
            </div>
        </div>
    </div>

</body>
</html>