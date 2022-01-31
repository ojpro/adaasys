@extends("restaurants.layouts.restaurants_layout")

@section("restaurant_content")

    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row layout-top-spacing layout-spacing">
                <div class="col-lg-12">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-6 col-md-6 col-sm-6 col-6">
                                    <h4>{{$selected_language->data['store_panel_coupons_head'] ?? 'Coupons List'}}</h4>
                                </div>
                                <div class="col-6 text-right">
                                    <a href="{{route('store_admin.add_coupons')}}" class="btn btn-sm btn-primary btn-round btn-icon" data-toggle="tooltip" data-original-title="Add Coupons">
                                        <span class="btn-inner--text">{{$selected_language->data['store_panel_coupons_add'] ?? 'Add Coupons'}}</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            @if(session()->has("MSG"))
                                <div class="alert alert-{{session()->get("TYPE")}}">
                                    <strong> <a>{{session()->get("MSG")}}</a></strong>
                                </div>
                            @endif
                            <table id="zero-config" class="table table-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>{{$selected_language->data['store_panel_common_name'] ?? 'Name'}}</th>
                                        <th>{{$selected_language->data['store_panel_coupons_code'] ?? 'Code'}}</th>
                                        <th>{{$selected_language->data['store_panel_common_type'] ?? 'Type'}}</th>
                                        <th>{{$selected_language->data['store_panel_coupons_discount'] ?? 'Discount'}}</th>
                                        <th>{{$selected_language->data['store_panel_common_status'] ?? 'Status'}}</th>
                                        <th class="no-content">{{$selected_language->data['store_panel_common_action'] ?? 'Action'}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($coupons as $data)
                                    <tr>
                                        <td>{{$data->name}}</td>
                                        <td>{{$data->code}}</td>
                                        <td>{{$data->discount_type}}</td>
                                        <td><b> @include('layouts.render.currency',["amount"=>$data->discount]) </b></td>
                                        <td>

                                            @if($data->is_active == 1)
                                                <span class="badge badge-success" style="width: 65px">{{$selected_language->data['store_panel_common_active'] ?? 'Active'}}</span>
                                            @endif

                                                @if($data->is_active == 0)
                                                    <span class="badge badge-danger" style="width: 65px">{{$selected_language->data['store_panel_common_inactive'] ?? 'InActive'}}</span>
                                                @endif


                                        </td>
                                        <td class="table-actions">
                                            <a href="#" onclick="if(confirm('Are you sure you want to delete this Expense?')){ event.preventDefault();document.getElementById('delete-form-{{$data->id}}').submit(); }" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Delete">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                            </a>




                                            <form method="post" action="{{route('store_admin.delete_coupons')}}"
                                                  id="delete-form-{{$data->id}}" style="display: none">
                                                @csrf
                                                @method('DELETE')
                                                <input type="hidden" value="{{$data->id}}" name="id">
                                            </form>


                                        </td>

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
