<template>
    <div @click="cardClick"
         class="transition-all duration-200 cursor-pointer border rounded-xl bg-white hover:bg-gray-100 shadow-lg px-5 py-3 w-full">
        <div class="pt-1">
            <div class="flex">
                <div>
                    <img class="h-12 w-12 mr-2 md:mr-4 rounded-full"
                         src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                         alt="">
                </div>
                <div class="w-full">
                    <div class="flex justify-between">
                        <h1 class="text-lg font-bold leading-4">{{ type === '' ? JSON.parse(this.$props.name).items.name :  JSON.parse(this.$props.name).name }}</h1>
                        <h1 class="text-xs">{{ date }}</h1>
                    </div>
                    <div class="text-xs font-normal leading-4">{{ type === '' ? JSON.parse(this.$props.name).items.email : JSON.parse(this.$props.name).email }}</div>
                    <h2 class="text-base">{{ subject }}</h2>
                </div>
            </div>
            <p v-if="type === ''" class="my-2 h-20 overflow-hidden leading-5 text-sm text-gray-600">
                {{ JSON.parse(this.$props.name).items.message }}
            </p>
            <div v-if="type !== ''" class="h-20 my-2 flex">
                <div class="m-auto border border-dashed flex">
                    <div class="m-auto flex">
                        <i class="fas fa-file-alt"></i>
                        <div>1 Form Kunjungan</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    name: "MailboxCardComponent",
    props: ['name', 'date', 'content', 'subject', 'url', 'type', 'sent'],
    data () {
        return {
            sent_message: null
        }
    },
    methods: {
        cardClick: function () {
            this.$store.state.mailbox.name = null
            this.$store.state.mailbox.email = null
            this.$store.state.mailbox.subject = null
            this.$store.state.mailbox.url = null
            this.$store.state.mailbox.sent = null
            this.$store.state.mailbox.content = null
            this.$store.state.mailbox.date = null
            this.$store.state.mailbox.kunjungan = null
            if (this.$props.type === '') {
                this.$store.state.mailbox.name =  JSON.parse(this.$props.name).items.name
                this.$store.state.mailbox.email =  JSON.parse(this.$props.name).items.email
                this.$store.state.mailbox.subject =  this.$props.subject
                this.$store.state.mailbox.url = this.$props.url
                this.$store.state.mailbox.sent = this.$props.sent
                this.$store.state.mailbox.content =  JSON.parse(this.$props.name).items.message
                this.$store.state.mailbox.date =  JSON.parse(this.$props.name).items.date
            } else {
                this.$store.state.mailbox.name =  JSON.parse(this.$props.name).name
                this.$store.state.mailbox.email =  JSON.parse(this.$props.name).email
                this.$store.state.mailbox.subject =  this.$props.subject
                this.$store.state.mailbox.url = this.$props.url
                this.$store.state.mailbox.sent = this.$props.sent
                this.$store.state.mailbox.kunjungan = JSON.parse(this.$props.name)
                this.$store.state.mailbox.date =  JSON.parse(this.$props.name).date
            }
            axios.get(this.$props.sent)
            .then(resp => {
                this.$store.state.mailbox.sent = resp.data.data_mailbox
            })
        }
    }
}
</script>

<style scoped>

</style>
