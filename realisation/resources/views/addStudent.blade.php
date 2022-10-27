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

    <br>
     
    <input type="text" id="searchApprentice" placeholder="Search apprentice">


    <script src="/apprentices.js"></script>

</body>
</html>