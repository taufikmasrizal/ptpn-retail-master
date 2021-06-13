@extends('layout')

@section('content')
<div class="card uper">
  <div class="card-header">
    Form About Contact
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
    <form action="{{ route('About_contact.store') }}" method="POST" enctype="multipart/form-data">
          <div class="form-group">
              @csrf
              <label for="content_en">Content English :</label>
              <input type="text" class="form-control" name="content_en"/>
          </div>
          <div class="form-group">
              <label for="symptoms">Content Indonesia :</label>
              <input type="text" class="form-control" name="content_idn">
          </div>
          <div class="form-group">
              <label for="cases">Link :</label>
              <input type="text" class="form-control" name="link"/>
          </div>
          <button type="submit" class="btn btn-primary">Add Data</button>
      </form>
  </div>
</div>
    @endsection