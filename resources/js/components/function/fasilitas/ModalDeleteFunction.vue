<template>
    <form id="formDeleteFasilitas" type="hidden" :action="$store.state.modalvalidation.url.url_req" name="formEditFasilitas" class="mt-1 flex justify-center border-2 border-gray-300 border-dashed rounded-xl mb-2" method="POST">
        <input type="hidden" name="_token" :value="$store.state.csrf">
        <input type="hidden" name="_method" value="delete">
    </form>
</template>

<script>
export default {
    methods: {

    }
}
</script>

<style scoped>

</style>
