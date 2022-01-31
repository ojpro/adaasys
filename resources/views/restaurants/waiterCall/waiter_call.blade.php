@extends("restaurants.layouts.restaurants_layout")

@section("restaurant_content")

    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row layout-top-spacing layout-spacing">
                <div class="col-lg-12">

                            <div class="tab-pane fade show active" id="home2" role="tabpanel" aria-labelledby="home-tab">


                                <div class="row">


                                    @php $i=1 @endphp
                                    @foreach($calls as $data)

                                        <div class="col-md-4 layout-spacing">

                                            <div class="widget widget-account-invoice-one">

                                                <div class="widget-content p-3">
                                                    <div class="invoice-box">

                                                        <div class="row">
                                                            <div class="col-6 widget-heading">
                                                                <h5 class="text-left">{{ $data->customer_name }}</h5>
                                                            </div>
                                                            <div class="col-offset-6 col-6 text-right">
                                                                @if($data->is_completed == 0)
                                                                    <a href="#" class="" onclick="document.getElementById('compete-waiter-{{$data->id}}').submit();">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock"><circle cx="12" cy="12" r="10"></circle></svg>
                                                                    </a>
                                                                @endif
                                                                @if($data->is_completed == 1)
                                                                    <a class="text-success">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                                                                    </a>
                                                                @endif
                                                                <form style="visibility: hidden" method="post"
                                                                      action="{{route('store_admin.update_waiter_call_status',['id'=>$data->id])}}"
                                                                      id="compete-waiter-{{$data->id}}">
                                                                    @csrf
                                                                    @method('patch')
                                                                    <input style="visibility:hidden" name="is_completed" type="hidden" value="1">
                                                                </form>
                                                            </div>
                                                        </div>

                                                        <div class="inv-detail" style="padding-bottom: 0">
                                                            <div class="info-detail-1">
                                                                <p>{{$selected_language->data['store_view_orders_customer_phone'] ?? 'Phone No'}}</p>
                                                                <p>{{ $data->customer_phone }}</p>
                                                            </div>
                                                            <div class="info-detail-2">
                                                                <p>{{$selected_language->data['store_orders_table_no'] ?? 'Table No'}}</p>
                                                                <p>{{ $data->table_name }}</p>
                                                            </div>
                                                            <div class="info-detail-2">
                                                                <p>{{$selected_language->data['store_view_waiter_call_comments'] ?? 'Comment.'}}</p>
                                                                <p>{{ $data->comment }}</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                            </div>

                        </div>


            </div>
        </div>
    </div>

    <script language="javascript">
        setTimeout(function(){
            window.location.reload(1);
        }, 10000);
    </script>
@endsection
