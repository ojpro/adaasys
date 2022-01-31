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
                                    <h4>Add Expense</h4>
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
                            <form  method="post" action="{{route('create_expense')}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <!-- Form groups used in grid -->
                                <div class="row">


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="example3cols2Input">Name</label>  <span class="text-danger">*</span>
                                            <input type="text" name="name" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="form-control-label" for="example3cols2Input">Amount</label> <span class="text-danger">*</span>
                                            <input type="text" name="amount" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="form-control-label" for="example3cols2Input">Date</label> <span class="text-danger">*</span>
                                            <input type="date" name="date" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="example3cols2Input">Notes</label>
                                            <textarea class="form-control" name="note" rows="3"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <button class="btn btn-primary" type="submit">Submit</button>
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
