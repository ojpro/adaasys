import StoreShow from "./components/Home/StoreShow.vue";
import Product from "./components/Home/Product/Product.vue"
const routes = [
    {
        path: "/",
        name: "Home",
        component: StoreShow
    },
    {
        path: "/product/:id",
        name: "Product",
        component: Product
    },
    {
        path: "/cart",
        name: "Cart",
        component: () => import("./components/Cart/Index.vue")
    }
    ,
    {
        path: "/orders",
        name: "Orders",
        component: () => import("./components/Orders/Index.vue")
    }
];

export default routes;
