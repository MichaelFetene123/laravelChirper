<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ninja Network | Home </title>
</head>
<body>
    <h2> Currently Available Ninjas </h2>

    @if( $greeting  == 'Hello' )
    <p>Hi from inside the if statement </p>
    @endif

    <ul>
    @foreach ($ninjas  as $ninja)
        <li>
            {{ $ninja['name'] }}   
            <a href="/ninjas/{{ $ninja['id'] }}">View Detail</a>  
             
        </li>
    @endforeach
    </ul>
</body>
</html>