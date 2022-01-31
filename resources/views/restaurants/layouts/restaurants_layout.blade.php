<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

        <title>{{ Auth::user()->store_name }}</title>
        <link rel="icon" type="image/png" href="{{asset($account_info->fav_icon !=NULL ? $account_info->fav_icon:'themes/default/images/all-img/fav.png')}}">

        <link href={{asset('assets/newcorkui/css/loader.css')}} rel="stylesheet" type="text/css" />
        <script src={{asset('assets/newcorkui/js/loader.js')}}></script>
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
        <link href={{asset('assets/newcorkui/bootstrap/css/bootstrap.min.css')}} rel="stylesheet" type="text/css" />
        <link href={{asset('assets/newcorkui/css/plugins.css')}} rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->

        <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
        <link href={{asset('assets/newcorkui/plugins/apex/apexcharts.css')}} rel="stylesheet" type="text/css">
        <link href={{asset('assets/newcorkui/css/dashboard/dash_1.css')}} rel="stylesheet" type="text/css" />


        <script src={{asset("assets/newcorkui/plugins/select2/select2.min.js")}}></script>
        <script src={{asset("assets/newcorkui/plugins/select2/custom-select2.js")}}></script>
        <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

        <!-- BEGIN PAGE LEVEL CUSTOM STYLES -->
{{--        <link href={{asset("assets/newcorkui/css/scrollspyNav.css")}} rel="stylesheet" type="text/css" />--}}
        <link rel="stylesheet" type="text/css" href={{asset("assets/newcorkui/css/forms/theme-checkbox-radio.css")}}>
        <link href={{asset("assets/newcorkui/css/tables/table-basic.css")}} rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL CUSTOM STYLES -->

        <!-- BEGIN DATATABLE STYLES -->
        <link rel="stylesheet" type="text/css" href={{asset("assets/newcorkui/plugins/table/datatable/datatables.css")}}>
        <link rel="stylesheet" type="text/css" href={{asset("assets/newcorkui/plugins/table/datatable/dt-global_style.css")}}>
        <link rel="stylesheet" type="text/css" href={{asset("assets/newcorkui/plugins/table/datatable/custom_dt_multiple_tables.css")}}>
        <!-- END DATATABLE STYLES -->

        <!-- BEGIN STORE PAGE LEVEL CUSTOM STYLES -->
        <link rel="stylesheet" type="text/css" href={{asset("assets/newcorkui/plugins/table/datatable/custom_dt_html5.css")}}>
        <link rel="stylesheet" type="text/css" href={{asset("assets/newcorkui/plugins/table/datatable/dt-global_style.css")}}>
        <!-- END STORE PAGE LEVEL CUSTOM STYLES -->
        <link rel="stylesheet" href={{asset('new/css/toastr.min.css')}} type="text/css">
        <!-- Slider switch -->
{{--        <link href={{asset("assets/newcorkui/css/scrollspyNav.css")}} rel="stylesheet" type="text/css" />--}}
        <link rel="stylesheet" type="text/css" href={{asset("assets/newcorkui/css/forms/switches.css")}}>

        <!--  BEGIN CUSTOM STYLE FILE  -->
        <link href={{asset("assets/newcorkui/css/components/custom-modal.css")}} rel="stylesheet" type="text/css" />
        <link href={{asset("assets/newcorkui/css/widgets/modules-widgets.css")}} rel="stylesheet" type="text/css" />
        <!--  END CUSTOM STYLE FILE  -->

        <!--  BEGIN CARD CUSTOM STYLE FILE  -->
        <link href={{asset("assets/newcorkui/css/components/tabs-accordian/custom-tabs.css")}} rel="stylesheet" type="text/css" />
        <!--  END CARD CUSTOM STYLE FILE  -->

        <link href={{asset("assets/newcorkui/css/elements/search.css")}} rel="stylesheet" type="text/css" />
        <link href={{asset("assets/newcorkui/css/elements/infobox.css")}} rel="stylesheet" type="text/css" />
        <link href={{asset("assets/newcorkui/css/components/cards/card.css")}} rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>



        <link href=" {{asset('assets/newcorkui/plugins/drag-and-drop/dragula/dragula.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/newcorkui/plugins/drag-and-drop/dragula/example.css')}}" rel="stylesheet" type="text/css" />
        <link href={{asset("assets/newcorkui/plugins/bootstrap-select/bootstrap-select.min.css")}} rel="stylesheet" type="text/css" />
        <link href={{asset("assets/newcorkui/new.css")}} rel="stylesheet" type="text/css" />

        <style>
            .razorpay-payment-button {
                background-color: #8dbf42;
                border-color: #8dbf42;
                padding: 0.4375rem 1.25rem;
                text-shadow: none;
                font-weight: normal;
                white-space: normal;
                word-wrap: break-word;
                touch-action: manipulation;
                will-change: opacity, transform;
                color: white;
                border-style:none;
                border-radius: 3px;
            }
        </style>

    </head>
    <body>

{{--        <div id="load_screen">--}}
{{--            <div class="loader">--}}
{{--                <div class="loader-content">--}}
{{--                    <div class="spinner-grow align-self-center">--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        @include('restaurants.layouts.navbar')
        <div class="main-container" id="container">

            <div class="overlay"></div>
            <div class="search-overlay"></div>

            <!--  BEGIN SIDEBAR  -->
            @include('restaurants.layouts.side_bar')
            <!--  END SIDEBAR  -->

            @yield("restaurant_content")


        </div>

@include('restaurants.layouts.scripts.javascript')
        <!-- END MAIN CONTAINER -->
        <script src={{asset("new/js/toastr.min.js")}}></script>
        {!! Toastr::message() !!}


        <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
        <script src={{asset("new/vendor/jquery/dist/jquery.min.js")}}></script>
        <script src={{asset("assets/newcorkui/bootstrap/js/popper.min.js")}}></script>
        <script src={{asset("assets/newcorkui/bootstrap/js/bootstrap.min.js")}}></script>
        <script src={{asset("assets/newcorkui/plugins/perfect-scrollbar/perfect-scrollbar.min.js")}}></script>
        <script src={{asset("assets/newcorkui/js/app.js")}}></script>
        <script>
            $(document).ready(function() {
                App.init();
            });
        </script>

        <script src={{asset("assets/newcorkui/plugins/highlight/highlight.pack.js")}}></script>
        <script src={{asset("assets/newcorkui/js/custom.js")}}></script>
        <!-- END GLOBAL MANDATORY SCRIPTS -->

        <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
        <script src={{asset("assets/newcorkui/plugins/apex/apexcharts.min.js")}}></script>
        <script src={{asset("assets/newcorkui/assets/js/widgets/modules-widgets.js")}}></script>
        <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

        <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
        <script src={{asset("assets/newcorkui/plugins/apex/apexcharts.min.js")}}></script>
        <script src={{asset("assets/newcorkui/js/dashboard/dash_1.js")}}></script>
        <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

        <!-- BEGIN PAGE LEVEL CUSTOM SCRIPTS -->
        <script src={{asset("assets/newcorkui/js/scrollspyNav.js")}}></script>
        <script>
            checkall('todoAll', 'todochkbox');
            $('[data-toggle="tooltip"]').tooltip()
        </script>
        <!-- END PAGE LEVEL CUSTOM SCRIPTS -->

        <!-- #URL editing -->



        <!-- BEGIN DATA TABLE SCRIPTS -->
        <script src={{asset("assets/newcorkui/plugins/table/datatable/datatables.js")}}></script>
        <script>
            $('#zero-config').DataTable({
                "oLanguage": {
                    "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                    "sInfo": "Showing page _PAGE_ of _PAGES_",
                    "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                    "sSearchPlaceholder": "Search...",
                    "sLengthMenu": "Results :  _MENU_",
                },
                "stripeClasses": [],
                "lengthMenu": [10, 25, 50, 100],
                "pageLength": 10
            });

            $(document).ready(function() {
                $('table.multi-table').DataTable({
                    "oLanguage": {
                        "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                        "sInfo": "Showing page _PAGE_ of _PAGES_",
                        "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                        "sSearchPlaceholder": "Search...",
                        "sLengthMenu": "Results :  _MENU_",
                    },
                    "stripeClasses": [],
                    "lengthMenu": [10, 25, 50, 100],
                    "pageLength": 10,
                    drawCallback: function () {
                        $('.t-dot').tooltip({ template: '<div class="tooltip status" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' })
                        $('.dataTables_wrapper table').removeClass('table-striped');
                    }
                });
            } );
        </script>
        <!-- END DATA TABLE SCRIPTS -->

        <!-- Deep linking -->

        <!-- End Deep linking -->

        <script>
            $('#printButton').on('click',function(){
                $('#printThis').printThis();
            })
            //on single click, accept order and disable button
            $('body').on("click", ".acceptOrderBtn", function(e) {
                $(this).addClass('pointer-none');
            });
            //on Single click do not cancel order
            $('body').on("click", ".cancelOrderBtn", function(e) {
                return false;
            });
            //cancel order on double click
            $('body').on("dblclick", ".cancelOrderBtn", function(e) {
                $(this).addClass('pointer-none');
                window.location = this.href;
                return false;
            });
        </script>

        <script>
            $('#thermalprintButton').on('click',function(){
                $('#thermalprintThis').printThis();
            })

        </script>

        <script>
            $('#modal-notification').modal('show')
        </script>
        <script src="https://js.stripe.com/v3/"></script>
        <script type="text/javascript">
            // Create an instance of the Stripe object with your publishable API key
            var stripe = Stripe('{{$publishableKey ?? ''}}');
            var checkoutButton = document.getElementById('checkout-button');
            var rozorpaybutton = document.getElementsByClassName("razorpay-payment-button");
            function triggerStripePayment(id) {
                fetch('{{route('store_admin.subscription_complete_payment')}}'+"?plan_id="+id, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token()}}",
                    },
                    body: JSON.stringify({plan_id:id})
                })
                    .then(function(response) {
                        return response.json();
                    })
                    .then(function(session) {
                        return stripe.redirectToCheckout({ sessionId: session.id });
                    })
                    .then(function(result) {
                        if (result.error) {
                            alert(result.error.message);
                        }
                    })
                    .catch(function(error) {
                        console.log("err");
                        alert('PAYMENT_ERROR #404');
                        console.error('Error:', error);
                    });
            }
        </script>


        <script src="{{asset("assets/newcorkui/plugins/drag-and-drop/dragula/dragula.min.js")}}"></script>
        <script src="{{asset("assets/newcorkui/plugins/drag-and-drop/dragula/custom-dragula.js")}}"></script>

        <script src={{asset("assets/newcorkui/plugins/bootstrap-select/bootstrap-select.min.js")}}></script>
        <script>
            dragula([$('left-defaults'), $('right-defaults')])
                .on('drag', function (el) {

                    console.log(el);
                    el.className += ' el-drag-ex-1';
                }).on('drop', function (el) {
                console.log(el);
                el.className = el.className.replace('el-drag-ex-1', '');
            }).on('cancel', function (el) {
                console.log(el);
                el.className = el.className.replace('el-drag-ex-1', '');
            });
        </script>
    </body>
</html>
