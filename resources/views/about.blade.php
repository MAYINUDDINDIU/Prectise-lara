<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>About page here</h2>
    {{URL::current()}}

    
    <a href="{{URL::to('/about')}}">About us</a>
     <a href="{{URL::to('/contact')}}">Contact us</a>

     
</body>
</html>