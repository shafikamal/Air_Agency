@extends('layouts.userMaster')
@section('content')

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->


                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Welcome To Join!</h1>
                                </div>
                                @if(Session::has('message'))
                                    <div class="alert alert-success">
                                        {{session('message')}}
                                    </div>
                                @endif
                                <form action="" method="post" class="user">
                                    {{csrf_field()}}
                                    @include('error.error')
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user"
                                               id="exampleInputEmail" aria-describedby="emailHelp"
                                               placeholder="Enter Your First Name" name="firstName">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user"
                                               id="exampleInputEmail" aria-describedby="emailHelp"
                                               placeholder="Enter Your Last Name" name="lastName">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user"
                                               id="exampleInputEmail" name="email" aria-describedby="emailHelp"
                                               placeholder="Enter Email Address...">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user"
                                               id="exampleInputPassword" name="password" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user"
                                               id="exampleInputPassword" name="password_confirmation" placeholder="Confirm Password">
                                    </div>
                                    <input class="btn btn-primary btn-user btn-block" type="submit" name="submit" value="Register">
                                </form>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('admin/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('js/sb-admin-2.min.js')}}"></script>


@endsection


