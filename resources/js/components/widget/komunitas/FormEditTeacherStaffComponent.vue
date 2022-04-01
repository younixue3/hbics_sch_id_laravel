<template>
    <div class="grid grid-cols-3 gap-5 text-left w-[42rem]">
        <div class="col-span-1">
            <label class="block font-medium text-gray-700">
                First Name
            </label>
            <input class="flex-1 block w-full rounded-xl focus:outline-none px-3 py-2 border border-gray-300" type="text" name="first_name" :value="$store.state.modal.modalshow.item.teacherstaff.first_name">
        </div>
        <div class="col-span-1">
            <label class="block font-medium text-gray-700">
                Last Name
            </label>
            <input class="flex-1 block w-full rounded-xl focus:outline-none px-3 py-2 border border-gray-300" type="text" name="last_name" :value="$store.state.modal.modalshow.item.teacherstaff.last_name">
        </div>
        <div class="col-start-1 col-span-2">
            <label class="block font-medium text-gray-700">
                Profesi
            </label>
            <input class="flex-1 block w-full rounded-xl focus:outline-none px-3 py-2 border border-gray-300" type="text" name="profesi" :value="$store.state.modal.modalshow.item.teacherstaff.profesi">
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
            <input class="flex-1 block w-full rounded-xl focus:outline-none px-3 py-2 border border-gray-300" type="email" name="email" :value="$store.state.modal.modalshow.item.teacherstaff.email">
        </div>
        <div class="col-start-1 col-span-2">
            <label class="block font-medium text-gray-700">
                Area
            </label>
            <select name="area" class="flex-1 block w-full rounded-xl focus:outline-none px-3 py-2 border border-gray-300 uppercase">
                <option disabled selected>--- Pilih Area ---</option>
                <option>hhk</option>
                <option>sdk</option>
                <option>smpk</option>
                <option>smak</option>
                <option>qrd</option>
                <option>finance</option>
                <option>hrga</option>
            </select>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {

        }
    },
    props: [],
    methods: {

    }
}
</script>

<style scoped>

</style>
