@extends("restaurants.layouts.restaurants_layout")

@section("restaurant_content")
    <style>


        .float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: #322A7D;
            color: #FFA101;
            border-radius: 50px;
            text-align: center;
            box-shadow: 2px 2px 3px #999;
        }


        .my-float {
            margin-top: 22px;
        }
    </style>


    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row layout-top-spacing layout-spacing">
                <div class="col-lg-12">


                    <div class="row">
                        <div class="col-12 col-md-9" style="">

                            <div class="tab-pane fade show active" id="home2" role="tabpanel"
                                 aria-labelledby="home-tab">

                                <div class="row">
                                    @foreach($banner as $ban)

                                        <div class="col-md-3">

                                            <div class="card">
                                                <img class="card-img-top" src="{{asset($ban->photo_url)}}"
                                                     alt="{{$ban->name}}">
                                                <div class="card-body"
                                                     style="padding-left: 15px; padding-top: 15px; padding-bottom: 0px">
                                                    <h5 class="card-title"><b>{{$ban->name}}</b></h5>
                                                </div>
                                                <div class="card-body" style="padding:15px">
                                                    <a href="{{route('store_admin.banneredit',$ban->id)}}"
                                                       class="card-link"><b>{{$selected_language->data['store_panel_common_edit'] ?? 'Edit'}}</b></a>
                                                    <a class="card-link"
                                                       onclick="if(confirm('Are you sure you want to delete this item?')){ event.preventDefault();document.getElementById('delete-form-{{$ban->id}}').submit(); }"><b
                                                            style="color: red">{{$selected_language->data['store_panel_common_delete'] ?? 'Delete'}}</b></a>

                                                    <form method="post"
                                                          action="{{route('store_admin.delete_slider')}}"
                                                          id="delete-form-{{$ban->id}}" style="display: none">
                                                        @csrf
                                                        @method('DELETE')
                                                        <input type="hidden" value="{{$ban->id}}" name="id">
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                    @endforeach
                                </div>

                            </div>

                            <a href="{{route('store_admin.addbanner')}}" class="float">
                                <div style="padding-top: 29%">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                         viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                         stroke-linecap="round" stroke-linejoin="round"
                                         class="feather feather-plus">
                                        <line x1="12" y1="5" x2="12" y2="19"></line>
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                    </svg>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
