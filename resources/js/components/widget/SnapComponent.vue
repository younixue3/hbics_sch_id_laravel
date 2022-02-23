<template>
    <div class="flex relative">
        <div ref="scrollsnap" class="snap-x flex gap-6 snap-mandatory overflow-x-auto removescrollbar scroll-smooth">
            <div v-for="(item, index) in arrTestimoni.fasilitas" :id="'testing' + index" class="snap-center scroll-mx-6 shrink-0 rounded-3xl px-2">
                <img class="h-56 rounded-3xl" :src="item.image" />
            </div>
            <div href="#" class="snap-center scroll-mx-6 shrink-0 rounded-3xl overflow-hidden">
                <div class="flex relative">
                    <img class="h-56 rounded-3xl blur-sm" src="https://images.unsplash.com/photo-1604999565976-8913ad2ddb7c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=320&h=160&q=80" />
                    <div class="absolute w-full h-full flex">
                        <div class="m-auto text-3xl text-white">
                            Show More +
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute flex h-full right-0 px-2">
            <button v-on:click="nextButton()"
                class="rounded-full m-auto h-7 w-7 md:h-10 md:w-10 md:h-10 md:w-10 backdrop-blur-sm backdrop-brightness-75 text-2xl text-white transition-all ease-in-out"><i class="fas fa-angle-right"></i></button>
        </div>
        <div class="absolute flex h-full left-0 px-2">
            <button
                class="rounded-full m-auto h-7 w-7 md:h-10 md:w-10 md:h-10 md:w-10 backdrop-blur-sm backdrop-brightness-75 text-2xl text-white transition-all ease-in-out"><i class="fas fa-angle-left"></i></button>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            counter: 0,
            scrolcount: 0,
            arrTestimoni: {
                count: 0,
                fasilitas: [
                    {
                        image: 'https://images.unsplash.com/photo-1604999565976-8913ad2ddb7c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=320&h=160&q=80',
                    },
                    {
                        image: 'https://images.unsplash.com/photo-1604999565976-8913ad2ddb7c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=320&h=160&q=80',
                    },
                    {
                        image: 'https://images.unsplash.com/photo-1604999565976-8913ad2ddb7c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=320&h=160&q=80',
                    },
                    {
                        image: 'https://images.unsplash.com/photo-1604999565976-8913ad2ddb7c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=320&h=160&q=80',
                    },
                    {
                        image: 'https://images.unsplash.com/photo-1604999565976-8913ad2ddb7c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=320&h=160&q=80',
                    },
                ]
            },
        }
    },
    mounted() {
        // this.scrolcount = this.$refs.scrollsnap.scrollWidth
    },
    methods: {
        nextButton() {
            this.counter = this.counter + 1

            var scroller = this.$refs.scrollsnap
            var element = document.getElementById('testing' + this.counter).getBoundingClientRect().width
            console.log(this.scrolcount)


            if (this.counter === 4) {
                this.counter = 0
                this.scrolcount = 0
            } else {
                this.scrolcount = this.scrolcount + element
            }
            scroller.scrollTo({behavior: 'smooth', left: this.scrolcount})
        },
    }
}
</script>

<style scoped>

</style>
