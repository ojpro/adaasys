<template>
    <div>
        <div class="p-3 border-bottom shadow">
            <div class="d-flex align-items-center flex-row">
                <router-link
                    to="/"
                    class="font-weight-bold text-danger text-decoration-none"
                    ><i class="icofont-rounded-left back-page"></i
                ></router-link>
                <h6 class="font-weight-bold m-0 ml-3">Back to Menu</h6>
            </div>
        </div>
        <div class="card1">
            <div class="header">
                <div class="notifications-wrapper"></div>
                <img
                    :src="'/' + product.image_url"
                    :alt="product.name"
                    width="100%"
                    style="margin-bottom: 0px"
                />
            </div>
        </div>
        <div class="fixed-bottom-padding">
            <div class="px-3 pb-3 descdeatils">
                <div class="px-3 pt-3">
                    <h2 class="font-weight-bold">{{ product.name }}</h2>
                    <p
                        class="font-weight-light text-dark m-0 d-flex align-items-center"
                    >
                        <span class="badge badge-danger"> CUSTOMIZABLE </span
                        ><span class="badge badge-danger ml-2">AVAILABLE</span
                        ><span class="badge badge-success ml-2">
                            RECOMMENDED</span
                        >
                    </p>
                    <a href="#">
                        <div
                            class="rating-wrap d-flex align-items-center mt-2"
                        ></div>
                    </a>
                    <p>
                        MRP : &nbsp;
                        <b class="font-weight-bold">
                            <span>{{ currency + product.price }}</span>
                        </b>
                    </p>
                </div>
                <div class="px-3 pb-3">
                    <div class="row">
                        <div class="col-6">
                            <p class="font-weight-bold m-0">Cooking Time</p>
                            <p class="text-muted m-0">
                                {{ product.cooking_time }} Cooking Unit
                            </p>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="p-3">
                        <p class="font-weight-bold mb-2">Product Details</p>
                        <p class="text-muted small">
                            {{ product.description }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="osahan-product">
                <div class="product-details">
                    <div
                        class="fixed-bottom pd-f bg-white d-flex align-items-center border-top"
                    >
                        <a
                            class="btn-dark py-3 px-5 h4 m-0"
                            href="/store/cart/a9055580c7831d05f32f1aa8b6cee04c47d99dbc"
                            ><i class="icofont-cart"></i></a
                        ><a class="btn btn-danger text-white btn-block"
                            >Add to Cart</a
                        >
                    </div>
                </div>
            </div>
            <Recommended :recommended="recommanded"></Recommended>
        </div>
    </div>
</template>
<script>
import axios from "axios";
import Recommended from "./Recommended.vue";
export default {
    data() {
        return {
            product: {},
            axiosRequestURL: "/api/web/store/",
            storeId: this.$store.state.storeId,
            recommanded: {},
            productId: this.$route.params.id,
            currency: this.$store.state.currency,
        };
    },
    components: { Recommended },
    methods: {
        fetchProductDetails(id) {
            axios({
                method: "get",
                url: this.axiosRequestURL + "product/fetch?product_id=" + id,
            })
                .then((res) => {
                    this.product = res.data;
                })
                .catch((error) => console.log(error));
        },

        fetchRecommandedProduct() {
            axios({
                method: "post",
                url: this.axiosRequestURL + "fetch",
                data: {
                    view_id: this.storeId,
                },
            }).then((res) => {
                if (res.statusText == "OK" && res.data.status == "success") {
                    let data = res.data.payload.data;
                    this.recommanded = data.recommended;
                }
            });
        },
    },
    mounted() {
        this.fetchProductDetails(this.productId);
        this.fetchRecommandedProduct();
    },
};
</script>
