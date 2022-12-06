<template>
    <div class="m-auto w-full px-6">
        <div class="flex w-full">
            <div class="border-2 bg-white rounded-xl w-full flex justify-between">
                <button class="w-full bg-white  rounded-l-xl"
                        :class="tab_active === 'hhk' ? 'bg-blue-600 text-white' : 'hover:bg-blue-100'"
                        @click="tab_active = 'hhk'">HHK
                </button>
                <button class="w-full bg-white"
                        :class="tab_active === 'sdk' ? 'bg-blue-600 text-white' : 'hover:bg-blue-100'"
                        @click="tab_active = 'sdk'">SDK
                </button>
                <button class="w-full bg-white"
                        :class="tab_active === 'smpk' ? 'bg-blue-600 text-white' : 'hover:bg-blue-100'"
                        @click="tab_active = 'smpk'">SMPK
                </button>
                <button class="w-full bg-white rounded-r-xl"
                        :class="tab_active === 'smak' ? 'bg-blue-600 text-white' : 'hover:bg-blue-100'"
                        @click="tab_active = 'smak'">SMAK
                </button>
            </div>
        </div>
        <div class="px-10 text-left mt-10">
            <ol v-if="tab_active === 'hhk'" class="relative border-l border-gray-400 w-full">
                <li v-for="(item, index, key) in JSON.parse(this.$props.hhk)" :key="key" class="mb-10 ml-6 w-full">
                        <span
                            class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-800 rounded-full">
                        </span>
                    <h3 class="mb-1 text-lg font-semibold text-gray-900">{{item.judul}}</h3>
                    <p class="text-base font-normal text-gray-500">{{
                            item.isi
                        }}</p>
                </li>
            </ol>
            <ol v-if="tab_active === 'sdk'" class="relative border-l border-gray-400 w-full">
                <li v-for="(item, index, key) in JSON.parse(this.$props.sd)" :key="key" class="mb-10 ml-6 w-full">
                        <span
                            class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-800 rounded-full">
                        </span>
                    <h3 class="mb-1 text-lg font-semibold text-gray-900">{{item.judul}}</h3>
                    <p class="text-base font-normal text-gray-500">{{
                            item.isi
                        }}</p>
                </li>
            </ol>
            <ol v-if="tab_active === 'smpk'" class="relative border-l border-gray-400 w-full">
                <li v-for="(item, index, key) in JSON.parse(this.$props.smp)" :key="key" class="mb-10 ml-6 w-full">
                        <span
                            class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-800 rounded-full">
                        </span>
                    <h3 class="mb-1 text-lg font-semibold text-gray-900">{{item.judul}}</h3>
                    <p class="text-base font-normal text-gray-500">{{
                            item.isi
                        }}</p>
                </li>
            </ol>
            <ol v-if="tab_active === 'smak'" class="relative border-l border-gray-400 w-full">
                <li v-for="(item, index, key) in JSON.parse(this.$props.sma)" :key="key" class="mb-10 ml-6 w-full">
                        <span
                            class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-800 rounded-full">
                        </span>
                    <h3 class="mb-1 text-lg font-semibold text-gray-900">{{item.judul}}</h3>
                    <p class="text-base font-normal text-gray-500">{{
                            item.isi
                        }}</p>
                </li>
            </ol>
        </div>
    </div>
</template>

<script>
export default {
    name: "TabBarComponent",
    data() {
        return {
            tab_active: 'hhk'
        }
    },
    props: {
        hhk: JSON,
        sd: JSON,
        smp: JSON,
        sma: JSON
    }
}
</script>

<style scoped>

</style>
