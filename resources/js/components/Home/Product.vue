<template>
    <div class="card item-full-bottom-v2">
        <div>
            <div class="ti tle d-flex align-items-center mt-3 px-3 search">
                <h6 class="m-0 category-name-top-4">البيتزا</h6>
            </div>
            <div class="pick_today">
                <div class="">
                    <div
                        class="col-12"
                        id="category-1"
                        v-for="product in products"
                        :key="product.id"
                    >
                        <div  class="cart-items bg-white position-relative border-bottom search">
                            <div class="d-flex align-items-center mb-2 px-3">
                                <router-link :to="/product/ + product.id">
                                    <img
                                        :src="'/' + product.image_url"
                                        class="list-card-image-v2"
                                        :alt="product.name"
                                /></router-link>
                                <a
                                    class="ml-3 text-dark text-decoration-none w-100"
                                >
                                    <div class="item-name">
                                        {{ product.name }}
                                    </div>
                                    <span class="mb-2 item-badge-v2">
                                        REC
                                    </span>
                                    <router-link
                                        class="text-dark"
                                        :to="/product/ + product.id"
                                        ><span
                                            class="item-badge2-v2 margin-left-v2"
                                        >
                                            CUSTOM
                                        </span></router-link
                                    >
                                    <div class="d-flex align-items-center">
                                        <p
                                            class="total_price font-weight-bold m-0"
                                        ></p>
                                        <div class="item-price m-0 text-darker">
                                            <span>{{
                                                currency + product.price
                                            }}</span>
                                        </div>

                                        <div class="ml-auto">
                                            <button
                                                type="button"
                                                class="btn btn-new-v2"
                                                data-toggle="modal"
                                                data-target="#customization-1-0"
                                            >
                                                +
                                            </button>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <Modal
                            v-if="currency"
                            :currency="currency"
                            :product_id="product.id"
                        ></Modal>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import Modal from "./Modal.vue";
export default {
    props: ["products", "currency"],
    components: { Modal },
};
</script>
