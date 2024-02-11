@extends('layouts.userMaster')
@section('content')
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, distinctio, rerum. Blanditiis dolores fugiat impedit porro, saepe sed. A animi autem beatae, dolore doloribus enim et eveniet expedita facere laudantium libero, minima natus neque nesciunt nobis quo quod, voluptate. Ab adipisci amet architecto blanditiis culpa debitis delectus dicta dolore ea eius eum fugiat id illo inventore, labore molestias nisi numquam odio, odit provident quisquam ratione reprehenderit sint temporibus velit! Asperiores assumenda blanditiis dolores eaque iusto necessitatibus, placeat quaerat quidem repellendus velit? Beatae eius ex quasi repellat temporibus? Architecto blanditiis, debitis deleniti
        eum harum illum, maiores quam rerum sapiente temporibus, voluptatem!</p>
    <!-- Begin Page Content -->
    <div class="container">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h4 class="m-0 font-weight-bolder text-center ">Upcoming Flight date</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                        <thead>
                        <tr>

                            <th>Pax Name</th>
                            <th>Route</th>
                            <th>Customer Name</th>
                            <th>Flight Date</th>

                        </tr>
                        </thead>
                        @foreach($tickets as $key=> $ticket)
                            @if($ticket['flight_date'] >= date('Y-m-d') )
                            <tbody>
                            <tr>

                                    <td class="table-primary">{{$ticket['name']}}</td>
                                    <td class="table-light">{{$ticket['route']}}</td>
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
    </div>
@endsection
