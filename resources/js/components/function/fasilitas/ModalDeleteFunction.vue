<template>
    <form id="formDeleteFasilitas" type="hidden" :action="$store.state.modalvalidation.url.url_req" name="formEditFasilitas" class="" method="POST">
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
