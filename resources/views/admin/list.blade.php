@extends('admin.Layouts.app')

@section('content')

 <!-- Table Start -->
 <div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Responsive Table</h6>
                <div class="table-responsive">
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Applicant Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Contact Number</th>
                                <th scope="col">Destination</th>
                                <th scope="col">Date of Application</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>John Doe</td>
                                <td>jhon@email.com</td>
                                <td>+8801722754100</td>
                                <td>Dhaka Office</td>
                                <td>12/07/2023</td>
                                <td>New</td>
                                <td>
                                    <i class="fa fa-trash me-2"></i>
                                    <i class="fa fa-eye me-2"></i>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Table End -->

@endsection