<template>
    <div class="grid grid-cols-3 gap-5 text-left w-[42rem]">
        <div class="col-start-1 col-span-2">
            <label class="block font-medium text-gray-700">
                Title
            </label>
            <input class="flex-1 block w-full rounded-xl focus:outline-none px-3 py-2 border border-gray-300"
                   type="text" name="title">
        </div>
        <div class="col-start-1 col-span-2">
            <label class="block font-medium text-gray-700">
                Content
            </label>
            <textarea class="flex-1 block w-full rounded-xl resize-none focus:outline-none px-3 py-2 border border-gray-300"
                      type="text" name="content"></textarea>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {}
    },
    props: [],
    methods: {}
}
</script>

<style scoped>

</style>
