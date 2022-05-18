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
                    <div class="container-fluid px-4">
                        <h1 class="mt-4 display-4">Manage Setting</h1>
                        {{-- <ol class="breadcrumb mb-4 my-5">
                            <a href="{{ url('admin/post') }}"><button class="btn btn-success font-weight-bold">All Data</button></a>
                        </ol> --}}
                    </div>
                    <div class="main my-5">
                    <div class="card-body addcategoryform" >
                        <div class="table-responsive">
                            <form method="POST" action="{{ url('admin/setting-form-post') }}" enctype="multipart/form-data" class="mx-2">
                                @csrf
                                <table class="table table-bordered w-100">
                                    <tr>
                                        <th colspan="3">
                                            Manage Setting
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>Comment Auto Aprrove</th>
                                        <td><input @if ($setting) value="{{ $setting->comment_auto }}" @endif type="text" name="comment_auto" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <th>User Auto Aprrove</th>
                                        <td><input @if ($setting) value="{{ $setting->user_auto }}" @endif type="text" name="user_auto" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <th>Recent Post limit</th>
                                        <td><input @if ($setting) value="{{ $setting->recent_post_limit }}" @endif type="text" name="recent_post_limit" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <th>popular post limit</th>
                                        <td><input @if ($setting) value="{{ $setting->popular_post_limit }}" @endif type="text" name="popular_post_limit" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <th>Recent comment limit</th>
                                        <td><input @if ($setting) value="{{ $setting->comment_limit }}" @endif type="text" name="comment_limit" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <input type="submit" name="" id="" class="btn btn-primary">
                                        </td>
                                    </tr>
                                </table>
                              </form>
                        </div>
                    </div>
                </div>
                </main>
            </div>
        </div>
@endsection


