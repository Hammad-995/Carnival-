@extends('layouts.dashboard.layout')
@section('content')

<section>
    <div class="dashboard-container">
        <div class="row">

            <div class="col-md-12 mt-4">
                <h3>Broadcasting Create</h3>
            </div>

            <div class="col-md-4 col-xl-3 mt-3">
                <div class="value-card ">
                    <div class="d-flex align-items-center justify-content-center gap-2">
                        <div>
                            <h3 class="mb-0">55</h3>
                        </div>

                        <div>
                            <div>
                                <p class="fw-bold mb-1">Total value</p>

                            </div>
                            <div>
                                <p class="fw-light mb-1">Numbers</p>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-4 col-xl-3 mt-3">
                <div class="value-card">
                    <div class="d-flex align-items-center justify-content-center gap-2">
                        <div>
                            <h3 class="mb-0">68</h3>
                        </div>

                        <div>
                            <div>
                                <p class="fw-bold mb-1">Total value</p>

                            </div>
                            <div>
                                <p class="fw-light mb-1">Numbers</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-xl-3 mt-3">
                <div class="value-card">
                    <div class="d-flex align-items-center justify-content-center gap-2">
                        <div>
                            <h3 class="mb-0">23</h3>
                        </div>

                        <div>
                            <div>
                                <p class="fw-bold mb-1">Total value</p>

                            </div>
                            <div>
                                <p class="fw-light mb-1">Numbers</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-xl-3 mt-3">
                <div class="value-card">
                    <div class="d-flex align-items-center justify-content-center gap-2">
                        <div>
                            <h3 class="mb-0">74</h3>
                        </div>

                        <div>
                            <div>
                                <p class="fw-bold mb-1">Total value</p>

                            </div>
                            <div>
                                <p class="fw-light mb-1">Numbers</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-5">
                <h3>Lorem ipsum dolor sit.</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque dolore sint itaque facilis
                    voluptates, iusto tempore voluptatibus laudantium cupiditate accusamus veniam error maiores quaerat
                    quia illum, nihil, pariatur quasi optio! Saepe hic non nesciunt illum possimus laborum voluptatem
                    rem, vel aperiam nihil quibusdam quam, nulla voluptatibus molestiae suscipit a praesentium sint
                    pariatur magnam iusto dolores. Deserunt quas quod fuga odit hic explicabo enim. Quaerat laudantium
                    ipsum quidem nostrum. Asperiores quos similique et accusantium nam qui rerum nostrum eligendi
                    sapiente? Illum porro molestiae, eaque commodi cum mollitia modi vel laudantium. Mollitia,
                    blanditiis! Repudiandae molestiae vitae, ut mollitia dolorem optio non repellat?</p>
            </div>

            <div class="col-md-7">

                <div class="card-form">
                   <form action="{{ route('broadcasting.store') }}" method="POST">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <label for="" class="form-label">First Name</label>
                                <input type="text" class="form-control" Name="first name" >
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Second Name</label>
                                <input type="text" class="form-control" Name="second name" >
                            </div>

                            
                            <div class="col-md-6">
                                <label for="" class="form-label">Enter Phone Number</label>
                                <input type="number" class="form-control" Name="phone number" >
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Enter Email</label>
                                <input type="text" class="form-control" Name="email" >
                            </div>

                            <div class="col-md-1 mt-4">

                                <x-Dashboard.Buttons.index btn_color="btn-primary" text="Submit"></x-Dashboard.Buttons.index>
                            </div>


                        </div>
                    

                    

                   </form>
                </div>

            </div>
        </div>



    </div>
</section>

@endsection