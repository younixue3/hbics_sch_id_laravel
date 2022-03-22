<template>
    <div>
        <input type="hidden" :name="nameoption" v-model="arrOption">
        <label class="block font-medium text-gray-700">
            Role
        </label>
        <div class="rounded-md border p-2 grid grid-cols-3 gap-2">
            <button :disabled="disabled" type="button" @click="selectOption(index)" class="rounded-md text-xs transition-all ease-in-out text-white" :class="item.status ? 'bg-red-500 hover:bg-red-400' : 'bg-blue-500 hover:bg-blue-400'" v-if="$store.state.modal.modalshow.item === null" v-for="(item, index) in arrValOption">{{item.name}}</button>
            <button :disabled="disabled" type="button" @click="selectOption(index)" class="rounded-md text-xs transition-all ease-in-out text-white" :class="item.status ? 'bg-red-500 hover:bg-red-400' : 'bg-blue-500 hover:bg-blue-400'" v-if="$store.state.modal.modalshow.item !== null" v-for="(item, index) in this.storeurl">{{item.name}}</button>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            arrOption: {},
            arrValOption: {},
            storeurl : null
        }
    },
    props: {
        nameoption: String,
        valueoption: String,
        disabled: Boolean
    },
    mounted() {

        if (this.$store.state.modal.modalshow.item === null) {
            this.arrValOption = JSON.parse(this.valueoption)
            for (let item in this.arrValOption) {
                this.arrValOption[item].status = false
            }
        } else {
            this.storeurl = this.$store.state.modal.modalshow.item.arrrolesuser
            for (let item in this.$store.state.modal.modalshow.item.arrrolesuser) {
                console.log(item)
                this.$store.state.modal.modalshow.item.arrrolesuser[item].status = false
            }
        }
    },
    methods: {
        selectOption: function (click) {
            this.arrOption = []
            this.arrValOption[click].status = this.arrValOption[click].status === false

            for (let item in this.arrValOption) {
                if (this.arrValOption[item].status === true) {
                    this.arrOption.push(this.arrValOption[item])
                }
            }
            this.arrOption = JSON.stringify(this.arrOption)
        }
    }
}
</script>

<style scoped>

</style>
