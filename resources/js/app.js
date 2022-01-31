require("./bootstrap");

import Vue from "vue";
import Vuex from "vuex";
import VueRouter from "vue-router";
import App from "./components/App.vue";

import routes from "./router";

Vue.use(VueRouter);
Vue.use(Vuex);

//======================= Global Methods =======================//

function getStoreId() {
    let pathname = window.location.pathname;
    let pathArray = pathname.split("/");
    let storeId = pathArray[2].replace("#", "");
    let localStoreId = window.localStorage.storeId;
    return storeId || localStoreId;
}

//==============================================================//
if (window.localStorage.getItem("cart") == null) {
    window.localStorage.setItem("cart", JSON.stringify({ Items: [] }));
}
//===============Declare States==================//

const store = new Vuex.Store({
    state: {
        storeId: getStoreId(),
        cart: window.localStorage.getItem("cart"),
        currency: "",
    },
    getters: {
        storeCurrency: (state) => {
            return state.currency;
        },
    },
    mutations: {
        changeCurrency(state, cur) {
            state.currency = cur;
        },
    },
});

//==============================================//

Vue.config.productionTip = false;
// Vue.config.devtools = false;

const router = new VueRouter({
    routes,
});

new Vue({
    el: "#app",
    router: router,
    components: { App },
    template: "<App/>",
    store: store,
});
