@extends('layouts.dashboard.layout')
@section('content')

<section>
    <div class="dashboard-container">
        <div class="row">

            <div class="col-md-12 mt-4">
                <h3>Industries</h3>
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
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="d-flex align-items-center w-100 gap-2">
                    <div class="w-75"> 
                        <input type="text" placeholder="Search Here" class="form-control py-2">
                    </div>
                    <div>
                        <a href="{{route('industries.create')}}" class="btn btn-primary px-3">Add Page <i class="fas fa-plus px-2"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <table class="table data-table ">
                    <thead>
                        <tr>
                            <th>ID#</th>
                            <th>First Name</th>
                            <th>Second Name</th>
                            <th>Created At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        <!-- 1st -->
                        <tr>
                            <td>1</td>
                            <td>John</td>
                            <td>Doe</td>
                            <td>12/19/2023</td>
                            <td>
                                <a href="{{route('industries.show')}}" class="btn btn-primary">View</a>
                                <a href="{{route('industries.post')}}" class="btn btn-green">Edit</a>
                                
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#delete">
                                    Delete
                                </button>
                                <!-- Button trigger modal -->

                                <!-- Modal -->
                                <div class="modal fade" id="delete" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                ...
                                            </div>
                                            <div class="modal-footer">

                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>

                        </tr>

                        <!-- 2nd -->
                        <tr>
                            <td>2</td>
                            <td>John</td>
                            <td>Doe</td>
                            <td>12/19/2023</td>
                            <td>
                                <a href="{{route('industries.show')}}" class="btn btn-primary">View</a>
                                <a href="{{route('industries.post')}}" class="btn btn-green">Edit</a>
                                
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#delete">
                                    Delete
                                </button>
                                <!-- Button trigger modal -->

                                <!-- Modal -->
                                <div class="modal fade" id="delete" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                ...
                                            </div>
                                            <div class="modal-footer">

                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            
                        </tr>

                        <!-- 3rd -->
                        <tr>
                            <td>3</td>
                            <td>John</td>
                            <td>Doe</td>
                            <td>12/19/2023</td>
                            <td>
                                <a href="{{route('industries.show')}}" class="btn btn-primary">View</a>
                                <a href="{{route('industries.post')}}" class="btn btn-green">Edit</a>
                                
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#delete">
                                    Delete
                                </button>
                                <!-- Button trigger modal -->

                                <!-- Modal -->
                                <div class="modal fade" id="delete" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                ...
                                            </div>
                                            <div class="modal-footer">

                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</section>

@endsection