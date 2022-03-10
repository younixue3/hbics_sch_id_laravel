<template>
    <div id="mobile-menu"
         class="h-full md:h-auto text-gray-800 z-50 fixed duration-300 bg-gray-100 shadow-md md:static" @mouseenter="CollapsedHover()" @mouseleave="CollapsedHover()" :class="collapsed ? 'w-60 md:w-80 lg:w-80' : 'w-0 md:w-11 lg:w-11 md:hover:w-60'">
        <div class="font-bold text-xl h-16 pr-2 md:pr-0 flex relative z-50">
            <img class="min-h-5 h-5 mx-3 my-auto" :class="collapsed ? '' : 'hidden'" src="" alt="">
            <div class="transition-all ease-in-out duration-500 my-auto text-2xl align-middle overflow-hidden truncate font-light" :class="collapsed ? 'w-full' : 'w-0'">
                    RDeveloper
            </div>
            <button @click="CloseBar()" type="button" class="transition-all bg-gray-700 shrink-0 -mr-3 w-10 h-10 text-white rounded-lg ease-in-out duration-500 z-50 m-auto -mr-5">
                <!-- Heroicon name: outline/x -->
                <i class="" :class="collapsed ? 'fa-solid fa-bars' : 'fa-solid fa-xmark'"></i>
            </button>
        </div>
        <div class="text-lg font-normal tracking-tight">
            <ul class="py-5 px-1 py-2">
                <li class="py-0.5 my-1 rounded-xl overflow-hidden truncate">
                    <a href="dashboard.html">
                        <div class="bg-gray-300 hover:bg-gray-200 px-2 pt-1 rounded-lg">
                            <i class="fas fa-columns mr-3"></i><span>Dashboard</span>
                        </div>
                    </a>
                </li>
                <li class="py-0.5 my-1 rounded-xl overflow-hidden truncate">
                    <div onclick="DropDown()" class="bg-gray-100 hover:bg-gray-200 w-auto px-2 pt-1 rounded-lg">
                        <i class="fas fa-desktop mr-3"></i>
                        <div class="inline-block w-3/4">Layout</div>
                        <span class="overflow-hidden">
                            <i class="my-auto fas fa-chevron-right transition-all duration-500 transform"></i>
                        </span>
                    </div>
                    <ul class="hidden bg-gray-200 rounded-lg px-2.5 my-2 h-full truncate">
                        <a href="boxed.html">
                            <li onclick="DropDownItem()" class="my-1 cursor-pointer">
                                <div class="ml-1 mr-5 w-2 h-2 inline-block rounded-full ring ring-gray-800 ring-offset-2"></div>
                                <span class="">Boxed</span></li>
                        </a>
                        <a href="fixednavbar.html">
                            <li onclick="DropDownItem()" class="my-1 cursor-pointer">
                                <div class="ml-1 mr-5 w-2 h-2 inline-block rounded-full ring ring-gray-800 ring-offset-2"></div>
                                <span>Fixed Navbar</span></li>
                        </a>
                        <a href="fixedsidebar.html">
                            <li onclick="DropDownItem()" class="my-1 cursor-pointer">
                                <div class="ml-1 mr-5 w-2 h-2 inline-block rounded-full ring ring-gray-800 ring-offset-2"></div>
                                <span>Fixed Sidebar</span></li>
                        </a>
                        <a href="fixednavsidebar.html">
                            <li onclick="DropDownItem()" class="my-1 cursor-pointer">
                                <div class="ml-1 mr-5 w-2 h-2 inline-block rounded-full ring ring-gray-800 ring-offset-2"></div>
                                <span>Fixed Sidebar + Navbar</span></li>
                        </a>
                    </ul>
                </li>
                <a href="charts.html">
                    <li class="py-0.5 my-1 rounded-xl overflow-hidden truncate">
                        <div class="bg-gray-100 hover:bg-gray-200 px-2 pt-1 rounded-lg">
                            <i class="fas fa-chart-pie mr-3"></i><span>Charts</span>
                        </div>
                    </li>
                </a>
                <li class="py-0.5 my-1 rounded-xl overflow-hidden truncate">
                    <div onclick="DropDown()" class="bg-gray-100 hover:bg-gray-200 px-2 pt-1 rounded-lg">
                        <i class="fas fa-puzzle-piece mr-3"></i>
                        <div class="inline-block w-3/4">Components</div>
                        <span class="overflow-hidden">
                            <i class="my-auto fas fa-chevron-right transition-all duration-500 transform"></i>
                        </span>
                    </div>
                    <ul class="hidden bg-gray-200 rounded-lg px-2.5 my-2 h-full truncate">
                        <a href="theme.html">
                            <li onclick="DropDownItem()" class="my-1 cursor-pointer">
                                <div class="ml-1 mr-5 w-2 h-2 inline-block rounded-full ring ring-gray-800 ring-offset-2"></div>
                                <span>Theme</span>
                            </li>
                        </a>
                        <a href="button.html">
                            <li onclick="DropDownItem()" class="my-1 cursor-pointer">
                                <div class="ml-1 mr-5 w-2 h-2 inline-block rounded-full ring ring-gray-800 ring-offset-2"></div>
                                <span>Buttons</span>
                            </li>
                        </a>
                        <a href="modalsalerts.html">
                            <li onclick="DropDownItem()" class="my-1 cursor-pointer">
                                <div class="ml-1 mr-5 w-2 h-2 inline-block rounded-full ring ring-gray-800 ring-offset-2"></div>
                                <span>Modals & Alerts</span>
                            </li>
                        </a>
                        <a href="cards.html">
                            <li onclick="DropDownItem()" class="my-1 cursor-pointer">
                                <div class="ml-1 mr-5 w-2 h-2 inline-block rounded-full ring ring-gray-800 ring-offset-2"></div>
                                <span>Cards</span>
                            </li>
                        </a>
                        <a href="forms.html">
                            <li onclick="DropDownItem()" class="my-1 cursor-pointer">
                                <div class="ml-1 mr-5 w-2 h-2 inline-block rounded-full ring ring-gray-800 ring-offset-2"></div>
                                <span>Forms</span>
                            </li>
                        </a>
                        <a href="tables.html">
                            <li onclick="DropDownItem()" class="my-1 cursor-pointer">
                                <div class="ml-1 mr-5 w-2 h-2 inline-block rounded-full ring ring-gray-800 ring-offset-2"></div>
                                <span>Tables</span>
                            </li>
                        </a>
                    </ul>
                </li>
                <li class="py-0.5 my-1 rounded-xl overflow-hidden truncate">
                    <div onclick="DropDown()" class="bg-gray-100 hover:bg-gray-200 px-2 pt-1 rounded-lg">
                        <i class="fas fa-window-maximize mr-3"></i>
                        <div class="inline-block w-3/4">Pages</div>
                        <span class="overflow-hidden">
                            <i class="my-auto fas fa-chevron-right transition-all duration-500 transform"></i>
                        </span>
                    </div>
                    <ul class="hidden bg-gray-200 rounded-lg px-2.5 my-2 h-full truncate">
                        <a href="login.html">
                            <li onclick="DropDownItem()" class="my-1 cursor-pointer">
                                <div class="ml-1 mr-5 w-2 h-2 inline-block rounded-full ring ring-gray-800 ring-offset-2"></div>
                                <span>Login</span>
                            </li>
                        </a>
                        <a href="register.html">
                            <li onclick="DropDownItem()" class="my-1 cursor-pointer">
                                <div class="ml-1 mr-5 w-2 h-2 inline-block rounded-full ring ring-gray-800 ring-offset-2"></div>
                                <span>Register</span>
                            </li>
                        </a>
                        <a href="errors.html">
                            <li onclick="DropDownItem()" class="my-1 cursor-pointer">
                                <div class="ml-1 mr-5 w-2 h-2 inline-block rounded-full ring ring-gray-800 ring-offset-2"></div>
                                <span>Errors</span>
                            </li>
                        </a>
                        <a href="searchs.html">
                            <li onclick="DropDownItem()" class="my-1 cursor-pointer">
                                <div class="ml-1 mr-5 w-2 h-2 inline-block rounded-full ring ring-gray-800 ring-offset-2"></div>
                                <span>Searchs</span>
                            </li>
                        </a>
                    </ul>
                </li>
                <li class="py-0.5 my-1 rounded-xl overflow-hidden truncate">
                    <div onclick="DropDown()" class="bg-gray-100 hover:bg-gray-200 px-2 pt-1 rounded-lg">
                        <i class="fas fa-hand-holding-heart mr-3"></i>
                        <div class="inline-block w-3/4">Example</div>
                        <span class="overflow-hidden">
                            <i class="my-auto fas fa-chevron-right transition-all duration-500 transform"></i>
                        </span>
                    </div>
                    <ul class="hidden bg-gray-200 rounded-lg px-2.5 my-2 h-full truncate">
                        <a href="blog.html">
                            <li onclick="DropDownItem()" class="my-1 cursor-pointer">
                                <div class="ml-1 mr-5 w-2 h-2 inline-block rounded-full ring ring-gray-800 ring-offset-2"></div>
                                <span>Blog</span>
                            </li>
                        </a>
                        <a href="hero.html">
                            <li onclick="DropDownItem()" class="my-1 cursor-pointer">
                                <div class="ml-1 mr-5 w-2 h-2 inline-block rounded-full ring ring-gray-800 ring-offset-2"></div>
                                <span>Hero</span>
                            </li>
                        </a>
                        <a href="mailbox.html">
                            <li onclick="DropDownItem()" class="my-1 cursor-pointer">
                                <div class="ml-1 mr-5 w-2 h-2 inline-block rounded-full ring ring-gray-800 ring-offset-2"></div>
                                <span>Mailbox</span>
                            </li>
                        </a>
                        <a href="calendars.html">
                            <li onclick="DropDownItem()" class="my-1 cursor-pointer">
                                <div class="ml-1 mr-5 w-2 h-2 inline-block rounded-full ring ring-gray-800 ring-offset-2"></div>
                                <span>Calendar</span>
                            </li>
                        </a>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            collapsed: true,
            hover: true,
        }
    },
    methods: {
        CollapsedHover: function () {
            if (this.hover === true) {

            } else {
                this.collapsed = false;
            }
        },
        CloseBar: function () {
            if (this.collapsed === true) {
                this.hover = false
                this.collapsed = false
            } else {
                this.hover = true
                this.collapsed = true
            }
        }
    }
}
</script>

<style scoped>

</style>
