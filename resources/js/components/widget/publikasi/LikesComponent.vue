<template>
    <div class="px-5 md:px-40 mb-20">
        <div class="bg-white rounded-xl shadow-lg p-2 mb-10">
            <div class="grid grid-cols-6 gap-2 text-xl md:text-3xl text-center">
                <button :class="get_likes_data.live_like.type === 'favorite' ? 'bg-blue-500 text-white' : ''" @click="likes('favorite')" class="hover:bg-blue-50 py-2 px-2 rounded-lg transition-all ease-in-out duration-300 active:bg-blue-200 active:bg-blue-500 active:text-white"><i class="fa-solid fa-face-grin-hearts"></i></button>
                <button :class="get_likes_data.live_like.type === 'like' ? 'bg-blue-500 text-white' : ''" @click="likes('like')" class="hover:bg-blue-50 py-2 px-2 rounded-lg transition-all ease-in-out duration-300 active:bg-blue-200 active:bg-blue-500 active:text-white"><i class="fa-solid fa-thumbs-up"></i></button>
                <button :class="get_likes_data.live_like.type === 'sad' ? 'bg-blue-500 text-white' : ''" @click="likes('sad')" class="hover:bg-blue-50 py-2 px-2 rounded-lg transition-all ease-in-out duration-300 active:bg-blue-200 active:bg-blue-500 active:text-white"><i class="fa-solid fa-face-sad-tear"></i></button>
                <button :class="get_likes_data.live_like.type === 'surprise' ? ' bg-blue-500 text-white' : ''" @click="likes('surprise')" class="hover:bg-blue-50 py-2 px-2 rounded-lg transition-all ease-in-out duration-300 active:bg-blue-200 active:bg-blue-500 active:text-white"><i class="fas fa-surprise"></i></button>
                <button :class="get_likes_data.live_like.type === 'angry' ? 'bg-blue-500 text-white' : ''" @click="likes('angry')" class="hover:bg-blue-50 py-2 px-2 rounded-lg transition-all ease-in-out duration-300 active:bg-blue-200 active:bg-blue-500 active:text-white"><i class="fa-solid fa-face-angry"></i></button>
                <button :class="get_likes_data.live_like.type === 'funny' ? 'bg-blue-500 text-white' : ''" @click="likes('funny')" class="hover:bg-blue-50 py-2 px-2 rounded-lg transition-all ease-in-out duration-300 active:bg-blue-200 active:bg-blue-500 active:text-white"><i class="fa-solid fa-face-laugh-squint"></i></button>
            </div>
        </div>
        <div class="text-center">
            <h6><span class="mx-2">{{get_likes_data.total_like}}</span>Orang menyukai konten ini</h6>
        </div>
    </div>
</template>

<script>
import axios from "axios";
export default {
    data () {
        return {
            get_likes_data: null
        }
    },
    props: ['url', 'content'],
    mounted() {
        this.getLikes()
    },
    methods: {
        likes: function (type) {
            axios.post(this.$props.url, {
                type_like: type,
            })
            .then(resp => {
                this.getLikes()
            })
            .catch(e => console.log(e))
        },
        getLikes: function () {
            axios.get(this.$props.url)
            .then(resp => {
                this.get_likes_data = resp.data
                if (resp.data.live_like === null) {
                    this.get_likes_data.live_like = 'null'
                }
            })
            .catch(e => console.log(e))
        }
    }
}
</script>

<style scoped>

</style>
