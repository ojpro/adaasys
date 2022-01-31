<template>
    <main class="mb-4 pb-4">
        <Header v-if="storeInfos" :storeInfo="storeInfos"></Header>
        <Search></Search>
        <Body
            v-if="categories && recommended"
            :categories="categories"
            :recommended="recommended"
            :currency="currency_symbol"
        ></Body>
        <Products
            v-if="products && currency_symbol"
            :currency="currency_symbol"
            :products="products"
        ></Products>
        <div class="h-50"></div>
        <FooterMenu></FooterMenu>
    </main>
</template>
<script>
import Header from "./Header.vue";
import Search from "./Search.vue";
import Body from "./Body.vue";
import Products from "./Product.vue";
import FooterMenu from "./Footer-Menu.vue";

import axios from "axios";

export default {
    name: "StoreShow",
    components: { Header, Search, Body, Products, FooterMenu },
    data() {
        return {
            axiosRequestURL: "/api/web/store/fetch",
            storeId: this.$store.state.storeId,
            storeInfos: {},
            categories: {},
            products: {},
            recommended: {},
            currency_symbol: "",
        };
    },
    methods: {
        fetchStoreData() {
            axios({
                method: "post",
                url: this.axiosRequestURL,
                data: {
                    view_id: this.$store.state.storeId,
                },
            }).then((res) => {
                if (res.statusText == "OK" && res.data.status == "success") {
                    let data = res.data.payload.data;
                    this.categories = data.categories;
                    this.products = data.products;
                    this.recommended = data.recommended;
                    this.fillStoreInfo(data);
                }
            });
        },
        fillStoreInfo(info) {
            this.storeInfos = {
                store_name: info.store_name,
                store_phone: info.store_phone,
                address: info.address,
                logo: "/" + info.logo,
                description: info.description,
            };

            this.currency_symbol = info.account_info.currency_symbol;
            this.$store.commit("changeCurrency",this.currency_symbol);
        },
    },
    mounted() {
        this.fetchStoreData();
    },
};
</script>
