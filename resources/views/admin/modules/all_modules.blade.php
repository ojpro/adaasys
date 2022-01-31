@extends("admin.admin_layout.adminlayout")

@section("admin_content")

    <style>
        .orders-not-found {
            height: calc(100vh - 266px);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
    </style>
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="row layout-top-spacing">

                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-6">
                                    <h4>Premium Modules List</h4>
                                </div>
                                <div class="col-6 text-right">
                                    <a href="{{route('uploaded_modules')}}" class="btn btn-primary mt-2" data-toggle="tooltip" data-original-title="Uploaded Modules">
                                        <span class="">Uploaded Modules</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive mb-4 mt-4">
                            @if($modules->count() > 0)

                                    <table id="zero-config" class="table table-hover" style="width:100%">
                                        <thead class="thead-light">
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Module Id</th>
                                            <th scope="col">Version</th>
                                            <th scope="col">Category</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($modules as $data)
                                        <tr>
                                            <td>{{$data->name}}</td>
                                            <td>{{$data->module_id}}</td>
                                            <td>{{$data->version}}</td>
                                            <td>
                                                @if($data->category == 1)

                                                  SaaS Theme
                                                   @endif

                                            </td>
                                        </tr>
                                        @endforeach

                                        </tbody>
                                    </table>



                            @else
                                <div class="orders-not-found"><img src="{{asset('img/no-orders-illustrations.svg')}}" style="border: none" alt="No orders"><h4 class="section-text-3 my8">You don't have any Premium Modules</h4></div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
