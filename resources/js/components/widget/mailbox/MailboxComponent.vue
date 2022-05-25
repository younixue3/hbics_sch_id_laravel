<template>
    <div>

        <div class="flex">
            <button class="text-gray-500 border px-3 py-1 rounded-l-xl shadow-md"><i class="fas fa-inbox mr-2"></i>Inbox<span
                class="bg-indigo-600 rounded-full text-white px-2 pb-0.5 pt-1 ml-2 mx-1">12</span></button>
            <button class="text-gray-500 border border-r-0 border-l-0 px-3 py-1 shadow-md"><i
                class="fas fa-envelope mr-2"></i>Sent
            </button>
            <button class="text-gray-500 border px-3 py-1 rounded-r-xl shadow-md"><i class="fas fa-trash mr-2"></i>Trash
            </button>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-8 gap-5 my-5">
            <div class="md:col-span-3 space-y-3">
                <slot>

                </slot>
            </div>
            <!--       Not Support for Mobile Version         -->
            <div class="hidden md:block md:col-span-5 relative">
                <div :class="this.$store.state.mailbox.name == null ? 'hidden' : ''" class="border rounded-xl bg-whited shadow-lg px-5 py-3">
                    <div class="pt-1">
                        <div class="flex">
                            <div>
                                <img class="h-12 w-12 mr-2 md:mr-4 rounded-full"
                                     src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                     alt="">
                            </div>
                            <div class="w-full">
                                <div class="flex justify-between">

                                    <h1 class="text-lg font-bold leading-4">{{this.$store.state.mailbox.name}}</h1>
                                    <h1 class="text-xs">{{this.$store.state.mailbox.date}}</h1>
                                </div>
                                <div class="text-xs font-normal leading-4">{{this.$store.state.mailbox.email}}</div>
                                <h2 class="text-base">{{this.$store.state.mailbox.subject}}</h2>
                            </div>
                        </div>
                        <p v-if="this.$store.state.mailbox.kunjungan === null" class="my-2 overflow-hidden leading-5 text-sm text-gray-600">
                            {{this.$store.state.mailbox.content}}
                        </p>
                        <div class="my-2" v-if="this.$store.state.mailbox.kunjungan !== null">
                            <div
                                class="p-5 bg-white rounded-2xl w-full flex-row text-left text-sm md:text-base">
                                <div class="my-2">
                                    <span class="text-sm">Nama orang tua</span>
                                    <input disabled type="text" :value="this.$store.state.mailbox.kunjungan.name"
                                           class="bg-gray-100 w-full rounded-md py-2 pl-5 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 font-semibold">
                                </div>
                                <div class="my-2">
                                    <label class="text-sm">Alamat email</label>
                                    <input disabled type="text" :value="this.$store.state.mailbox.kunjungan.email"
                                           class="bg-gray-100 w-full rounded-md py-2 pl-5 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 font-semibold">
                                </div>
                                <div class="my-2">
                                    <label class="text-sm">Alamat</label>
                                    <textarea  :value="this.$store.state.mailbox.kunjungan.alamat"
                                        class="bg-gray-100 h-20 resize-none w-full rounded-md py-2 pl-5 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 font-semibold"></textarea>
                                </div>
                                <div class="my-2 grid grid-cols-2 gap-5">
                                    <div>
                                        <label class="text-sm">Kota/Kab</label>
                                        <input disabled type="text"  :value="this.$store.state.mailbox.kunjungan.kota_kab"
                                               class="bg-gray-100 w-full rounded-md py-2 pl-5 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 font-semibold">
                                    </div>
                                    <div>
                                        <label class="text-sm">Negara</label>
                                        <input disabled type="text"  :value="this.$store.state.mailbox.kunjungan.negara"
                                               class="bg-gray-100 w-full rounded-md py-2 pl-5 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 font-semibold">
                                    </div>
                                </div>
                                <div class="my-2">
                                    <label class="text-sm">Telepon</label>
                                    <input disabled type="text"  :value="this.$store.state.mailbox.kunjungan.telepon"
                                           class="bg-gray-100 w-full rounded-md py-2 pl-5 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 font-semibold">
                                </div>
                                <div class="my-2 mt-8">
                                    <div class="my-2">
                                        <span class="text-sm">Nama calon siswa/i</span>
                                        <input disabled type="text"  :value="this.$store.state.mailbox.kunjungan.nama_calon_siswa"
                                               class="bg-gray-100 w-full rounded-md py-2 pl-5 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 font-semibold">
                                    </div>
                                </div>
                                <div class="my-2">
                                    <span class="text-sm">Area kunjungan</span>
                                    <div class="grid grid-cols-1 md:grid-cols-4 mt-3 mb-5">
                                        <div class="mx-0.5">
                                            <input :checked="this.$store.state.mailbox.kunjungan.area_kunjungan === 'HHK'" disabled type="checkbox"
                                                   class="appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer text-black">
                                            <span class="text-sm">Happy Holy Kids</span>
                                        </div>
                                        <div class="mx-0.5">
                                            <input :checked="this.$store.state.mailbox.kunjungan.area_kunjungan === 'SD'" disabled type="checkbox"
                                                   class="appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-red-600 checked:border-red-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer text-black">
                                            <span class="text-sm">SDK Harapan Bangsa</span>
                                        </div>
                                        <div class="mx-0.5">
                                            <input :checked="this.$store.state.mailbox.kunjungan.area_kunjungan === 'SMP'" disabled type="checkbox"
                                                   class="appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-purple-600 checked:border-purple-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer text-black">
                                            <span class="text-sm">SMPK Harapan Bangsa</span>
                                        </div>
                                        <div class="mx-0.5">
                                            <input :checked="this.$store.state.mailbox.kunjungan.area_kunjungan === 'SMA'" disabled type="checkbox"
                                                   class="appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-green-600 checked:border-green-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer text-black">
                                            <span class="text-sm">SMAK Harapan Bangsa</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="my-2">
                                    <div class="my-2">
                                        <span class="text-sm">Tingkat pendidikan saat ini</span>
                                        <input disabled type="text"  :value="this.$store.state.mailbox.kunjungan.tinkat_pendidikan"
                                               class="bg-gray-100 w-full rounded-md py-2 pl-5 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 font-semibold">
                                    </div>
                                </div>
                                <div class="my-2">
                                    <div class="my-2">
                                        <span class="text-sm">Tanggal kunjungan</span>
                                        <input disabled type="datetime"  :value="this.$store.state.mailbox.kunjungan.tanggal_kunjungan"
                                               class="bg-gray-100 w-full rounded-md py-2 pl-5 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 font-semibold">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 gap-y-3">
                            <div class="bg-white rounded-xl p-4" v-for="item in this.$store.state.mailbox.sent">
                                <div class="mb-4" v-html="item.message"></div>
                                <div class="text-xs text-gray-700">
                                    <div>Sent By {{item.name}}</div>
                                    <div>{{item.email}}</div>
                                </div>
                            </div>
                        </div>
                        <form :action="$store.state.mailbox.url" class="flex relative rounded-md mt-10 mb-5">
                            <input type="hidden" name="_token" :value="$store.state.csrf">
                            <!--                            <textarea type="email"-->
                            <!--                                   class="flex-1 block border w-full rounded-xl focus:outline-none px-3 pt-2 pb-1 h-32 resize-y"></textarea>-->
                            <editor name="sent"
                                api-key="no-api-key"
                                class="flex-1 block border w-full rounded-xl focus:outline-none px-3 pt-2 pb-1 h-32 resize"
                                :init="{
                     height: 300,
                     width: 600,
                     menubar: true,
                     plugins: [
                       'advlist autolink lists link image charmap print preview anchor',
                       'searchreplace visualblocks code fullscreen',
                       'insertdatetime table paste code help wordcount',
                       'lists link paste help wordcount'
                     ],
                     images_file_types: 'jpg,svg,webp',
                     file_picker_types: 'image',
                     automatic_uploads: true,
                     file_picker_callback: (cb, value, meta) => {imageUploader(cb, value, meta)},
                     toolbar:
                       'undo redo | formatselect | bold italic backcolor | \
                       alignleft aligncenter alignright alignjustify | \
                       bullist numlist outdent indent | removeformat | help | image'
                   }"
                            />
                            <button
                                class="inline-flex mx-2 bg-blue-800 items-center h-10 rounded-xl border text-white w-12 float-bottom">
                                <i class="far fa-paper-plane text-amber-400 text-xl m-auto"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Editor from "@tinymce/tinymce-vue";
import axios from "axios";
export default {
    name: "MailboxComponent",
    components: {
        'editor': Editor
    },
    data() {
        return {}
    },
    mounted() {

    },
    methods: {
        getMail: function() {
            axios.get(window.location.origin + '/dashboard/mailbox')
            .then(resp => {
                console.log(resp)
            })
        },
        imageUploader: function (cb, value, meta) {
            const input = document.createElement('input disabled');
            input.setAttribute('type', 'file');
            input.setAttribute('accept', 'image/*');

            input.addEventListener('change', (e) => {
                const file = e.target.files[0];

                const reader = new FileReader();
                reader.addEventListener('load', () => {
                    /*
                      Note: Now we need to register the blob in TinyMCEs image blob
                      registry. In the next release this part hopefully won't be
                      necessary, as we are looking to handle it internally.
                    */
                    const id = 'blobid' + (new Date()).getTime();
                    const blobCache = tinymce.activeEditor.editorUpload.blobCache;
                    const base64 = reader.result.split(',')[1];
                    const blobInfo = blobCache.create(id, file, base64);
                    blobCache.add(blobInfo);

                    /* call the callback and populate the Title field with the file name */
                    cb(blobInfo.blobUri(), {title: file.name});
                });
                reader.readAsDataURL(file);
            });

            input.click();
        },
        clickCard: function () {
            console.log('asdas')
        }
    }
}
</script>

<style scoped>

</style>
