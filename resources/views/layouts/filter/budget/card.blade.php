<div class="group h-auto max-w-[300px] flex-shrink-0 overflow-hidden rounded-lg bg-white shadow-md hover:bg-gray-100">
    <a href="{{ route('product.detail') }}" class="group relative block overflow-hidden">
        <!-- Gambar -->
        <div class="h-44 w-[300px] overflow-hidden">
            <img loading="lazy" src="{{ asset('assets/product-2.png') }}"
                class="h-full w-full scale-100 transform object-cover transition-transform duration-300 group-hover:scale-110"
                alt=""/>
        </div>
        <!-- Information -->
        <div class="p-2">
            <!-- Gender & Rating -->
            <div class="mb-1 flex justify-between text-[10px]">
                <div class="flex items-center space-x-1.5">
                    <svg class="h-4 w-4" width="25" height="25" viewBox="0 0 25 25" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M14.4265 4.3958C13.714 2.70205 11.2869 2.70205 10.5744 4.3958L8.7473 8.73643L4.00563 9.11247C2.15667 9.2583 1.40667 11.5406 2.81605 12.7343L6.42855 15.7937L5.32438 20.3687C4.89417 22.1531 6.85771 23.5635 8.44105 22.6073L12.5004 20.1562L16.5598 22.6083C18.1431 23.5646 20.1067 22.1541 19.6765 20.3687L18.5723 15.7958L22.1848 12.7354C23.5942 11.5416 22.8442 9.26038 20.9952 9.11351L16.2535 8.73851L14.4265 4.3958Z"
                            fill="#F8BD00" />
                    </svg>
                    <span class="text-xs">4.3</span>
                </div>
                <span class="rounded-md bg-blue-500 px-2 py-1 text-xs font-medium text-white">Pria</span>
            </div>
            <!-- Nama Kost & Lokasi -->
            <div class="mb-4">
                <h5 class="text-base font-medium">Kos Sinar Harapan</h5>
                <span class="flex items-center gap-1">
                    <svg class="h-5 w-5 text-gray-500" width="20" height="20" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10 11.25C9.38194 11.25 8.77775 11.0667 8.26384 10.7233C7.74994 10.38 7.3494 9.89191 7.11288 9.32089C6.87635 8.74987 6.81447 8.12154 6.93505 7.51534C7.05563 6.90915 7.35325 6.35233 7.79029 5.91529C8.22733 5.47825 8.78415 5.18063 9.39034 5.06005C9.99654 4.93947 10.6249 5.00135 11.1959 5.23788C11.7669 5.4744 12.255 5.87494 12.5983 6.38884C12.9417 6.90275 13.125 7.50694 13.125 8.125C13.124 8.9535 12.7945 9.74778 12.2086 10.3336C11.6228 10.9195 10.8285 11.249 10 11.25ZM10 6.25C9.62916 6.25 9.26665 6.35997 8.95831 6.566C8.64997 6.77202 8.40964 7.06486 8.26773 7.40747C8.12581 7.75008 8.08868 8.12708 8.16103 8.4908C8.23338 8.85451 8.41195 9.1886 8.67418 9.45083C8.9364 9.71305 9.27049 9.89163 9.63421 9.96397C9.99792 10.0363 10.3749 9.99919 10.7175 9.85728C11.0601 9.71536 11.353 9.47504 11.559 9.1667C11.765 8.85835 11.875 8.49584 11.875 8.125C11.8745 7.62787 11.6768 7.15125 11.3253 6.79972C10.9738 6.4482 10.4971 6.2505 10 6.25Z"
                            fill="currentColor" />
                        <path
                            d="M10 18.75L4.72751 12.5319C4.65425 12.4385 4.58174 12.3445 4.51001 12.25C3.60937 11.0636 3.12282 9.61452 3.12501 8.125C3.12501 6.30164 3.84934 4.55295 5.13865 3.26364C6.42796 1.97433 8.17664 1.25 10 1.25C11.8234 1.25 13.5721 1.97433 14.8614 3.26364C16.1507 4.55295 16.875 6.30164 16.875 8.125C16.8772 9.61384 16.3909 11.0623 15.4906 12.2481L15.49 12.25C15.49 12.25 15.3025 12.4963 15.2744 12.5294L10 18.75ZM5.50813 11.4969C5.50813 11.4969 5.65376 11.6894 5.68688 11.7306L10 16.8175L14.3188 11.7237C14.3463 11.6894 14.4925 11.4956 14.4931 11.495C15.2289 10.5257 15.6265 9.34189 15.625 8.125C15.625 6.63316 15.0324 5.20242 13.9775 4.14752C12.9226 3.09263 11.4918 2.5 10 2.5C8.50816 2.5 7.07742 3.09263 6.02253 4.14752C4.96764 5.20242 4.37501 6.63316 4.37501 8.125C4.3737 9.34265 4.77174 10.5271 5.50813 11.4969Z"
                            fill="currentColor" />
                    </svg>
                    <p class="block w-full overflow-hidden text-ellipsis whitespace-nowrap text-xs">
                        Grendeng, Purwokerto Utara
                    </p>
                </span>
            </div>
            <!-- Harga -->
            <div class="flex items-center justify-between">
                <span class="font-semibold text-bluePrimary">Rp 3.500.000
                    <span class="font-normal">/Bulan</span></span>
                <span class="text-right text-xs text-red-500">Sisa 3 Kamar</span>
            </div>
        </div>
    </a>
</div>
