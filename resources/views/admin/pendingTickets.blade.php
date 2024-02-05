@extends('layouts.adminMaster')
@section('content')
    <!-- Begin Page Content -->
    <div class="container">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bolder text-primary">Pending Tickets</h6>
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
                        @foreach($tickets as $key=> $ticket)
                            @if($ticket['status'] == 'pending')
                            <tbody>
                            <tr>
                                <form action="{{route('ticketsShow')}}" method="post">
                                <td class="table-dark">{{$key+1}}</td>
                                <td class="table-info">{{$ticket['name']}}</td>
                                <td class="table-warning">{{$ticket['airlines_name']}}</td>
                                <td class="table-success">{{$ticket['route']}}</td>
                                <td class="table-active">{{$ticket['flight_date']}}</td>
                                <td class="table-primary">{{$ticket['gross_fare']}}</td>
                                <td class="table-light">
                                    <input type="number" name="net_fare" placeholder="Net Fare">
                                </td>
                                <td class="table-warning">{{$ticket['status']}}</td>
                                <td class="table-danger">
                                    <a class="btn-icon-split" href="{{url('admin/approve').'/'.$ticket['id']}}">Approve</a>
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

