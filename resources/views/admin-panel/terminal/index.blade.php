@extends('layouts.dashboard.layout')
@section('content')

<section>
    <div class="dashboard-container">
        <div class="row">

            <div class="col-md-12 mt-4">
                <h3>Terminal</h3>
            </div>


        </div>

        <div class="row mt-5">
            <div class="col-md-7">
                <h4>Terminal Form</h4>
                <form action="{{route('terminal.store')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label for="" class="form-label">First Name</label>
                            <input type="text" class="form-control" placeholder="Enter First Name" Name="FirstName">

                            <label for="" class="form-label">Second Name</label>
                            <input type="text" class="form-control" placeholder="Enter Second Name" Name="Second Name">
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label">Phone Number</label>
                            <input type="number" class="form-control" placeholder="Enter Phone Number"
                                Name="Phone Number">

                            <label for="" class="form-label">Enter Email</label>
                            <input type="email" class="form-control" placeholder="Enter Email" Name="Email">

                        </div>

                        <div class="col-md-1 mt-3">
                            <div>
                                <x-Dashboard.Buttons.index text="Submit" btn_color="btn-primary"></x-Dashboard.Buttons.index>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-md-5">
                <h4>Terminal Details</h4>
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi aperiam ipsa alias, eius fuga
                    saepe doloremque illum beatae nam, ducimus perspiciatis aliquid unde. Dicta atque natus esse
                    doloremque numquam dolor eaque pariatur facere quas voluptate perspiciatis, eum ducimus vitae iusto
                    aspernatur, rem quae culpa deserunt praesentium! Esse in neque ullam ipsum voluptate reiciendis,
                    libero nostrum ea dicta cum harum nesciunt. Distinctio culpa quidem, blanditiis molestiae iusto
                    dolorum alias quos officia nostrum omnis, doloribus deserunt laborum facere, accusantium commodi.
                    Vero, odit!</p>

            </div>
        </div>
    </div>
</section>

@endsection