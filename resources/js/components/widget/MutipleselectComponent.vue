<template>
    <div>
        <input type="hidden" :name="nameOption" :value="arrOption">
        <div class="rounded-md border p-2 grid grid-cols-3">
            <button class="bg-blue-100" v-for="(item, index) in arrValOption">{{item.name}}</button>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            arrOption: [],
            arrValOption: {}
        }
    },
    props: ['nameOption', 'valueoption'],
    mounted() {
        this.arrValOption = JSON.parse(this.valueoption)
        for (let item in this.arrValOption) {
            this.arrValOption[item].status = false
        }
    },
    methods: {
        selectOption: function () {

        }
    }
}
</script>

<style scoped>

</style>
