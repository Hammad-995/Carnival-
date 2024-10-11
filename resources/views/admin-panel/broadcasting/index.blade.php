@extends('layouts.dashboard.layout')
@section('content')

<section>
    <div class="dashboard-container">
        <div class="row">

                <div class="col-md-12 mt-4">
                    <h3>Broadcasting</h3>
                </div>

        </div>


        <div class="row mt-4">
            <div class="col-md-12">
                <div class="d-flex align-items-center w-100 gap-2">
                    <div class="w-75"> 
                        <input type="text" placeholder="Search Here" class="form-control py-2">
                    </div>
                    <div>
                        <a href="{{route('broadcasting.create')}}" class="btn btn-primary px-3">Add Page <i class="fas fa-plus px-2"></i></a>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>

@endsection