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
                                    <h1 class="h4 text-gray-900 mb-4">Create ticket Invoice</h1>
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
                                        <input value="{{$id}}"  name="customer_id"  hidden>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user"
                                               id="exampleInputEmail" aria-describedby="emailHelp"
                                               placeholder="Enter Pax Name" name="name">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user"
                                               id="exampleInputEmail" aria-describedby="emailHelp"
                                               placeholder="Airlines Name" name="airlines_name">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user"
                                               id="exampleInputEmail" name="route" aria-describedby="emailHelp"
                                               placeholder="Flight Route">
                                    </div>
                                    <div class="form-group">
                                        <input type="date" class="form-control form-control-user"
                                               id="exampleInputEmail" name="flight_date" aria-describedby="emailHelp"
                                               placeholder="Flight Date">
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control form-control-user"
                                               id="exampleInputPassword" name="gross_fare" placeholder="Gross Fare">
                                    </div>
                                    <input class="btn btn-primary btn-user btn-block" type="submit" name="submit" value="Create">
                                </form>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>

@endsection
