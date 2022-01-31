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
                                    <h4 class="mb-0">{{$selected_language->data['store_promo_add'] ?? 'Add Promo Banner'}}</h4>
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
                            <form  method="post" action="{{route('store_admin.add_banner')}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <!-- Form groups used in grid -->
                                <div class="row">

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="example3cols1Input">{{$selected_language->data['store_promo_bannerimage'] ?? 'Banner Image'}} <small style="color: red">(recommended: 976px x 359px)</small></label>




                                            <div class="custom-file">
                                                <input required name="photo_url"  class="file-name input-flat ui-autocomplete-input" type="file" readonly="readonly" placeholder="Browses photo" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="example3cols2Input">{{$selected_language->data['store_promo_bannername'] ?? 'Banner Name'}}</label>
                                            <input type="text" name="name" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="exampleFormControlSelect1">{{$selected_language->data['store_promo_bannervisibility'] ?? 'Visibility'}}</label>
                                            <div class="col-auto">
                                                <label class="switch s-primary mt-2">
                                                    <input type="checkbox" name="is_visible" checked="">
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
