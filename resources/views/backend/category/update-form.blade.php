
@extends('backend.common.side-nav')
@section('content')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4 display-4">Edit category</h1>
                        <ol class="breadcrumb mb-4 my-5">
                            <a href="{{ url('admin/category') }}"><button class="btn btn-success">All Data</button></a>
                        </ol>
                    </div>
                    <div class="main">
                    <div class="card-body addcategoryform" >
                        <div class="table-responsive">
                            <form method="POST" action="{{  url('admin/category/')}}/{{ $cat->id }}" enctype="multipart/form-data" class="mx-2">
                                @csrf
                                @method('PUT')
                                <div class="form-group my-0">
                                  <label for="exampleInputEmail1" class="my-1">Title</label>
                                  <input type="text" class="form-control" name="title" id="exampleInputEmail1" value="{{ $cat->title }}" aria-describedby="emailHelp"  placeholder="Title of Category">

                                </div>
                                <div class="form-group my-4">
                                  <label for="exampleInputPassword1" class="my-1">Details</label>
                                  <input type="text" name="detail" class="form-control" id="exampleInputPassword1" value="{{ $cat->detail }}" placeholder="Description Of Category">
                                </div>
                                <td><img src="{{ url('public/image/'.$cat->image) }}"
                                    style="height: 100px; width: 150px;"></td>
                                <div class="form-group my-2">
                                    <label for="exampleInputPassword1" class="my-1">Choose Iamge</label>
                                    <input type="file" name="image" class="form-control" id="exampleInputPassword1" placeholder="Description Of Category">
                                  </div>
                                  @error('image')
                                  <div class="text text-danger">{{ $message }}</div>
                                @enderror
                                <div class="">

                                    <button type="submit" class="btn btn-primary ">Edit Category</button>
                                </div>
                              </form>
                        </div>
                    </div>
                </div>
                </main>
            </div>
        </div>
@endsection



