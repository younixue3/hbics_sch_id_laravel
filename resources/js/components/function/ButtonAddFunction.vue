<template>
    <div>
        <button @click="openModalAdd" class="bg-sky-800 text-white rounded-lg w-20 px-3 flex justify-between text-center"><span>Add</span><i
            class="fa-solid fa-plus my-auto"></i></button>
    </div>
</template>

<script>
export default {
    name: 'ButtonAddFucntion',
    data() {
        return {}
    },
    props: ['add_req'],
    methods: {
        openModalAdd: function () {
            this.$store.state.modalvalidation.url.url_req = this.$props.add_req
            this.$store.commit('toggleModalAdd')
        },
    }
}
</script>

<style scoped>

</style>
