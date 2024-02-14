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
                    <h4 class="m-0 font-weight-bolder text-center ">Upcoming Flight date</h4>
                </div>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                    <thead>
                    <tr>

                        <th>Passenger </th>
                        <th>Customer Name</th>
                        <th>Flight Date</th>
                    </tr>
                    </thead>
                    @foreach($tickets as $key=> $ticket)
                        @if($ticket['flight_date'] >= date('Y-m-d') )
                            <tbody>
                            <tr>

                                <td class="table-primary">{{$ticket['name'].'-'.$ticket['route']}}</td>
                                <td class="table-warning">{{$ticket->customer->name}}</td>
                                <td class="table-info">{{\Carbon\Carbon::parse($ticket['flight_date'])->format('d-m-y')}}</td>
                            </tr>
                            </tbody>
                        @endif
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
