<template>
    <div>
        <button @click="openModalAdd" class="bg-green-400 rounded-lg w-20 px-3 flex justify-between text-center"><span>Add</span><i class="fa-solid fa-plus my-auto"></i></button>
    </div>
</template>

<script>
export default {
    data() {
        return {

        }
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
