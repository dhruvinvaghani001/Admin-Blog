@extends('backend.common.side-nav')
@section('content')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4 display-4">Add post</h1>
                        <ol class="breadcrumb mb-4 my-5">
                            <a href="{{ url('admin/post') }}"><button class="btn btn-success font-weight-bold">All Data</button></a>
                        </ol>
                    </div>
                    <div class="main">
                    <div class="card-body addcategoryform" >
                        <div class="table-responsive">
                            <form method="POST" action="{{ url('admin/post') }}" enctype="multipart/form-data" class="mx-2">
                                @csrf
                                <div class="form-group my-0">
                                  <label for="exampleInputEmail1" class="my-1 text-lg">Category</label>
                                  <select class="form-control" name="category">
                                        @foreach ($cats as $cat )
                                            <option value="{{ $cat->id }}" >{{ $cat->title }}</option>
                                        @endforeach
                                  </select>
                                </div>

                                <div class="form-group my-0 my-2">
                                    <label for="exampleInputEmail1" class="my-1 font-weight-bold">Title</label>
                                    <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp"  placeholder="Title of Category">
                                  </div>
                                  @error('title')
                                    <div class="text text-danger my-0">{{ $message }}</div>
                                  @enderror

                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1 font-weight-bold">Post Details</label>
                                    <textarea class="form-control" name ="detail" id="exampleFormControlTextarea1" rows="3"></textarea>
                                  </div>

                                @error('details')
                                  <div class="text text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group my-0 my-2">
                                    <label for="exampleInputEmail1" class="my-1 font-weight-bold">Tags</label>
                                    <input type="text" class="form-control" name="tags" id="exampleInputEmail1" aria-describedby="emailHelp"  placeholder="tags of posts">
                                  </div>
                                  @error('tags')
                                    <div class="text text-danger my-0">{{ $message }}</div>
                                  @enderror

                                <div class="form-group my-2">
                                    <label for="exampleInputPassword1" class="my-1 font-weight-bold">Choose Iamge</label>
                                    <input type="file" name="image" class="form-control" id="exampleInputPassword1" placeholder="Description Of Category">
                                  </div>
                                  @error('image')
                                  <div class="text text-danger">{{ $message }}</div>
                                @enderror
                                <div class="">

                                    <button type="submit" class="btn btn-primary my-3 font-weight-bold">Add post</button>
                                </div>
                              </form>
                        </div>
                    </div>
                </div>
                </main>
            </div>
        </div>
@endsection


