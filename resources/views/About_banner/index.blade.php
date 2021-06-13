@extends('layout')

@section('content')
    <!-- Hover table card start -->
    <div class="card">
                                            <div class="card-header">
                                                <h5>Tabel Data About Banners</h5>
                                               
                                                <div class="card-header-right">
                                                    <ul class="list-unstyled card-option">
                                                        <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                        <li><i class="fa fa-window-maximize full-card"></i></li>
                                                        <li><i class="fa fa-minus minimize-card"></i></li>
                                                        <li><i class="fa fa-refresh reload-card"></i></li>
                                                        <li><i class="fa fa-trash close-card"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="p-15 p-b-0">
                              <form class="form-material">
                                  <div class="form-group form-primary">
                                      <input type="text" name="footer-email" class="form-control" required="">
                                      <span class="form-bar"></span>
                                      <label class="float-label"><i class="fa fa-search m-r-10"></i>Search Data</label>
                                  </div>
                              </form>
                          </div>
                                            </div>
                                            <div class="card-block table-border-style">
                                                <div class="table-responsive">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Image Logo</th>
                                                                <th>Title English</th>
                                                                <th>Title Indonesia</th>
                                                                <th>Image Background</th>
                                                                <th>Image Float Item 1</th>
                                                                <th>Image Float Item 2</th>
                                                                <th>Image Float Item 3</th>
                                                                <th>Image Float Item 4</th>
                                                                <th>Create At </th>
                                                                <th>Updated At </th>
                                                                <th colspan="2">Actions</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($aboutbanner as $data)
                                                            <tr>
                                                                <th scope="row">{{ $data->id}}</th>
                                                                <td>{{ $data->image_logo}}</td>
                                                                <td>{{ $data->title_en}}</td>
                                                                <td>{{ $data->title_idn}}</td>
                                                                <td>{{ $data->image_background}} </td>
                                                                <td> {{ $data->image_float_item1}} </td>
                                                                <td> {{ $data->image_float_item2}} </td>
                                                                <td> {{ $data->image_float_item3}} </td>
                                                                <td> {{ $data->image_float_item4}} </td>
                                                                <td> {{ $data->created_at}} </td>
                                                                <td> {{ $data->updated_at}} </td>
                                                                <td> <a href="{{ route('AboutBanner.edit', $data->id)}}" class="btn btn-primary"> Edit</a></td>
                                                                <td> <form action="{{ route('AboutBanner.destroy', $data->id)}}" method="post">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-danger" type="submit"> DELETE </button>
                                                                </form>
                                                            </tr>
                                                            
                                                            
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                    <h6>Jumlah Data : {{ $aboutbanner->total()}} </h6>
                                                    {{  $aboutbanner->links() }}
                                                </div>
                                            </div>
                                        </div>
</div>

@endsection