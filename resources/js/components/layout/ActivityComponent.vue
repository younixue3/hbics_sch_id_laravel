<template>
    <div @mouseenter="mousein" @mouseleave="mouseout">
        <slot></slot>
    </div>
</template>

<script>
import axios from "axios";

export default {
    name: "ActivityComponent",
    data() {
        return {
            timesout: 0,
            count: 'stop',
            windowspath: window.location.origin + '/',
        }
    },
    props: [
      'userid'
    ],
    mounted() {
        this.activity()
    },
    methods: {
        mouseout: function () {
            this.count = 'start'
        },
        mousein: function () {
            axios.post(this.windowspath + 'api/checkActivity/' + this.$props.userid, {activity: 'active'})
                .then(resp => {
                    this.count = 'stop'
                })
            this.timesout = 0
            this.count = 'stop'
        },
        activity: function () {
            const self = this
            setInterval(function () {
                if (self.count === 'start') {
                    self.timesout++
                }
            }, 1000)
        },

    },
    watch: {
        timesout: function () {
            if (this.timesout >= 300) {
                axios.post(this.windowspath + 'api/checkActivity/' + this.$props.userid,{activity: 'not_active'})
                .then(resp => {
                    this.count = 'stop'
                })
                .catch(e => console.log(e))
            }
        }
    }
}
</script>

<style scoped>

</style>
