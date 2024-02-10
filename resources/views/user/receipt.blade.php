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
                                    <h1 class="h4 text-gray-900 mb-4">Money Receipt</h1>
                                </div>
                                <form action="" method="post" class="user">
                                    @csrf
                                    @include('error.error')
                                    <input type="hidden" name="user_id" >
                                    <div class="form-group">
                                        <select class="form-control" name="customer_name">
                                            <option selected disabled>----- Select Customer Name-----</option>
                                            @foreach($customers as $customer)
                                                <option value="{{$customer['name']}}">{{$customer['name']}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user"
                                               id="exampleInputPassword" name="in_word" placeholder="Amount In Word">
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control form-control-user"
                                               id="exampleInputPassword" name="amount" placeholder="Amount">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user"
                                               id="exampleInputPassword" name="pay_by" placeholder="Pay By..........">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user"
                                               id="exampleInputEmail" name="purpose" aria-describedby="emailHelp"
                                               placeholder="Purpose of amount">
                                    </div>
                                    <input type="submit"  class="btn btn-primary btn-user btn-block" value="Create">
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

