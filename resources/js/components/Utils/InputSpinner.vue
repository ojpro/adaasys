<template>
    <div class="cart-item-meta mb-2 align-items-center mb-3">
        <div class="btn-group btn-group-sm cart-item-btn">
            <div class="input-group input-spinner ml-auto cart-items-number">
                <div class="input-group-prepend">
                    <button
                        :disabled="counter == 0"
                        class="btn btn-success btn-sm"
                        type="button"
                        id="button-minus"
                        @click="counter--"
                    >
                        -
                    </button>
                </div>
                <input
                    type="text"
                    class="form-control"
                    id="addon-5-0-1"
                    name="extra-0"
                    v-model="counter"
                />
                <div class="input-group-append">
                    <button
                        class="btn btn-success btn-sm"
                        type="button"
                        id="button-plus"
                        @click="counter++"
                    >
                        +
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name: "InputSpinner",
    props: ["count",'id'],
    data() {
        return {
            counter: this.count,
        };
    },
    methods: {
        al: function (v) {
            alert(v);
        },
    },
    watch: {
        counter: function (v) {
            this.$emit("update:counter", v,this.id);
        },
    },
};
</script>
