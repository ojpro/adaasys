@extends("admin.admin_layout.adminlayout")

@section("admin_content")
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="row layout-top-spacing">

                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Recent Customers List</h4>
                                </div>
                            </div>
                        </div>
                        <!-- Light table -->
                        <div class="table-responsive mb-4">
                            @if(session()->has("MSG"))
                                <div class="alert alert-{{session()->get("TYPE")}}">
                                    <strong> <a>{{session()->get("MSG")}}</a></strong>
                                </div>
                            @endif
                            <table id="zero-config" class="table table-hover" style="width:100%">
                                <thead class="thead-light">
                                <tr>
                                    <th>No</th>
                                    <th>Customer Name</th>
                                    <th>Customer Phone</th>
                                    <th>No of Orders</th>
                                    <th>Recent Order </th>
                                </tr>
                                </thead>
                                <tbody>

                                @php $i=1 @endphp
                                @foreach($customers as $data)

                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$data->customer_name}}</td>
                                        <td>{{$data->customer_phone}} </td>
                                        <td>
                                            {{$data->admin_total($data->customer_phone)}}
                                        </td>
                                        <td> {{$data->created_at->diffForHumans()}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
