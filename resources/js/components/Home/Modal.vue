<template>
    <div
        class="modal fade"
        id="customization-1-0"
        tabindex="-1"
        role="dialog"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
    >
        <form id="customization-form-1-0">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            Customization
                        </h5>
                        <button
                            type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close"
                        >
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div v-for="category in categories" :key="category.id">
                            <div class="mb-10 col-md-12 form-group">
                                <label class="form-label mb-10">{{
                                    category.name
                                }}</label>
                                <div>
                                    <div class="schedule">
                                        <div
                                            class="tab-content filter bg-white"
                                            id="myTabContent"
                                        >
                                            <div
                                                class="d-flex flex-column justify-content-between"
                                            >
                                                <div
                                                    class="custom-control border-bottom px-0 custom-checkbox d-flex flex-row"
                                                    v-for="addon in addons.filter(
                                                        (addon) =>
                                                            addon.addon_category_id ==
                                                            category.id
                                                    )"
                                                    :key="addon.id"
                                                >
                                                    <label
                                                        class="form-check-label py-3 w-100 px-3"
                                                        :for="addon.addon_name"
                                                    >
                                                        <i
                                                            class="icofont-addons mr-2"
                                                        ></i>
                                                        <b>{{
                                                            addon.addon_name
                                                        }}</b>
                                                        -
                                                        <span>{{
                                                            currency +
                                                            addon.price
                                                        }}</span>
                                                    </label>
                                                    <span
                                                        v-if="
                                                            category.type ==
                                                            'MULT'
                                                        "
                                                    >
                                                        <input
                                                            class="form-check-input mt-3"
                                                            type="checkbox"
                                                            :name="
                                                                category.name
                                                            "
                                                            :id="
                                                                addon.addon_name
                                                            "
                                                            :value="addon.id"
                                                            v-model="cart.multi"
                                                        />
                                                    </span>
                                                    <div
                                                        v-else-if="
                                                            category.type ==
                                                            'EXT'
                                                        "
                                                        class="mt-3"
                                                    >
                                                        <input-spinner
                                                            @update:counter="
                                                                extra
                                                            "
                                                            :count="addon.count"
                                                            :id="addon.id"
                                                        ></input-spinner>
                                                    </div>
                                                    <span v-else>
                                                        <input
                                                            class="form-check-input mt-3"
                                                            type="radio"
                                                            :name="
                                                                category.name
                                                            "
                                                            :id="
                                                                addon.addon_name
                                                            "
                                                            :value="addon.id"
                                                            v-model="cart.addon"
                                                        />
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer p-0 border-0 fixed-bottom">
                        <div class="col-6 m-0 p-0">
                            <button
                                type="button"
                                class="btn btn-dark btn-lg btn-block"
                                data-dismiss="modal"
                            >
                                Close
                            </button>
                        </div>
                        <div class="col-6 m-0 p-0">
                            <button
                                type="button"
                                data-dismiss="modal"
                                class="btn btn-danger btn-lg btn-block"
                                @click="saveToCart"
                            >
                                Save Changes
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <button
                type="button"
                id="#customization-1-0"
                class="btn btn-outline-success btn-sm ml-auto"
                data-toggle="modal"
                data-target="#customization-1-0"
                style="visibility: hidden"
            >
                Add
            </button>
        </form>
    </div>
</template>
<script>
import InputSpinner from "../Utils/InputSpinner.vue";
import axios from "axios";

export default {
    name: "Modal",
    props: ["currency", "product_id"],
    components: {
        "input-spinner": InputSpinner,
    },
    data: function () {
        return {
            storeId: this.$store.state.storeId,
            axiosRequestURL: `/api/web/store/fetch`,
            categories: {},
            addons: {},
            data: {
                extra: {},
                addons: {},
                multi: {},
            },
            cart: {
                _id: 0,
                storeId: this.$store.state.storeId,
                itemId: this.product_id,
                count: 1,
                addon: 0,
                extra: [],
                multi: [],
            },
        };
    },
    methods: {
        fetchAddons: async function () {
            await axios({
                method: "post",
                url: this.axiosRequestURL,
                data: {
                    view_id: this.$store.state.storeId,
                },
                headers: {
                    "Cache-Control": "no-cache",
                    Pragma: "no-cache",
                    Expires: "0",
                },
            }).then((res) => {
                if (res.statusText == "OK" && res.data.status == "success") {
                    let data = res.data.payload.data;
                    this.categories = data.addons_categories;
                    this.addons = data.addons;

                    this.prepareAddons();
                }
            });
        },
        saveToCart: function () {
            if (
                this.cart.addon != 0 ||
                this.cart.extra.length > 0 ||
                this.cart.multi.length > 0
            ) {
                let date = new Date();
                let time = date.getTime();
                this.cart._id = time;
                let order = this.cart;
                let cart = JSON.parse(this.$store.state.cart);
                cart.Items.push(order);
                window.localStorage.setItem("cart", JSON.stringify(cart));
                this.resetCart();
            }
        },
        filterAddons: function () {
            Object.keys(this.categories).forEach((category) => {
                if (this.categories[category].type == "EXT") {
                    this.data.extra = this.addons.filter(
                        (addon) =>
                            addon.addon_category_id ==
                            this.categories[category].id
                    );
                } else if (this.categories[category].type == "MULT") {
                    this.data.multi = this.addons.filter(
                        (addon) =>
                            addon.addon_category_id ==
                            this.categories[category].id
                    );
                } else {
                    this.data.addons = this.addons.filter(
                        (addon) =>
                            addon.addon_category_id ==
                            this.categories[category].id
                    );
                }
            });
        },
        prepareAddons: function () {
            this.addons.map((addon) => (addon["count"] = 0));
            this.filterAddons();
        },
        extra: function (value, id) {
            let extra_exists = this.cart.extra.filter(
                (addon) => addon.addon_id == id
            );
            let extra = this.cart.extra;
            if (extra_exists.length > 0) {
                extra.map((addon, index) => {
                    if (addon.addon_id == id) {
                        extra[index].count = value;
                    }
                });
                this.cart.extra = extra;
            } else {
                this.cart.extra.push({ addon_id: id, count: value });
            }
        },
        resetCart: function () {
            this.cart = {
                _id: 0,
                storeId: this.$store.state.storeId,
                itemId: this.product_id,
                count: 1,
                addon: 0,
                extra: [],
                multi: [],
            };
        },
    },
    mounted() {
        this.fetchAddons();
    },
};
</script>
