<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <x-header/>
    <!-- <h2>User Page {{count($names)}} </h2> -->
    @foreach($names as $name)
    <h2>{{$name}}</h2>
    @endforeach


    @include('about')

    <script>
        var hello=@json($names);
        console.log(hello);
    </script>
    
</body>
</html>