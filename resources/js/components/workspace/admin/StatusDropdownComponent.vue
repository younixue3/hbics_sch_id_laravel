<template>
    <div class="flex font-raleway">
        <select class="w-96 rounded-xl p-2 focus:outline-none border" @change="selectStatus" name="status">
            <option value="" disabled selected>-- Pilih Status --</option>
            <option value="draft">Draft</option>
            <option value="reject">Reject</option>
            <option value="publish">Publish</option>
        </select>
        <div class="my-auto mx-5">
            <div type="text" v-if="show" class="px-2 rounded-full font-bold" :class="color">{{ status }}</div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            color: null,
            status: null,
            show: false
        }
    },
    methods: {
        selectStatus: function () {
            this.show = true
            if (event.target.value === 'draft') {
                this.color = 'bg-yellow-400'
                this.status = 'Draft'
            } else if (event.target.value === 'reject') {
                this.color = 'bg-red-400'
                this.status = 'Reject'
            } else if (event.target.value === 'publish') {
                this.color = 'bg-green-400'
                this.status = 'Publish'
            }
        }
    }
}
</script>

<style scoped>

</style>
