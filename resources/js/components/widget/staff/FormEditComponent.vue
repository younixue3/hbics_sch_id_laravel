<template>
    <div class="grid grid-cols-3 gap-5 text-left w-[42rem]">
        <div class="col-start-1 col-span-2">
            <label class="block font-medium text-gray-700">
                Name
            </label>
            <input class="flex-1 block w-full rounded-xl focus:outline-none px-3 py-2 border border-gray-300"
                   type="text" name="name" :value="$store.state.modal.modalshow.item.user.name">
        </div>
        <div class="row-span-2">
            <label class="block font-medium text-gray-700">
                Foto
            </label>
            <div class="mt-1 flex justify-center border-2 border-gray-300 border-dashed rounded-xl mb-2">
                <input type="file" name="fileupload" id="fileupload" class="block w-full h-full text-sm p-5 text-center text-slate-500 cursor-pointer
                                  file:mr-4 file:py-2 file:px-4
                                  file:rounded-full file:border-0
                                  file:text-sm file:font-semibold
                                  file:bg-violet-50 file:text-violet-700
                                  hover:file:bg-violet-100
                                "/>
            </div>
        </div>
        <div class="col-start-1 col-span-2">
            <label class="block font-medium text-gray-700">
                Email
            </label>
            <input class="flex-1 block w-full rounded-xl focus:outline-none px-3 py-2 border border-gray-300"
                   type="email" name="email" :value="$store.state.modal.modalshow.item.user.email">
        </div>
        <div class="col-start-1 col-span-2">
            <label class="block font-medium text-gray-700">
                Area
            </label>
            <select name="area"
                    class="flex-1 block w-full rounded-xl focus:outline-none px-3 py-2 border border-gray-300 uppercase">
                <option value="" disabled selected>--- Pilih Area ---</option>
                <option>hhk</option>
                <option>sd</option>
                <option>smp</option>
                <option>sma</option>
                <option>qrd</option>
                <option>finance</option>
                <option>hrga</option>
            </select>
        </div>
        <div class="col-start-1 col-span-2 flex justify-self-start px-5">
            <input class="m-auto rounded-xl focus:outline-none px-3 py-2 border border-gray-300" type="checkbox"
                   name="is_super_admin"
                   :checked="$store.state.modal.modalshow.item.user.is_super_admin === 1 ? true : false">
            <label class="ml-2 w-full font-medium text-gray-700 text-sm">
                Is Superadmin
            </label>
        </div>
        <slot name="multicomponent">
        </slot>
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
