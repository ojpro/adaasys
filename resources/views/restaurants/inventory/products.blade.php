
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>{{$selected_language->data['store_panel_common_products'] ?? 'Products'}}</h4>
                                </div>
                            </div>
                        </div>


                        <div class="table-responsive mt-2">
                            <table class="multi-table table table-hover text-center" style="width:100%" id="product-table">
                                <thead class="thead-light">

                                        <th>{{$selected_language->data['store_orders_no'] ?? 'No'}}</th>
                                        <th>{{$selected_language->data['store_panel_common_name'] ?? 'Name'}}</th>
                                        <th>{{$selected_language->data['store_panel_common_price'] ?? 'Price'}}</th>
                                        <th>{{$selected_language->data['store_panel_common_more'] ?? 'More'}}</th>
                                        <th>{{$selected_language->data['store_panel_common_isveg'] ?? 'is Veg?'}}</th>
                                        <th>{{$selected_language->data['store_panel_common_created_at'] ?? 'Created At'}}</th>
                                        <th>{{$selected_language->data['store_panel_common_action'] ?? 'Action'}}</th>
                                        <th>
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

                                @foreach($products as $pro)
                                    <tr>
                                        <td> {{ $i++}} </td>

                                        <td> {{ $pro->name }} </td>

                                        <td>
                                            <b> @include('layouts.render.currency',["amount"=>$pro->price])</b>
                                        </td>
                                        <td>
                                            <strong>
                                                <span class="badge badge-{{$pro->is_recommended == 1 ? "info":"warning"}}">
                                                    {{$pro->is_recommended == 1 ? "Recommended":"Not Recommended"}}
                                                </span>

                                            </strong>
                                        </td>
                                        <td>
                                            <span class="badge badge-sm btn-{{$pro->is_veg == 1 ? "success":"danger"}} mb-2 mr-2">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                     width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none"
                                                     stroke="currentColor" stroke-width="2"
                                                     stroke-linecap="round"
                                                     stroke-linejoin="round"
                                                     class="feather feather-target">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                    <circle cx="12" cy="12" r="6"></circle>
                                                    <circle cx="12" cy="12" r="2"></circle>
                                                </svg>
                                            </span>
                                        </td>


                                        <td>
                                            {{$pro->created_at->diffForHumans()}}
                                        </td>


                                        <td style="text-align: center">
                                            <span>
                                                <a href="{{route('store_admin.update_products',$pro->id)}}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round"
                                                         stroke-linejoin="round" class="feather feather-edit"><path
                                                            d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path
                                                            d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                                                </a>



                                            </span>
                                        </td>
                                        <td>
                                            <label class="switch table-controls  s-outline s-outline-dark">
                                                <input type="checkbox" onchange="triggerProductPower(this,{{$pro->id}})" id="power-toggle-{{$pro->id}}" value="{{$pro->is_active}}" {{$pro->is_active== 1 ? "checked":''}}>
                                                <span class="slider round"></span>
                                            </label>
                                        </td>
                                    </tr>

                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>



                    <a href="{{route('store_admin.addproducts')}}" class="float" style="background-color: #0E1726">
                        <div class="text-white" style="padding-top: 29%">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-plus">
                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg>
                        </div>
                    </a>


    <script>

        // Set home as default active page content
        var activeContent = document.getElementById('tutorials');
        activeContent.style.display = 'block';

        // Add active class to home button
        var activeButton = document.getElementById('active-button');
        activeButton.classList.add('active');

        // Show or hide page content on click event
        function openContent(event, contentId) {
            var i;

            // Loop through and hide page content
            var contentPage = document.getElementsByClassName('content-page');
            for (i = 0; i < contentPage.length; i++) {
                contentPage[i].style.display = 'none';
            }

            // Loop through content buttons and replace the active class to empty
            contentButton = document.getElementsByClassName('content-button');
            for (i = 0; i < contentButton.length; i++) {
                contentButton[i].className = contentButton[i].className.replace('active', '');
            }

            // Loop through HTML id's to show the element
            // with an active class during and event

            document.getElementById(contentId).style.display = 'block';
            event.currentTarget.className += ' active';
        }
    </script>


    <script>

        function myFunction() {
            var input = document.getElementById("Search");
            var filter = input.value.toLowerCase();
            var nodes = document.getElementsByClassName('target');

            for (i = 0; i < nodes.length; i++) {
                if (nodes[i].innerText.toLowerCase().includes(filter)) {
                    nodes[i].style.display = "block";
                } else {
                    nodes[i].style.display = "none";
                }
            }
        }
    </script>

