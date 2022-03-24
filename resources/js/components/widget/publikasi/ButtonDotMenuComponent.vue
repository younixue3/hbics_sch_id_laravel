<template>
    <div class="flex">
        <div class="static">
            <button @click="showmenu"><i class="fa-solid fa-ellipsis-vertical"></i></button>
        </div>
        <div v-if="show" v-click-outside="focusout" class="absolute right-6 -translate-y-1/2 bg-white shadow-md rounded-md px-10">
            <div class="grid grid-cols-1">
                <a href="">
                    Show
                </a>
                <a href="">
                    Edit
                </a>
                <div @click="">
                    Delete
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
            show: false
        }
    },
    props: ['show_url', 'edit_url', 'delete_req'],
    methods: {
        showmenu: function () {
            this.show = true
        },
        focusout: function () {
            this.show = false
        }
    },
}
</script>

<style scoped>

</style>
