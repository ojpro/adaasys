<template>
    <div>
        <div class="title d-flex align-items-center mb-3 mt-3 px-3">
            <h6 class="m-0">Maybe You Like this.</h6>
        </div>
        <div class="pick_today px-3">
            <div class="row pt-3">
                <div
                    class="col-12"
                    id="category-undefined"
                    v-for="recommend in recommended"
                    :key="recommend.id"
                >
                    <div
                        class="cart-items bg-white position-relative border-bottom search"
                    >
                        <div class="d-flex align-items-center mb-2 px-3">
                            <router-link :to="'/product/' + recommend.id"
                                ><img
                                    :src="'/' + recommend.image_url"
                                    class="list-card-image-v2"
                                    :alt="recommend.name"
                            /></router-link>
                            <a
                                class="ml-3 text-dark text-decoration-none w-100"
                            >
                                <div class="item-name">
                                    {{ recommend.name }}
                                </div>
                                <span class="mb-2 item-badge-v2"> REC </span>
                                <router-link :to="'/product/' + recommend.id"
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
                                        <span>{{ currency + recommend.price }}</span>
                                    </div>
                                    <div class="ml-auto">
                                        <button
                                            type="button"
                                            class="btn btn-new-v2"
                                            data-toggle="modal"
                                            data-target="#customization-1-DL"
                                        >
                                            +
                                        </button>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <Modal></Modal>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import Modal from "./Modal.vue";
export default {
    props: ["recommended"],
    components: { Modal },
    data() {
        return {
            currency: this.$store.state.currency,
        };
    },
};
</script>
