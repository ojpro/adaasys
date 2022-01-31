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
                                        <h4>Add New Store</h4>
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
                            <div class="widget-content">
                                <form method="POST" action="{{route('create_store')}}" enctype="multipart/form-data">
                                {{csrf_field()}}

                                    <div class="row">

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="form-control-label text-danger">Store Logo (358px X 358px)</label>

                                                <div class="custom-file">
                                                    <input value="{{old('logo_url')}}" name="logo_url" class="file-name input-flat ui-autocomplete-input"
                                                           type="file" readonly="readonly" placeholder="Browses photo"
                                                           autocomplete="off" required>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="form-control-label" for="example3cols2Input">Store Name</label>
                                                <input type="text" value="{{old('store_name')}}" name="store_name" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="form-control-label" for="example3cols2Input">Store Email</label>
                                                <input type="text" name="email" value="{{old('email')}}" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="form-control-label" for="example3cols2Input">Store Password</label>
                                                <input type="text" name="password" value="{{old('password')}}" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="form-control-label" for="example3cols2Input">Phone Number</label>
                                                <input type="number" value="{{old('phone')}}" name="phone" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="form-control-label" for="exampleFormControlSelect1">Theme</label>
                                                <select class="form-control" name="theme_id" required>
                                                    <option value="1" selected>Default</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group ">
                                                <label class="form-control-label" for="example3cols2Input">Store Category</label>
                                                <div>
                                                <select  class="selectpicker form-control" name="store_categories[]" multiple="multiple" data-live-search="true"  style="height: 200px">
                                                    @foreach($store_categories as $data)
                                                    <option value="{{$data->id}}" >{{$data->name}}</option>
                                                    @endforeach
                                                </select>
                                                </div>


                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="form-control-label" for="example3cols2Input">Subscription End Date</label>
                                                <input type="date" name="subscription_end_date"
                                                       value='{{date('Y-m-d', strtotime(date('Y-m-d'). ' + 14 days'))}}' class="form-control" required>
                                            </div>
                                        </div>



                                       <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="exampleFormControlSelect1">Visibility</label>
                                            <select class="form-control" name="is_visible" required>
                                                <option value="1">Visible</option>
                                                <option value="0">Hidden</option>
                                            </select>
                                        </div>
                                    </div>

                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="exampleFormControlTextarea1">Address</label>
                                            <textarea class="form-control" name="address" rows="3" required>{{old('address')}}</textarea>
                                        </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="exampleFormControlTextarea1">Description</label>
                                                <textarea class="form-control" name="description" rows="3" required>{{old('description')}}</textarea>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="submit" value="Save" class="mt-4 btn btn-primary">
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
    </div>


@endsection
