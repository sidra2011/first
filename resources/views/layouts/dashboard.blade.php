<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


</head>
<body>
    <div class="dashboard">

        <div class="sidebar">
            <div><a href="/admin/dashboard">dashboard</a></div>
            <br>
              <div><a href="/admin/projects/">projects</a></div>
              <div><a href="/admin/contact/">contact</a></div>
        </div>

<div class="contentarea">
    @yield("content")
</div>

    </div>
</body>
</html>