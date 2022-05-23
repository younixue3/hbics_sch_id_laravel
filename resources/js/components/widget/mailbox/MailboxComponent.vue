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
                <div v-for=""
                    class="transition-all duration-200 cursor-pointer border rounded-xl bg-white hover:bg-gray-100 shadow-lg px-5 py-3 flex">
                    <img class="h-12 w-12 mr-2 md:mr-4 rounded-full"
                         src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                         alt="">
                    <div class="pt-1">
                        <div class="flex justify-between">
                            <h1 class="text-lg font-bold leading-4">Jane Doe</h1>
                            <h1 class="text-xs">August 23, 2021</h1>
                        </div>
                        <h2 class="text-base">Apply Resume CV</h2>
                        <p class="my-2 h-20 overflow-hidden leading-5 text-sm text-gray-600">
                            It is a long established fact that a reader will be distracted by the readable content
                            of a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                            more-or-less normal distribution of letters, as opposed to using 'Content here, content
                            here', making it look like readable English.
                        </p>
                    </div>
                </div>
            </div>
            <!--       Not Support for Mobile Version         -->
            <div class="hidden md:block md:col-span-5">
                <div class="border rounded-xl bg-whited shadow-lg px-5 py-3 flex">
                    <img class="h-12 w-12 mr-2 md:mr-4 rounded-full"
                         src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                         alt="">
                    <div class="pt-1">
                        <div class="flex justify-between">
                            <h1 class="text-lg font-bold leading-4">Jane Doe</h1>
                            <h1 class="text-xs">August 23, 2021</h1>
                        </div>
                        <h1 class="text-sm leading-4">janedoe@example.com</h1>
                        <h2 class="text-base">Apply Resume CV</h2>
                        <p class="my-2 overflow-hidden leading-5 text-sm text-gray-600">
                            It is a long established fact that a reader will be distracted by the readable content
                            of a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                            more-or-less normal distribution of letters, as opposed to using 'Content here, content
                            here', making it look like readable English. Many desktop publishing packages and web
                            page editors now use Lorem Ipsum as their default model text, and a search for 'lorem
                            ipsum' will uncover many web sites still in their infancy. Various versions have evolved
                            over the years, sometimes by accident, sometimes on purpose (injected humour and the
                            like).
                        </p>
                        <div class="grid grid-cols-3 gap-5 pt-10">
                            <!--                            <img class="transition-all duration-500 cursor-pointer object-cover h-32 filter hover:grayscale"-->
                            <!--                                 src="../public/img/asia-business-woman-success-celebration-keeping-arms-raised-home-office.jpg">-->
                            <!--                            <img class="transition-all duration-500 cursor-pointer object-cover h-32 filter hover:grayscale"-->
                            <!--                                 src="../public/img/asian-muslim-lady-looking-camera-talk-colleagues-about-plan-video-call-new-normal-office.jpg">-->
                            <!--                            <img class="transition-all duration-500 cursor-pointer object-cover h-32 filter hover:grayscale"-->
                            <!--                                 src="../public/img/download.jpg">-->
                            <!--                            <img class="transition-all duration-500 cursor-pointer object-cover h-32 filter hover:grayscale"-->
                            <!--                                 src="../public/img/young-asian-healthy-woman-sportswear-workout-home-exercise-fit-doing-yoga-home-sport-fitness-concept.jpg">-->
                            <!--                            <img class="transition-all duration-500 cursor-pointer object-cover h-32 filter hover:grayscale"-->
                            <!--                                 src="../public/img/hq720.jpg">-->
                        </div>
                        <form class="flex relative rounded-md mt-10 mb-5">
                            <!--                            <textarea type="email"-->
                            <!--                                   class="flex-1 block border w-full rounded-xl focus:outline-none px-3 pt-2 pb-1 h-32 resize-y"></textarea>-->
                            <editor
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
                                class="inline-flex mx-2 items-center h-10 rounded-xl border text-white w-12 float-bottom">
                                <i class="far fa-paper-plane text-gray-600 text-xl m-auto"></i>
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
            const input = document.createElement('input');
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
        }
    }
}
</script>

<style scoped>

</style>
