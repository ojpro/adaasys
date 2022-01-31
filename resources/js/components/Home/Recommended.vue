<template>
    <div class="product-slider bg-white">
                <div class="product-slider-item" v-for="recommend in recommended" :key="recommend.id">
                    <div
                        class="block1 border-radius-275 recommended-item-shadow search"
                    >
                        <div
                            class="block-content1 recommended-item-content rec-v2-1"
                        >
                            <router-link
                                :to="/product/+ recommend.id"
                                ><img
                                    :src="'/'+recommend.image_url"
                                    :alt="recommend.name"
                                    class="recommended-item-image"
                            /></router-link>
                            <div class="my-2 recommended-item-meta">
                                <div
                                    class="text-left recommended-v2-ellipsis-meta"
                                >
                                    <div class="d-flex align-items-center">
                                        <span class="m-0 product-title-v2"
                                            >
                                            {{ recommend.name }}
                                            </span
                                        ><span
                                            class="item-badge2-v2 margin-left-v2 ml-auto"
                                            >CUSTOM
                                        </span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <p
                                        class="total_price font-weight-bold m-0"
                                    ></p>
                                    <div class="item-price m-0 text-darker">
                                        <span> {{ currency + recommend.price }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</template>
<script>
export default {
    props:["recommended",'currency']
}
</script>