@extends('layouts.dashboard.layout')
@section('content')

<section>
    <div class="dashboard-container">
        <div class="row">

                <div class="col-md-12 mt-4">
                    <h3>Dashboard</h3>
                </div>

        </div>

        @php
        $details=[
                    (object)[
                    'id'=>1,
                    'title' => 'Health',

                    'pages'  => [
                    
                                (object)['id'=>1,'title' => 'Therapy'],
                                (object)['id'=>2,'title' => 'Physical Therapy'],
                                (object)['id'=>3,'title' => 'Angiography'],
                                ]
                    ],

                    (object)[
                    'id'=>2,
                    'title' => 'Games',

                    'pages' => [
                                (object)['id'=>4,'title' => 'Cricket'],
                                (object)['id'=>5,'title' => 'Hockey'],
                                (object)['id'=>6,'title' => 'Baseball'],
                                ]
                    ],

                    (object)[
                    'id'=>3,
                    'title' => 'Menue',

                    'pages' =>[
                                (object)['id'=>7,'title' => 'Sea Food'],
                                (object)['id'=>8,'title' => 'Meat'],
                                (object)['id'=>9,'title' => 'Veggies']
                    ]
                    ]
        ]
        @endphp

        <div class="row mt-5">


            @foreach ($details as $detailsdata)
                <div class="col-md-4">
                    <div class="card detail-card">
                            <div><h3>{{$detailsdata->title}}</h3></div>
                           <ul>
                            @foreach ($detailsdata->pages as $pageItem)
                    
                                <div><li>{{$pageItem->title}}</li></div>

                            @endforeach
                            </ul>

                            <div class="text-center">
                                <a class="btn btn-primary text-center" href="{{route('dashboard.show',parameters: ['id'=>$detailsdata->id])}}">show</a>
                            </div>
                    </div>
                </div>
            @endforeach
            
        </div>



        <!-- Table -->
        @php
        $tabldetail=[
                (object)[
                    'Sr'          => 1,
                    'Name'          => 'John Doe',
                    'IssueDate'    => '12/3/2019',
                    'Category'      => 'Games',
                    
                ],
                (object)[
                    'Sr'          => 2,
                    'Name'          => 'Steve Emn',
                    'IssueDate'    => '18/6/2022',
                    'Category'      => 'Games',
                    
                ],
                (object)[
                    'Sr'          => 3,
                    'Name'          => 'John Doe',
                    'IssueDate'    => '12/3/2019',
                    'Category'      => 'Health',
                    
                ],
                (object)[
                    'Sr'          => 4,
                    'Name'          => 'John Doe',
                    'IssueDate'    => '12/3/2019',
                    'Category'      => 'Games',
                    
                ]
        ]
        @endphp

         <div class="row mt-5">
            <div class="col-md-12">
                <table class="table detail-table">
                <thead>
                        <tr>
                            <th>Sr#.</th>
                            <th>Name</th>
                            <th>Issue Date</th>
                            <th>Category</th>
                            <th>Actions</th>
                        </tr>
                </thead>

                    <tbody>
                            @foreach ($tabldetail as $tabledata)
                            <tr>
                            <td>{{$tabledata->Sr }}</td>
                            <td>{{$tabledata->Name}}</td>
                            <td>{{$tabledata->IssueDate}}</td>
                            <td>{{$tabledata->Category}}</td>
                            <td><div class="action-container"> </div></td>
                            </tr>
                            @endforeach
                        <!-- <tr>
                            <td>1</td>
                            <td>John Doe</td>
                            <td>12/3/2019</td>
                            <td>Games</td>
                            <td>None</td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>John Doe</td>
                            <td>12/3/2019</td>
                            <td>Games</td>
                            <td>None</td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>John Doe</td>
                            <td>12/3/2019</td>
                            <td>Games</td>
                            <td>None</td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>John Doe</td>
                            <td>12/3/2019</td>
                            <td>Games</td>
                            <td>None</td>
                        </tr> -->
                    </tbody>
                </table>
            </div>
         </div>
        <!-- Table_End -->

    </div>
</section>

@endsection