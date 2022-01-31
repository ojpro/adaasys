@extends("restaurants.layouts.restaurants_layout")

@section("restaurant_content")


    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row layout-top-spacing layout-spacing">
                <div class="col-lg-12">
                    <div class="statbox widget box box-shadow">

                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>{{$selected_language->data['store_panel_table_new_table'] ?? 'Add New Table'}}</h4>
                                    @if(session()->has("MSG"))
                                        <div class="alert alert-{{session()->get("TYPE")}}">
                                            <strong> <a>{{session()->get("MSG")}}</a></strong>
                                        </div>
                                    @endif
                                    @if($errors->any()) @include('admin.admin_layout.form_error') @endif
                                </div>
                            </div>
                        </div>
                        <!-- Card body -->
                        <div class="card-body">
                            <form  method="post" action="{{route('store_admin.add_new_table')}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <!-- Form groups used in grid -->
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="example3cols2Input">{{$selected_language->data['store_panel_table_name_number'] ?? 'Table Name/Number'}}</label>
                                            <input type="text" name="table_name" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="example3cols2Input">{{$selected_language->data['store_panel_table_code'] ?? 'Table Code'}}</label>
                                            <input type="text" name="table_code" class="form-control" >
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="exampleFormControlSelect1">{{$selected_language->data['store_panel_table_visibility'] ?? 'Visibility'}}</label>
                                            <div class="col-auto">
                                                <label class="switch s-outline s-outline-primary mt-2">
                                                    <input type="checkbox" name="is_active" checked="">
                                                    <span class="slider round" data-label-off="Off" data-label-on="On"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <button class="btn btn-primary" type="submit">{{$selected_language->data['store_panel_common_submit'] ?? 'Submit'}}</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
