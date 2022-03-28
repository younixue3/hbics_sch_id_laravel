<template>
    <div class="flex w-full justify-end mb-5">
        <div class="flex">
            <div  @click="showmenu" class="bg-rose-500 flex rounded-lg w-8 h-8 text-white cursor-pointer">
                <div class="m-auto"><i class="fa-solid fa-gear"></i></div>
            </div>
            <div v-if="show" v-click-outside="focusout" class="absolute right-6 translate-y-1/2 bg-white shadow-md rounded-md px-5 z-50">
                <div class="grid grid-cols-1">
                    <div class="cursor-pointer" @click="deleteitem">
                        Delete
                    </div>
                    <div href="">
                        Edit
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import vClickOutside from "v-click-outside";
export default {
    data() {
        return {
            show: false,
            states : this.$store.state.workspace
        }
    },
    props: ['items'],
    methods: {
        showmenu: function () {
            this.show = true
        },
        focusout: function () {
            this.show = false
        },
        deleteitem: function () {
            this.$store.commit('deleteData', this.$props.items)
        }
    }
}
</script>

<style scoped>

</style>
