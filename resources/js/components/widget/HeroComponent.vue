<template>
    <div class="h-screen bg-gray-200 overflow-hidden">
        <div class="flex h-screen relative text-center mb-10 shadow-xl transition-all ease-in-out duration-300"
             :class="show ? 'translate-x-0 opacity-100' : 'opacity-0 translate-x-10'">
            <img id="hero_section" class="h-screen w-screen object-cover transition-all ease-in-out"
                 :src=" this.windowspath + this.sliderContent.image" alt="">
            <div
                class="absolute bottom-0 pb-10 bg-gradient-to-t from-gray-900 to-transparent w-full text-center transition-all ease-in-out"
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
                                    :class="show ? 'opacity-100' : 'opacity-0'">{{ this.sliderContent.title }}</h2>
                                <div class="border-b-2 border-black mt-3 w-20 m-auto transition-all ease-in-out"
                                     :class="show ? 'opacity-100' : 'opacity-0'"></div>
                            </div>
                            <div class="self-start">
                                <p class="font-light text-gray-500 transition-all ease-in-out"
                                   :class="show ? 'opacity-100' : 'opacity-0'">
                                    {{ this.sliderContent.content }}
                                </p>
                            </div>
                            <div class="mt-5">
                                <a class="hover:bg-blue-500 text-blue-500 hover:text-white rounded-full px-3 after:content-['_↗'] transition-all ease-in-out"
                                   href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            show: true,
            slider: 0,
            windowspath: window.location.origin + '/assets/stock_photo_rdev/',
            sliderContent: [],
            heroContent: [
                {
                    id: 1,
                    image: 'IMG_7266.jpg',
                    title: 'Happy Holy Kids',
                    content: 'Mauris placerat nulla non laoreet fringilla. Vivamus ut metus sed mi eleifend dapibus. Curabitur non consequat massa. Donec scelerisque orci neque, id vehicula magna varius nec.'
                },
                {
                    id: 2,
                    image: 'Pic-1.jpg',
                    title: 'Sekolah Dasar',
                    content: 'Mauris placerat nulla non laoreet fringilla. Vivamus ut metus sed mi eleifend dapibus. Curabitur non consequat massa. Donec scelerisque orci neque, id vehicula magna varius nec.'
                },
                {
                    id: 3,
                    image: 'IMG_7266.jpg',
                    title: 'Sekolah Menengah Pertama',
                    content: 'Mauris placerat nulla non laoreet fringilla. Vivamus ut metus sed mi eleifend dapibus. Curabitur non consequat massa. Donec scelerisque orci neque, id vehicula magna varius nec.'
                },
                {
                    id: 4,
                    image: 'Pic-1.jpg',
                    title: 'Sekolah Menengah Atas',
                    content: 'Mauris placerat nulla non laoreet fringilla. Vivamus ut metus sed mi eleifend dapibus. Curabitur non consequat massa. Donec scelerisque orci neque, id vehicula magna varius nec.'
                },
                {
                    id: 5,
                    image: 'IMG_7266.jpg',
                    title: 'Visi Misi',
                    content: 'Mauris placerat nulla non laoreet fringilla. Vivamus ut metus sed mi eleifend dapibus. Curabitur non consequat massa. Donec scelerisque orci neque, id vehicula magna varius nec.'
                },
            ]
        }
    },
    mounted() {
        setInterval(this.countSlider, 8000);
        this.sliderContent = this.heroContent[this.slider]
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
