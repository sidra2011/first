
    @extends("layouts.dashboard")
    @section("content")
    <a href="/admin/addprojects">add new project</a>

    @foreach($tabledata as $prj)
    <div>title:{{$prj->title}}</div>
    
    <div>description:{{$prj->description}}</div>
    
    <div>url:{{$prj->url}}</div>
 
    <div>tech_used:{{$prj->tech_used}}</div>
    <br>

    <div>
        <form action="/admin/deleteproject/{{ $prj->id }}" method="post">
            @csrf
            @method("delete")
            <input type="submit" value="remove">
        </form>
 </div>
    <a href="/editproject/{{ $prj->id }}">edit</a>
    <br>
    @endforeach
    @endsection
