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
                                    @if(session()->has("MSG"))
                                        <div class="alert alert-{{session()->get("TYPE")}}">
                                            <strong> <a>{{session()->get("MSG")}}</a></strong>
                                        </div>
                                    @endif
                                    @if($errors->any()) @include('admin.admin_layout.form_error') @endif
                                    <h4>{{$selected_language->data['store_expense_add_expense'] ?? 'Add Expense'}}</h4>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <form  method="post" action="{{route('store_admin.store_expense_create')}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <!-- Form groups used in grid -->
                                <div class="row">


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="example3cols2Input">{{$selected_language->data['store_expense_name'] ?? 'Name'}}</label>
                                            <span class="text-danger">*</span>
                                            <input type="text" name="name" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="form-control-label" for="example3cols2Input">{{$selected_language->data['store_expense_amount'] ?? 'Amount'}}</label>
                                            <span class="text-danger">*</span>
                                            <input type="text" name="amount" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="form-control-label" for="example3cols2Input">{{$selected_language->data['store_expense_date'] ?? 'Date'}}</label>
                                            <span class="text-danger">*</span>
                                            <input type="date" name="date" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="example3cols2Input">{{$selected_language->data['store_expense_notes'] ?? 'Notes'}}</label>
                                            <textarea class="form-control" name="note" rows="3"></textarea>
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
