@extends("admin.admin_layout.adminlayout")

@section("admin_content")

    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row layout-top-spacing">

                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                    <div class="widget widget-account-invoice-two">
                        <div class="widget-content">
                            <div class="account-box">
                                <div class="info">
                                    <h5 class="">{{ __('chef.stores') }}</h5>
                                    <p class="inv-balance" style="color: blue">{{$store_count}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                    <div class="widget widget-account-invoice-two">
                        <div class="widget-content">
                            <div class="account-box">
                                <div class="info">
                                    <h5 class="">{{ __('chef.products') }}</h5>
                                    <p class="inv-balance" style="color: blue">{{$product_count}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                    <div class="widget widget-account-invoice-two">
                        <div class="widget-content">
                            <div class="account-box">
                                <div class="info">
                                    <h5 class="">{{ __('chef.earnings') }}</h5>
                                    <p class="inv-balance" style="color: blue">@include('layouts.render.currency',["amount"=>$earnings])</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                    <div class="widget widget-account-invoice-two">
                        <div class="widget-content">
                            <div class="account-box">
                                <div class="info">
                                    <h5 class="">{{ __('chef.pendingstores') }}</h5>
                                    <p class="inv-balance" style="color: blue">{{$pending_stores }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-table-one">
                        <div class="widget-heading">
                            <a href={{route('transactions')}}>
                                <h5 class="">Transactions</h5>
                            </a>
                        </div>

                        <div class="widget-content">
                            @foreach($transactions as $value)
                                <div class="transactions-list">
                                    <div class="t-item">
                                        <div class="t-company-name">
                                            <div class="t-icon">
                                                <div class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                                </div>
                                            </div>
                                            <div class="t-name">
                                                <h4>
                                                    @foreach($value->store($value->store_id) as $data)
                                                        {{ $data->store_name }}
                                                    @endforeach
                                                </h4>
                                                <p class="meta-date">{{ $value->subscription_name}} / @include('layouts.render.currency',["amount"=>$value->subscription_price])</p>
                                            </div>

                                        </div>
                                        <div class="t-rate rate-dec">
                                            <p><span>{{$value->payment_status == 'unpaid' ? "UnPaid":"Paid"}}</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down"><line x1="12" y1="5" x2="12" y2="19"></line><polyline points="19 12 12 19 5 12"></polyline></svg></p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-table-two">

                        <div class="widget-heading">
                            <h5 class="">New Registrations</h5>
                        </div>

                        <div class="widget-content">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th><div class="th-content">Store</div></th>
                                        <th><div class="th-content">Email</div></th>
                                        <th><div class="th-content th-heading">Phone number</div></th>
                                        <th><div class="th-content">Subscription End Date</div></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($new_stores as $data)
                                            <tr>
                                                <td><div class="td-content customer-name"><img src="{{asset(($data->logo_url !=NULL) && ($data->logo_url != "NaN") ? $data->logo_url :'assets/images/store.jpg')}}" width="90px" height="90px">{{$data->store_name}}</div></td>
                                                <td><div class="td-content product-brand">{{$data->email}}</div></td>
                                                <td><div class="td-content">{{$data->phone}}</div></td>
                                                <td><div class="td-content pricing"><span class="">{{date('d-m-Y',strtotime($data->subscription_end_date))}}</span></div></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-table-three">

                        <div class="widget-heading">
                            <h5 class="">Expired Stores</h5>
                        </div>

                        <div class="widget-content">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th><div class="th-content">Store</div></th>
                                        <th><div class="th-content th-heading">Email</div></th>
                                        <th><div class="th-content th-heading">Phone number</div></th>
                                        <th><div class="th-content">Subscription End Date</div></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($expired_stores as $data)
                                            <tr>
                                                <td><div class="td-content product-name"><img src="{{asset(($data->logo_url !=NULL) && ($data->logo_url != "NaN") ? $data->logo_url :'assets/images/store.jpg')}}" width="90px" height="90px">{{$data->store_name}}</div></td>
                                                <td><div class="td-content"><span class="pricing">{{$data->email}}</span></div></td>
                                                <td><div class="td-content"><span class="discount-pricing">{{$data->phone}}</span></div></td>
                                                <td><div class="td-content">{{date('d-m-Y',strtotime($data->subscription_end_date))}}</div></td>
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
{{--        <div class="footer-wrapper">--}}
{{--            <div class="footer-section f-section-1">--}}
{{--                <p class="">Copyright © 2020 <a target="_blank" href="https://designreset.com">DesignReset</a>, All rights reserved.</p>--}}
{{--            </div>--}}
{{--            <div class="footer-section f-section-2">--}}
{{--                <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></p>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>

@endsection
