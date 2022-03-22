<template>
    <div>
        <input type="hidden" :name="nameOption" :value="arrOption">
        <div class="rounded-md border p-2 grid grid-cols-3">
            <button type="button" @click="selectOption(index)" class="bg-blue-100" v-for="(item, index) in arrValOption">{{item.name}}</button>
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
        selectOption: function (click) {
            this.arrOption = []
            this.arrValOption[click].status = this.arrValOption[click].status === false

            for (let item in this.arrValOption) {
                if (this.arrValOption[item].status === true) {
                    this.arrOption.push(this.arrValOption[item].name)
                }
            }
        }
    }
}
</script>

<style scoped>

</style>
