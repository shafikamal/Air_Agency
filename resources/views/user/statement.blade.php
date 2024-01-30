@extends('layouts.userMaster')
@section('content')
    <!-- Begin Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tables</h1>
        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
            For more information about DataTables, please visit the official DataTables documentation.</p>

        <a  href="{{route('customerShow')}}"><h1 class="h3 mb-2 text-gray-900">Add Customer</h1></a>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bolder text-primary">Customers Statement</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-center"  id="dataTable" width="100%" cellspacing="0">

                        <thead>
                        <tr>
                            <th>Sl No.</th>
                            <th>Name</th>
                            <th>Number</th>
                            <th>Office</th>
                            <th>Balance</th>
                            <th>Details</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        @foreach($customers as $customer)
                        <tbody>
                        <tr>
                            <td class="table-dark">{{$customer['id']}}</td>
                            <td class="table-secondary">{{$customer['name']}}</td>
                            <td class="table-warning">{{$customer['number']}}</td>
                            <td class="table-success">{{$customer['office']}}</td>
                            <td class="table-info">{{$customer['balance']}}</td>
                            <td class="table-bordered">
                                <a class="btn-icon-split" href="{{url('ledger'.'/'.$customer['id'])}}">View Ledger</a>
                            </td>
                            <td class="table-primary">
                            <a class="btn-icon-split btn-success" href="{{url('create/ticket').'/'.$customer['id']}}">Add Ticket</a>||

                            <a class="btn-danger" href="{{url('editCustomer'.'/'.$customer['id'])}}">Edit</a>
                             </td>
                        </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection

