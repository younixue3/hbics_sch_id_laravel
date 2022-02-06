<template>
    <div>
        <header ref="navbar" class="h-44 fixed w-screen transition-all ease-in-out duration-300 z-50" id="navBar">
            <div>
                <div :class="show ? 'bg-amber-400 h-16' : 'bg-transparent h-44'"
                    class="px-5 sm:py-0 md:px-2 md:space-x-10 transition-all ease-in-out duration-300">
<!--                    <div class="-mr-2 -my-2 md:hidden">-->
<!--                        <button id="openMenu" type="button"-->
<!--                                class="rounded-md p-1 inline-flex items-center justify-center text-gray-200 focus:outline-none transition-all ease-in-out duration-300"-->
<!--                                aria-expanded="false">-->
<!--                            <span class="sr-only">Open menu</span>-->
<!--                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"-->
<!--                                 stroke="currentColor" aria-hidden="true">-->
<!--                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"-->
<!--                                      d="M4 6h16M4 12h16M4 18h16" />-->
<!--                            </svg>-->
<!--                        </button>-->
<!--                    </div>-->
                    <div class="grid grid-cols-11 place-items-center content-center text-center" :class="show ? 'text-black' : 'text-white'">
                        <div class="">ada</div>
                        <div class="col-span-4 justify-self-end">
                            <div class="grid grid-cols-2 font-light">
                                <div>Home</div>
                                <div>Tentang Kami</div>
                            </div>
                            <div class="grid grid-cols-2 font-bold">
                                <div>
                                    <span class="cursor-pointer">
                                        Pendaftaran
                                    </span>
                                    <div class="-translate-x-3/4 mt-5 bg-blue-900 rounded-2xl border border-2 shadow fixed w-96 h-40 z-50"></div>
                                </div>
                                <div>
                                    <span>
                                        Akademis
                                    </span>
                                    <div class="-translate-x-3/4 mt-5 bg-blue-900 rounded-2xl border border-2 shadow fixed w-96 h-40 z-50"></div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <img class="m-auto transition-all ease-in-out duration-300" :class="show ? 'h-16' : 'h-0'" :src="logo" alt="">
                            <img class="m-auto transition-all ease-in-out duration-300" :class="show ? 'h-0' : 'h-24'" :src="imagewhite" alt="">
                            <img class="m-auto transition-all ease-in-out duration-300" :class="show ? 'h-0' : 'h-20'" :src="footerwhite" alt="">
                        </div>
                        <div class="col-span-4 justify-self-start">
                            <div class="grid grid-cols-2 font-light">
                                <div>Hubungi kami</div>
                            </div>
                            <div class="grid grid-cols-2 font-bold">
                                <div>Komunitas</div>
                                <div>Publikasi</div>
                            </div>
                        </div>
                        <div class="">ada</div>
                    </div>
                </div>
            </div>
            <div class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right hidden md:hidden z-50">
                <div class="rounded-lg shadow-lg ring-1 ring-gray-800 ring-opacity-5 bg-white divide-y-2 divide-gray-50">
                    <div class="pt-5 pb-6 px-5">
                        <div class="flex items-center justify-between">
                            <div>
                                <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg"
                                     alt="Workflow">
                            </div>
                            <div class="-mr-2">
                                <button id="closeMenu" type="button"
                                        class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-white hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                                    <span class="sr-only">Close menu</span>
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="mt-6">
                            <nav class="grid gap-y-8">
                                <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                                    <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg"
                                         fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                    </svg>
                                    <span class="ml-3 text-base text-gray-900">
                                Analytics
                            </span>
                                </a>

                                <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                                    <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg"
                                         fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
                                    </svg>
                                    <span class="ml-3 text-base text-gray-900">
                                Engagement
                            </span>
                                </a>

                                <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                                    <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg"
                                         fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                    </svg>
                                    <span class="ml-3 text-base text-gray-900">
                                Security
                            </span>
                                </a>

                                <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                                    <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg"
                                         fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                                    </svg>
                                    <span class="ml-3 text-base text-gray-900">
                                Integrations
                            </span>
                                </a>

                                <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                                    <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg"
                                         fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                                    </svg>
                                    <span class="ml-3 text-base text-gray-900">
                                Automations
                            </span>
                                </a>
                            </nav>
                        </div>
                    </div>
                    <div class="py-6 px-5 space-y-6">
                        <div class="grid grid-cols-2 gap-y-4 gap-x-8">
                            <a href="#" class="text-base text-gray-900 hover:text-gray-700">
                                Pricing
                            </a>

                            <a href="#" class="text-base text-gray-900 hover:text-gray-700">
                                Docs
                            </a>

                            <a href="#" class="text-base text-gray-900 hover:text-gray-700">
                                Help Center
                            </a>

                            <a href="#" class="text-base text-gray-900 hover:text-gray-700">
                                Guides
                            </a>

                            <a href="#" class="text-base text-gray-900 hover:text-gray-700">
                                Events
                            </a>

                            <a href="#" class="text-base text-gray-900 hover:text-gray-700">
                                Security
                            </a>
                        </div>
                        <div>
                            <a href="#"
                               class="w-full flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base text-white bg-indigo-600 hover:bg-indigo-700">
                                Sign up
                            </a>
                            <p class="mt-6 text-center text-base text-white">
                                Existing customer?
                                <a href="#" class="text-indigo-600 hover:text-indigo-500">
                                    Sign in
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                show: false
            }
        },
        props : ['imagewhite', 'footerwhite', 'logo'],
        created () {
            window.addEventListener('scroll', this.handleScroll);
        },
        destroyed () {
            window.removeEventListener('scroll', this.handleScroll);
        },
        methods: {
            handleScroll () {
                // console.log(this.$refs.navbar.getBoundingClientRect())
                // console.log(document.getElementById('hero_section').getBoundingClientRect().bottom)
                if (this.$refs.navbar.getBoundingClientRect().height >= document.getElementById('hero_section').getBoundingClientRect().bottom && this.show === false){
                    // console.log('lewat')
                    this.show = true;
                    // console.log(this.show)
                } else if (this.$refs.navbar.getBoundingClientRect().height <= document.getElementById('hero_section').getBoundingClientRect().bottom && this.show === true) {
                    // console.log('belum lewat')
                    this.show = false;
                    // console.log(this.show)
                }
            }
        }
    }
</script>
