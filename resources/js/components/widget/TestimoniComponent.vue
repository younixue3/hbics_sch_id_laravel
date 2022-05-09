<template>
    <div class="relative w-full h-72 px-1 md:px-5">
        <div class="h-60">
            <Transition name="slide-fade">
                <div :class="show ? 'translate-x-0 opacity-100' : 'opacity-0 translate-x-10'"
                     class="transition-all ease-in-out bg-white rounded-xl shadow-lg border-2 flex items-center md:w-[37rem] h-52 p-1 md:p-5 m-auto">
                    <div class="self-start pl-1 pt-5 w-2/6">
                        <img class="rounded-full w-32 h-32 bg-gray-200 object-cover"
                             :src=" this.pathfoto + data.picture">
                    </div>
                    <div class="w-4/6 relative px-5">
                        <span class="text-lg font-bold truncate" v-if="show">{{ data.name }}</span>
                        <div class="text-amber-500 font-semibold truncate" v-if="show">{{ data.status }}</div>
                        <p v-if="show"
                           class="mt-2 leading-3 overflow-hidden text-ellipsis text-sm font-light transition-all ease-in-out duration-300 h-20 leading-4">
                            {{ data.pesan }}
                        </p>
                    </div>
                    <div class="">
                        <button
                            class="rounded-full h-7 w-7 md:h-10 md:w-10 hover:bg-gray-200 md:text-lg border hover:border-0 border-black"
                            v-on:click="nextButton"><i class="fas fa-angle-right"></i></button>
                    </div>
                </div>
            </Transition>
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    data() {
        return {
            show: true,
            data: {},
            counter: 0,
            pathfoto: window.location.origin + '/Upload/foto_komunitas/',
            arrTestimoni: {
                count: 1,
                person: []
            },
        }
    },
    props: ['get_req'],
    created() {
        axios
            .get(this.$props.get_req)
            .then(response => (
                this.arrTestimoni.person = response.data,
                    this.data = this.arrTestimoni.person[0]
            ))
        this.data = this.arrTestimoni.person[0]
    },
    methods: {
        nextButton() {
            this.counter = this.counter + 1
            if (this.counter === 4) {
                this.counter = 0
            }
            this.show = false
            this.data = this.arrTestimoni.person[this.counter]
            setTimeout(() => this.show = true, 200);
        },
        handleScroll() {
            // console.log(this.$refs.snapSpace.scrollWidth)
            // console.log(document.getElementById('activeSnap').getBoundingClientRect().left)
        },
    }
}
</script>

<style scoped>
.slide-fade-enter-active {
    transition: all 0.3s ease-out;
}

.slide-fade-leave-active {
    transition: all 0.8s cubic-bezier(1, 0.5, 0.8, 1);
}

.slide-fade-enter-from,
.slide-fade-leave-to {
    transform: translateX(20px);
    opacity: 0;
}
</style>
