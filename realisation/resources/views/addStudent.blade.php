<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Add Apprenticies</h2>
    <form action="" method="POST">
        @csrf
        <input type="text" name="first_name" placeholder=" First name ">
        <input type="text" name="last_name" placeholder=" Last name ">
        <input type="text" name="email" placeholder=" Email ">
        <input type="submit" value="ADD">
    </form>
    <br>
<h2>Apprenticies</h2>
    <div id="students" >
    <table>
            <thead>
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Action</th>
            </thead>
            <tbody>
            @foreach ($data as $value)
                <tr>
                    <td>{{$value->id}}</td>
                    <td>{{$value->first_name}}</td>
                    <td>{{$value->last_name}}</td>
                    <td>{{$value->email}}</td>
                    <td>
                        <a href="">Edit</a>
                        <a href="">Delete</a>
                    </td>
                </tr>
            @endforeach   
            </tbody>
    </table>
    </div>
    <br>
     
    <input type="text" id="searchApprentice" placeholder="Search apprentice">


    <script src="/apprentices.js"></script>

</body>
</html>