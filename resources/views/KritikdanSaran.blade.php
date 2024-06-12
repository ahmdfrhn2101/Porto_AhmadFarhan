@extends('Layouts.main')

@section('container')
<h1>Kritik dan Saran</h1>
<form action="{{route('kritik.send')}}" method="post">
  @csrf
  @method('POST')
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Email</label>
    <input type="email" name="Email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Kritik</label>
    <textarea  name="Kritik" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>

  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Saran</label>
    <textarea name="Saran" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <button type="submit">Submit</button>
</form>
@endsection