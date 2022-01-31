<template>
    <div class="">
        <div class="border-bottom1">
            <div class="d-flex osahan-cart-item-profile bg-white rounded p-3">
                <img
                    :alt="storeInfo.store_name"
                    :src="storeInfo.logo"
                    class="mr-3 head-img"
                />
                <div class="d-flex flex-column">
                    <h6 class="mb-1 font-weight-bold">{{ storeInfo.store_name }}</h6>
                    <p class="mb-0 small text-muted">
                        <i class="icofont-google-map text-danger"></i> 
                        {{ storeInfo.address }}
                    </p>
                </div>
            </div>
            <div class="address p-3 bg-white">
                <h6 class="m-0 text-dark d-flex align-items-center small">
                    <i class="text-danger icofont-ui-dial-phone"></i>
                    &nbsp; {{ storeInfo.store_phone }}
                    <span class="small ml-auto"
                        ><a
                            class="font-weight-bold text-decoration-none text-danger"
                            ><i class="icofont-boy text-dark"></i> الاتصال
                            بالنادل</a
                        ></span
                    >
                </h6>
            </div>
        </div>
        <div class="notifications-wrapper"></div>
        <div class="address p-2 bg-white border-bottom">
            <span class="m-0 text-dark d-flex align-items-center">
                Select Language
                <span class="small ml-auto"
                    ><a
                        class="font-weight-bold text-decoration-none text-success"
                        ><div class="col-auto">
                            <select
                                class="form-control1"
                                name="selected_language"
                                data-width="fit"
                            >
                                <option value="1">العربية</option>
                                <option value="2">English</option>
                            </select>
                        </div></a
                    ></span
                ></span
            >
        </div>
    </div>
</template>
<script>
export default {
    name: "Header",
    props: ["storeInfo"],
};
</script>
