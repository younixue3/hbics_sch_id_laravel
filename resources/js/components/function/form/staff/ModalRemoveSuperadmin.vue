<template>
    <form id="formRemoveSuperadmin" type="hidden" :action="$store.state.modalvalidation.url.url_req"
          name="formRemoveSuperadmin" class=""
          method="POST">
        <input type="hidden" name="_token" :value="$store.state.csrf">
        <input type="hidden" name="_method" value="put">
        <input type="hidden" name="is_super_admin" value="false">
    </form>
</template>

<script>
export default {
    methods: {}
}
</script>

<style scoped>

</style>
