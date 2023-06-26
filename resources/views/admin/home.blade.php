@extends('admin.Layouts.app')

@section('content')

<!-- Blank Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g4">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Single Line Chart</h6>
                <canvas id="line-chart"></canvas>
            </div>
        </div>
        <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Doughnut Chart</h6>
                <canvas id="doughnut-chart"></canvas>
            </div>
        </div>
    </div>
</div>
<!-- Blank End -->

@endsection