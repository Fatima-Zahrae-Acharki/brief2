<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <form action="{{'insert'}}" method="POST">
        @csrf
        <input type="text" name="name" placeholder=" enter a promotion ">
        <input type="submit" value="ADD">
    </form>
    <div>
        @foreach($data as $value)
            <div class="">
                <h3 class="card-title">{{$value->name}}</h3>
            </div>
        @endforeach
        
    </div>
</body>
</html>