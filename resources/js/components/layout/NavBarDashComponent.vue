<template>
    <div id="mobile-menu"
         class="h-full md:h-auto text-gray-800 z-40 fixed duration-300 bg-gray-100 shadow-md md:static"
         @mouseenter="CollapsedHover()" @mouseleave="CollapsedHover()"
         :class="collapsed ? 'w-60 md:w-80 lg:w-80' : 'w-0 md:w-11 lg:w-11 md:hover:w-44'">
        <div class="font-bold text-xl h-16 pr-2 md:pr-0 flex relative z-50">
            <div class="flex transition-all ease-in-out duration-500" :class="collapsed ? 'w-full' : 'w-0'">
                <img class="min-h-5 h-5 mx-3 my-auto" src="" alt="">
                <a :href="dataurl['home']"
                   class="my-auto text-2xl align-middle overflow-hidden truncate font-light">
                    Dashboard
                </a>
            </div>
            <button @click="CloseBar()" type="button"
                    class="transition-all bg-gray-700 shrink-0 -mr-3 w-10 h-10 text-white rounded-lg ease-in-out duration-500 z-50 m-auto -mr-5">
                <!-- Heroicon name: outline/x -->
                <i class="" :class="collapsed ? 'fa-solid fa-bars' : 'fa-solid fa-xmark'"></i>
            </button>
        </div>
        <div class="text-lg font-normal tracking-tight">
            <div class="py-5 px-1 py-2">
                <div class="py-0.5 my-1 rounded-xl overflow-hidden truncate">
                    <a :href="dataurl['dashboard']">
                        <div class="hover:bg-gray-200 px-2 pt-1 rounded-lg"
                             :class="livehref === dataurl['dashboard'] ? 'bg-gray-300' : 'bg-gray-100'">
                            <div class="flex w-52">
                                <div class="w-1/6">
                                    <i class="fa-solid fa-gauge-high mr-3"></i>
                                </div>
                                <span>Dashboard</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div v-if="is_admin === 'true'" class="py-0.5 my-1 rounded-xl overflow-hidden truncate">
                    <a :href="dataurl['fasilitas']">
                        <div class="hover:bg-gray-200 px-2 pt-1 rounded-lg"
                             :class="livehref === dataurl['fasilitas'] ? 'bg-gray-300' : 'bg-gray-100'">
                            <div class="flex w-52">
                                <div class="w-1/6">
                                    <i class="fa-solid fa-images mr-3"></i>
                                </div>
                                <span>Fasilitas</span>
                            </div>
                        </div>
                    </a>
                </div>
                <nav-bar-dash-dropdown :is_admin="is_admin ? true : false" :livehref="livehref" :url="dataurl['komunitas']"></nav-bar-dash-dropdown>
                <div v-if="is_admin === 'true'" class="py-0.5 my-1 rounded-xl overflow-hidden truncate">
                    <a :href="dataurl['prestasi']">
                        <div class="hover:bg-gray-200 px-2 pt-1 rounded-lg"
                             :class="livehref === dataurl['prestasi'] ? 'bg-gray-300' : 'bg-gray-100'">
                            <div class="flex w-52">
                                <div class="w-1/6">
                                    <i class="fa-solid fa-award mr-3"></i>
                                </div>
                                <span>Prestasi</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="py-0.5 my-1 rounded-xl overflow-hidden truncate">
                    <a :href="dataurl['publikasi']">
                        <div class="hover:bg-gray-200 px-2 pt-1 rounded-lg"
                             :class="livehref === dataurl['publikasi'] ? 'bg-gray-300' : 'bg-gray-100'">
                            <div class="flex w-52">
                                <div class="w-1/6">
                                    <i class="fa-solid fa-newspaper mr-3"></i>
                                </div>
                                <span>Publikasi</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div v-if="is_admin === 'true'" class="py-0.5 my-1 rounded-xl overflow-hidden truncate">
                    <a :href="dataurl['staff']">
                        <div class="hover:bg-gray-200 px-2 pt-1 rounded-lg"
                             :class="livehref === dataurl['staff'] ? 'bg-gray-300' : 'bg-gray-100'">
                            <div class="flex w-52">
                                <div class="w-1/6">
                                    <i class="fa-solid fa-id-badge mr-3"></i>
                                </div>
                                <span>Staff</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div v-if="is_admin === 'true'" class="py-0.5 my-1 rounded-xl overflow-hidden truncate">
                    <a :href="dataurl['teacher-staff']">
                        <div class="hover:bg-gray-200 px-2 pt-1 rounded-lg"
                             :class="livehref === dataurl['teacher-staff'] ? 'bg-gray-300' : 'bg-gray-100'">
                            <div class="flex w-52">
                                <div class="w-1/6">
                                    <i class="fa-solid fa-id-badge mr-3"></i>
                                </div>
                                <span>Teacher & Staff Component</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    data() {
        return {
            dataurl: null,
            livepath: window.location.pathname,
            livehref: window.location.href,
            windowspath: window.location.origin + '/',
            collapsed: true,
            hover: true,
        }
    },
    props: {
        is_admin : Boolean,
    },
    created() {
        window.addEventListener('scroll', this.handleScroll);
        axios
            .get(this.windowspath + 'api/getUrlDashboard')
            .then(response => (
                this.dataurl = response.data.original))
    },
    methods: {
        CollapsedHover: function () {
            if (this.hover === true) {
            } else {
                this.collapsed = false;
            }
        },
        CloseBar: function () {
            if (this.collapsed === true) {
                this.hover = false
                this.collapsed = false
            } else {
                this.hover = true
                this.collapsed = true
            }
        }
    }
}
</script>

<style scoped>

</style>
