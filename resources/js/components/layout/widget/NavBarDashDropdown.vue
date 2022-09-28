<template>
    <div v-if="is_admin" class="py-0.5 my-2 rounded-xl overflow-hidden truncate">
        <div>
            <div class="hover:bg-gray-200 px-2 py-1.5 rounded-lg cursor-pointer" @click="dropdownactive"
                 :class="this.livehref.split('/').includes('komunitas') ? 'bg-gray-300' : 'bg-gray-100'">
                <div class="flex justify-between w-52">
                    <div class="w-10">
                        <i class="fa-solid fa-users mr-3"></i>
                    </div>
                    <span class="flex-1">Komunitas</span>
                    <span class="overflow-hidden w-8 text-center">
                        <i class="my-auto fas fa-chevron-right transition-all duration-500 transform"
                           :class="this.livehref.split('/').includes('komunitas') || dropactive ? 'rotate-90' : ''"></i>
                    </span>
                </div>
            </div>
            <ul class="bg-gray-200 rounded-lg px-2.5 my-2 h-full truncate"
                :class="this.livehref.split('/').includes('komunitas') || dropactive ? '' : 'hidden'">
                <a :href="url + '/show/alumni'">
                    <div onclick="DropDownItem()" class="my-1 cursor-pointer">
                        <div class="ml-1 mr-5 w-2 h-2 inline-block rounded-full ring ring-gray-800 ring-offset-2"
                             :class="this.livehref.split('/').includes('alumni') ? 'bg-black' : ''"></div>
                        <span class="">Alumni</span></div>
                </a>
                <a :href="url + '/show/orang_tua'">
                    <div onclick="DropDownItem()" class="my-1 cursor-pointer">
                        <div class="ml-1 mr-5 w-2 h-2 inline-block rounded-full ring ring-gray-800 ring-offset-2"
                             :class="this.livehref.split('/').includes('orang_tua') ? 'bg-black' : ''"></div>
                        <span>Orang Tua</span></div>
                </a>
            </ul>
        </div>
    </div>
</template>

<script>
export default {
    name: "NavBarDashDropdown",
    data() {
        return {
            dropactive: false
        }
    },
    props: {
        is_admin: Boolean,
        livehref: String,
        url: String
    },
    methods: {
        dropdownactive: function () {
            this.dropactive = !this.dropactive;
        }
    },
}
</script>

<style scoped>

</style>
