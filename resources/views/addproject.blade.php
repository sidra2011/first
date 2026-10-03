
    @extends("layouts.dashboard")
    @section ("content")
<form action="/admin/saveproject " method="POST">
    @csrf
    title<input type="text" name="title" id="">
    <br>
    description<input type="text" name="description" id="">
    <br>
    url<input type="text" name="url" id="">
<br>
tech_used<input type="text" name="tech_used" id="">
<br>
<input type="submit" value="addnewproject">
</form>

    @endsection
