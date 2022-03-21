<template>
    <button @click="openModalShow" class="text-gray-400 hover:text-indigo-500 text-lg text-center transition-all ease-in-out">
        <i class="fas fa-external-link"></i>
    </button>
</template>

<script>
export default {
    data() {
        return {
        }
    },
    props: ['user'],
    methods: {
        openModalShow: function () {
            this.$store.commit('toggleModalShow')
        }
    }
}
</script>

<style scoped>

</style>
