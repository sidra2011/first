<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/logincheck" method="post">
        @csrf
email<input type="email" name="email">
password<input type="password" name="password">
    </form>
</body>
</html>