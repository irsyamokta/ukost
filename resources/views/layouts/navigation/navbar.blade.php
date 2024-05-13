<nav id="navbar" class="fixed start-0 top-0 z-30 w-full bg-transparent">
    <div class="mx-auto flex w-full max-w-screen-xl items-center justify-between gap-5 p-4">
        <div class="flex items-center gap-16 lg:w-auto lg:justify-between">
            <a href="#" class="flex items-center">
                <img src="{{ asset('assets/LogoMemanjang.png') }}" class="hidden h-12" alt="UkostLogo" />
                <img src="{{ asset('assets/logoMemanjangPutih.png') }}" class="h-12" alt="UkostLogo" />
            </a>
        </div>
        <div class="flex items-center gap-2 lg:gap-5">
            <ul
                class="mt-4 hidden flex-col rounded-lg border border-gray-100 bg-gray-50 p-4 font-medium md:mt-0 md:flex-row md:space-x-8 md:border-0 md:bg-transparent md:p-0 lg:flex rtl:space-x-reverse">
                <li>
                    <a href="#" class="li-navbar-ariaCurrent li-main" aria-current="page">Beranda</a>
                </li>
                <li>
                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="li-button-before">
                        Layanan
                        <svg class="ms-2.5 h-2.5 w-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbar"
                        class="z-10 hidden w-44 divide-y divide-gray-100 rounded-lg bg-white font-normal shadow">
                        <ul class="py-2 text-sm font-medium text-gray-700" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="#" class="inline-flex w-full px-4 py-2 hover:bg-gray-100">
                                    <svg class="h-5 w-5" width="20" height="20" viewBox="0 0 20 20"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.83183 1.67495L16.3318 3.34162C16.4262 3.36049 16.5112 3.41148 16.5723 3.48593C16.6334 3.56037 16.6668 3.65366 16.6668 3.74995V16.25C16.6668 16.3462 16.6334 16.4395 16.5723 16.514C16.5112 16.5884 16.4262 16.6394 16.3318 16.6583L8.83183 18.325C8.7714 18.337 8.70905 18.3356 8.64926 18.3206C8.58948 18.3057 8.53374 18.2777 8.48608 18.2387C8.43842 18.1996 8.40001 18.1505 8.37362 18.0948C8.34724 18.0391 8.33353 17.9782 8.3335 17.9166V2.08329C8.33353 2.02166 8.34724 1.96082 8.37362 1.90513C8.40001 1.84944 8.43842 1.8003 8.48608 1.76125C8.53374 1.72219 8.58948 1.69419 8.64926 1.67927C8.70905 1.66435 8.7714 1.66287 8.83183 1.67495ZM7.50016 3.33329V16.6666H3.9585C3.80746 16.6666 3.66154 16.6119 3.54772 16.5126C3.4339 16.4134 3.35987 16.2762 3.33933 16.1266L3.3335 16.0416V3.95829C3.3335 3.80725 3.3882 3.66133 3.48747 3.54751C3.58674 3.43369 3.72387 3.35966 3.8735 3.33912L3.9585 3.33329H7.50016ZM10.8335 9.16662C10.6125 9.16662 10.4005 9.25442 10.2442 9.4107C10.088 9.56698 10.0002 9.77894 10.0002 9.99995C10.0002 10.221 10.088 10.4329 10.2442 10.5892C10.4005 10.7455 10.6125 10.8333 10.8335 10.8333C11.0545 10.8333 11.2665 10.7455 11.4228 10.5892C11.579 10.4329 11.6668 10.221 11.6668 9.99995C11.6668 9.77894 11.579 9.56698 11.4228 9.4107C11.2665 9.25442 11.0545 9.16662 10.8335 9.16662Z"
                                            fill="currentColor" />
                                    </svg>
                                    <span class="ms-2">Kost</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="inline-flex w-full px-4 py-2 hover:bg-gray-100">
                                    <svg class="h-5 w-5" width="20" height="20" viewBox="0 0 20 20"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_78_22)">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M11.1258 2.55339L17.7925 5.05339C17.9751 5.12206 18.1278 5.25261 18.224 5.42231C18.3203 5.59201 18.3539 5.79009 18.3191 5.98205C18.2843 6.17401 18.1833 6.34767 18.0336 6.47278C17.8839 6.59789 17.6951 6.66653 17.5 6.66672V15.8334C17.5 16.2754 17.3244 16.6993 17.0118 17.0119C16.6993 17.3245 16.2753 17.5001 15.8333 17.5001H8.33331V13.3334C8.33331 13.1124 8.24551 12.9004 8.08923 12.7441C7.93295 12.5879 7.72099 12.5001 7.49998 12.5001C7.27896 12.5001 7.067 12.5879 6.91072 12.7441C6.75444 12.9004 6.66664 13.1124 6.66664 13.3334V17.5001H4.16664C3.72462 17.5001 3.30069 17.3245 2.98813 17.0119C2.67557 16.6993 2.49998 16.2754 2.49998 15.8334V10.8334C2.298 10.8335 2.10285 10.7603 1.95081 10.6274C1.79876 10.4944 1.70018 10.3108 1.67338 10.1106C1.64659 9.91042 1.69341 9.70731 1.80514 9.53906C1.91687 9.3708 2.08591 9.24886 2.28081 9.19589L10.8333 6.86339V4.22339L10.5408 4.11339C10.3395 4.03176 10.1781 3.87479 10.0909 3.67589C10.0036 3.477 9.99746 3.2519 10.0737 3.04854C10.15 2.84518 10.3026 2.67963 10.4991 2.58715C10.6956 2.49466 10.9205 2.48255 11.1258 2.55339ZM14.5833 11.6667H13.75C13.529 11.6667 13.317 11.7545 13.1607 11.9108C13.0044 12.0671 12.9166 12.279 12.9166 12.5001C12.9166 12.7211 13.0044 12.933 13.1607 13.0893C13.317 13.2456 13.529 13.3334 13.75 13.3334H14.5833C14.8043 13.3334 15.0163 13.2456 15.1726 13.0893C15.3288 12.933 15.4166 12.7211 15.4166 12.5001C15.4166 12.279 15.3288 12.0671 15.1726 11.9108C15.0163 11.7545 14.8043 11.6667 14.5833 11.6667ZM14.5833 8.33339H13.75C13.5376 8.33362 13.3333 8.41495 13.1788 8.56076C13.0244 8.70657 12.9314 8.90585 12.919 9.11788C12.9066 9.32992 12.9755 9.5387 13.1119 9.70158C13.2482 9.86446 13.4416 9.96914 13.6525 9.99422L13.75 10.0001H14.5833C14.7957 9.99982 15 9.91849 15.1544 9.77268C15.3089 9.62687 15.4018 9.42759 15.4143 9.21556C15.4267 9.00352 15.3577 8.79474 15.2214 8.63186C15.0851 8.46898 14.8917 8.36431 14.6808 8.33922L14.5833 8.33339Z"
                                                fill="currentColor" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_78_22">
                                                <rect width="20" height="20" fill="currentColor" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <span class="ms-2">Kontrakan</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="inline-flex w-full px-4 py-2 hover:bg-gray-100">
                                    <svg class="h-5 w-5" width="26" height="25" viewBox="0 0 26 25"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <g filter="url(#filter0_d_81_26)">
                                            <path
                                                d="M6.33317 16.6667C5.87484 16.6667 5.48262 16.5036 5.1565 16.1775C4.83039 15.8514 4.66706 15.4589 4.6665 15V11.6667H8.83317C8.83317 11.9028 8.91317 12.1008 9.07317 12.2608C9.23317 12.4208 9.43095 12.5006 9.6665 12.5C9.88873 12.5 10.0451 12.3992 10.1357 12.1975C10.2262 11.9958 10.3476 11.8189 10.4998 11.6667H15.4998C15.4998 11.9028 15.5798 12.1008 15.7398 12.2608C15.8998 12.4208 16.0976 12.5006 16.3332 12.5C16.5554 12.5 16.7118 12.3992 16.8023 12.1975C16.8929 11.9958 17.0143 11.8189 17.1665 11.6667H21.3332V15C21.3332 15.4583 21.1701 15.8508 20.844 16.1775C20.5179 16.5042 20.1254 16.6672 19.6665 16.6667H6.33317ZM5.02067 10L6.74984 6C6.87484 5.69445 7.07623 5.45139 7.354 5.27083C7.63178 5.09028 7.93039 5 8.24984 5H8.83317V4.16667C8.83317 3.70833 8.9965 3.31583 9.32317 2.98917C9.64984 2.6625 10.0421 2.49945 10.4998 2.5H15.4998C15.9582 2.5 16.3507 2.66333 16.6773 2.99C17.004 3.31667 17.1671 3.70889 17.1665 4.16667V5H17.7498C18.0693 5 18.3679 5.09028 18.6457 5.27083C18.9234 5.45139 19.1248 5.69445 19.2498 6L20.979 10H17.1665C17.1665 9.76389 17.0865 9.56611 16.9265 9.40667C16.7665 9.24722 16.5687 9.16722 16.3332 9.16667C16.1109 9.16667 15.9548 9.2675 15.8648 9.46917C15.7748 9.67083 15.6532 9.84778 15.4998 10H10.4998C10.4998 9.76389 10.4198 9.56611 10.2598 9.40667C10.0998 9.24722 9.90206 9.16722 9.6665 9.16667C9.44428 9.16667 9.28817 9.2675 9.19817 9.46917C9.10817 9.67083 8.9865 9.84778 8.83317 10H5.02067ZM10.4998 5H15.4998V4.16667H10.4998V5Z"
                                                fill="currentColor" />
                                        </g>
                                    </svg>
                                    <span class="ms-2">Jasa</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#" class="li-navbar-before li-main">Tentang Kami</a>
                </li>
                <li>
                    <a href="#" class="li-navbar-before li-main">Bantuan</a>
                </li>
            </ul>
            <button id="btn-search"
                class="inline-flex h-10 w-10 items-center justify-center rounded-lg p-2 text-sm text-white hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 md:hidden"
                type="button" data-drawer-target="drawer-top-example" data-drawer-show="drawer-top-example"
                data-drawer-placement="top" aria-controls="drawer-top-example">
                <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
            </button>
            <button id="btn-search-medium"
                class="relative ml-9 hidden items-center justify-between gap-3 rounded-lg border-2 border-gray-200 bg-white p-1 md:flex lg:gap-5"
                data-drawer-target="drawer-top-example" data-drawer-show="drawer-top-example"
                data-drawer-placement="top" aria-controls="drawer-top-example">
                <div class="pointer-events-none absolute inset-y-0 start-0 flex items-center ps-2">
                    <svg class="h-4 w-4 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <div class="flex items-start pe-12 ps-8 text-sm text-gray-400">
                    <span>Cari Kost / Kontrakan</span>
                </div>
                <div class="rounded-lg bg-bluePrimary px-4 py-1.5 text-sm font-medium text-white">
                    Cari
                </div>
            </button>
            <button id="btn-sidebar" type="button"
                class="inline-flex h-10 w-10 items-center justify-center rounded-lg p-2 text-sm text-white hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 lg:hidden"
                data-drawer-target="drawer-right-example" data-drawer-show="drawer-right-example"
                data-drawer-placement="right" aria-controls="drawer-right-example">
                <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <button id="btn-login" login-register
                class="li-main hidden rounded-lg border-2 border-gray-400 bg-transparent px-3 py-2.5 text-sm text-gray-50 font-medium  hover:border-transparent hover:bg-blueSecond lg:block">
                Masuk
            </button>
        </div>
    </div>
</nav>

@include('layouts.navigation.sidebar')
@include('layouts.navigation.search')
@include('layouts.navigation.login')
