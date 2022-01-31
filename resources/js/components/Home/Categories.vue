<template>
        <div class="slider-wrapper secondary-slider-wrapper my-20">
                <div class="d-flex">
                    <div v-for="category in categories" :key="category.id">
                        <div class="slider-wrapper__img-wrapper" id="">
                            <div class="search" style="position: relative">
                                <a
                                    href=""
                                    ><img
                                        :src=" '/'+category.image_url"
                                        class="slider-wrapper__img slider-cust-img category-img-v2"
                                    /><span class="category-slider-name"
                                        >
                                        {{ category.name }}
                                        </span
                                    ></a
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</template>
<script>
export default {
    props:["categories"]
}
</script>