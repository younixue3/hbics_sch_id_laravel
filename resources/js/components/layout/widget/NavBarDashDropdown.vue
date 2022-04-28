<template>
    <div v-if="is_admin" class="py-0.5 my-1 rounded-xl overflow-hidden truncate cursor-pointer">
        <div>
            <div class="hover:bg-gray-200 px-2 pt-1 rounded-lg"
                 :class="this.livehref.split('/').includes('komunitas') ? 'bg-gray-300' : 'bg-gray-100'">
                <div class="flex w-52">
                    <div class="w-1/6">
                        <i class="fa-solid fa-users mr-3"></i>
                    </div>
                    <span>Komunitas</span>
                </div>
            </div>
            <ul class="bg-gray-200 rounded-lg px-2.5 my-2 h-full truncate" :class="this.url.split('/').includes('komunitas') ? '' : 'hidden'">
                <a :href="url + '/show/alumni'">
                    <a onclick="DropDownItem()" class="my-1 cursor-pointer">
                        <div class="ml-1 mr-5 w-2 h-2 inline-block rounded-full ring ring-gray-800 ring-offset-2" :class="this.livehref.split('/').includes('alumni') ? 'bg-black' : ''"></div>
                        <span class="">Alumni</span></a>
                </a>
                <a :href="url + '/show/orang_tua'">
                    <div onclick="DropDownItem()" class="my-1 cursor-pointer">
                        <div class="ml-1 mr-5 w-2 h-2 inline-block rounded-full ring ring-gray-800 ring-offset-2" :class="this.livehref.split('/').includes('orang_tua') ? 'bg-black' : ''"></div>
                        <span>Orang Tua</span></div>
                </a>
            </ul>
        </div>
    </div>
</template>

<script>
export default {
    name: "NavBarDashDropdown",
    props: {
        is_admin: Boolean,
        livehref: String,
        url: String
    },
    created() {
        console.log(this.livehref.split('/'))
    }
}
</script>

<style scoped>

</style>
