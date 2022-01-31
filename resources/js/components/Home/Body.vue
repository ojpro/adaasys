<template>
    <div>
        <div class="osahan-body">
        <Categories :categories="categories"></Categories>
            <div class="title d-flex align-items-center p-3 bg-white">
                <span class="m-0 capital"> Recommend for you</span>
            </div>
            <Recommended :currency="currency" :recommended="recommended"></Recommended>
        </div>
    </div>
</template>
<script>
import Categories from './Categories.vue'
import Recommended from "./Recommended.vue"
export default {
    name:"Body",
    props:["categories","recommended",'currency'],
    components:{Categories,Recommended}
}
</script>
