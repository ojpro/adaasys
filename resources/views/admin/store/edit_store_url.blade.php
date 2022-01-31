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
                                    <h4>Update Store Url</h4>
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
                            <form method="post" action="{{route('save_url',$id->id)}}" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="row">


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="example3cols2Input">Store Url</label>
                                            <input type="text" value="{{$id->view_id}}"  name="view_id" class="form-control" required>
                                        </div>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Update" class="mt-4 btn btn-primary" >
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
