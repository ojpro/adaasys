
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-6">
                                    <h4>{{$selected_language->data['store_panel_common_category'] ?? 'Category'}}</h4>
                                </div>
                                <div class="col-6 text-right">
                                    <a href="{{route('store_admin.category_sort')}}" class="btn btn-sm btn-primary btn-round btn-icon" >
                                        <span class="btn-inner--text">    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-move"><polyline points="5 9 2 12 5 15"></polyline><polyline points="9 5 12 2 15 5"></polyline><polyline points="15 19 12 22 9 19"></polyline><polyline points="19 9 22 12 19 15"></polyline><line x1="2" y1="12" x2="22" y2="12"></line><line x1="12" y1="2" x2="12" y2="22"></line></svg></span>
                                        &nbsp;<span class="btn-inner--text">{{$selected_language->data['store_panel_sort_category_text'] ?? 'Sort Category'}}</span>
                                    </a>

                                </div>

                            </div>


                        </div>

                        <div class="alert alert-warning alert-dismissible fade show mt-3" style="margin-bottom: 15px;" role="alert">
                            <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                            <span class="alert-text"><strong>{{$selected_language->data['store_view_orders_thermal_'] ?? 'Delete Alert!'}}</strong>
                                {{$selected_language->data['store_panel_inventory_category_delete_alert_msg'] ?? 'Careful to delete category. auto delete all products in that category.'}}
                            </span>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>

                        <div class="table-responsive">
                            <table class="multi-table table table-hover" style="width:100%">
                                <thead class="thead-light">
                                    <tr>
                                        <th>{{$selected_language->data['store_orders_no'] ?? 'No'}}</th>
                                        <th>{{$selected_language->data['store_panel_common_name'] ?? 'Name'}}</th>
                                        <th>{{$selected_language->data['store_panel_inventory_category_no_of_products'] ?? 'No of Products'}}</th>
                                        <th class="no-content">{{$selected_language->data['store_panel_common_action'] ?? 'Action'}}</th>
                                    </tr>
                                </thead>
                                <tbody>

                                @php $i=1 @endphp
                                @foreach($category as $cat)

                                    <tr>
                                        <td>{{ $i++}} </td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="usr-img-frame mr-2 rounded-circle">
                                                    <img alt="avatar" class="img-fluid rounded-circle"
                                                         src="{{asset($cat->image_url !=NULL ? $cat->image_url:'themes/default/images/all-img/empty.png')}}">
                                                </div>
                                                <p class="align-self-center mb-0">{{$cat->name}}</p>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-info">{{$cat->productinfos_count}} {{$selected_language->data['store_panel_common_products'] ?? 'Products'}}</span>
                                        </td>
                                        <td>
                                            <ul class="table-controls">
                                                <li>
                                                    <a href="{{route('store_admin.update_category',$cat->id)}}"
                                                       data-toggle="tooltip" data-placement="top" title=""
                                                       data-original-title="{{$selected_language->data['store_edit'] ?? 'Edit'}}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                             stroke-width="2" stroke-linecap="round"
                                                             stroke-linejoin="round" class="feather feather-edit-2">
                                                            <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"/>
                                                        </svg>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a onclick="if(confirm('Are you sure you want to delete this category, auto delete all products in this category ?')){ event.preventDefault();document.getElementById('delete-form-{{$cat->id}}').submit(); }"
                                                       data-toggle="tooltip" data-placement="top" title=""
                                                       data-original-title="{{$selected_language->data['store_delete'] ?? 'Delete'}}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                             stroke-width="2" stroke-linecap="round"
                                                             stroke-linejoin="round" class="feather feather-trash-2">
                                                            <polyline points="3 6 5 6 21 6"/>
                                                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/>
                                                            <line x1="10" y1="11" x2="10" y2="17"/>
                                                            <line x1="14" y1="11" x2="14" y2="17"/>
                                                        </svg>
                                                    </a></li>
                                            </ul>
                                            <form method="post" action="{{route('store_admin.delete_category')}}"
                                                  id="delete-form-{{$cat->id}}" style="display: none">
                                                @csrf
                                                @method('DELETE')
                                                <input type="hidden" value="{{$cat->id}}" name="id">
                                            </form>
                                        </td>
                                    </tr>

                                @endforeach
                                </tbody>
                            </table>
                        </div>


                    </div>

                <a href="{{route('store_admin.addcategories')}}" class="float" style="background-color: #0E1726">
                    <div class="text-white" style="padding-top: 29%">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-plus">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg>
                    </div>
                </a>
