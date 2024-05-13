<!-- Start Drawer Login Register -->
<div id="overlay" class="fixed left-0 top-0 z-[60] hidden h-[100vh] w-[100vw] bg-black/40"></div>
<div id="content-drawer"
  class="fixed left-1/2 top-1/2 z-[61] hidden h-screen w-screen -translate-x-1/2 -translate-y-1/2 scale-0 overflow-y-scroll bg-white p-6 shadow-md transition-transform duration-100 md:h-fit md:max-h-[600px] md:w-fit md:rounded-lg">
  <section id="login" class="hidden">
    <!-- Title -->
    <div class="mb-7 flex items-center justify-between gap-5">
      <h2 class="text-xl font-semibold">Masuk akun U Kost</h2>
      <button type="button" class="btn-close-drawer group rounded-lg p-1 hover:bg-gray-100">
        <svg class="h-7 w-7 text-gray-600" width="20" height="20" viewBox="0 0 20 20" fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <path d="M5.83301 5.8335L14.1663 14.1668M5.83301 14.1668L14.1663 5.8335" stroke="currentColor"
            stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </button>
    </div>
    <!-- Sign up with other -->
    <div class="flex flex-col justify-between gap-3 text-sm font-medium lg:flex-row">
      <button
        class="flex w-full items-center justify-center gap-2 rounded-lg border p-2.5 leading-none ring-gray-200 hover:bg-gray-100 focus:outline-none focus:ring-4 lg:w-fit">
        <svg class="h-5 w-5" width="20" height="20" viewBox="0 0 20 20" fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <g clip-path="url(#clip0_266_29)">
            <path
              d="M6.96721 0.657779C4.9689 1.35101 3.24556 2.66679 2.05032 4.41184C0.855082 6.1569 0.250946 8.23925 0.326651 10.353C0.402355 12.4668 1.15391 14.5006 2.47092 16.1557C3.78794 17.8108 5.60099 18.9999 7.64377 19.5484C9.2999 19.9757 11.035 19.9945 12.7 19.6031C14.2083 19.2643 15.6028 18.5396 16.7469 17.5C17.9376 16.3849 18.802 14.9663 19.2469 13.3968C19.7305 11.6901 19.8166 9.89517 19.4985 8.14997H10.1985V12.0078H15.5844C15.4768 12.6231 15.2461 13.2103 14.9062 13.7344C14.5663 14.2585 14.1242 14.7086 13.6063 15.0578C12.9486 15.4928 12.2072 15.7855 11.4297 15.9172C10.6499 16.0621 9.85011 16.0621 9.07033 15.9172C8.28 15.7538 7.53236 15.4276 6.87502 14.9593C5.819 14.2118 5.02608 13.1498 4.6094 11.925C4.18567 10.6771 4.18567 9.32435 4.6094 8.07653C4.906 7.20187 5.39632 6.40549 6.04377 5.74684C6.7847 4.97926 7.72273 4.43059 8.75495 4.16102C9.78718 3.89146 10.8737 3.91142 11.8953 4.21872C12.6934 4.4637 13.4232 4.89174 14.0266 5.46872C14.6339 4.86455 15.2401 4.25882 15.8453 3.65153C16.1578 3.32497 16.4985 3.01403 16.8063 2.67965C15.8853 1.82259 14.8042 1.15568 13.625 0.717154C11.4777 -0.0625493 9.12811 -0.0835031 6.96721 0.657779Z"
              fill="white" />
            <path
              d="M6.96758 0.65805C9.1283 -0.0837359 11.4779 -0.0633337 13.6254 0.715863C14.8048 1.15737 15.8854 1.82748 16.8051 2.68774C16.4926 3.02211 16.1629 3.33461 15.8441 3.65961C15.2379 4.26482 14.6322 4.86795 14.027 5.46899C13.4236 4.89201 12.6938 4.46397 11.8957 4.21899C10.8744 3.91061 9.78792 3.8895 8.75542 4.15796C7.72292 4.42642 6.78432 4.97408 6.04258 5.74086C5.39513 6.39951 4.90481 7.19589 4.6082 8.07055L1.36914 5.56274C2.52853 3.26361 4.53594 1.50496 6.96758 0.65805Z"
              fill="#E33629" />
            <path
              d="M0.509175 8.04688C0.683271 7.18405 0.972306 6.34848 1.36855 5.5625L4.60761 8.07656C4.18389 9.32438 4.18389 10.6772 4.60761 11.925C3.52845 12.7583 2.44876 13.5958 1.36855 14.4375C0.376598 12.463 0.07407 10.2133 0.509175 8.04688Z"
              fill="#F8BD00" />
            <path
              d="M10.198 8.14844H19.498C19.8161 9.89365 19.73 11.6885 19.2464 13.3953C18.8015 14.9648 17.9371 16.3834 16.7464 17.4984C15.7011 16.6828 14.6511 15.8734 13.6058 15.0578C14.124 14.7082 14.5663 14.2576 14.9063 13.733C15.2462 13.2084 15.4766 12.6205 15.5839 12.0047H10.198C10.1964 10.7203 10.198 9.43437 10.198 8.14844Z"
              fill="#587DBD" />
            <path
              d="M1.36719 14.4373C2.4474 13.604 3.52708 12.7665 4.60625 11.9248C5.02376 13.1501 5.81782 14.2121 6.875 14.9592C7.53439 15.4252 8.28364 15.7488 9.075 15.9092C9.85478 16.0542 10.6546 16.0542 11.4344 15.9092C12.2119 15.7776 12.9533 15.4849 13.6109 15.0498C14.6563 15.8654 15.7062 16.6748 16.7516 17.4904C15.6076 18.5306 14.2132 19.2559 12.7047 19.5951C11.0397 19.9865 9.30457 19.9678 7.64844 19.5404C6.3386 19.1907 5.11512 18.5742 4.05469 17.7295C2.93228 16.8384 2.01556 15.7154 1.36719 14.4373Z"
              fill="#319F43" />
          </g>
          <defs>
            <clipPath id="clip0_266_29">
              <rect width="20" height="20" fill="white" />
            </clipPath>
          </defs>
        </svg>
        <span>Masuk dengan akun Google</span>
      </button>
      <button
        class="flex w-full items-center justify-center gap-2 rounded-lg border p-2.5 leading-none ring-gray-200 hover:bg-gray-100 focus:outline-none focus:ring-4 lg:w-fit">
        <svg class="h-5 w-5" width="20" height="20" viewBox="0 0 20 20" fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <path
            d="M14.2086 16.9C13.392 17.6917 12.5003 17.5667 11.642 17.1917C10.7336 16.8083 9.9003 16.7917 8.94197 17.1917C7.74197 17.7083 7.10863 17.5583 6.39197 16.9C2.3253 12.7083 2.9253 6.325 7.54197 6.09167C8.66697 6.15 9.4503 6.70833 10.1086 6.75833C11.092 6.55833 12.0336 5.98333 13.0836 6.05833C14.342 6.15833 15.292 6.65833 15.917 7.55833C13.317 9.11667 13.9336 12.5417 16.317 13.5C15.842 14.75 15.2253 15.9917 14.2003 16.9083L14.2086 16.9ZM10.0253 6.04167C9.9003 4.18333 11.4086 2.65 13.142 2.5C13.3836 4.65 11.192 6.25 10.0253 6.04167Z"
            fill="currentColor" />
        </svg>
        <span>Masuk dengan ID Apple</span>
      </button>
    </div>
    <!-- Or -->
    <div class="flex items-center py-5 text-sm">
      <hr class="border-1 mr-2 w-full border-gray-200" />
      <p class="text-gray-500">atau</p>
      <hr class="border-1 ml-2 w-full border-gray-200" />
    </div>
    <!-- Form Login -->
    <form class="mx-auto w-full">
      <div class="mb-5">
        <label for="handphone" class="mb-2 block text-sm font-medium text-gray-900">Nomor Handphone</label>
        <input type="text" id="handphone"
          class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-300 focus:ring-blue-300"
          placeholder="Nomor Handphone" required />
      </div>
      <div class="relative mb-5">
        <label for="password" class="mb-2 block text-sm font-medium text-gray-900">Password</label>
        <input type="password" id="passwordt"
          class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-300 focus:ring-blue-300"
          placeholder="Masukkan Password" required />
        <button type="button"
          class="button-hide absolute inset-y-0 right-0 top-7 flex items-center px-4 text-gray-600 focus:outline-none">
          <svg class="hide h-6 w-6 cursor-pointer" width="20" height="20" viewBox="0 0 20 20" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
              d="M8.94199 4.22783C9.29329 4.18708 9.64667 4.16676 10.0003 4.16699C13.887 4.16699 17.0003 6.58616 18.3337 10.0003C18.0109 10.8308 17.5748 11.6127 17.0378 12.3237M5.43366 5.43283C3.73366 6.47033 2.41699 8.07783 1.66699 10.0003C3.00033 13.4145 6.11366 15.8337 10.0003 15.8337C11.6104 15.8422 13.1913 15.4037 14.567 14.567M8.23366 8.23366C8.00149 8.46583 7.81733 8.74145 7.69168 9.04479C7.56603 9.34813 7.50136 9.67325 7.50136 10.0016C7.50136 10.3299 7.56603 10.655 7.69168 10.9584C7.81733 11.2617 8.00149 11.5373 8.23366 11.7695C8.46582 12.0017 8.74145 12.1858 9.04479 12.3115C9.34813 12.4371 9.67324 12.5018 10.0016 12.5018C10.3299 12.5018 10.655 12.4371 10.9584 12.3115C11.2617 12.1858 11.5373 12.0017 11.7695 11.7695"
              stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M3.33398 3.3335L16.6673 16.6668" stroke="currentColor" stroke-width="1.25"
              stroke-linecap="round" />
          </svg>
          <svg class="unhide hidden h-6 w-6 cursor-pointer" width="20" height="20" viewBox="0 0 20 20" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
              d="M9.98676 4.375C6.94223 4.375 3.81918 6.13711 1.36058 9.66133C1.29041 9.76303 1.25195 9.88325 1.25007 10.0068C1.24819 10.1303 1.28298 10.2517 1.35004 10.3555C3.2391 13.3125 6.32035 15.625 9.98676 15.625C13.6133 15.625 16.7578 13.3055 18.6504 10.3418C18.7159 10.24 18.7507 10.1216 18.7507 10.0006C18.7507 9.87958 18.7159 9.76113 18.6504 9.65937C16.7536 6.72969 13.586 4.375 9.98676 4.375Z"
              stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
            <path
              d="M10 13.125C11.7259 13.125 13.125 11.7259 13.125 10C13.125 8.27411 11.7259 6.875 10 6.875C8.27411 6.875 6.875 8.27411 6.875 10C6.875 11.7259 8.27411 13.125 10 13.125Z"
              stroke="currentColor" stroke-width="1.25" stroke-miterlimit="10" />
          </svg>
        </button>
      </div>
      <div class="mb-5"></div>
      <div class="mb-5 flex items-center justify-between">
        <div class="flex items-center">
          <div class="flex h-5 items-center">
            <input id="remember" type="checkbox" value=""
              class="focus:ring-3 h-4 w-4 rounded border border-gray-300 bg-gray-50 focus:ring-blue-300" required />
          </div>
          <label for="remember" class="ms-2 text-sm text-gray-600">Ingatkan Saya</label>
        </div>
        <a class="text-sm text-bluePrimary hover:underline" href="">Lupa Password?</a>
      </div>
      <button
        class="w-full rounded-lg bg-bluePrimary px-5 py-2.5 text-center text-sm font-medium text-white transition-all hover:bg-blueSecond focus:scale-95">
        Masuk
      </button>
    </form>
    <p class="py-5 text-sm text-gray-600">
      Belum punya akun?
      <a class="text-bluePrimary hover:underline" href="">Daftar sekarang</a>
    </p>
  </section>
  <section id="login" class="hidden md:w-96">
    <!-- Title -->
    <div class="mb-7 flex items-center justify-between gap-5">
      <h2 class="text-xl font-semibold">Halo, Selamat Datang</h2>
      <button type="button" class="btn-close-drawer group rounded-lg p-1 hover:bg-gray-100">
        <svg class="h-7 w-7 text-gray-600" width="20" height="20" viewBox="0 0 20 20" fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <path d="M5.83301 5.8335L14.1663 14.1668M5.83301 14.1668L14.1663 5.8335" stroke="currentColor"
            stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </button>
    </div>
    <!-- Form Input Number Phone -->
    <form class="mx-auto">
      <div class="mb-5 w-full">
        <label for="handphone" class="mb-2 block text-sm font-medium text-gray-900">Masukkan Nomor Whatsapp
          Kamu</label>
        <input type="text" id="handphone"
          class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-300 focus:ring-blue-300"
          placeholder="Nomor Whatsapp" required />
      </div>
      <button
        class="w-full rounded-lg bg-bluePrimary px-5 py-2.5 text-center text-sm font-medium text-white transition-all hover:bg-blueSecond focus:scale-95">
        Lanjut
      </button>
      <div class="pt-3 text-xs text-gray-500">
        <p class="text-justify">
          Dengan melanjutkan, saya setuju dengan
          <a class="text-bluePrimary hover:text-blueSecond" href="">Syarat & Ketentuan</a>
          dan
          <a class="text-bluePrimary hover:text-blueSecond" href="">Kebijakan Privasi U Kost</a>.
        </p>
      </div>
    </form>
  </section>
  <section id="input-password" class="hidden md:w-96">
    <!-- Title -->
    <div class="mb-7 flex items-center justify-between gap-5">
      <h2 class="text-xl font-semibold">Verifikasi Akun</h2>
      <button type="button" class="btn-close-drawer group rounded-lg p-1 hover:bg-gray-100">
        <svg class="h-7 w-7 text-gray-600" width="20" height="20" viewBox="0 0 20 20" fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <path d="M5.83301 5.8335L14.1663 14.1668M5.83301 14.1668L14.1663 5.8335" stroke="currentColor"
            stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </button>
    </div>
    <!-- Form Input Password  -->
    <form class="mx-auto">
      <div class="relative">
        <label for="password" class="mb-2 block text-sm font-medium text-gray-900">Masukkan Password</label>
        <input type="password" id="password"
          class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-300 focus:ring-blue-300"
          placeholder="Masukkan Password" required />
        <button type="button"
          class="button-hide absolute inset-y-0 right-0 top-7 flex items-center px-4 text-gray-600 focus:outline-none">
          <svg class="hide h-6 w-6 cursor-pointer" width="20" height="20" viewBox="0 0 20 20" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
              d="M8.94199 4.22783C9.29329 4.18708 9.64667 4.16676 10.0003 4.16699C13.887 4.16699 17.0003 6.58616 18.3337 10.0003C18.0109 10.8308 17.5748 11.6127 17.0378 12.3237M5.43366 5.43283C3.73366 6.47033 2.41699 8.07783 1.66699 10.0003C3.00033 13.4145 6.11366 15.8337 10.0003 15.8337C11.6104 15.8422 13.1913 15.4037 14.567 14.567M8.23366 8.23366C8.00149 8.46583 7.81733 8.74145 7.69168 9.04479C7.56603 9.34813 7.50136 9.67325 7.50136 10.0016C7.50136 10.3299 7.56603 10.655 7.69168 10.9584C7.81733 11.2617 8.00149 11.5373 8.23366 11.7695C8.46582 12.0017 8.74145 12.1858 9.04479 12.3115C9.34813 12.4371 9.67324 12.5018 10.0016 12.5018C10.3299 12.5018 10.655 12.4371 10.9584 12.3115C11.2617 12.1858 11.5373 12.0017 11.7695 11.7695"
              stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M3.33398 3.3335L16.6673 16.6668" stroke="currentColor" stroke-width="1.25"
              stroke-linecap="round" />
          </svg>
          <svg class="unhide hidden h-6 w-6 cursor-pointer" width="20" height="20" viewBox="0 0 20 20" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
              d="M9.98676 4.375C6.94223 4.375 3.81918 6.13711 1.36058 9.66133C1.29041 9.76303 1.25195 9.88325 1.25007 10.0068C1.24819 10.1303 1.28298 10.2517 1.35004 10.3555C3.2391 13.3125 6.32035 15.625 9.98676 15.625C13.6133 15.625 16.7578 13.3055 18.6504 10.3418C18.7159 10.24 18.7507 10.1216 18.7507 10.0006C18.7507 9.87958 18.7159 9.76113 18.6504 9.65937C16.7536 6.72969 13.586 4.375 9.98676 4.375Z"
              stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
            <path
              d="M10 13.125C11.7259 13.125 13.125 11.7259 13.125 10C13.125 8.27411 11.7259 6.875 10 6.875C8.27411 6.875 6.875 8.27411 6.875 10C6.875 11.7259 8.27411 13.125 10 13.125Z"
              stroke="currentColor" stroke-width="1.25" stroke-miterlimit="10" />
          </svg>
        </button>
      </div>
      <div class="pb-10 pt-2">
        <a class="text-sm text-bluePrimary hover:underline" href="">Lupa Password?</a>
      </div>
      <button
        class="w-full rounded-lg bg-bluePrimary px-5 py-2.5 text-center text-sm font-medium text-white transition-all hover:bg-blueSecond focus:scale-95">
        Masuk
      </button>
    </form>
  </section>
  <section id="verification" class="md:w-96">
    <!-- Title -->
    <div class="mb-7 flex items-center justify-between gap-5">
      <h2 class="text-xl font-semibold">Verifikasi Kode OTP</h2>
      <button type="button" class="btn-close-drawer group rounded-lg p-1 hover:bg-gray-100">
        <svg class="h-7 w-7 text-gray-600" width="20" height="20" viewBox="0 0 20 20" fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <path d="M5.83301 5.8335L14.1663 14.1668M5.83301 14.1668L14.1663 5.8335" stroke="currentColor"
            stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </button>
    </div>
    <!-- Form Verification OTP  -->
    <form class="mx-auto">
      <div class="mb-5 text-justify text-sm text-gray-700">
        <p>
          Masukkan kode OTP yang telah dikirimkan ke nomor Whatsapp
          <span>08123456789</span>
        </p>
      </div>
      <div class="input-field-otp flex justify-center gap-5">
        <input
          class="border-radi h-12 w-11 rounded-md border border-gray-300 text-center outline-none focus:border-blue-300 focus:ring-blue-300"
          type="number" />
        <input
          class="border-radi h-12 w-11 rounded-md border border-gray-300 text-center outline-none focus:border-blue-300 focus:ring-blue-300"
          type="number" disabled />
        <input
          class="border-radi h-12 w-11 rounded-md border border-gray-300 text-center outline-none focus:border-blue-300 focus:ring-blue-300"
          type="number" disabled />
        <input
          class="border-radi h-12 w-11 rounded-md border border-gray-300 text-center outline-none focus:border-blue-300 focus:ring-blue-300"
          type="number" disabled />
      </div>
      <button
        class="w-full rounded-lg bg-bluePrimary px-5 py-2.5 text-center text-sm font-medium text-white transition-all hover:bg-blueSecond focus:scale-95">
        Masuk
      </button>
    </form>
  </section>
  <section id="register" class="hidden">
    <!-- Title -->
    <div class="mb-7 flex items-center justify-between gap-5">
      <h2 class="text-xl font-semibold">Daftar akun U Kost</h2>
      <button type="button" class="btn-close-drawer group rounded-lg p-1 hover:bg-gray-100">
        <svg class="h-7 w-7 text-gray-600" width="20" height="20" viewBox="0 0 20 20" fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <path d="M5.83301 5.8335L14.1663 14.1668M5.83301 14.1668L14.1663 5.8335" stroke="currentColor"
            stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </button>
    </div>
    <!-- Form Register -->
    <form class="mx-auto w-full">
      <!-- Nama -->
      <div class="mb-5">
        <label for="name" class="mb-2 block text-sm font-medium text-gray-900">Nama Lengkap</label>
        <input type="text" id="name"
          class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-300 focus:ring-blue-300"
          placeholder="Masukkan nama lengkap" required />
      </div>
      <!-- Hanphone -->
      <div class="mb-5">
        <label for="handphone-register" class="mb-2 block text-sm font-medium text-gray-900">No Handphone</label>
        <input type="text" id="handphone-register"
          class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-300 focus:ring-blue-300"
          placeholder="Masukkan nomor handphone yang aktif" required />
      </div>
      <!-- Email -->
      <div class="mb-5">
        <label for="email" class="mb-2 block text-sm font-medium text-gray-900">Email</label>
        <input type="email" id="email"
          class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-300 focus:ring-blue-300"
          placeholder="Masukkan email untuk akun U Kost" required />
      </div>
      <!-- Password -->
      <div class="relative mb-5">
        <label for="password-register" class="mb-2 block text-sm font-medium text-gray-900">Password</label>
        <input type="password" id="password-register"
          class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-300 focus:ring-blue-300"
          placeholder="Minimal 8 karakter" required />
        <button type="button"
          class="button-hide absolute inset-y-0 right-0 top-7 flex items-center px-4 text-gray-600 focus:outline-none">
          <svg class="hide h-6 w-6 cursor-pointer" width="20" height="20" viewBox="0 0 20 20" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
              d="M8.94199 4.22783C9.29329 4.18708 9.64667 4.16676 10.0003 4.16699C13.887 4.16699 17.0003 6.58616 18.3337 10.0003C18.0109 10.8308 17.5748 11.6127 17.0378 12.3237M5.43366 5.43283C3.73366 6.47033 2.41699 8.07783 1.66699 10.0003C3.00033 13.4145 6.11366 15.8337 10.0003 15.8337C11.6104 15.8422 13.1913 15.4037 14.567 14.567M8.23366 8.23366C8.00149 8.46583 7.81733 8.74145 7.69168 9.04479C7.56603 9.34813 7.50136 9.67325 7.50136 10.0016C7.50136 10.3299 7.56603 10.655 7.69168 10.9584C7.81733 11.2617 8.00149 11.5373 8.23366 11.7695C8.46582 12.0017 8.74145 12.1858 9.04479 12.3115C9.34813 12.4371 9.67324 12.5018 10.0016 12.5018C10.3299 12.5018 10.655 12.4371 10.9584 12.3115C11.2617 12.1858 11.5373 12.0017 11.7695 11.7695"
              stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M3.33398 3.3335L16.6673 16.6668" stroke="currentColor" stroke-width="1.25"
              stroke-linecap="round" />
          </svg>
          <svg class="unhide hidden h-6 w-6 cursor-pointer" width="20" height="20" viewBox="0 0 20 20" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
              d="M9.98676 4.375C6.94223 4.375 3.81918 6.13711 1.36058 9.66133C1.29041 9.76303 1.25195 9.88325 1.25007 10.0068C1.24819 10.1303 1.28298 10.2517 1.35004 10.3555C3.2391 13.3125 6.32035 15.625 9.98676 15.625C13.6133 15.625 16.7578 13.3055 18.6504 10.3418C18.7159 10.24 18.7507 10.1216 18.7507 10.0006C18.7507 9.87958 18.7159 9.76113 18.6504 9.65937C16.7536 6.72969 13.586 4.375 9.98676 4.375Z"
              stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
            <path
              d="M10 13.125C11.7259 13.125 13.125 11.7259 13.125 10C13.125 8.27411 11.7259 6.875 10 6.875C8.27411 6.875 6.875 8.27411 6.875 10C6.875 11.7259 8.27411 13.125 10 13.125Z"
              stroke="currentColor" stroke-width="1.25" stroke-miterlimit="10" />
          </svg>
        </button>
      </div>
      <!-- Repeat Password -->
      <div class="relative mb-7">
        <label for="repeat-password" class="mb-2 block text-sm font-medium text-gray-900">Ulangi Password</label>
        <input type="password" id="repeat-password"
          class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-300 focus:ring-blue-300"
          placeholder="Masukkan kembali password" required />
        <button type="button"
          class="button-hide absolute inset-y-0 right-0 top-7 flex items-center px-4 text-gray-600 focus:outline-none">
          <svg class="hide h-6 w-6 cursor-pointer" width="20" height="20" viewBox="0 0 20 20" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
              d="M8.94199 4.22783C9.29329 4.18708 9.64667 4.16676 10.0003 4.16699C13.887 4.16699 17.0003 6.58616 18.3337 10.0003C18.0109 10.8308 17.5748 11.6127 17.0378 12.3237M5.43366 5.43283C3.73366 6.47033 2.41699 8.07783 1.66699 10.0003C3.00033 13.4145 6.11366 15.8337 10.0003 15.8337C11.6104 15.8422 13.1913 15.4037 14.567 14.567M8.23366 8.23366C8.00149 8.46583 7.81733 8.74145 7.69168 9.04479C7.56603 9.34813 7.50136 9.67325 7.50136 10.0016C7.50136 10.3299 7.56603 10.655 7.69168 10.9584C7.81733 11.2617 8.00149 11.5373 8.23366 11.7695C8.46582 12.0017 8.74145 12.1858 9.04479 12.3115C9.34813 12.4371 9.67324 12.5018 10.0016 12.5018C10.3299 12.5018 10.655 12.4371 10.9584 12.3115C11.2617 12.1858 11.5373 12.0017 11.7695 11.7695"
              stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M3.33398 3.3335L16.6673 16.6668" stroke="currentColor" stroke-width="1.25"
              stroke-linecap="round" />
          </svg>
          <svg class="unhide hidden h-6 w-6 cursor-pointer" width="20" height="20" viewBox="0 0 20 20" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
              d="M9.98676 4.375C6.94223 4.375 3.81918 6.13711 1.36058 9.66133C1.29041 9.76303 1.25195 9.88325 1.25007 10.0068C1.24819 10.1303 1.28298 10.2517 1.35004 10.3555C3.2391 13.3125 6.32035 15.625 9.98676 15.625C13.6133 15.625 16.7578 13.3055 18.6504 10.3418C18.7159 10.24 18.7507 10.1216 18.7507 10.0006C18.7507 9.87958 18.7159 9.76113 18.6504 9.65937C16.7536 6.72969 13.586 4.375 9.98676 4.375Z"
              stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
            <path
              d="M10 13.125C11.7259 13.125 13.125 11.7259 13.125 10C13.125 8.27411 11.7259 6.875 10 6.875C8.27411 6.875 6.875 8.27411 6.875 10C6.875 11.7259 8.27411 13.125 10 13.125Z"
              stroke="currentColor" stroke-width="1.25" stroke-miterlimit="10" />
          </svg>
        </button>
      </div>
      <button
        class="w-full rounded-lg bg-bluePrimary px-5 py-2.5 text-center text-sm font-medium text-white transition-all hover:bg-blueSecond focus:scale-95">
        Daftar
      </button>
    </form>
    <p class="py-5 text-sm text-gray-600">
      Sudah memiliki akun?
      <a class="text-bluePrimary hover:underline" href="">Masuk sekarang</a>
    </p>
  </section>
</div>
<!-- End Drawer Login Register -->
