<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login -  Admin</title>
        <link href="{{ asset('backend/asset/css/styles.css') }}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        @if (session('status2'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>danger!</strong>  {{ session('status2') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                 </button>
            </div>
        @endif

        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">


                                        <form method="post" action="{{ route('submit.login') }}">
                                            @csrf
                                            <div class="form-group my-3">
                                              <label for="exampleInputEmail1">Username</label>
                                              <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                              @error('username')
                                              <div class="text text-danger">{{ $message }}</div>
                                             @enderror
                                            </div>
                                            <div class="form-group my-3">
                                              <label for="exampleInputPassword1">Password</label>
                                              <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                              @error('password')
                                              <div class="text text-danger">{{ $message }}</div>
                                             @enderror
                                            </div>
                                            <div class="form-group form-check my-3">
                                              <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                              <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                            </div>
                                            <button type="submit" class="btn btn-primary my-3">Submit</button>
                                          </form>
                                    </div>

                            </div>
                        </div>
                    </div>
                </main>
            </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('backend/asset/js/scripts.js') }}"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="{{ asset('backend/asset/js/alert.js') }}"></script>
       
    </body>
</html>
