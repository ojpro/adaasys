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
                                    <h4>Add Subscription</h4>
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
                            <form  method="post" action="{{route('add_new_subscription')}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <!-- Form groups used in grid -->
                                <div class="row">

                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="form-control-label" for="example3cols2Input">Subscription Name</label>
                                            <input type="text" name="name" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="form-control-label" for="example3cols2Input">Subscription Price</label>
                                            <input type="number" step="any" name="price" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="form-control-label" for="example3cols2Input">Subscription Days</label>
                                            <input type="number" name="days" class="form-control" value="30" required>
                                        </div>
                                    </div>

                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <label class="form-control-label">Is active</label><br>
                                            <label class="switch s-primary mt-2">
                                                <input type="checkbox" name="is_active" checked="">
                                                <span class="slider round" data-label-off="No" data-label-on="Yes"></span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="example3cols2Input">Subscription Description</label>
                                            <textarea class="form-control" name="description" class="form-control" required></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <button class="btn btn-primary" type="submit">Add Subscription</button>
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
