
@extends('backend.common.side-nav')
@section('content')
            <div id="layoutSidenav_content">
                <main>
                    @if (session('status1'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>success!</strong>  {{ session('status1') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    @if (session('status2'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>danger!</strong>  {{ session('status2') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            posts List
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <a href="{{ url('admin/post/create') }}"><button class="btn btn-success my-3">Add post</button></a>
                                </thead>

                                <thead>
                                    <tr>
                                        <th>Sr no.</th>
                                        <th>post title</th>
                                        <th>post tags</th>
                                        <th>post Category</th>
                                        <th>Image</th>
                                        <th>Edit</th>
                                        <th>Delete</th>

                                    </tr>
                                </thead>


                                <tbody>
                                    @foreach ($data as $data )
                                        <tr>
                                            <td>{{ $data->id}}</td>
                                            <td>{{ $data->title }} </td>
                                            <td>{{ $data->tags }}</td>
                                            <td value="{{ $data->category_id }}">{{ $cat->find($data->category_id)->title }}</td>
                                            <td><img src="{{ url('public/post-image/'.$data->fullimage) }}"
                                                style="height: 100px; width: 150px;"></td>
                                            <td class=""><a href="post/{{ $data->id }}/edit" class="btn btn-primary">Edit</a></td>
                                            <td ><a href="post/{{ $data->id }}/delete" class="btn btn-danger">Delete</a></td>
                                        </tr>
                                     @endforeach

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Sr no.</th>
                                        <th>Category title</th>
                                        <th>Category Content</th>
                                        <th>Action</th>
                                        <th></th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </main>
            </div>
        </div>
@endsection
