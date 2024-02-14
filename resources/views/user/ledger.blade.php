@extends('layouts.userMaster')
@section('content')

    <!-- Begin Page Content -->
    <div class="container " >
        <div class="row">
            <p></p>
        </div>
        <div class="container mt-5">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h1 class="m-0 font-weight-bolder text-center text-primary">{{$name}}</h1>
                    <h4 class="m-0 font-weight-bolder text-center ">General Ledger</h4>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                        <thead>
                        <tr>
                            <th>Sl No.</th>
                            <th>Issue Date</th>
                            <th>Details</th>
                            <th>Debit</th>
                            <th>Credit</th>
                        </tr>
                        </thead>
                        @foreach($tickets as $key=> $ticket)

                            <tbody>
                            @if($ticket['gross_fare'] != null)
                                <tr>
                                    <td class="table-dark">{{$key+1}}</td>
                                    <td class="table-primary">{{\Carbon\Carbon::parse($ticket['created_at'])->format('d-m-y')}}</td>
                                    <td class="table-info">{{$ticket['name'].'->'.$ticket['route'].'->'.\Carbon\Carbon::parse($ticket['flight_date'])->format('d-m-y')}}</td>
                                    <td class="table-warning">{{$ticket['gross_fare']}}</td>
                                    <td class="table-success"></td>
                                </tr>
                            @endif

                            @if($ticket['deposit'] != null)
                                <tr>
                                    <td class="table-dark">{{$key+1}}</td>
                                    <td class="table-primary">{{\Carbon\Carbon::parse($ticket['created_at'])->format('d-m-y')}}</td>
                                    <td class="table-info">{{$ticket['pay_by']}}</td>
                                    <td class="table-warning"></td>
                                    <td  class="table-success"> {{$ticket['deposit']}}</td>
                                </tr>
                            @endif
                            </tbody>
                        @endforeach

                        <tfoot>
                        <tr>
                            <th class="text-xl-center" colspan="3">Total Due- {{$totalDue}}</th>
                            <th>{{$totalDebit}}</th>
                            <th>{{$totalCredit}}</th>
                        </tr>
                        </tfoot>
                    </table>
            </div>
        </div>
    </div>
@endsection
