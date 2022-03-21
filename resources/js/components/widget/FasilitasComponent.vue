<template>
    <div>
        <div class="flex justify-center border-b border-black">
            <button
                class="border-b-4 border-transparent focus:border-blue-600 mx-5 -mb-0.5 transition-all ease-in-out duration-500"
                @click="changeMenu('all')">All
            </button>
            <button
                class="border-b-4 border-transparent focus:border-blue-600 mx-5 -mb-0.5 transition-all ease-in-out duration-500"
                @click="changeMenu('tk')">TK & PG
            </button>
            <button
                class="border-b-4 border-transparent focus:border-blue-600 mx-5 -mb-0.5 transition-all ease-in-out duration-500"
                @click="changeMenu('sd')">SD
            </button>
            <button
                class="border-b-4 border-transparent focus:border-blue-600 mx-5 -mb-0.5 transition-all ease-in-out duration-500"
                @click="changeMenu('smp')">SMP
            </button>
            <button
                class="border-b-4 border-transparent focus:border-blue-600 mx-5 -mb-0.5 transition-all ease-in-out duration-500"
                @click="changeMenu('sma')">SMA
            </button>
        </div>
        <div class="grid md:grid-rows-6 grid-cols-1 md:grid-cols-3 gap-5 mt-10">
            <div v-for="(item, index) in arrFasilitas.fasilitas" :id="index"
                 :class="index % 2 !== 0 ? 'md:row-span-1' : 'md:row-span-2'"
                 v-if="item.area === areaSelected || areaSelected === 'all'">
                <video v-if="item.type === 'video'" class="w-full object-cover rounded-2xl object-cover"
                       :class="index % 2 !== 0 ? 'md:h-96' : 'md:h-[49.25rem]'" autoplay loop muted>
                    <source :src="asset + item.name">
                </video>
                <img v-if="item.type === 'img'" class="w-full object-cover rounded-2xl"
                     :class="index % 2 !== 0 ? 'md:h-96' : 'md:h-[49.25rem]'" :src="asset + item.name">
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            areaSelected: 'all',
            arrFasilitas: {
                fasilitas: []
            }
        }
    },
    props: ['url', 'asset'],
    mounted() {
        axios
            .get(this.$props.url)
            .then(response => (this.arrFasilitas.fasilitas = response.data))
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
