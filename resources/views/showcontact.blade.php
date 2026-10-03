@extends("layouts.dashboard")
    @section("content")

    @foreach($data as $enq)
    <div>name:{{$enq->name}}</div>
    
    <div>email:{{$enq->email}}</div>
    
    <div>phone:{{$enq->phone}}</div>
 
    <div>message:{{$enq->message}}</div>
    <br>

    <div>
        <form action="/admin/deletecontact/{{ $enq->id }}" method="post">
            @csrf
            @method("delete")
            <input type="submit" value="remove">
        </form>
 </div>
    <a href="/editcontact/{{ $enq->id }}">edit</a>
    <br>  
 @endforeach
    @endsection
