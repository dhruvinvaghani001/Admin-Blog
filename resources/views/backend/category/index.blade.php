
@extends('backend.common.side-nav')
@section('content')~
            <div id="layoutSidenav_content">
                <main>
                    @if (session('status1'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Success!</strong>  {{ session('status1') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    @if (session('status2'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Danger!</strong>  {{ session('status2') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Category List
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <a href="{{ url('admin/category/create') }}"><button class="btn btn-success my-3">Add Category</button></a>
                                </thead>

                                <thead>
                                    <tr>
                                        <th>Sr no.</th>
                                        <th>Category title</th>

                                        <th>Category Content</th>
                                        <th>Iamge</th>

                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>

                                <tfoot>
                                    <tr>
                                        <th>Sr no.</th>
                                        <th>Category title</th>
                                        <th>Category Content</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($data as $data )
                                        <tr>
                                            <td>{{ $data->id}}</td>
                                            <td>{{ $data->title }} </td>
                                            <td>{{ $data->detail }}</td>
                                            <td><img src="{{ url('public/image/'.$data->image) }}"
                                                style="height: 100px; width: 150px;"></td>
                                            <td class=""><a href="category/{{ $data->id }}/edit" class="btn btn-primary">Edit</a></td>
                                           <td><a href="category/{{ $data->id }}/delete" class="btn btn-danger">Delete</a></td>


                                            {{-- <td ><a  href="category/{{ $data->id }}/delete" type="button"  class="btn btn-primary waves-effect waves-light" id="sa-warning">Click me</a></td> --}}

                                        </tr>
                                     @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </main>
            </div>
        </div>
@endsection
