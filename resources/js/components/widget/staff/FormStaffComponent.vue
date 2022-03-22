<template>
    <div class="grid grid-cols-2 gap-5 text-left">
        <div class="">
            <label class="block font-medium text-gray-700">
                Name
            </label>
            <input disabled class="flex-1 block w-full rounded-xl focus:outline-none px-3 py-2 border border-gray-300" type="text" name="name" :value="$store.state.modal.modalshow.item.user.name">
        </div>
        <div class="row-span-2">
            <label class="block font-medium text-gray-700">
                Foto
            </label>
            <img class="m-auto rounded-full h-24 w-24 object-cover border border-gray-200" :src="$store.state.modal.modalshow.img">
        </div>
        <div class="">
            <label class="block font-medium text-gray-700">
                Email
            </label>
            <input disabled class="flex-1 block w-full rounded-xl focus:outline-none px-3 py-2 border border-gray-300" type="email" name="email" :value="$store.state.modal.modalshow.item.user.email">
        </div>
        <slot name="multicomponent"></slot>
    </div>
</template>

<script>
export default {
    data() {
        return {

        }
    },
}
</script>

<style scoped>

</style>
