<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
</head>
<body>
    
    {{-- @switch($user)
        @case('Admin')
                <h1>Welcome {{$user}}</h1>
            @break 
        @case('Editor')
                <h1>You are {{ $user }}</h1>
            @break
        @default
        <h1>You are Guest</h1>
    @endswitch --}}

    {{-- @for ($i = 0; $i <=5; $i++)
        <h1>This post number {{ $i }}</h1>  
    @endfor --}}

    @php 

        $i = 1;

    @endphp

    @while ($i <= 5)
            <h1>This post number {{ $i }}</h1>  
            @php $i++; @endphp
    @endwhile
    
</body>
</html>