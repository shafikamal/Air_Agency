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
                                        <td class="table-active">{{\Carbon\Carbon::parse($ticket['flight_date'])->format('d-m-y')}}</td>
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
