@extends('layout')

@section('content')
    <!-- Hover table card start -->
    <div class="card">
                                            <div class="card-header">
                                                <h5>Tabel Data Articles</h5>
                                               
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
                              <form action="{{ url('cari') }}" class="form-material" method="GET">
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
                                                                <th>Categroy ID</th>
                                                                <th>Image Thumbnail</th>
                                                                <th>Slug</th>
                                                                <th>Title english</th>
                                                                <th>Title indonesia</th>
                                                                <th>Content English</th>
                                                                <th>Content Indonesia</th>
                                                                <th>Is Highlight</th>
                                                                <th>Created By</th>
                                                                <th>Created At</th>
                                                                <th>Updated At</th>
                                                                <th colspan="2">Actions</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($article as $data)
                                                            <tr>
                                                                <th scope="row">{{ $data->id}}</th>
                                                                <td>{{ $data->category_id}}</td>
                                                                <td>{{ $data->image_thumbnail}}</td>
                                                                <td>{{ $data->slug}}</td>
                                                                <td>{{ $data->title_en}}</td>
                                                                <td>{{ $data->title_idn}}</td>
                                                                <td>{{ $data->content_en}}</td>
                                                                <td>{{ $data->content_idn}}</td>
                                                                <td>{{ $data->is_highlight}}</td> 
                                                                <td>{{ $data->created_by}}</td>                                               
                                                                <td> {{ $data->created_at}} </td>
                                                                <td> {{ $data->updated_at}} </td>
                                                                <td> <a href="{{ route('Article.edit', $data->id)}}" class="btn btn-primary"> Edit</a></td>
                                                                <td> <form action="{{ route('Article.destroy', $data->id)}}" method="post">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-danger" type="submit"> DELETE </button>
                                                                </form>
                                                                </td>
                                                            </tr>
                                                            
                                                            
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                    <h6>Jumlah Data : {{ $article->total()}} </h6>
                                                    {{  $article->links() }}
                                                </div>
                                            </div>
                                        </div>
</div>

@endsection