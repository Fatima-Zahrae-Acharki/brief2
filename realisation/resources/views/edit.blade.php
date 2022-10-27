
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@foreach($promotion as $row)
<form action="{{url('update')}}/{{$row->id}}" method="POST">
        @csrf
        <input type="text" name="name" value="{{$row->name}}" >
        <button>submit</button>
    </form>
@endforeach

</body>
</html>