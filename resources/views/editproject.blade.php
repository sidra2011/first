
    @extends("layouts.dashboard")
    @section ("content")
<form action="/updateproject/{{ $project->id }}" method="POST">
    @csrf
    @method("put")
    title<input type="text" name="title" id="" value="{{$project->title  }}">
    <br>
    description<input type="text" name="description" id="" value="{{ $project->description }}">
    <br>
    url<input type="text" name="url" id="" value="{{ $project->url }}">
<br>
tech_used<input type="text" name="tech_used" id="" value="{{ $project->tech_used }}">
<br>
<input type="submit" value="editproject">
</form>

    @endsection
    