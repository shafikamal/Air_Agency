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
                            <th>Staff Name</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        @foreach($customers as $key=> $customer)
                            <tbody>
                            <tr>
                                <form action="{{url('admin/staff'.'/'.$customer['id'])}}" method="post">
                                    @csrf
                                    <td class="table-dark">{{$key+1}}</td>
                                    <td class="table-info">{{$customer['username']}}</td>
                                    <td class="table-light">{{$customer['email']}}</td>
                                    <td class="table-success">
                                        <select name="status">
                                            <option selected disabled >{{ $customer['status'] }}</option>
                                            <option value="active" >Active</option>
                                            <option value="inactive">Deactive</option>
                                        </select>
                                    </td>
                                    <td class="table-active">
                                        <input type="submit" value="Save Change" name="submit">
                                    </td>
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


