<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<form action="/updatecontact/{{ $enquiry->id }}" method="post">
    @csrf
    @method("put")
    name<input type="text" name="name" id="" value="{{$enquiry->name }}" >
    <br>
    email<input type="text" name="email" id=""  value="{{$enquiry->email }}" ><br>
    phone<input type="number" name="phone" id="" value="{{$enquiry->phone }}" ><br>
    message<textarea name="message" id="" cols="30" rows="10" value="{{$enquiry->message}}" ></textarea>
    <input type="submit" value="send message">
</form>
   
</body>
</html>