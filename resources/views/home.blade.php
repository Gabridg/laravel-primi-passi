<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <ul>
            <li>
              <a href="{{route('products')}}"></a>  
              <a href="{{route('about')}}"></a>  
            </li>
        </ul>
    </header>
    <h2>CIAO MONDO !!</h2>
    <ul>
        @foreach($crew as $crew_member)
        <li> {{$crew_member}}</li>
        @endforeach
    </ul>
</body>
</html>