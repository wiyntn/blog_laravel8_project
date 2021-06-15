<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   <h1> hello {{$name}}</h1>

   {{7+7}} 
   <br>

   @if(7==7)
       {{"true"}}
   
   @else
       {{"false"}}
   
   @endif


   @for($i=0; $i<=7; $i++)
    <p>{{$i}}</p>
    @endfor


    <ul>
       @foreach($student as $key => $value)
       <li>{{$key}}: {{$value}}</li>
    </ul>
    
</body>
</html>