@extends('layout')

@section('content')
<div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Form Edit About Our Values</h4>
                    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('About_our_value.update', $about_our_values->id ) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                      <p class="card-description"> About Banners </p>
                    
                      <div class="row">
                      <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Content English</label>
                            <div class="col-sm-9">
                              <input type="text" name="content_en" class="form-control" value="{{ $about_our_values->content_en }}" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Content Indonesia</label>
                            <div class="col-sm-9">
                              <input type="text" name="content_idn" class="form-control" value="{{ $about_our_values->content_idn }}" />
                            </div>
                          </div>
                        </div>
                        
                      
                        
                        <div class="form-group" style="margin-top: 24px;">
              <input type="submit" class="btn btn-primary" value="Submit">
            </div>
                      </div>
                      </div>
                    </form>
                    
                  </div>
                </div>
              </div>
	</div>
    @endsection