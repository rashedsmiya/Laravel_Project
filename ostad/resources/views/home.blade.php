<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
</head>
<body>
     
     
     <ul>
         <li>Home</li>
         @auth 
            <li>LogOut</li>
         @endauth
         @guest
            <li>Login</li>
            <li>Register</li>   
            @endguest     
     </ul>

    
</body>
</html>