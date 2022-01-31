@extends("restaurants.layouts.restaurants_layout")

@section("restaurant_content")

    <style>

        .ticket * {
            font-size: 18px;
            font-family: 'Times New Roman';
        }


        .tickettd.description,
        th.description {
            width: 180px;
            max-width: 180px;
        }

        .ticket td.quantity,
        th.quantity {
            width: 60px;
            max-width: 60px;
            word-break: break-all;
        }

        .ticket td.price,
        th.price {
            width: 90px;
            max-width: 90px;
            word-break: break-all;
        }

        .centered {
            text-align: center;
            align-content: center;
        }

        .ticket {
            width: 310px;
            max-width: 310px;
        }

        img {
            max-width: inherit;
            width: inherit;
        }
    </style>

    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row layout-top-spacing layout-spacing">
                <div class="col-lg-12">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>{{$selected_language->data['store_view_orders_receipt'] ?? 'Receipt'}}</h4>
                                </div>
                            </div>
                        </div>

                        <div class="card-header border-0">
                            <div class="row">
                                <div class="col-6">

                                    @if($order->status == 1)
                                        <a class="btn btn-primary btn-sm text-white btn-icon"
                                           onclick="document.getElementById('accept_order{{$order->id}}').submit();"><span
                                                class="btn-inner--icon"><i class="fas fa-check-circle"></i></span><span
                                                class="btn-inner--text">{{$selected_language->data['store_orders_action_accept'] ?? 'Accept Order'}}</span></a>
                                        <a class="btn btn-danger btn-sm text-white btn-icon"
                                           onclick="document.getElementById('reject_order{{$order->id}}').submit();"><span
                                                class="btn-inner--icon"><i class="fas fa-times-circle"></i></span><span
                                                class="btn-inner--text">{{$selected_language->data['store_orders_action_reject'] ?? 'Reject Order'}}</span></a>
                                    @endif


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

                                </div>
                                <div class="col-6 text-right">

                                     <span class="btn btn-sm status-btn-ordertype btn-round btn-icon">
                                         {{$order->order_type == 1 ? "Dining":NULL}}
                                         {{$order->order_type == 2 ? "Takeaway":NULL}}
                                         {{$order->order_type == 3 ? "Delivery":NULL}}



                                     </span>

                                    <span class="btn btn-sm status-btn-order btn-round btn-icon">
                                                        {{$order->status == 1 ? "Order Placed":NULL}}
                                        {{$order->status == 2 ? "Order Accepted":NULL}}
                                        {{$order->status == 5 ? "Ready to Serve":NULL}}
                                        {{$order->status == 3 ? "Order Rejected":NULL}}
                                        {{$order->status == 4 ? "Order Completed":NULL}}


                                                    </span>


                                    <a href="javascript:void(0)" OnClick="printDiv('PrintBill')" id="printButton"
                                       class="btn btn-sm red-btn-order btn-round btn-icon">
                                        <span class="btn-inner--icon"><i class="fas fa-print"></i></span>
                                        <span
                                            class="btn-inner--text">{{$selected_language->data['store_view_orders_print'] ?? 'Print'}}</span>
                                    </a>

                                    <a href="javascript:void(0)" OnClick="printDiv('PrintThermalBill')"
                                       id="thermalprintButton"
                                       class="btn btn-sm red-btn-order btn-round btn-icon">
                                        <span class="btn-inner--icon"><i class="fas fa-receipt"></i></span>
                                        <span
                                            class="btn-inner--text">{{$selected_language->data['store_view_orders_print_thermal'] ?? 'Print Thermal'}}</span>
                                    </a>


                                </div>
                            </div>
                        </div>
                        <br>


                        <div class="row">
                            <div class="m-3">
                                <div class="statbox widget box box-shadow">

                                    <div class="content-section  animated animatedFadeInUp fadeInUp">

                                        <div class="row inv--head-section">

                                            <div class="col-sm-6 col-12 mb-4">
                                                <h3 class="in-heading">{{$selected_language->data['store_view_orders_normal_receipt_preview'] ?? 'Normal Receipt Preview'}}</h3>
                                            </div>
                                            {{--                                        <div class="col-sm-6 col-12 align-self-center text-sm-right">--}}
                                            {{--                                            <div class="company-info">--}}
                                            {{--                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-hexagon"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path></svg>--}}
                                            {{--                                                <h5 class="inv-brand-name">CORK</h5>--}}
                                            {{--                                            </div>--}}
                                            {{--                                        </div>--}}

                                        </div>

                                        <div id="PrintBill">
                                            <div class="row inv--detail-section">

                                                <div class="col-sm-7 align-self-center">
                                                    <p class="inv-to">
                                                        <b>{{$selected_language->data['store_view_orders_customer_details'] ?? 'Customer Details'}}</b>
                                                    </p>
                                                </div>
                                                <div
                                                    class="col-sm-5 align-self-center  text-sm-right order-sm-0 order-1">
                                                    <p class="inv-detail-title">
                                                        <b>{{$selected_language->data['store_view_orders_details'] ?? 'Order Details'}}</b>
                                                    </p>
                                                </div>

                                                <div class="col-sm-7 align-self-center">
                                                    <p class="inv-customer-name"><span class="inv-title"><b> {{$selected_language->data['store_view_orders_customer_name'] ?? 'Customer Name'}} : </b></span>{{$order->customer_name}}
                                                    </p>
                                                    <p class="inv-email-address"><span class="inv-title"><b> {{$selected_language->data['store_view_orders_customer_phone'] ?? 'Phone No'}} : </b></span>{{$order->customer_phone}}
                                                    </p>
                                                    <p class="inv-street-addr">
                                                        @if($order->order_type == 3)
                                                            <b> Address
                                                                :</b> {{$order->address}}
                                                        @endif</p>
                                                </div>
                                                <div class="col-sm-5 align-self-center  text-sm-right order-2">
                                                    <p class="inv-list-number"><span class="inv-title"><b> {{$selected_language->data['store_orders_order_id'] ?? 'Order Id'}} : </b></span>
                                                        <span class="inv-number">{{$order->order_unique_id}}</span></p>
                                                    <p class="inv-created-date"><span class="inv-title"><b>@include('layouts.render.translation',["key" => "store_panel_common_date", "default"=> "store_panel_common"]): </b></span>
                                                        <span
                                                            class="inv-date">{{date('d-m-Y', strtotime($order->created_at)) }}</span>
                                                    </p>
                                                    <p class="inv-due-date">
                                                        @if($order->order_type == 1)
                                                            <b>  {{$selected_language->data['store_orders_table_no'] ?? 'Table No'}}
                                                                :</b> {{$order->table_no}}
                                                        @endif</p>
                                                </div>
                                            </div>

                                            <div class="row inv--product-table-section">
                                                <div class="col-12">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead class="">
                                                            <tr>
                                                                <th>#</th>
                                                                <th>{{$selected_language->data['store_view_orders_item_name'] ?? 'Name'}}</th>
                                                                <th>{{$selected_language->data['store_view_orders_item_price'] ?? 'Price'}}</th>
                                                                <th>{{$selected_language->data['store_view_orders_item_qty'] ?? 'Qty'}}</th>
                                                                <th>{{$selected_language->data['store_orders_total'] ?? 'Total'}}</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach($orderDetails as $order_data)
                                                                {{--                                {{}}--}}
                                                                @foreach($order_data['order_details'] as $key => $data)
                                                                    <tr>
                                                                        <th scope="row">{{ $key +1 }}</th>

                                                                        <td><b>{{$data['name']}}</b><br>


                                                                            @foreach($data['order_details_extra_addon'] as $key => $exra)


                                                                                <span
                                                                                    class="badge badge-primary">{{$key+1}}</span>
                                                                                Name:  <strong>{{$exra['addon_name']}}
                                                                                    ( {{$exra['addon_price']}}
                                                                                    )</strong>
                                                                                x
                                                                                <strong> {{$exra['addon_count']}}</strong>
                                                                                =
                                                                                <strong>  {{$account_info!=NULL?$account_info->currency_symbol:"₹"}}{{$exra['addon_count'] * $exra['addon_price']}}</strong>
                                                                                <br>


                                                                            @endforeach


                                                                        </td>
                                                                        <td>{{$data['price']}}</td>
                                                                        <td>{{$data['quantity']}}</td>
                                                                        <td class="color-primary"> {{$data['quantity'] * $data['price']}}</td>


                                                                    </tr>

                                                                @endforeach
                                                            @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mt-4">
                                                <div class="col-sm-5 col-12 order-sm-0 order-1">
                                                    <div class="inv--payment-info">
                                                        <div class="row">

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-7 col-12 order-sm-1 order-0">
                                                    <div class="inv--total-amounts text-sm-right">
                                                        <div class="row">
                                                            <div class="col-sm-8 col-7">
                                                                <p class="">{{$selected_language->data['store_view_orders_sub_total'] ?? 'Sub Total:'}} </p>
                                                            </div>
                                                            <div class="col-sm-4 col-5">
                                                                <p class="">@include('layouts.render.currency',["amount"=>$order->sub_total])</p>
                                                            </div>
                                                            <div class="col-sm-8 col-7">
                                                                <p class="">{{$selected_language->data['store_view_orders_service_charge'] ?? 'Service Charge'}}</p>
                                                            </div>
                                                            <div class="col-sm-4 col-5">
                                                                <p class="">@include('layouts.render.currency',["amount"=>$order->store_charge])</p>
                                                            </div>
                                                            <div class="col-sm-8 col-7">
                                                                <p class=" discount-rate">{{$selected_language->data['store_view_orders_tax'] ?? 'Tax'}}</p>
                                                            </div>
                                                            <div class="col-sm-4 col-5">
                                                                <p class="">@include('layouts.render.currency',["amount"=>$order->tax])</p>
                                                            </div>
                                                            <div class="col-sm-8 col-7 grand-total-title">
                                                                <h4 class="">{{$selected_language->data['store_orders_total'] ?? 'Total:'}} : </h4>
                                                            </div>
                                                            <div class="col-sm-4 col-5 grand-total-amount">
                                                                <h4 class="">@include('layouts.render.currency',["amount"=>$order->total])</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>

                            {{--            End Normal Bill Preview--}}
                            <div class="m-3">
                                <div class="statbox widget box box-shadow">
                                    <div class="box_order_view">
                                        <div class="head">
                                            <div class="title">
                                                <h3>{{$selected_language->data['store_view_orders_thermal_preview'] ?? 'Thermal Receipt Preview'}}</h3>
                                            </div>
                                        </div>
                                        <div class="main" id="PrintThermalBill">

                                            <div class="ticket">

                                                <p style="width: 300px; text-align: center">
                                                    <strong
                                                        style="font-size: 22px; font-weight: bold">{{ Auth::user()->store_name }}</strong><br>
                                                    {{$selected_language->data['store_view_orders_customer_phone'] ?? 'Phone No'}}: {{ Auth::user()->phone }}
                                                    <br>{{$selected_language->data['store_view_orders_email'] ?? 'Email'}}: {{ Auth::user()->email }}
                                                    <br> {{ Auth::user()->address }}
                                                </p>

                                                <p style="width: 300px;">
                                                    <span>{{$order->customer_name}} - ({{$order->customer_phone}})
                                                        <br>@include('layouts.render.translation',["key" => "store_panel_common_date", "default"=> "store_panel_common"]): {{$order->order_unique_id}}<br>Placed: {{date('d-m-Y', strtotime($order->created_at)) }}</span>
                                                </p>

                                                <p style="width: 300px;font-size: 22px; font-weight: bold; text-align: center">
                                                    {{$selected_language->data['store_view_orders_thermal_cash_receipt'] ?? 'Cash Receipt'}}
                                                    </p>

                                                <table>
                                                    <thead>
                                                    <tr style="border-bottom: 0.1em solid #999898">
                                                        <th style="width: 50px;">{{$selected_language->data['store_view_orders_item_qty'] ?? 'Qty'}}</th>
                                                        <th style="width: 170px;">{{$selected_language->data['store_view_orders_item_name'] ?? 'Name'}}</th>
                                                        <th style="width: 65px;">{{$selected_language->data['store_view_orders_amount'] ?? 'Amount'}}</th>
                                                    </tr>

                                                    </thead>
                                                    <tbody>

                                                    @foreach($orderDetails as $order_data)
                                                        @foreach($order_data['order_details'] as $key => $data)
                                                            <tr style="border-bottom: 0.1em solid #999898">
                                                                <td class="thermal-head-titile">{{$data['quantity']}}</td>
                                                                <td><b>{{$data['name']}}</b><br>


                                                                    @foreach($data['order_details_extra_addon'] as $key => $exra)


                                                                        <span>{{$key+1}}</span>.
                                                                        {{$exra['addon_name']}}
                                                                        ( {{$exra['addon_price']}})
                                                                        x
                                                                        {{$exra['addon_count']}} =
                                                                        {{$account_info!=NULL?$account_info->currency_symbol:"₹"}}{{$exra['addon_count'] * $exra['addon_price']}}
                                                                        <br>


                                                                    @endforeach


                                                                </td>

                                                                {{--                                            <td class="thermal-head-titile">{{$data['price']}}</td>--}}
                                                                <td class="thermal-head-titile"> {{$data['quantity'] * $data['price']}}</td>


                                                            </tr>


                                                        @endforeach
                                                    @endforeach


                                                    </tbody>
                                                </table>

                                                <br>

                                                <div class="clearfix px-3" style="width: 300px;">

                                                    {{$selected_language->data['store_view_orders_sub_total'] ?? 'Subtotal'}}<span
                                                        class="float-right">@include('layouts.render.currency',["amount"=>$order->sub_total])</span><br>

                                                    {{$selected_language->data['store_view_orders_service_charge'] ?? 'Service Charge'}}
                                                    <span
                                                        class="float-right">@include('layouts.render.currency',["amount"=>$order->store_charge])</span><br>

                                                    {{$selected_language->data['store_view_orders_tax'] ?? 'Tax'}}
                                                    <span
                                                        class="float-right">@include('layouts.render.currency',["amount"=>$order->tax])</span><br>
                                                    <div
                                                        class="total-order">{{$selected_language->data['store_orders_total'] ?? 'Total'}}
                                                        <span
                                                            class="float-right">@include('layouts.render.currency',["amount"=>$order->total])</span>
                                                    </div>
                                                </div>


                                                <div class="px-3" style="width: 300px; text-align: center">
                                                    <hr>
                                                    {{$selected_language->data['store_view_orders_thermal_thank_you'] ?? ' Thank you !'}}
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>



    <script>
        function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }
    </script>




@endsection
