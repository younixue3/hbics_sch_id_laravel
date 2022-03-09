<!-- Header -->
<div class="flex w-full">
    <div id="mobile-menu"
         class="h-full md:h-auto text-gray-800 z-50 fixed w-0 md:w-11 lg:w-80 md:hover:w-80 duration-300 bg-gray-100 shadow-md md:static overflow-hidden md:overflow-none">
        <div class="font-bold text-xl h-16 pr-2 md:pr-0 overflow-hidden truncate flex">
            <img class="min-h-5 h-5 mx-3 my-auto" src="../public/img/path4979.png" alt="">
            <span class="ml-4 my-auto text-2xl align-middle font-light">
                    RDeveloper
            </span>
            <button onclick="CloseBar()" type="button" class="mx-auto md:hidden">
                <!-- Heroicon name: outline/x -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M6 18L18 6M6 6l12 12"/>
                </svg>
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
    <div class="w-full">
        <nav class="bg-gray-200">
            <div class="px-5">
                <div class="flex items-center justify-between h-16">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <button onclick="Collapsed()" class="text-gray-800">
                                <svg class="block h-6 w-6"
                                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M4 6h16M4 12h16M4 18h16"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="block">
                        <div class="ml-4 flex items-center md:ml-6">
                            <div class="relative">
                                <div>
                                    <button
                                        class="bg-gray-300 p-1 rounded-full text-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                                        <span class="sr-only">View notifications</span>
                                        <!-- Heroicon name: outline/bell -->
                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                             viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                                        </svg>
                                    </button>
                                </div>
                                <div id="menuProfile"
                                     class="hidden absolute bg-white right-0 w-56 md:w-80 rounded-xl shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                                     role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                                     tabindex="-1">
                                    <div class="grid grid-rows-4 divide-y">
                                        <a href="#" class="block px-4 py-2 text-xs md:text-sm text-gray-700"
                                           role="menuitem" tabindex="-1" id="user-menu-item-0">
                                            <div class="flex">
                                                <img class="h-8 w-8 mr-2 md:mr-4 my-auto rounded-full"
                                                     src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                     alt="">
                                                <div>
                                                    <h1 class="font-bold">Jane Doe sent a massage</h1>
                                                    <div class="bg-gray-100 rounded-xl p-2 py-1">
                                                        <p class="h-8 md:h-16 overflow-hidden"> Hello, My name is Jane
                                                            doe i want to asking about this tamplate, how i can order
                                                            it? </p>
                                                        <span class="mx-2 font-bold">- 1h ago -</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="block px-4 py-2 text-xs md:text-sm text-gray-700"
                                           role="menuitem" tabindex="-1" id="user-menu-item-0">
                                            <div class="flex">
                                                <img class="h-8 w-8 mr-2 md:mr-4 my-auto rounded-full"
                                                     src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                     alt="">
                                                <div>
                                                    <h1 class="font-bold">Jane Doe sent a massage</h1>
                                                    <div class="bg-gray-100 rounded-xl p-2 py-1">
                                                        <p class="h-8 md:h-16 overflow-hidden"> Hello, My name is Jane
                                                            doe i want to asking about this tamplate, how i can order
                                                            it? </p>
                                                        <span class="mx-2 font-bold">- 1h ago -</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="block px-4 py-2 text-xs md:text-sm text-gray-700"
                                           role="menuitem" tabindex="-1" id="user-menu-item-0">
                                            <div class="flex">
                                                <img class="h-8 w-8 mr-2 md:mr-4 my-auto rounded-full"
                                                     src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                     alt="">
                                                <div>
                                                    <h1 class="font-bold">Jane Doe sent a massage</h1>
                                                    <div class="bg-gray-100 rounded-xl p-2 py-1">
                                                        <p class="h-8 md:h-16 overflow-hidden"> Hello, My name is Jane
                                                            doe i want to asking about this tamplate, how i can order
                                                            it? </p>
                                                        <span class="mx-2 font-bold">- 1h ago -</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="block px-4 py-2 text-xs md:text-sm text-gray-700"
                                           role="menuitem" tabindex="-1" id="user-menu-item-0">
                                            <div class="flex">
                                                <img class="h-8 w-8 mr-2 md:mr-4 my-auto rounded-full"
                                                     src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                     alt="">
                                                <div>
                                                    <h1 class="font-bold">Jane Doe sent a massage</h1>
                                                    <div class="bg-gray-100 rounded-xl p-2 py-1">
                                                        <p class="h-8 md:h-16 overflow-hidden"> Hello, My name is Jane
                                                            doe i want to asking about this tamplate, how i can order
                                                            it? </p>
                                                        <span class="mx-2 font-bold">- 1h ago -</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="mt-2 cursor-pointer bg-gray-800 text-white text-center rounded-b-xl">
                                        More Notification
                                    </div>
                                </div>
                            </div>

                            <!-- Profile dropdown -->
                            <div class="ml-3 relative">
                                <div>
                                    <button type="button"
                                            class="max-w-xs p-0.5 bg-gray-300 rounded-full flex items-center text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                                            aria-expanded="false" aria-haspopup="true">
                                        <span class="sr-only">Open user menu</span>
                                        <img class="h-8 w-8 rounded-full"
                                             src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                             alt="">
                                    </button>
                                </div>
                                <div id="menuProfile"
                                     class="hidden absolute right-0 w-32 rounded-xl shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                                     role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                                     tabindex="-1">
                                    <!-- Active: "bg-gray-100", Not Active: "" -->
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                       tabindex="-1" id="user-menu-item-0">Your Profile</a>

                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                       tabindex="-1" id="user-menu-item-1">Settings</a>

                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                       tabindex="-1" id="user-menu-item-2">Sign out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
<!-- End Header -->
