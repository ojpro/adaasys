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
                                    <h4>{{$selected_language->data['store_orders_all_orders'] ?? 'All Orders'}}
                                        - {{$orders_count}}</h4>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="zero-config" class="table table-hover text-center" style="width:100%">
                                <thead>
                                <tr>
                                    <th>{{$selected_language->data['store_orders_no'] ?? 'No'}}</th>
                                    <th>{{$selected_language->data['store_orders_order_id'] ?? 'Order ID'}}</th>
                                    <th>{{$selected_language->data['store_orders_total'] ?? 'Total'}}</th>
                                    <th>{{$selected_language->data['store_orders_payment_type'] ?? 'Payment Type'}}</th>
                                    <th>{{$selected_language->data['store_orders_status'] ?? 'Status'}}</th>
                                    <th>{{$selected_language->data['store_orders_type'] ?? 'Type'}}</th>
                                    <th>{{$selected_language->data['store_orders_placed_at'] ?? 'Placed At'}}</th>
                                    <th>{{$selected_language->data['store_orders_table_no'] ?? 'Table No'}}</th>
                                    <th >{{$selected_language->data['store_orders_action'] ?? 'Action'}}</th>
                                    <th class="no-content">{{$selected_language->data['store_orders_more'] ?? 'More'}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php $i=1 @endphp

                                @foreach($orders as $order)
                                    <tr>
                                        <td> {{ $i++}} </td>

                                        <td> {{ $order->order_unique_id }} </td>

                                        <td>
                                            @include('layouts.render.currency',["amount"=>$order->total])
                                        </td>
                                        <td> {{ $order->payment_type }} </td>

                                        <td>
                                            {{--                                        @php print_r($order->status) @endphp--}}
                                            @if($order->status == 1)
                                                <span class="badge badge-info"
                                                      style="width: 120px"> {{$selected_language->data['store_orders_status_placed'] ?? 'Order Placed'}}</span>
                                            @endif

                                            @if($order->status == 2)
                                                <span class="badge badge-warning"
                                                      style="width: 120px"> {{$selected_language->data['store_orders_status_processing'] ?? 'Processing'}}</span>
                                            @endif
                                            @if($order->status == 5)
                                                <span class="badge badge-default"
                                                      style="width: 120px">{{$selected_language->data['store_orders_status_ready'] ?? 'Ready'}}</span>
                                            @endif

                                            @if($order->status == 3)
                                                <span class="badge badge-danger"
                                                      style="width: 120px">{{$selected_language->data['store_orders_status_rejected'] ?? 'Rejected'}}</span>
                                            @endif

                                            @if($order->status == 4)
                                                <span class="badge badge-success"
                                                      style="width: 120px">{{$selected_language->data['store_orders_status_order_completed'] ?? 'Order Completed'}}</span>
                                            @endif


                                        </td>

                                        <td>
                                            @if($order->order_type == 1)
                                                <span class="badge bg-dark text-yellow"
                                                      style="width: 75px">{{$selected_language->data['store_orders_type_dinning'] ?? 'Dining'}}</span>
                                            @endif

                                            @if($order->order_type == 2)
                                                <span class="badge bg-dark text-success"
                                                      style="width: 75px">{{$selected_language->data['store_orders_type_takeaway'] ?? 'Takeaway'}}</span>
                                            @endif

                                            @if($order->order_type == 3)
                                                <span class="badge bg-dark text-danger"
                                                      style="width: 75px">{{$selected_language->data['store_orders_type_delivery'] ?? 'Delivery'}}</span>
                                            @endif
                                        </td>
                                        <td>
                                            {{$order->created_at->diffForHumans()}}
                                        </td>
                                        <td>

                                            @if($order->table_no !=NULL)
                                                <span class="badge badge-primary"
                                                      style="width: 60px"> {{$order->table_no}}</span>
                                            @endif


                                        </td>
                                        <td>
                                            @if($order->status == 1)
                                                <a class="btn btn-primary btn-sm text-white mb-1"
                                                   style="width: 100px; padding: 0.4375rem 0.5rem"
                                                   onclick="document.getElementById('accept_order{{$order->id}}').submit();">
                                                    {{$selected_language->data['store_orders_action_accept'] ?? 'Accept Order'}}
                                                </a>
                                                <a class="btn btn-danger btn-sm text-white"
                                                   style="width: 100px; padding: 0.4375rem 0.5rem"
                                                   onclick="document.getElementById('reject_order{{$order->id}}').submit();">
                                                    {{$selected_language->data['store_orders_action_reject'] ?? 'Reject Order'}}
                                                </a>
                                            @endif

                                            @if($order->status == 2)
                                                <a class="btn btn-outline-success btn-sm"
                                                   style="width: 100px; padding: 0.4375rem 0.5rem"
                                                   onclick="document.getElementById('ready_to_serve{{$order->id}}').submit();">
                                                    {{$selected_language->data['store_orders_action_ready_to_serve'] ?? 'Ready to Serve'}}
                                                </a>
                                            @endif

                                            @if($order->status == 5)
                                                <a class="btn btn-outline-success btn-sm"
                                                   style="width: 100px; padding: 0.4375rem 0.5rem"
                                                   onclick="document.getElementById('complete_order{{$order->id}}').submit();">
                                                    {{$selected_language->data['store_orders_status_order_completed'] ?? 'Order Completed'}}
                                                </a>
                                            @endif

                                            @if($order->status == 3)
                                                <a class="btn btn-danger btn-sm text-white"
                                                   style="width: 100px; padding: 0.4375rem 0.5rem">
                                                    {{$selected_language->data['store_orders_status_rejected'] ?? 'Rejected'}}
                                                </a>
                                            @endif

                                            @if($order->status == 4)
                                                <a class="btn btn-success btn-sm text-white mb-1"
                                                   style="width: 100px; padding: 0.4375rem 0.5rem">
                                                    {{$selected_language->data['store_orders_action_completed'] ?? 'Completed'}}
                                                </a>
                                                @if($order->payment_status == 1)
                                                    <a class="btn btn-dark btn-sm text-success"
                                                       style="width: 100px; padding: 0.4375rem 0.5rem"
                                                       onclick="document.getElementById('marks_as_paid{{$order->id}}').submit();">
                                                        <i class="fas fa-check-circle"></i>
                                                        {{$selected_language->data['store_orders_action_mark_as_paid'] ?? 'Mark As Paid'}}
                                                    </a>
                                                @endif

                                                @if($order->payment_status == 2)
                                                    <a class="btn btn-dark btn-sm text-yellow"
                                                       style="width: 100px; padding: 0.4375rem 0.5rem">
                                                        <i class="fas fa-check-double"></i>
                                                        {{$selected_language->data['store_orders_action_paid'] ?? 'Paid'}}
                                                    </a>
                                                @endif
                                            @endif


                                            <form style="visibility: hidden" method="post"
                                                  action="{{route('store_admin.update_payment_status',['id'=>$order->id])}}"
                                                  id="marks_as_paid{{$order->id}}">
                                                @csrf
                                                @method('patch')
                                                <input style="visibility:hidden" name="payment_status" type="hidden"
                                                       value="2">
                                            </form>

                                            <form style="visibility: hidden" method="post"
                                                  action="{{route('store_admin.update_order_status',['id'=>$order->id])}}"
                                                  id="accept_order{{$order->id}}">
                                                @csrf
                                                @method('patch')
                                                <input style="visibility:hidden" name="status" type="hidden" value="2">
                                            </form>
                                            <form style="visibility: hidden" method="post"
                                                  action="{{route('store_admin.update_order_status',['id'=>$order->id])}}"
                                                  id="reject_order{{$order->id}}">
                                                @csrf
                                                @method('patch')
                                                <input style="visibility:hidden" name="status" type="hidden" value="3">
                                            </form>
                                            <form style="visibility: hidden" method="post"
                                                  action="{{route('store_admin.update_order_status',['id'=>$order->id])}}"
                                                  id="ready_to_serve{{$order->id}}">
                                                @csrf
                                                @method('patch')
                                                <input style="visibility:hidden" name="status" type="hidden" value="5">
                                            </form>

                                            <form style="visibility: hidden" method="post"
                                                  action="{{route('store_admin.update_order_status',['id'=>$order->id])}}"
                                                  id="complete_order{{$order->id}}">
                                                @csrf
                                                @method('patch')
                                                <input style="visibility:hidden" name="status" type="hidden" value="4">
                                            </form>

                                        </td>

                                        <td style="text-align: center">
                                                <span>
                                                    <a href="{{route('store_admin.view_order',$order->id)}}" target="_blank">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                             stroke-width="2" stroke-linecap="round"
                                                             stroke-linejoin="round" class="feather feather-eye"><path
                                                                d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle
                                                                cx="12" cy="12" r="3"></circle></svg>
                                                    </a>
                                                    <a href="#"
                                                       onclick="if(confirm('Are you sure you want to delete this Order ?')){ event.preventDefault();document.getElementById('delete-form-{{$order->id}}').submit(); }">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                             stroke-width="2" stroke-linecap="round"
                                                             stroke-linejoin="round" class="feather feather-trash-2"><polyline
                                                                points="3 6 5 6 21 6"></polyline><path
                                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line
                                                                x1="10" y1="11" x2="10" y2="17"></line><line x1="14"
                                                                                                             y1="11"
                                                                                                             x2="14"
                                                                                                             y2="17"></line></svg>
                                                    </a>

                                                    <form method="post" action="{{route('store_admin.order_delete')}}"
                                                          id="delete-form-{{$order->id}}" style="display: none">
                                                        @csrf
                                                        @method('DELETE')
                                                        <input type="hidden" value="{{$order->id}}" name="id">
                                                    </form>
                                                </span>
                                        </td>
                                    </tr>

                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>

@endsection
