@extends('layouts.userMaster')
@section('content')
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, distinctio, rerum. Blanditiis dolores fugiat impedit porro, saepe sed. A animi autem beatae, dolore doloribus enim et eveniet expedita facere laudantium libero, minima natus neque nesciunt nobis quo quod, voluptate. Ab adipisci amet architecto blanditiis culpa debitis delectus dicta dolore ea eius eum fugiat id illo inventore, labore molestias nisi numquam odio, odit provident quisquam ratione reprehenderit sint temporibus velit! Asperiores assumenda blanditiis dolores eaque iusto necessitatibus, placeat quaerat quidem repellendus velit? Beatae eius ex quasi repellat temporibus? Architecto blanditiis, debitis deleniti
        eum harum illum, maiores quam rerum sapiente temporibus, voluptatem!</p>
    <!-- Begin Page Content -->
    <div class="container">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h1 class="m-0 font-weight-bolder text-center text-primary">{{$name}}</h1>
                <h4 class="m-0 font-weight-bolder text-center ">General Ledger</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
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
    </div>
    <!-- /.container-fluid -->
@endsection
