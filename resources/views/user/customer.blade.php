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
                                    <h1 class="h4 text-gray-900 mb-4">Add a New Customer</h1>
                                </div>
                                @if (session()->has('message'))
                                    <div class="alert alert-success">
                                        {{ session('message') }}
                                    </div>
                                @endif
                                <form action="" method="post" class="user">
                                    {{csrf_field()}}
                                    @include('error.error')
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user"
                                               id="exampleInputEmail" aria-describedby="emailHelp"
                                               placeholder="Enter Name" name="name">
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" class="form-control form-control-user"
                                               id="exampleInputEmail" aria-describedby="emailHelp"
                                               placeholder="Mobile Number" name="number">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user"
                                               id="exampleInputEmail" name="office" aria-describedby="emailHelp"
                                               placeholder="Office Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user"
                                               id="exampleInputPassword" name="address" placeholder="Mailing Address">
                                    </div>

                                    <input class="btn btn-primary btn-user btn-block" type="submit" name="submit" value="Save">
                                </form>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>

@endsection
