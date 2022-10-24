<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="{{'insert'}}" method="POST">
        @csrf
        <input type="text" name="name" placeholder=" Enter a promotion ">
        <input type="submit" value="ADD">
    </form>
    <!-- <div>
        @foreach($data as $value)
            <div class="">
                <h3 class="card-title">{{$value->name}}</h3>
            </div>
        @endforeach
        
    </div> -->
    <table>
            <thead>
                <th>Name</th>
                <th>Action</th>
            </thead>
            <tbody>
            @foreach ($data as $value)
                <tr>
                    <td>{{$value->id}}</td>
                    <td>{{$value->name}} </td>
                    <td>
                        <a href="{{url ('edit')}}/{{$value->id}}">Edit</a>
                        <!-- <a href="{{ url('/test', ['id' => $value->id]) }}">
            <button class="btn btn-default">
            Delete
            </button>
          </a> -->

                    </td>

                </tr>
            @endforeach
                
            </tbody>
    </table>

</body>
</html>