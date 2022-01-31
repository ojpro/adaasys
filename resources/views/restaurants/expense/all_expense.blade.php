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
                                    <h4>
                                        {{$selected_language->data['store_expense_heading'] ?? 'Expense List'}}
                                        </h4>
                                </div>
                                <div class="col-6 text-right">
                                    <a href="{{route('store_admin.store_expense_add')}}" class="btn btn-sm btn-primary btn-round btn-icon" data-toggle="tooltip" data-original-title="Add Expense">
                                        <span class="btn-inner--text">{{$selected_language->data['store_expense_add_expense'] ?? 'Add Expense'}}</span>
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
                                        <th>{{$selected_language->data['store_expense_to'] ?? 'To'}}</th>
                                        <th>{{$selected_language->data['store_expense_amount'] ?? 'Amount'}}</th>
                                        <th>{{$selected_language->data['store_expense_date'] ?? 'Date'}}</th>
                                        <th class="no-content">{{$selected_language->data['store_expense_action'] ?? 'Action'}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($expense as $data)
                                    <tr>
                                        <td>{{$data->name}}</td>
                                        <td>@include('layouts.render.currency',["amount"=>$data->amount])</td>
                                        <td>{{$data->date}}</td>
                                        <td class="table-actions">
                                            <a href="{{route('store_admin.store_expense_edit',$data->id)}}" class="table-action" data-toggle="tooltip" data-original-title="Edit">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                                            </a>
                                            <a href="#" onclick="if(confirm('Are you sure you want to delete this Expense?')){ event.preventDefault();document.getElementById('delete-form-{{$data->id}}').submit(); }" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Delete">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                            </a>

                                            <form method="post" action="{{route('store_admin.store_expense_delete')}}"
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
