<template>
    <div>
        <div class="flex justify-center border-b border-black">
            <button class="border-b-4 border-transparent focus:border-blue-600 mx-5 -mb-0.5 transition-all ease-in-out duration-500" @click="changeMenu('all')">All</button>
            <button class="border-b-4 border-transparent focus:border-blue-600 mx-5 -mb-0.5 transition-all ease-in-out duration-500" @click="changeMenu('tk')">TK & PG</button>
            <button class="border-b-4 border-transparent focus:border-blue-600 mx-5 -mb-0.5 transition-all ease-in-out duration-500" @click="changeMenu('sd')">SD</button>
            <button class="border-b-4 border-transparent focus:border-blue-600 mx-5 -mb-0.5 transition-all ease-in-out duration-500" @click="changeMenu('smp')">SMP</button>
            <button class="border-b-4 border-transparent focus:border-blue-600 mx-5 -mb-0.5 transition-all ease-in-out duration-500" @click="changeMenu('sma')">SMA</button>
        </div>
        <div class="grid md:grid-rows-6 grid-cols-1 md:grid-cols-3 gap-5 mt-10">
            <div v-for="(item, index) in arrGallery.data" :id="index" :class="index % 2 !== 0 ? 'md:row-span-1' : 'md:row-span-2'" v-if="item.area === areaSelected || areaSelected === 'all'">
                <video v-if="item.type === 'video'" class="w-full object-cover rounded-2xl object-cover" :class="index % 2 !== 0 ? 'md:h-96' : 'md:h-[49.25rem]'" autoplay loop muted>
                    <source :src="item.url">
                </video>
                <img v-if="item.type === 'img'" class="w-full object-cover rounded-2xl" :class="index % 2 !== 0 ? 'md:h-96' : 'md:h-[49.25rem]'" :src="item.url">
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            areaSelected : 'all',
            arrGallery : {
                data : [
                    {url : 'http://hbics_sch_id.rdev/assets/stock_photo_rdev/pexels-宇航-钱-10641436.mp4', type : 'video', area : 'tk'},
                    {url : 'http://hbics_sch_id.rdev/assets/stock_photo_rdev/chris-ried-bN5XdU-bap4-unsplash.webp', type : 'img', area : 'tk'},
                    {url : 'http://hbics_sch_id.rdev/assets/stock_photo_rdev/marvin-meyer-SYTO3xs06fU-unsplash.webp', type : 'img', area : 'sd'},
                    {url : 'http://hbics_sch_id.rdev/assets/stock_photo_rdev/video.mp4', type : 'video', area : 'smp'},
                    {url : 'http://hbics_sch_id.rdev/assets/stock_photo_rdev/austin-poon-JO_S6ewBqAk-unsplash.webp', type : 'img', area : 'smp'},
                    {url : 'http://hbics_sch_id.rdev/assets/stock_photo_rdev/pexels-anna-nekrashevich-6799742.mp4', type : 'video', area : 'sma'},
                    {url : 'http://hbics_sch_id.rdev/assets/stock_photo_rdev/andras-vas-Bd7gNnWJBkU-unsplash.webp', type : 'img', area : 'smp'},
                    {url : 'http://hbics_sch_id.rdev/assets/stock_photo_rdev/domenico-loia-hGV2TfOh0ns-unsplash.webp', type : 'img', area : 'sma'},
                    {url : 'http://hbics_sch_id.rdev/assets/stock_photo_rdev/luca-bravo-XJXWbfSo2f0-unsplash.webp', type : 'img', area : 'tk'},
                    {url : 'http://hbics_sch_id.rdev/assets/stock_photo_rdev/alex-knight-2EJCSULRwC8-unsplash.webp', type : 'img', area : 'sd'},
                    {url : 'http://hbics_sch_id.rdev/assets/stock_photo_rdev/Pexels_Videos_1350205.mp4', type : 'video', area : 'smp'},
                    {url : 'http://hbics_sch_id.rdev/assets/stock_photo_rdev/pexels-宇航-钱-10641436.mp4', type : 'video', area : 'sd'},
                ]
            }
        }
    },
    mounted() {

    },
    methods: {
        changeMenu(menu) {
            this.areaSelected = menu;
        }
    }
}
</script>

<style scoped>

</style>
