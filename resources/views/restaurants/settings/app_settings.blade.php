
<style>
    .table td, .table th{
        padding-bottom: 0;
    }
</style>


    <h4> {{$selected_language->data['store_panel_settings_app'] ?? 'App Settings'}}</h4>


    <div class="row">
        <div class="table-responsive">
            <table class="table">
                <tbody>
                    <tr>
                        <td>
                            <label class="form-control-label">{{$selected_language->data['store_panel_settings_accept_order'] ?? 'Accept Order'}}</label><br>
                        </td>
                        <td>
                            <label class="switch s-primary">
                                <input type="checkbox"
                                       {{$store->is_accept_order? "checked":null}} name="is_accept_order">
                                <span class="slider round" data-label-off="No"
                                      data-label-on="Yes"></span>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="form-control-label">{{$selected_language->data['store_panel_settings_search_section'] ?? 'Search Section'}}</label><br>
                        </td>
                        <td>
                            <label class="switch s-primary">
                                <input type="checkbox"
                                       {{$store->search_enable? "checked":null}} name="search_enable">
                                <span class="slider round" data-label-off="No"
                                      data-label-on="Yes"></span>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="form-control-label">{{$selected_language->data['store_panel_settings_language_section'] ?? 'Language Section'}}</label><br>
                        </td>
                        <td>
                            <label class="switch s-primary">
                                <input type="checkbox"
                                       {{$store->language_enable? "checked":null}} name="language_enable">
                                <span class="slider round" data-label-off="No"
                                      data-label-on="Yes"></span>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="form-control-label">{{$selected_language->data['store_panel_settings_call_waiter_button'] ?? 'Call Waiter Button'}}</label><br>
                        </td>
                        <td>
                            <label class="switch s-primary">
                                <input type="checkbox"
                                       {{$store->is_call_waiter_enable? "checked":null}} name="is_call_waiter_enable">
                                <span class="slider round" data-label-off="No"
                                      data-label-on="Yes"></span>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="form-control-label">{{$selected_language->data['store_panel_settings_table'] ?? 'Table'}}</label><br>
                        </td>
                        <td>
                            <label class="switch s-primary">
                                <input type="checkbox"
                                       {{$store->table_enable	? "checked":null}} name="table_enable">
                                <span class="slider round" data-label-off="No"
                                      data-label-on="Yes"></span>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="form-control-label">{{$selected_language->data['store_panel_settings_dining'] ?? 'Dining'}}</label><br>
                        </td>
                        <td>
                            <label class="switch s-primary">
                                <input type="checkbox"
                                       {{$store->dining_enable	? "checked":null}} name="dining_enable">
                                <span class="slider round" data-label-off="No"
                                      data-label-on="Yes"></span>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="form-control-label">{{$selected_language->data['store_panel_settings_delivery'] ?? 'Delivery'}}</label><br>
                        </td>
                        <td>
                            <label class="switch s-primary">
                                <input type="checkbox"
                                       {{$store->delivery_enable	? "checked":null}} name="delivery_enable">
                                <span class="slider round" data-label-off="No"
                                      data-label-on="Yes"></span>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="form-control-label">{{$selected_language->data['store_panel_settings_takeaway'] ?? 'Takeaway'}}</label><br>
                        </td>
                        <td>
                            <label class="switch s-primary">
                                <input type="checkbox"
                                       {{$store->takeaway_enable	? "checked":null}} name="takeaway_enable">
                                <span class="slider round" data-label-off="No"
                                      data-label-on="Yes"></span>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="form-control-label">{{$selected_language->data['store_panel_settings_send_order_to_whatsapp'] ?? 'Send Order to Whatsapp'}}</label><br>
                        </td>
                        <td>
                            <label class="switch s-primary">
                                <input type="checkbox"
                                       {{$store->whatsappbutton_enable	? "checked":null}} name="whatsappbutton_enable">
                                <span class="slider round" data-label-off="No"
                                      data-label-on="Yes"></span>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="form-control-label">{{$selected_language->data['store_panel_settings_room'] ?? 'Room'}}</label><br>
                        </td>
                        <td>
                            <label class="switch s-primary">
                                <input type="checkbox"
                                       {{$store->is_room_delivery_enable	? "checked":null}} name="is_room_delivery_enable">
                                <span class="slider round" data-label-off="No"
                                      data-label-on="Yes"></span>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="form-control-label">{{$selected_language->data['store_panel_settings_room_delivery_dob_validation'] ?? 'Room Delivery DOB Validation'}}</label><br>
                        </td>
                        <td>
                            <label class="switch s-primary">
                                <input type="checkbox"
                                       {{$store->is_room_delivery_dob_enable	? "checked":null}} name="is_room_delivery_dob_enable">
                                <span class="slider round" data-label-off="No"
                                      data-label-on="Yes"></span>
                            </label>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>










    </div>
    <div class="form-group" style="margin-top: 15px; padding: 10px;">
        <div class="col-sm-offset-2 col-sm-12">
            <button type="submit"
                    class="btn btn-default btn-flat m-b-30 m-l-5 bg-primary border-none m-r-5 -btn"
                    style="float: right">{{$selected_language->data['store_panel_common_update'] ?? 'Update'}}
            </button>
        </div>
    </div>
