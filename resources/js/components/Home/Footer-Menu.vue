<template>
    <div
        class="osahan-menu-fotter fixed-bottom bg-white text-center border-top new-menu-fotter shadow"
    >
        <div class="row m-0">
            <router-link
                aria-current="page"
                class="text-dark small col font-weight-bold text-decoration-none p-2 selected active"
                to="/"
                ><p class="h5 m-0"><i class="icofont-spoon-and-fork"></i></p>
                Menu</router-link
            ><router-link
                class="text-dark small col font-weight-bold text-decoration-none p-2"
                to="/cart"
                ><p class="h5 m-0"><i class="icofont-cart"></i></p>
                Cart</router-link
            ><a
                class="text-dark small col font-weight-bold text-decoration-none p-2"
                href="/account/orders"
                ><p class="h5 m-0"><i class="icofont-paper"></i></p>
                My Order</a
            >
        </div>
    </div>
</template>
