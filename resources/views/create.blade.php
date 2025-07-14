<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Department</title>
</head>

<body>
    <form action="/store" method="POST">
        @csrf
        <label for="">Name</label>
        <input type="text" name="name">
        <br><br>
        <label for="">Description</label>
        <input type="text" name="description">
        <br><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>
