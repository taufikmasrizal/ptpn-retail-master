@extends('layout')

@section('content')
<div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Form Edit About Banners</h4>
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
<form action="{{ route('AboutBanner.update', $aboutbanner->id ) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                      <p class="card-description"> About Banners </p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Image Logo</label>
                            <div class="col-sm-9">
                              <input type="file" name="image_logo" id="image_logo" class="form-control" value="{{ $aboutbanner->image_logo }}" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Image Float Item 1</label>
                            <div class="col-sm-9">
                              <input type="file" name="image_float_item1" id="image_float_item1" class="form-control" value="{{ $aboutbanner->image_float_item1 }}" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                      <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Title IDN</label>
                            <div class="col-sm-9">
                              <input type="text" name="title_idn" id="title_idn" class="form-control" value="{{ $aboutbanner->title_idn }}" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Image Float item 3</label>
                            <div class="col-sm-9">
                              <input type="file" name="image_float_item3" id="image_float_item" class="form-control" value="{{ $aboutbanner->image_float_item3 }}" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                      <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Title EN</label>
                            <div class="col-sm-9">
                              <input type="text" name="title_en" class="form-control" value="{{ $aboutbanner->title_en }}" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Image Float Item 2</label>
                            <div class="col-sm-9">
                              <input type="file" name="image_float_item2" class="form-control" value="{{ $aboutbanner->image_float_item2 }}" />
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <div class="row">
                      <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Image Background</label>
                            <div class="col-sm-9">
                              <input type="file" name="image_background"  class="form-control" value="{{ $aboutbanner->image_background }}" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Image Float Item 4</label>
                            <div class="col-sm-9">
                              <input type="file" name="image_float_item4" value="{{ $aboutbanner->image_float_item4 }}" class="form-control" />
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