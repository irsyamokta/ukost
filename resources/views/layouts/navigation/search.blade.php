  <!-- Start Drawer Search -->
  <div id="drawer-top-example"
      class="fixed left-0 right-0 top-0 z-40 h-full w-full -translate-y-full bg-white transition-transform" tabindex="-1"
      aria-labelledby="drawer-top-label">
      <!-- Close Button -->
      <div
          class="fixed left-1/2 top-0 z-30 mx-auto inline-flex w-full max-w-xl -translate-x-1/2 justify-end border-b border-gray-200 bg-white p-2 shadow-md">
          <button type="button" data-drawer-hide="drawer-top-example" aria-controls="drawer-top-example"
              class="end-2.5 top-2.5 z-10 inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 md:end-32">
              <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                  viewBox="0 0 14 14">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
              </svg>
              <span class="sr-only">Close menu</span>
          </button>
      </div>
      <!-- Search Now -->
      <div
          class="fixed bottom-0 left-1/2 z-30 mx-auto inline-flex w-full max-w-xl -translate-x-1/2 justify-end gap-3 border-t border-gray-200 bg-white p-2 shadow-md">
          <button
              class="w-1/4 rounded-lg border bg-white px-5 py-2.5 text-sm font-medium text-bluePrimary transition-transform hover:bg-bluePrimary hover:text-white active:scale-95">
              Reset
          </button>
          <button
              class="w-full rounded-lg border bg-bluePrimary px-5 py-2.5 text-sm font-medium text-white transition-transform hover:bg-blueSecond active:scale-95">
              Cari sekarang
          </button>
      </div>
      <div class="relative mx-auto h-full w-full max-w-xl overflow-y-scroll px-2.5 py-16">
          <form action="">
              <ul class="flex w-full gap-0.5 overflow-hidden rounded-lg border-2 bg-gray-200 text-center text-sm">
                  <li
                      class="order-3 flex basis-1/2 items-center gap-1 bg-bluePrimary px-3 py-2 text-white hover:cursor-pointer">
                      <svg class="h-5 w-5" width="20" height="20" viewBox="0 0 20 20" fill="currentColor"
                          xmlns="http://www.w3.org/2000/svg">
                          <path
                              d="M8.83183 1.67495L16.3318 3.34162C16.4262 3.36049 16.5112 3.41148 16.5723 3.48593C16.6334 3.56037 16.6668 3.65366 16.6668 3.74995V16.25C16.6668 16.3462 16.6334 16.4395 16.5723 16.514C16.5112 16.5884 16.4262 16.6394 16.3318 16.6583L8.83183 18.325C8.7714 18.337 8.70905 18.3356 8.64926 18.3206C8.58948 18.3057 8.53374 18.2777 8.48608 18.2387C8.43842 18.1996 8.40001 18.1505 8.37362 18.0948C8.34724 18.0391 8.33353 17.9782 8.3335 17.9166V2.08329C8.33353 2.02166 8.34724 1.96082 8.37362 1.90513C8.40001 1.84944 8.43842 1.8003 8.48608 1.76125C8.53374 1.72219 8.58948 1.69419 8.64926 1.67927C8.70905 1.66435 8.7714 1.66287 8.83183 1.67495ZM7.50016 3.33329V16.6666H3.9585C3.80746 16.6666 3.66154 16.6119 3.54772 16.5126C3.4339 16.4134 3.35987 16.2762 3.33933 16.1266L3.3335 16.0416V3.95829C3.3335 3.80725 3.3882 3.66133 3.48747 3.54751C3.58674 3.43369 3.72387 3.35966 3.8735 3.33912L3.9585 3.33329H7.50016ZM10.8335 9.16662C10.6125 9.16662 10.4005 9.25442 10.2442 9.4107C10.088 9.56698 10.0002 9.77894 10.0002 9.99995C10.0002 10.221 10.088 10.4329 10.2442 10.5892C10.4005 10.7455 10.6125 10.8333 10.8335 10.8333C11.0545 10.8333 11.2665 10.7455 11.4228 10.5892C11.579 10.4329 11.6668 10.221 11.6668 9.99995C11.6668 9.77894 11.579 9.56698 11.4228 9.4107C11.2665 9.25442 11.0545 9.16662 10.8335 9.16662Z"
                              fill="currentColor" />
                      </svg>
                      <span class="ms-2">Kost</span>
                  </li>
                  <li
                      class="order-3 flex basis-1/2 items-center gap-1 bg-white px-3 py-2 text-gray-400 hover:cursor-pointer hover:bg-bluePrimary hover:text-white">
                      <svg class="h-5 w-5" width="20" height="20" viewBox="0 0 20 20" fill="currentColor"
                          xmlns="http://www.w3.org/2000/svg">
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
                  </li>
              </ul>
              <div class="my-4 rounded-lg bg-gray-100 p-2">
                  <h4 class="mb-2 text-lg font-semibold text-gray-700">
                      Cari Lokasi ?
                  </h4>
                  <label for="default-search"
                      class="sr-only mb-2 text-sm font-medium text-gray-900 dark:text-white">Search</label>
                  <div class="relative mb-2">
                      <div class="pointer-events-none absolute inset-y-0 start-0 flex items-center ps-3">
                          <svg class="h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                              xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                  stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                          </svg>
                      </div>
                      <input type="search" id="default-search"
                          class="block w-full rounded-lg border border-gray-300 bg-white p-3 ps-10 text-sm text-gray-900 focus:border-bluePrimary focus:outline-none focus:ring-bluePrimary"
                          placeholder="Masukkan nama lokasi / daerah / tempat..." required />
                  </div>
                  <!-- Default -->
                  <div class="hidden rounded-lg border bg-white p-2 text-gray-700">
                      <div class=""></div>
                  </div>
                  <!-- Tempat -->
                  <div class="hidden rounded-lg border bg-white p-2 text-gray-700">
                      <p class="mb-2 text-base font-medium">Tempat</p>
                      <div class="flex-row">
                          <a href=""
                              class="flex w-full items-center gap-3 rounded-lg p-1 text-sm hover:bg-gray-100">
                              <img class="h-10 w-10 rounded-md object-cover" src="/assets/product-1.png"
                                  alt="" />
                              <div class="flex flex-col justify-start">
                                  <span class="font-semibold">Kos Sinar Harapan</span>
                                  <span class="text-xs">Grender, Purwokerto Utara</span>
                              </div>
                          </a>
                          <a href=""
                              class="flex w-full items-center gap-3 rounded-lg p-1 text-sm hover:bg-gray-100">
                              <img class="h-10 w-10 rounded-md object-cover" src="/assets/product-2.png"
                                  alt="" />
                              <div class="flex flex-col justify-start">
                                  <span class="font-semibold">Kos Sinar Harapan</span>
                                  <span class="text-xs">Grender, Purwokerto Utara</span>
                              </div>
                          </a>
                      </div>
                  </div>
                  <!-- Lokasi -->
                  <div class="hidden rounded-lg border bg-white p-2 text-gray-700">
                      <p class="mb-2 text-base font-medium">Lokasi</p>
                      <div class="flex-row">
                          <a href=""
                              class="flex w-full items-center gap-3 rounded-lg p-1 text-sm hover:bg-gray-100">
                              <div class="flex h-10 w-10 items-center justify-center rounded-lg">
                                  <svg class="h-7 w-7 rounded-lg" width="20" height="20" viewBox="0 0 20 20"
                                      fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path
                                          d="M10 11.25C9.38194 11.25 8.77775 11.0667 8.26384 10.7233C7.74994 10.38 7.3494 9.89191 7.11288 9.32089C6.87635 8.74987 6.81447 8.12154 6.93505 7.51534C7.05563 6.90915 7.35325 6.35233 7.79029 5.91529C8.22733 5.47825 8.78415 5.18063 9.39034 5.06005C9.99654 4.93947 10.6249 5.00135 11.1959 5.23788C11.7669 5.4744 12.255 5.87494 12.5983 6.38884C12.9417 6.90275 13.125 7.50694 13.125 8.125C13.124 8.9535 12.7945 9.74778 12.2086 10.3336C11.6228 10.9195 10.8285 11.249 10 11.25ZM10 6.25C9.62916 6.25 9.26665 6.35997 8.95831 6.566C8.64997 6.77202 8.40964 7.06486 8.26773 7.40747C8.12581 7.75008 8.08868 8.12708 8.16103 8.4908C8.23338 8.85451 8.41195 9.1886 8.67418 9.45083C8.9364 9.71305 9.27049 9.89163 9.63421 9.96397C9.99792 10.0363 10.3749 9.99919 10.7175 9.85728C11.0601 9.71536 11.353 9.47504 11.559 9.1667C11.765 8.85835 11.875 8.49584 11.875 8.125C11.8745 7.62787 11.6768 7.15125 11.3253 6.79972C10.9738 6.4482 10.4971 6.2505 10 6.25Z"
                                          fill="currentColor" />
                                      <path
                                          d="M10 18.75L4.72751 12.5319C4.65425 12.4385 4.58174 12.3445 4.51001 12.25C3.60937 11.0636 3.12282 9.61452 3.12501 8.125C3.12501 6.30164 3.84934 4.55295 5.13865 3.26364C6.42796 1.97433 8.17664 1.25 10 1.25C11.8234 1.25 13.5721 1.97433 14.8614 3.26364C16.1507 4.55295 16.875 6.30164 16.875 8.125C16.8772 9.61384 16.3909 11.0623 15.4906 12.2481L15.49 12.25C15.49 12.25 15.3025 12.4963 15.2744 12.5294L10 18.75ZM5.50813 11.4969C5.50813 11.4969 5.65376 11.6894 5.68688 11.7306L10 16.8175L14.3188 11.7237C14.3463 11.6894 14.4925 11.4956 14.4931 11.495C15.2289 10.5257 15.6265 9.34189 15.625 8.125C15.625 6.63316 15.0324 5.20242 13.9775 4.14752C12.9226 3.09263 11.4918 2.5 10 2.5C8.50816 2.5 7.07742 3.09263 6.02253 4.14752C4.96764 5.20242 4.37501 6.63316 4.37501 8.125C4.3737 9.34265 4.77174 10.5271 5.50813 11.4969Z"
                                          fill="currentColor" />
                                  </svg>
                              </div>
                              <div class="flex flex-col justify-start">
                                  <span class="font-semibold">Grendeng</span>
                                  <span class="text-xs"> Purwokerto Utara</span>
                              </div>
                          </a>
                          <a href=""
                              class="flex w-full items-center gap-3 rounded-lg p-1 text-sm hover:bg-gray-100">
                              <div class="flex h-10 w-10 items-center justify-center rounded-lg">
                                  <svg class="h-7 w-7 rounded-lg" width="20" height="20" viewBox="0 0 20 20"
                                      fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path
                                          d="M10 11.25C9.38194 11.25 8.77775 11.0667 8.26384 10.7233C7.74994 10.38 7.3494 9.89191 7.11288 9.32089C6.87635 8.74987 6.81447 8.12154 6.93505 7.51534C7.05563 6.90915 7.35325 6.35233 7.79029 5.91529C8.22733 5.47825 8.78415 5.18063 9.39034 5.06005C9.99654 4.93947 10.6249 5.00135 11.1959 5.23788C11.7669 5.4744 12.255 5.87494 12.5983 6.38884C12.9417 6.90275 13.125 7.50694 13.125 8.125C13.124 8.9535 12.7945 9.74778 12.2086 10.3336C11.6228 10.9195 10.8285 11.249 10 11.25ZM10 6.25C9.62916 6.25 9.26665 6.35997 8.95831 6.566C8.64997 6.77202 8.40964 7.06486 8.26773 7.40747C8.12581 7.75008 8.08868 8.12708 8.16103 8.4908C8.23338 8.85451 8.41195 9.1886 8.67418 9.45083C8.9364 9.71305 9.27049 9.89163 9.63421 9.96397C9.99792 10.0363 10.3749 9.99919 10.7175 9.85728C11.0601 9.71536 11.353 9.47504 11.559 9.1667C11.765 8.85835 11.875 8.49584 11.875 8.125C11.8745 7.62787 11.6768 7.15125 11.3253 6.79972C10.9738 6.4482 10.4971 6.2505 10 6.25Z"
                                          fill="currentColor" />
                                      <path
                                          d="M10 18.75L4.72751 12.5319C4.65425 12.4385 4.58174 12.3445 4.51001 12.25C3.60937 11.0636 3.12282 9.61452 3.12501 8.125C3.12501 6.30164 3.84934 4.55295 5.13865 3.26364C6.42796 1.97433 8.17664 1.25 10 1.25C11.8234 1.25 13.5721 1.97433 14.8614 3.26364C16.1507 4.55295 16.875 6.30164 16.875 8.125C16.8772 9.61384 16.3909 11.0623 15.4906 12.2481L15.49 12.25C15.49 12.25 15.3025 12.4963 15.2744 12.5294L10 18.75ZM5.50813 11.4969C5.50813 11.4969 5.65376 11.6894 5.68688 11.7306L10 16.8175L14.3188 11.7237C14.3463 11.6894 14.4925 11.4956 14.4931 11.495C15.2289 10.5257 15.6265 9.34189 15.625 8.125C15.625 6.63316 15.0324 5.20242 13.9775 4.14752C12.9226 3.09263 11.4918 2.5 10 2.5C8.50816 2.5 7.07742 3.09263 6.02253 4.14752C4.96764 5.20242 4.37501 6.63316 4.37501 8.125C4.3737 9.34265 4.77174 10.5271 5.50813 11.4969Z"
                                          fill="currentColor" />
                                  </svg>
                              </div>
                              <div class="flex flex-col justify-start">
                                  <span class="font-semibold">Purwokerto Kidul</span>
                                  <span class="text-xs"> Purwokerto Selatan</span>
                              </div>
                          </a>
                      </div>
                  </div>
                  <!-- Not Found -->
                  <div class=" rounded-lg border bg-white p-2 text-gray-700">
                      <p class="mb-2 text-base font-medium">
                          Pencarian tidak ditemukan
                      </p>
                      <div class="flex items-center gap-3 py-2 text-sm">
                          <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                              viewBox="0 0 20 20">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                  stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                          </svg>
                          <p>Coba kata kunci lain seperti "Purwokerto Selatan"</p>
                      </div>
                  </div>
              </div>
              <div class="space-y-2">
                  <!-- Urutkan -->
                  <div class="p-2">
                      <h5 class="mb-3 text-base font-medium text-gray-700">Urutkan</h5>
                      <div class="mb-4 flex items-center">
                          <input id="popular" type="radio" value="" name="default-radio"
                              class="h-4 w-4 border-gray-300 bg-gray-100 text-grayPrimary checked:bg-blue-400 focus:bg-blue-400 focus:ring-2 focus:ring-blue-400"
                              checked />
                          <label for="popular" class="ms-2 text-sm text-gray-600">Paling Populer</label>
                      </div>
                      <div class="mb-4 flex items-center">
                          <input id="terbaik" type="radio" value="" name="default-radio"
                              class="h- w-4 border-gray-300 bg-gray-100 text-grayPrimary checked:bg-blue-400 focus:bg-blue-400 focus:ring-2 focus:ring-blue-400" />
                          <label for="terbaik" class="ms-2 text-sm text-gray-600">Terbaik</label>
                      </div>
                      <div class="mb-4 flex items-center">
                          <input id="termurah" type="radio" value="" name="default-radio"
                              class="h- w-4 border-gray-300 bg-gray-100 text-grayPrimary checked:bg-blue-400 focus:bg-blue-400 focus:ring-2 focus:ring-blue-400" />
                          <label for="termurah" class="ms-2 text-sm text-gray-600">Termurah</label>
                      </div>
                      <div class="mb-4 flex items-center">
                          <input id="termahal" type="radio" value="" name="default-radio"
                              class="h- w-4 border-gray-300 bg-gray-100 text-grayPrimary checked:bg-blue-400 focus:bg-blue-400 focus:ring-2 focus:ring-blue-400" />
                          <label for="termahal" class="ms-2 text-sm text-gray-600">Termahal</label>
                      </div>
                  </div>
                  <hr />
                  <!-- Gender -->
                  <div class="p-2">
                      <h5 class="mb-3 items-center text-base font-medium text-gray-700">
                          Hunian Khusus
                      </h5>
                      <ul class="flex gap-3 text-sm">
                          <li class="cursor-pointer rounded-2xl border bg-bluePrimary px-3 py-1.5 text-white">
                              Pria
                          </li>
                          <li class="cursor-pointer rounded-2xl border bg-white px-3 py-1.5 text-gray-700">
                              Wanita
                          </li>
                          <li class="cursor-pointer rounded-2xl border bg-white px-3 py-1.5 text-gray-700">
                              Campur
                          </li>
                      </ul>
                  </div>
                  <hr />
                  <!-- Budget -->
                  <div class="p-2">
                      <h5 class="mb-7 items-center text-base font-medium text-gray-700">
                          Harga per bulan
                      </h5>
                      <div class="flex items-center justify-center">
                          <div x-data="range()" x-init="mintrigger();
                          maxtrigger()" class="relative w-full max-w-xl">
                              <div>
                                  <input type="range" step="100000" x-bind:min="min"
                                      x-bind:max="max" x-on:input="mintrigger" x-model="minprice"
                                      class="pointer-events-none absolute z-20 h-2 w-full cursor-pointer appearance-none opacity-0" />
                                  <input type="range" step="100000" x-bind:min="min"
                                      x-bind:max="max" x-on:input="maxtrigger" x-model="maxprice"
                                      class="pointer-events-none absolute z-20 h-2 w-full cursor-pointer appearance-none opacity-0" />
                                  <div class="relative z-10 h-2">
                                      <div class="absolute bottom-0 left-0 right-0 top-0 z-10 rounded-md bg-gray-200">
                                      </div>
                                      <div class="absolute bottom-0 top-0 z-20 rounded-md bg-bluePrimary"
                                          x-bind:style="'right:' + maxthumb + '%; left:' + minthumb + '%'"></div>
                                      <div class="absolute left-0 top-0 z-30 -ml-1 -mt-2 h-6 w-6 rounded-full bg-bluePrimary"
                                          x-bind:style="'left: ' + minthumb + '%'"></div>
                                      <div class="absolute right-0 top-0 z-30 -mr-3 -mt-2 h-6 w-6 rounded-full bg-bluePrimary"
                                          x-bind:style="'right: ' + maxthumb + '%'"></div>
                                  </div>
                              </div>
                              <div class="flex items-center justify-between py-5 text-sm">
                                  <div>
                                      <span class="mr-2">Rp. </span>
                                      <input type="text" maxlength="8" x-on:input="mintrigger"
                                          x-model="minprice"
                                          class="w-32 rounded border border-gray-200 px-3 py-2 text-center" />
                                  </div>
                                  <div>
                                      <span class="mr-2">Rp. </span>
                                      <input type="text" maxlength="8" x-on:input="maxtrigger"
                                          x-model="maxprice"
                                          class="w-32 rounded border border-gray-200 px-3 py-2 text-center" />
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <hr />
                  <!-- Fasilitas Umum -->
                  <div class="py-2">
                      <h5 class="items-center text-base font-medium text-gray-700 mb-4 px-2">
                          Fasilitas Umum
                      </h5>
                      <div class="grid h-16 grid-cols-2 overflow-hidden px-2" container-items-search>
                          <div class="mb-4 flex items-center">
                              <input id="ruang-tamu" type="checkbox" value=""
                                  class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-grayPrimary checked:bg-blue-400 focus:bg-blue-400 focus:ring-2 focus:ring-blue-400" />
                              <label for="ruang-tamu" class="ms-3 text-sm text-gray-600">Ruang Tamu</label>
                          </div>
                          <div class="mb-4 flex items-center">
                              <input id="ruang-makan" type="checkbox" value=""
                                  class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-grayPrimary checked:bg-blue-400 focus:bg-blue-400 focus:ring-2 focus:ring-blue-400" />
                              <label for="ruang-makan" class="ms-3 text-sm text-gray-600">Ruang Makan</label>
                          </div>
                          <div class="mb-4 flex items-center">
                              <input id="dapur" type="checkbox" value=""
                                  class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-grayPrimary checked:bg-blue-400 focus:bg-blue-400 focus:ring-2 focus:ring-blue-400" />
                              <label for="dapur" class="ms-3 text-sm text-gray-600">Dapur</label>
                          </div>
                          <div class="mb-4 flex items-center">
                              <input id="kulkas" type="checkbox" value=""
                                  class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-grayPrimary checked:bg-blue-400 focus:bg-blue-400 focus:ring-2 focus:ring-blue-400" />
                              <label for="kulkas" class="ms-3 text-sm text-gray-600">Kulkas</label>
                          </div>
                          <div class="mb-4 flex items-center">
                              <input id="dispenser" type="checkbox" value=""
                                  class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-grayPrimary checked:bg-blue-400 focus:bg-blue-400 focus:ring-2 focus:ring-blue-400" />
                              <label for="dispenser" class="ms-3 text-sm text-gray-600">Dispenser</label>
                          </div>
                          <div class="mb-4 flex items-center">
                              <input id="mushola" type="checkbox" value=""
                                  class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-grayPrimary checked:bg-blue-400 focus:bg-blue-400 focus:ring-2 focus:ring-blue-400" />
                              <label for="mushola" class="ms-3 text-sm text-gray-600">Mushola</label>
                          </div>
                          <div class="mb-4 flex items-center">
                              <input id="ruang-santai" type="checkbox" value=""
                                  class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-grayPrimary checked:bg-blue-400 focus:bg-blue-400 focus:ring-2 focus:ring-blue-400" />
                              <label for="ruang-santai" class="ms-3 text-sm text-gray-600">Ruang Santai</label>
                          </div>
                          <div class="mb-4 flex items-center">
                              <input id="ruang-jemur" type="checkbox" value=""
                                  class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-grayPrimary checked:bg-blue-400 focus:bg-blue-400 focus:ring-2 focus:ring-blue-400" />
                              <label for="ruang-jemur" class="ms-3 text-sm text-gray-600">Ruang Jemur</label>
                          </div>
                          <div class="mb-4 flex items-center">
                              <input id="ruang-cuci" type="checkbox" value=""
                                  class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-grayPrimary checked:bg-blue-400 focus:bg-blue-400 focus:ring-2 focus:ring-blue-400" />
                              <label for="ruang-cuci" class="ms-3 text-sm text-gray-600">Ruang Cuci</label>
                          </div>
                          <div class="mb-4 flex items-center">
                              <input id="mesin-cuci" type="checkbox" value=""
                                  class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-grayPrimary checked:bg-blue-400 focus:bg-blue-400 focus:ring-2 focus:ring-blue-400" />
                              <label for="mesin-cuci" class="ms-3 text-sm text-gray-600">Mesin Cuci</label>
                          </div>
                          <div class="mb-4 flex items-center">
                              <input id="keamanan" type="checkbox" value=""
                                  class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-grayPrimary checked:bg-blue-400 focus:bg-blue-400 focus:ring-2 focus:ring-blue-400" />
                              <label for="keamanan" class="ms-3 text-sm text-gray-600">Keamanan</label>
                          </div>
                          <div class="mb-4 flex items-center">
                              <input id="wifi" type="checkbox" value=""
                                  class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-grayPrimary checked:bg-blue-400 focus:bg-blue-400 focus:ring-2 focus:ring-blue-400" />
                              <label for="wifi" class="ms-3 text-sm text-gray-600">Wifi</label>
                          </div>
                          <div class="mb-4 flex items-center">
                              <input id="parkir-motor" type="checkbox" value=""
                                  class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-grayPrimary checked:bg-blue-400 focus:bg-blue-400 focus:ring-2 focus:ring-blue-400" />
                              <label for="parkir-motor" class="ms-3 text-sm text-gray-600">Parkir Motor</label>
                          </div>
                          <div class="mb-4 flex items-center">
                              <input id="parkir-mobil" type="checkbox" value=""
                                  class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-grayPrimary checked:bg-blue-400 focus:bg-blue-400 focus:ring-2 focus:ring-blue-400" />
                              <label for="parkir-mobil" class="ms-3 text-sm text-gray-600">Parkir Mobil</label>
                          </div>
                      </div>
                      <button type="button" class="text-sm text-bluePrimary hover:underline px-2" btn-see-more>
                          Lihat lebih banyak
                      </button>
                  </div>
                  <!-- Fasilitas Kamar -->
                  <div class="py-2">
                      <h5 class="items-center text-base font-medium text-gray-700 mb-4 px-2">
                          Fasilitas Kamar
                      </h5>
                      <div class="grid h-16 grid-cols-2 overflow-hidden px-2" container-items-search>
                          <div class="mb-4 flex items-center">
                              <input id="kasur" type="checkbox" value=""
                                  class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-grayPrimary checked:bg-blue-400 focus:bg-blue-400 focus:ring-2 focus:ring-blue-400" />
                              <label for="kasur" class="ms-3 text-sm text-gray-600">Kasur</label>
                          </div>
                          <div class="mb-4 flex items-center">
                              <input id="lemari" type="checkbox" value=""
                                  class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-grayPrimary checked:bg-blue-400 focus:bg-blue-400 focus:ring-2 focus:ring-blue-400" />
                              <label for="lemari" class="ms-3 text-sm text-gray-600">Lemari</label>
                          </div>
                          <div class="mb-4 flex items-center">
                              <input id="meja" type="checkbox" value=""
                                  class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-grayPrimary checked:bg-blue-400 focus:bg-blue-400 focus:ring-2 focus:ring-blue-400" />
                              <label for="meja" class="ms-3 text-sm text-gray-600">Meja</label>
                          </div>
                          <div class="mb-4 flex items-center">
                              <input id="kursi" type="checkbox" value=""
                                  class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-grayPrimary checked:bg-blue-400 focus:bg-blue-400 focus:ring-2 focus:ring-blue-400" />
                              <label for="kursi" class="ms-3 text-sm text-gray-600">Kursi</label>
                          </div>
                          <div class="mb-4 flex items-center">
                              <input id="televisi" type="checkbox" value=""
                                  class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-grayPrimary checked:bg-blue-400 focus:bg-blue-400 focus:ring-2 focus:ring-blue-400" />
                              <label for="televisi" class="ms-3 text-sm text-gray-600">Televisi</label>
                          </div>
                          <div class="mb-4 flex items-center">
                              <input id="air-conditioner" type="checkbox" value=""
                                  class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-grayPrimary checked:bg-blue-400 focus:bg-blue-400 focus:ring-2 focus:ring-blue-400" />
                              <label for="air-conditioner" class="ms-3 text-sm text-gray-600">AC</label>
                          </div>
                          <div class="mb-4 flex items-center">
                              <input id="meja-rias" type="checkbox" value=""
                                  class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-grayPrimary checked:bg-blue-400 focus:bg-blue-400 focus:ring-2 focus:ring-blue-400" />
                              <label for="meja-rias" class="ms-3 text-sm text-gray-600">Meja Rias</label>
                          </div>
                          <div class="mb-4 flex items-center">
                              <input id="kipas" type="checkbox" value=""
                                  class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-grayPrimary checked:bg-blue-400 focus:bg-blue-400 focus:ring-2 focus:ring-blue-400" />
                              <label for="kipas" class="ms-3 text-sm text-gray-600">Kipas</label>
                          </div>
                          <div class="mb-4 flex items-center">
                              <input id="listrik" type="checkbox" value=""
                                  class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-grayPrimary checked:bg-blue-400 focus:bg-blue-400 focus:ring-2 focus:ring-blue-400" />
                              <label for="listrik" class="ms-3 text-sm text-gray-600">Include Listrik</label>
                          </div>
                      </div>
                      <button type="button" class="text-sm text-bluePrimary hover:underline px-2" btn-see-more>
                          Lihat lebih banyak
                      </button>
                  </div>
                  <!-- Fasilitas Kamar Mandi -->
                  <div class="py-2">
                      <h5 class="items-center text-base font-medium text-gray-700 mb-4 px-2">
                          Fasilitas Kamar Mandi
                      </h5>
                      <div class="grid h-16 grid-cols-2 overflow-hidden px-2" container-items-search>
                          <div class="mb-4 flex items-center">
                              <input id="kmandi-dalam" type="checkbox" value=""
                                  class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-grayPrimary checked:bg-blue-400 focus:bg-blue-400 focus:ring-2 focus:ring-blue-400" />
                              <label for="kmandi-dalam" class="ms-3 text-sm text-gray-600">K.Mandi Dalam</label>
                          </div>
                          <div class="mb-4 flex items-center">
                              <input id="kloset-duduk" type="checkbox" value=""
                                  class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-grayPrimary checked:bg-blue-400 focus:bg-blue-400 focus:ring-2 focus:ring-blue-400" />
                              <label for="kloset-duduk" class="ms-3 text-sm text-gray-600">Kloset Duduk</label>
                          </div>
                          <div class="mb-4 flex items-center">
                              <input id="shower" type="checkbox" value=""
                                  class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-grayPrimary checked:bg-blue-400 focus:bg-blue-400 focus:ring-2 focus:ring-blue-400" />
                              <label for="shower" class="ms-3 text-sm text-gray-600">Shower</label>
                          </div>
                          <div class="mb-4 flex items-center">
                              <input id="bak-mandi" type="checkbox" value=""
                                  class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-grayPrimary checked:bg-blue-400 focus:bg-blue-400 focus:ring-2 focus:ring-blue-400" />
                              <label for="bak-mandi" class="ms-3 text-sm text-gray-600">Bak Mandi</label>
                          </div>
                          <div class="mb-4 flex items-center">
                              <input id="bathube" type="checkbox" value=""
                                  class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-grayPrimary checked:bg-blue-400 focus:bg-blue-400 focus:ring-2 focus:ring-blue-400" />
                              <label for="bathube" class="ms-3 text-sm text-gray-600">Bath Tube</label>
                          </div>
                          <div class="mb-4 flex items-center">
                              <input id="water-heater" type="checkbox" value=""
                                  class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-grayPrimary checked:bg-blue-400 focus:bg-blue-400 focus:ring-2 focus:ring-blue-400" />
                              <label for="water-heater" class="ms-3 text-sm text-gray-600">Water Heater</label>
                          </div>
                          <div class="mb-4 flex items-center">
                              <input id="westafel" type="checkbox" value=""
                                  class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-grayPrimary checked:bg-blue-400 focus:bg-blue-400 focus:ring-2 focus:ring-blue-400" />
                              <label for="westafel" class="ms-3 text-sm text-gray-600">Westafel</label>
                          </div>
                          <div class="mb-4 flex items-center">
                              <input id="ember" type="checkbox" value=""
                                  class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-grayPrimary checked:bg-blue-400 focus:bg-blue-400 focus:ring-2 focus:ring-blue-400" />
                              <label for="ember" class="ms-3 text-sm text-gray-600">Ember</label>
                          </div>
                      </div>
                      <button type="button" class="text-sm text-bluePrimary hover:underline px-2" btn-see-more>
                          Lihat lebih banyak
                      </button>
                  </div>
                  <!-- Peraturan Kost -->
                  <div class="py-2">
                      <h5 class="items-center text-base font-medium text-gray-700 mb-4 px-2">
                          Peraturan Kost
                      </h5>
                      <div class="grid h-[100px] grid-cols-2 overflow-hidden px-2 other" container-items-search>
                          <div class="mb-4 flex items-center">
                              <input id="pasutri" type="checkbox" value=""
                                  class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-grayPrimary checked:bg-blue-400 focus:bg-blue-400 focus:ring-2 focus:ring-blue-400" />
                              <label for="pasutri" class="ms-3 text-sm text-gray-600">Boleh Pasutri</label>
                          </div>
                          <div class="mb-4 flex items-center">
                              <input id="akses" type="checkbox" value=""
                                  class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-grayPrimary checked:bg-blue-400 focus:bg-blue-400 focus:ring-2 focus:ring-blue-400" />
                              <label for="akses" class="ms-3 text-sm text-gray-600">Akses 24 Jam</label>
                          </div>
                          <div class="mb-4 flex items-center">
                              <input id="sekamar-berdua" type="checkbox" value=""
                                  class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-grayPrimary checked:bg-blue-400 focus:bg-blue-400 focus:ring-2 focus:ring-blue-400" />
                              <label for="sekamar-berdua" class="ms-3 text-sm text-gray-600">Maks. 2 Orang /
                                  Kamar</label>
                          </div>
                          <div class="mb-4 flex items-center">
                              <input id="sekamar-bertiga" type="checkbox" value=""
                                  class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-grayPrimary checked:bg-blue-400 focus:bg-blue-400 focus:ring-2 focus:ring-blue-400" />
                              <label for="sekamar-bertiga" class="ms-3 text-sm text-gray-600">Maks. 3 Orang /
                                  Kamar</label>
                          </div>
                          <div class="mb-4 flex items-center">
                              <input id="pet" type="checkbox" value=""
                                  class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-grayPrimary checked:bg-blue-400 focus:bg-blue-400 focus:ring-2 focus:ring-blue-400" />
                              <label for="pet" class="ms-3 text-sm text-gray-600">Boleh Bawa Peliharaan</label>
                          </div>
                          <div class="mb-4 flex items-center">
                              <input id="smoking" type="checkbox" value=""
                                  class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-grayPrimary checked:bg-blue-400 focus:bg-blue-400 focus:ring-2 focus:ring-blue-400" />
                              <label for="smoking" class="ms-3 text-sm text-gray-600">Boleh Merokok di Kamar</label>
                          </div>
                          <div class="mb-4 flex items-center">
                              <input id="lawan-jenis" type="checkbox" value=""
                                  class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-grayPrimary checked:bg-blue-400 focus:bg-blue-400 focus:ring-2 focus:ring-blue-400" />
                              <label for="lawan-jenis" class="ms-3 text-sm text-gray-600">Lawan Jenis Boleh
                                  Masuk</label>
                          </div>
                      </div>
                      <button type="button" class="text-sm text-bluePrimary hover:underline px-2" btn-see-more>
                          Lihat lebih banyak
                      </button>
                  </div>
              </div>
          </form>
      </div>
  </div>
  <!-- End Drawer Search -->
