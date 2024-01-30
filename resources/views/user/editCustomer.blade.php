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
                                    <h1 class="h4 text-gray-900 mb-4">Edit or Any Change Customer</h1>
                                </div>
                                <form action="" method="post" class="user">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user"
                                               id="exampleInputEmail" aria-describedby="emailHelp"
                                               value="{{$customer['name']}}" name="name">
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control form-control-user"
                                               id="exampleInputEmail" aria-describedby="emailHelp"
                                               value="{{$customer['number']}}" name="number">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user"
                                               id="exampleInputEmail" name="office" aria-describedby="emailHelp"
                                               value="{{$customer['office']}}">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user"
                                               id="exampleInputPassword" name="address" value="{{$customer['address']}}">
                                    </div>

                                    <input class="btn btn-primary btn-user btn-block" type="submit" name="submit" value="Save Change">
                                </form>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>

@endsection

