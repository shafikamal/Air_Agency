@extends('layouts.userMaster')
@section('content')
    <!-- Begin Page Content -->
    <div class="container" >
        <div class="row">
            <p></p>
        </div>
        <div class="container mt-5">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h2 class="m-0 font-weight-bolder text-center text-primary">Customers Statement</h2>
                    <a  href="{{route('customerShow')}}"><h4 class="h3 mb-2 text-gray-900 text-right">Add Customer</h4></a>
                </div>
                <table class="table table-bordered text-center"  id="dataTable" width="100%" cellspacing="0">

                    <thead>
                    <tr>
                        <th>Sl No.</th>
                        <th>Name</th>
                        <th>Number</th>
                        <th>Office</th>
                        <th>Balance</th>
                        <th>Details</th>
                    </tr>
                    </thead>
                    @foreach($customers as $customer)
                        <tbody>
                        <tr>
                            <td class="table-dark">{{$customer['id']}}</td>
                            <td class="table-secondary">
                                <a class="btn-icon-split" href="{{url('ledger'.'/'.$customer['id'].'/'.$customer['name'])}}">{{$customer['name']}}</a>
                            </td>
                            <td class="table-warning">{{$customer['number']}}</td>
                            <td class="table-success">{{$customer['office']}}</td>
                            <td class="table-info">{{$customer['balance']}}</td>
                            <td class="table-bordered">
                                <a class="btn-danger" href="{{url('editCustomer'.'/'.$customer['id'])}}">Edit</a>
                            </td>
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection

