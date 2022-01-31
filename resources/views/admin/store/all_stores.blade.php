@extends("admin.admin_layout.adminlayout")

@section("admin_content")
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="row layout-top-spacing">

                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-6">
                                    <h4>All Stores</h4>
                                </div>
                                <div class="col-6 text-right">
                                    <button
                                        onclick="event.preventDefault(); document.getElementById('add_new').submit();"
                                        class="btn btn-primary mt-2 mr-2" data-toggle="tooltip"
                                        data-original-title="Add Store">
                                        <span class="btn-inner--text">Add Store</span>
                                    </button>
                                    <form action="{{route('add_store')}}" method="get" id="add_new"></form>
                                </div>
                            </div>
                        </div>
                        <!-- Light table -->
                        <div class="table-responsive">
                            <table id="zero-config" class="table table-hover" style="width:100%">
                                <thead class="thead-light">
                                <tr>
                                    <th class="text-center">Id</th>
                                    <th class="text-center">Store Name</th>
                                    <th class="text-center"> Logo</th>
                                    <th class="text-center"> Store Email</th>

                                    <th class="text-center">Phone No</th>
                                    <th class="text-center">Subscription End Date</th>
                                    <th class="text-center">Visibility</th>
                                    <th class="text-center">Action</th>
                                    <th class="text-center">
                                        <div class="icon-container ">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round"
                                                 class="feather feather-power">
                                                <path d="M18.36 6.64a9 9 0 1 1-12.73 0"></path>
                                                <line x1="12" y1="2" x2="12" y2="12"></line>
                                            </svg>

                                        </div>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @php $i=1 @endphp
                                @foreach($stores as $store)
                                    <tr>

                                        <td class="text-center">
                                            <span class="text-muted">{{ $i++}}</span>
                                        </td>
                                        <td class="text-center">
                                            <span class="text-muted">{{ $store->store_name }}</span>
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-center">
                                                <div class="usr-img-frame mr-2 rounded-circle">
                                                    <img alt="avatar" class="img-fluid rounded-circle"
                                                         src="{{asset(($store->logo_url !=NULL) && ($store->logo_url != "NaN") ? $store->logo_url :'assets/images/store.jpg')}}">
                                                </div>
                                            </div>
                                        </td>


                                        <td class="text-center">{{ $store->email }}</td>
                                        <td class="text-center">{{ $store->phone }}</td>
                                        <td class="text-center">{{ date("d-m-Y",strtotime($store->subscription_end_date)) }}</td>
                                        <td class="text-center">
                                            @if($store->subscription_end_date < date('Y-m-d'))
                                                <span class="badge badge-warning">EXPIRED</span>
                                            @else
                                                <span
                                                    class="badge badge-{{$store->is_visible == 1 ? "success":"danger"}}"
                                                    style="width: 69px">{{$store->is_visible == 1 ? "LIVE":"HIDDEN"}}</span>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <ul class="table-controls">
                                                <li>
                                                    <a href={{route('view_store',['view_id'=>$store->view_id])}} target="_blank" data-toggle="tooltip"
                                                       data-placement="top" title="View Menu">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                             stroke-width="2" stroke-linecap="round"
                                                             stroke-linejoin="round" class="feather feather-eye">
                                                            <path
                                                                d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                            <circle cx="12" cy="12" r="3"></circle>
                                                        </svg>
                                                    </a></li>
                                                <li>
                                                    <a href={{route('download_qr',['view_id'=>$store->view_id])}} data-toggle="tooltip"
                                                       data-placement="top" title="View Qr-code">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                             stroke-width="2" stroke-linecap="round"
                                                             stroke-linejoin="round" class="feather feather-grid">
                                                            <rect x="3" y="3" width="7" height="7"></rect>
                                                            <rect x="14" y="3" width="7" height="7"></rect>
                                                            <rect x="14" y="14" width="7" height="7"></rect>
                                                            <rect x="3" y="14" width="7" height="7"></rect>
                                                        </svg>
                                                    </a></li>
                                                <li><a href={{route('edit_stores',$store->id)}} data-toggle="tooltip"
                                                       data-placement="top" title="Edit">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                             stroke-width="2" stroke-linecap="round"
                                                             stroke-linejoin="round" class="feather feather-edit">
                                                            <path
                                                                d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                            <path
                                                                d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                                        </svg>
                                                    </a></li>
                                                <li><a href={{route('edit_store_url',$store->id)}} data-toggle="tooltip"
                                                       data-placement="top" title="Edit Store Url">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                             stroke-width="2" stroke-linecap="round"
                                                             stroke-linejoin="round" class="feather feather-link">
                                                            <path
                                                                d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path>
                                                            <path
                                                                d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path>
                                                        </svg>
                                                    </a></li>
                                            </ul>
                                        </td>
                                        <td>
                                            <label class="switch table-controls  s-outline s-outline-dark">
                                                <input type="checkbox" onchange="triggerStorePower(this,{{$store->id}})" id="power-toggle-{{$store->id}}" value="{{$store->is_visible}}" {{$store->is_visible == 1 ? "checked":''}}>
                                                <span class="slider round"></span>
                                            </label>
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
