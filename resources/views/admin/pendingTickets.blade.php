@extends('layouts.adminMaster')
@section('content')
    <!-- Begin Page Content -->
    <div class="container">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bolder text-center text-primary">Pending Tickets</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                        <thead>
                        <tr>
                            <th>Sl No.</th>
                            <th>Pax Name</th>
                            <th>Airlines Name</th>
                            <th>Route</th>
                            <th>Flight Date</th>
                            <th>Gross Fare</th>
                            <th>Net fare</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        @include('error.error')
                       @foreach($tickets as $key=> $ticket)
                           @if($ticket['deposit'] == null)
                           <tbody>
                           <tr>
                               <form action="{{url('admin/approve')}}" method="post">
                                   @csrf
                                <td class="table-dark">{{$key+1}}</td>
                                <td class="table-info">{{$ticket['name']}}</td>
                                <td class="table-warning">{{$ticket['airlines_name']}}</td>
                                <td class="table-success">{{$ticket['route']}}</td>
                                <td class="table-active">{{\Carbon\Carbon::parse($ticket['flight_date'])->format('d-m-y')}}</td>
                                <td class="table-primary">{{$ticket['gross_fare']}}</td>
                                <td class="table-light">
                                    <input type="hidden" name="ticket_id" value="{{$ticket['id']}}">
                                    <input type="number" name="net_fare" placeholder="Net Fare">
                                </td>
                                <td class="table-warning">{{$ticket['status']}}</td>
                                <td class="table-danger">
                                    <input type="submit" value="Approve" name="submit">
                                </td>

                                </form>

                            </tr>
                            </tbody>
                            @endif
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
    <div>
        {{$tickets->links()}}
    </div>
@endsection

