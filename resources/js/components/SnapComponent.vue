<template>
    <div class="relative w-full h-72 px-5">
        <div class="h-60">
            <Transition name="slide-fade">
                <div v-if="show" class="bg-white rounded-xl shadow-lg border-2 flex md:w-[35rem] h-52 p-5 m-auto">
                    <div class="w-1/4 m-auto">
                        <img class="rounded-full w-32 h-32 bg-gray-200 object-cover"
                             src="http://hbics_sch_id.test/assets/stock_photo_rdev/Pic-1.jpg">
                    </div>
                    <div class="relative w-3/4 px-5">
                        <span class="text-lg font-bold truncate" v-if="show">{{ data.name }}</span>
                        <div class="text-amber-500 font-semibold truncate" v-if="show">{{ data.jabatan }}</div>
                        <p v-if="show"
                           class="mt-2 leading-3 overflow-hidden text-ellipsis text-sm font-light transition-all ease-in-out duration-300 h-20 leading-4">
                            {{ data.massage }}
                        </p>
                        <div class="absolute right-0 bottom-0">
                            <button
                                class="rounded-full h-10 w-10 hover:bg-gray-200 text-lg border hover:border-0 border-black"
                                v-on:click="nextButton"><i class="fas fa-angle-right"></i></button>
                        </div>
                    </div>
                </div>
            </Transition>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            show: true,
            data: {},
            counter: 0,
            arrTestimoni: {
                count: 1,
                person: [
                    {
                        id: 1,
                        name: 'Ricko Tiaka',
                        jabatan: 'Web Developer',
                        massage: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas a mauris ut ipsum varius blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sed nisl non ante semper vehicula. Morbi pretium, nisl in egestas iaculis, augue enim scelerisque neque, in scelerisque dolor justo quis sapien. Mauris suscipit eleifend eros non condimentum. Maecenas felis mi, efficitur tincidunt accumsan vel, lacinia sed nisi.',
                        status: false
                    },
                    {
                        id: 2,
                        name: 'Ricky Tiaka',
                        jabatan: 'Mobile Developer',
                        massage: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas a mauris ut ipsum varius blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sed nisl non ante semper vehicula. Morbi pretium, nisl in egestas iaculis, augue enim scelerisque neque, in scelerisque dolor justo quis sapien. Mauris suscipit eleifend eros non condimentum. Maecenas felis mi, efficitur tincidunt accumsan vel, lacinia sed nisi.',
                        status: true
                    },
                    {
                        id: 3,
                        name: 'Ricka Tiaka',
                        jabatan: 'Flutter Developer',
                        massage: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas a mauris ut ipsum varius blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sed nisl non ante semper vehicula. Morbi pretium, nisl in egestas iaculis, augue enim scelerisque neque, in scelerisque dolor justo quis sapien. Mauris suscipit eleifend eros non condimentum. Maecenas felis mi, efficitur tincidunt accumsan vel, lacinia sed nisi.',
                        status: false
                    },
                    {
                        id: 4,
                        name: 'Ricku Tiaka',
                        jabatan: 'Vue Js Developer',
                        massage: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas a mauris ut ipsum varius blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sed nisl non ante semper vehicula. Morbi pretium, nisl in egestas iaculis, augue enim scelerisque neque, in scelerisque dolor justo quis sapien. Mauris suscipit eleifend eros non condimentum. Maecenas felis mi, efficitur tincidunt accumsan vel, lacinia sed nisi.',
                        status: false
                    },
                    {
                        id: 5,
                        name: 'Rocki Tiaka',
                        jabatan: 'Front-End Engineer',
                        massage: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas a mauris ut ipsum varius blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sed nisl non ante semper vehicula. Morbi pretium, nisl in egestas iaculis, augue enim scelerisque neque, in scelerisque dolor justo quis sapien. Mauris suscipit eleifend eros non condimentum. Maecenas felis mi, efficitur tincidunt accumsan vel, lacinia sed nisi.',
                        status: false
                    }
                ]
            },
        }
    },
    created() {
        this.data = this.arrTestimoni.person[0]
    },
    methods: {
        nextButton() {
            this.counter = this.counter + 1
            if (this.counter === 5) {
                this.counter = 0
            }
            this.show = false
            this.data = this.arrTestimoni.person[this.counter]
            setTimeout(() => this.show = true, 1500);
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
