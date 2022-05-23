<template>
    <div @click="cardClick"
         class="transition-all duration-200 cursor-pointer border rounded-xl bg-white hover:bg-gray-100 shadow-lg px-5 py-3 flex">
        <img class="h-12 w-12 mr-2 md:mr-4 rounded-full"
             src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
             alt="">
        <div class="pt-1">
            <div class="flex justify-between">
                <h1 class="text-lg font-bold leading-4">{{ this.nama.name }}</h1>
                <h1 class="text-xs">{{ date }}</h1>
            </div>
            <h2 class="text-base">{{ subject }}</h2>
            <p class="my-2 h-20 overflow-hidden leading-5 text-sm text-gray-600">
                {{ this.nama.message }}
            </p>
        </div>
    </div>
</template>

<script>
export default {
    name: "MailboxCardComponent",
    props: ['name', 'date', 'content', 'subject'],
    data () {
        return {
            nama : JSON.parse(this.$props.name).items
        }
    },
    methods: {
        cardClick: function () {
            console.log('terkelik')
        }
    }
}
</script>

<style scoped>

</style>
