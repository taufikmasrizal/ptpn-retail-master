@extends('layout')

@section('content')
<div class="card uper">
  <div class="card-header">
    Form About Our values
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
    <form action="{{ route('About_our_value.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
              <label for="title english">Content Indonesia :</label>
              <textarea class="form-control" style="height:150px" name="content_idn" placeholder="Content Indonesia"></textarea>
          </div>
          <div class="form-group">
              <label for="title english">Content Indonesia :</label>
              <textarea class="form-control" style="height:150px" name="content_idn" placeholder="Content English"></textarea>
          </div>
          
          <button type="submit" class="btn btn-primary">Add Data</button>
      </form>
  </div>
</div>
    @endsection