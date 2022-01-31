@extends("restaurants.layouts.restaurants_layout")

@section("restaurant_content")

    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row layout-top-spacing layout-spacing">
                <div class="col-lg-12">


                        <div class="row p-3">

                            <div class="col-12 text-right float-right">
                                <button onclick="event.preventDefault(); document.getElementById('add_new').submit();"
                                        class="btn btn-md btn-primary btn-round btn-icon" data-toggle="tooltip"
                                        data-original-title="{{$selected_language->data['store_panel_add_tables'] ?? 'Add Tables'}}">
{{--                                    <span class="btn-inner--icon"><i class="fas fa-chair"></i></span>--}}
                                    <span class="btn-inner--text">{{$selected_language->data['store_panel_add_tables'] ?? 'Add Tables'}}</span>
                                </button>

                                <button onclick="event.preventDefault(); document.getElementById('table_report').submit();"
                                        class="btn btn-md btn-warning btn-round btn-icon" data-toggle="tooltip"
                                        data-original-title="Table Report">
{{--                                    <span class="btn-inner--icon"><i class="fas fa-receipt"></i></span>--}}
                                    <span class="btn-inner--text">{{$selected_language->data['store_panel_table_report'] ?? 'Table Reports'}}</span>
                                </button>

                                <form action="{{route('store_admin.add_tables')}}" method="get" id="add_new"></form>
                                <form action="{{route('store_admin.table_report')}}" method="get" id="table_report"></form>
                            </div>
                        </div>

                        <div class="widget-content">

                        <div class="tab-pane fade show active" id="home2" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">


                                @php $i=1 @endphp
                                @foreach($tables as $data)

                                    <div class="col-md-3">

                                        <div class="widget">
                                            <!-- Card body -->
                                            <div class="widget-content p-3">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="acc-total-info" style="padding: 5px">
                                                            <h5>{{$selected_language->data['store_dashboard_table_no'] ?? 'Table No'}}: {{ $data->table_name }}</h5>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto text-right">
                                                        <label class="switch s-outline s-outline-success mt-1">
                                                            <input type="checkbox" disabled {{$data->is_active ==1?"checked":NULL}}>
                                                            <span class="slider round" data-label-off="Off"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row" style="margin-top: -18px;">
                                                    <div class="col">
                                                        <a href="{{route('store_admin.edit_table',$data->id)}}">
                                                            <b>{{$selected_language->data['store_panel_common_edit'] ?? 'Edit'}}</b>
                                                        </a>
                                                    </div>
                                                    <div class="col">
                                                        <a href="{{route('download_table_qr',[Auth::user()->view_id,$data->id])}}">
                                                            <b style="color: red;">{{$selected_language->data['store_panel_qr_code'] ?? 'QR Code'}}</b>
                                                        </a>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                        </div>

                    </div>
                </div>

        </div>
    </div>


@endsection
