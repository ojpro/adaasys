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
                    <div class="">

                        <div class="row">
                            <div class="col-md-12">
                                <!-- Tabs nav -->
                                <div class="border-top-tab">

                                    <ul class="nav nav-tabs mb-3 mt-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="category-tab" data-toggle="tab" href="#category" role="tab" aria-controls="category" aria-selected="true">
                                                {{$selected_language->data['store_panel_common_category'] ?? 'Category'}}
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" id="products-tab" data-toggle="tab" href="#products" role="tab" aria-controls="products" aria-selected="false">
                                                {{$selected_language->data['store_panel_common_products'] ?? 'Products'}}
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" id="addon-categories-tab" data-toggle="tab" href="#addon-categories" role="tab" aria-controls="addon-categories" aria-selected="false">
                                                {{$selected_language->data['store_panel_common_addon_categories'] ?? 'Addon Categories'}}
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" id="addons-tab" data-toggle="tab" href="#addons" role="tab" aria-controls="addons" aria-selected="false">
                                                {{$selected_language->data['store_panel_common_addon_addons'] ?? 'Addons'}}
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                            </div>

                            <div class="widget-content col-12">



                                <!-- Tabs content -->
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade pt-3 pl-3 pr-4 pb-1 show active" id="category" role="tabpanel" aria-labelledby="category-tab">
                                        @include('restaurants.inventory.category')
                                    </div>
                                    <div class="tab-pane fade pt-3 pl-3 pr-4 pb-1" id="products" role="tabpanel" aria-labelledby="products-tab">
                                        @include('restaurants.inventory.products')
                                    </div>
                                    <div class="tab-pane fade pt-3 pl-3 pr-4 pb-1" id="addon-categories" role="tabpanel" aria-labelledby="addon-categories-tab">
                                        @include('restaurants.addons.addon_categories')
                                    </div>
                                    <div class="tab-pane fade pt-3 pl-3 pr-4 pb-1" id="addons" role="tabpanel" aria-labelledby="addons-tab">
                                        @include('restaurants.addons.addon')
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
        $(document).ready(() => {
            let url = location.href.replace(/\/$/, "");

            if (location.hash) {
                const hash = url.split("#");
                $('#v-pills-tabContent a[href="#'+hash[1]+'"]').tab("show");
                url = location.href.replace(/\/#/, "#");
                history.replaceState(null, null, url);
                setTimeout(() => {
                    $(window).scrollTop(0);
                }, 400);
            }

            $('a[data-toggle="tab"]').on("click", function() {
                let newUrl;
                const hash = $(this).attr("href");
                if(hash == "#category") {
                    newUrl = url.split("#")[0];
                } else {
                    newUrl = url.split("#")[0] + hash;
                }
                newUrl += "/";
                history.replaceState(null, null, newUrl);
            });
        });
    </script>


@endsection



