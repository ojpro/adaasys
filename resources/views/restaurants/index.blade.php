@extends("restaurants.layouts.restaurants_layout")

@section("restaurant_content")
    <style>

        .card-widget {

        }
    </style>

    <div id="content" class="main-content">
        @include('restaurants.notification.expired_notification')
        @include('restaurants.notification.new_order_notification')
        @include('restaurants.notification.call_waiter_notification')
        <div class="layout-px-spacing">
            <div class="row layout-top-spacing layout-spacing p-0">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="card ad-info-card p-3 shadow">
                        <div class="card-body dd-flex align-items-center">
                            <div class="row">
                                <div class="col">
                                    <input type="text" readonly value="{{route('view_store',[Auth::user()->view_id])}}"
                                           class="form-control">
                                </div>
                                <div class="col-auto">
                                    <button class="btn btn-primary"
                                            onclick="copyToClipboard()">{{$selected_language->data['store_dashboard_copy'] ?? 'Copy'}}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="card ad-info-card shadow">
                        <div class="card-body dd-flex align-items-center">
                            <div class="icon-info-text">
                                <h5 class="ad-title">{{$selected_language->data['store_dashboard_total_orders'] ?? 'Total Orders'}}</h5>
                                <h4 class="ad-card-title">{{$order_count}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="card ad-info-card shadow">
                        <div class="card-body dd-flex align-items-center">
                            <div class="icon-info-text">
                                <h5 class="ad-title">{{$selected_language->data['store_dashboard_item_sold'] ?? 'Item Sold'}}</h5>
                                <h4 class="ad-card-title">{{$item_sold}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="card ad-info-card shadow">
                        <div class="card-body dd-flex align-items-center">
                            <div class="icon-info-text">
                                <h5 class="ad-title">{{$selected_language->data['store_dashboard_total_earnings'] ?? 'Total Earnings'}}</h5>
                                <h4 class="ad-card-title">@include('layouts.render.currency',["amount"=>$earnings])</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row layout-top-spacing layout-spacing">
                @foreach($orders as $pending)
                    <div class="col-md-3 pb-3">
                        <div class="card shadow">
                            <div class="card-body">
                                <p class="meta-date">{{$selected_language->data['store_dashboard_order_id'] ?? 'Order Id'}}</p>

                                <h5 class="card-title"><strong>{{ $pending->order_unique_id }}</strong></h5>
                                <p class="card-text">
                                    {{$selected_language->data['store_dashboard_table_no'] ?? 'Table No'}} : <b
                                        class="float-right text-primary">{{ $pending->table_no }}</b><br>
                                    {{$selected_language->data['store_dashboard_total'] ?? 'Total'}} <b
                                        class="float-right text-primary">@include('layouts.render.currency',["amount"=>$pending->total])</b>
                                </p>
                                <hr class="bg-primary" style="opacity: 30%">

                                <div class="row">
                                    <div class="col-8">
                                            <i class="fas fa-user"></i> &nbsp; <b class="text-primary">{{ $pending->customer_name }}</b>
                                    </div>
                                    <div class="col-4 text-right">
                                        @if($pending->status == 1)
                                                <a onclick="document.getElementById('accept_order-{{$pending->id}}').submit();">
                                                    <i class="fas fa-check-circle fa-2x text-success"></i></a>
                                                <a onclick="document.getElementById('reject_order{{$pending->id}}').submit();"><i
                                                        class="fas fa-times-circle fa-2x text-danger"></i></a>
                                        @endif
                                    </div>

                                </div>

                            </div>
                        </div>
                        <form style="visibility: hidden" method="post"
                              action="{{route('store_admin.update_order_status',['id'=>$pending->id])}}"
                              id="accept_order-{{$pending->id}}">
                            @csrf
                            @method('patch')
                            <input style="visibility:hidden" name="status" type="hidden" value="2">
                        </form>

                        <form style="visibility: hidden" method="post"
                              action="{{route('store_admin.update_order_status',['id'=>$pending->id])}}"
                              id="reject_order{{$pending->id}}">
                            @csrf
                            @method('patch')
                            <input style="visibility:hidden" name="status" type="hidden" value="3">
                        </form>

                        <form style="visibility: hidden" method="post"
                              action="{{route('store_admin.update_order_status',['id'=>$pending->id])}}"
                              id="complete_order{{$pending->id}}">
                            @csrf
                            @method('patch')
                            <input style="visibility:hidden" name="status" type="hidden" value="4">
                        </form>
                    </div>

                @endforeach

            </div>
        </div>
    </div>



    <script>

        function copyToClipboard() {
            const str = document.getElementById('item-to-copy').innerText;
            const el = document.createElement('textarea');
            el.value = str;
            el.setAttribute('readonly', '');
            el.style.position = 'absolute';
            el.style.left = '-9999px';
            document.body.appendChild(el);
            el.select();
            document.execCommand('copy');
            document.body.removeChild(el);
        }
    </script>


@endsection
