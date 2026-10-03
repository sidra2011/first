
  @extends("layouts.dashboard")
    @section ("content")
    <div>total projects:{{ $data["projects"] }}</div>
    <div>total enquiries:{{ $data["enquiries"] }}</div>
 @endsection