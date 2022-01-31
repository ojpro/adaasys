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
                                    <h4>Uploaded Modules</h4>
                                </div>
                            </div>
                        </div>

                        <table class="table text-center">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Module Id</th>
                                    <th>Version</th>
                                    <th>Category</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <form  method="post" action="{{route('install_modules')}}" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    {!! $TH1PMsg !!}
                                </form>

                                <form  method="post" action="{{route('install_modules')}}" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    {!! $M2PDMsg !!}
                                </form>
                            </tbody>
                        </table>

                        </div>
                    </div>
            </div>
        </div>
    </div>



@endsection
