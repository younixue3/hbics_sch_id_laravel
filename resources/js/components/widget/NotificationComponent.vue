<template>
    <div
         class="m-3 ml-0 md:w-96 text-left border-b-8 mx-auto flex transition-all ease-in-out duration-1000 cursor-pointer" @click="closeNotif()"
         :class="[type === 'error' ? 'bg-red-100 text-red-700 border-red-600' : type === 'success' ? 'bg-green-100 text-green-700 border-green-600' : type === 'info' ? 'bg-blue-100 text-blue-700 border-blue-600' : '', timeout ? 'opacity-100' : 'opacity-0']">
        <div class="my-auto w-20 text-center px-0.5">
            <i class="fas fa-info text-2xl lg:text-3xl"></i>
        </div>
        <div class="px-1 py-2">
            <h1 class="text-sm lg:text-base font-raleway">
                {{ type === 'error' ? 'Error' : type === 'success' ? 'Success' : type === 'info' ? 'Info' : '' }}</h1>
            <p class="text-xs">{{ message }}</p>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            timeout: true,
            hidden: true
        }
    },
    props: ['type', 'message'],
    mounted() {
        setTimeout(this.timesup, 20000)
        setTimeout(this.hideup, 21000)
        // this.timesup()
    },
    methods: {
        timesup: function () {
            var timeoutdata = this
            timeoutdata.timeout = false
        },
        hideup: function () {
            var hidedata = this
            hidedata.hidden = false
        },
        closeNotif: function () {
            var local = this
            this.timeout = false
            setTimeout(this.hidden = false, 1000)
            // setTimeout(this.hideup, 1000)
        }
    }
}
</script>

<style scoped>

</style>
