<template>
    <div class="h-screen bg-gray-200 overflow-hidden">
        <div class="flex h-screen relative text-center mb-10 shadow-xl transition-all ease-in-out duration-300"
             :class="show ? 'translate-x-0 opacity-100' : 'opacity-0 translate-x-10'">
            <img id="hero_section" class="h-screen w-screen object-top object-cover transition-all ease-in-out"
                 :src="this.windowspath + this.sliderContent.picture" alt="">
            <div
                class="absolute top-0 pb-32 bg-gradient-to-b from-gray-900 to-transparent w-full opacity-50 text-center transition-all ease-in-out"
                :class="show ? 'opacity-100' : 'opacity-0'">
            </div>
            <div class="absolute w-screen h-screen">
                <div class="absolute grid grid-cols-10 top-1/2 -translate-y-1/2 items-center w-full">
                    <div class="order-last">
                        <button
                            class="rounded-full h-7 w-7 md:h-10 md:w-10 md:h-10 md:w-10 hover:bg-gray-200 md:text-lg border hover:border-0 border-black transition-all ease-in-out"
                            v-on:click="nextSlider()"><i class="fas fa-angle-right"></i></button>
                    </div>
                    <div class="order-first">
                        <button
                            class="rounded-full h-7 w-7 md:h-10 md:w-10 md:h-10 md:w-10 hover:bg-gray-200 md:text-lg border hover:border-0 border-black transition-all ease-in-out"
                            v-on:click="prevSlider()"><i class="fas fa-angle-left"></i></button>
                    </div>
                    <div class="col-span-8 justify-self-end">
                        <div
                            class="grid grid-rows-3 px-5 justify-center items-center bg-white h-[25rem] md:h-80 md:w-80 opacity-90 hover:opacity-100 transform hover:scale-105 transition-all ease-in-out rounded-xl">
                            <div>
                                <h2 class="text-3xl font-raleway font-bold transition-all ease-in-out"
                                    :class="show ? 'opacity-100' : 'opacity-0'">{{ this.sliderContent.name }}</h2>
                                <div class="border-b-2 border-black mt-3 w-20 m-auto transition-all ease-in-out"
                                     :class="show ? 'opacity-100' : 'opacity-0'"></div>
                            </div>
                            <div class="self-start">
                                <p class="font-light text-gray-500 transition-all ease-in-out"
                                   :class="show ? 'opacity-100' : 'opacity-0'">
                                    {{ this.sliderContent.pesan }}
                                </p>
                            </div>
                        </div>
                    </div>
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
            show: true,
            slider: 0,
            windowspath: window.location.origin + '/assets/foto_komunitas/',
            sliderContent: [],
            heroContent: []
        }
    },
    props: ['url_req'],
    mounted() {
        axios
            .get(this.$props.url_req)
            .then(response => this.heroContent = response.data)
            .finally(() => this.sliderContent = this.heroContent[this.slider])

        setInterval(this.countSlider, 8000);
    },
    methods: {
        countSlider: function () {
            if (this.slider === 4) {
                this.slider = 1;
                setTimeout(() => this.sliderContent = this.heroContent[this.slider], 200);
            } else {
                this.slider++;
                setTimeout(() => this.sliderContent = this.heroContent[this.slider], 200);
            }
            this.show = false
            setTimeout(() => this.show = true, 300);
        },
        nextSlider: function () {
            this.countSlider()
        },
        prevSlider: function () {
            if (this.slider === 0) {
                this.slider = 4;
                setTimeout(() => this.sliderContent = this.heroContent[this.slider], 200);
            } else {
                this.slider--;
                setTimeout(() => this.sliderContent = this.heroContent[this.slider], 200);
            }
            this.show = false
            setTimeout(() => this.show = true, 300);
        }
    }
}
</script>

<style scoped>

</style>
