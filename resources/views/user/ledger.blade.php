@extends('layouts.userMaster')
@section('content')
    <!-- Begin Page Content -->
    <div class="container">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bolder text-primary">General Ledger</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                        <thead>
                        <tr>
                            <th>Sl No.</th>
                            <th>Date</th>
                            <th>Pax Name</th>
                            <th>Airlines Name</th>
                            <th>Route</th>
                            <th>Flight Date</th>
                            <th>Fare</th>
                            <th>Deposit</th>
                            <th>for test</th>
                        </tr>
                        </thead>
                        @foreach($tickets as $key=> $ticket)
                                <tbody>
                                <tr>
                                    <form action="{{route('ticketsShow')}}" method="post">
                                        <td class="table-dark">{{$key+1}}</td>
                                        <td class="table-warning">{{\Carbon\Carbon::parse($ticket['created_at'])->format('d-m-y')}}</td>
                                        <td class="table-info">{{$ticket['name']}}</td>
                                        <td class="table-warning">{{$ticket['airlines_name']}}</td>
                                        <td class="table-success">{{$ticket['route']}}</td>
                                        <td class="table-active">{{$ticket['flight_date']}}</td>
                                        <td class="table-primary">{{$ticket['gross_fare']}}</td>
                                        <td class="table-primary">10000</td>
                                        <td class="table-primary">demo test</td>

                                    </form>

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
