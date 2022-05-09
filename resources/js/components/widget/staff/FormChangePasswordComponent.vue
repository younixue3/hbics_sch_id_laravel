<template>
    <div class="grid grid-cols-3 gap-5 text-left w-[30rem]">
        <div class="col-start-1 col-span-2">
            <label class="block font-medium text-gray-700">
                Password
            </label>
            <input class="flex-1 block w-full rounded-xl focus:outline-none px-3 py-2 border border-gray-300"
                   type="password" name="password">
        </div>
        <div class="col-start-1 col-span-2">
            <label class="block font-medium text-gray-700">
                Password Confirmation
            </label>
            <input class="flex-1 block w-full rounded-xl focus:outline-none px-3 py-2 border border-gray-300"
                   type="password" name="password_confirmation">
        </div>
    </div>
</template>

<script>
export default {
    name: "FormChangePasswordComponent"
}
</script>

<style scoped>

</style>
