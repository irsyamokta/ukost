<!-- Start Drawer Sidebar -->
<div id="drawer-right-example"
class="fixed right-0 top-0 z-40 h-screen w-80 translate-x-full overflow-y-auto bg-white p-4 transition-transform"
tabindex="-1" aria-labelledby="drawer-right-label">
<h5 id="drawer-right-label" class="mb-4 inline-flex items-center text-xl font-semibold uppercase text-gray-500">
  Menu
</h5>
<button type="button" data-drawer-hide="drawer-right-example" aria-controls="drawer-right-example"
  class="absolute end-2.5 top-2.5 inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900">
  <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
      d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
  </svg>
  <span class="sr-only">Close menu</span>
</button>
<!-- Items -->
<div class="overflow-y-auto py-2">
  <ul class="space-y-2 font-medium">
    <li>
      <a href="#" class="group flex items-center rounded-lg px-2 py-4 text-gray-900 hover:bg-gray-100">
        <svg class="h-5 w-5 text-gray-500 transition duration-75 group-hover:text-gray-900" width="20" height="20"
          aria-hidden="true" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
          <path fill-rule="evenodd" clip-rule="evenodd"
            d="M9.41085 2.74411C9.56712 2.58788 9.77904 2.50012 10 2.50012C10.221 2.50012 10.4329 2.58788 10.5892 2.74411L15.5892 7.74411L17.2558 9.41078C17.4076 9.56795 17.4916 9.77845 17.4897 9.99694C17.4878 10.2154 17.4002 10.4245 17.2457 10.579C17.0912 10.7335 16.8822 10.8211 16.6637 10.823C16.4452 10.8249 16.2347 10.7409 16.0775 10.5891L15.8333 10.3449V15.8333C15.8333 16.2753 15.6578 16.6992 15.3452 17.0118C15.0326 17.3243 14.6087 17.4999 14.1667 17.4999H11.6667C11.4457 17.4999 11.2337 17.4121 11.0774 17.2559C10.9211 17.0996 10.8333 16.8876 10.8333 16.6666V14.1666H9.16668V16.6666C9.16668 16.8876 9.07888 17.0996 8.9226 17.2559C8.76632 17.4121 8.55436 17.4999 8.33335 17.4999H5.83335C5.39132 17.4999 4.9674 17.3243 4.65484 17.0118C4.34228 16.6992 4.16668 16.2753 4.16668 15.8333V10.3449L3.92251 10.5891C3.76535 10.7409 3.55484 10.8249 3.33635 10.823C3.11785 10.8211 2.90884 10.7335 2.75433 10.579C2.59982 10.4245 2.51218 10.2154 2.51029 9.99694C2.50839 9.77845 2.59238 9.56795 2.74418 9.41078L4.41085 7.74411L9.41085 2.74411Z"
            fill="currentColor" />
        </svg>
        <span class="ms-3">Beranda</span>
      </a>
    </li>
    <li>
      <button type="button"
        class="group group flex w-full items-center rounded-lg px-2 py-4 text-base text-gray-900 transition duration-75 hover:bg-gray-100"
        aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
        <svg class="h-5 w-5 flex-shrink-0 text-gray-500 transition duration-75 group-hover:text-gray-900" width="20"
          height="20" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M11.8084 11.425L12.9751 9.40829C13.0501 9.28329 13.0167 9.12496 12.9084 9.03329L11.6751 8.06663C11.7001 7.88329 11.7168 7.69163 11.7168 7.49996C11.7168 7.30829 11.7001 7.11663 11.6751 6.92496L12.9084 5.95829C13.0167 5.86663 13.0501 5.70829 12.9751 5.58329L11.8084 3.56663C11.7334 3.44163 11.5834 3.39163 11.4501 3.44163L10.0001 4.02496C9.70008 3.79163 9.37508 3.59996 9.01675 3.44996L8.80008 1.90829C8.7861 1.84089 8.74961 1.78026 8.69661 1.73634C8.6436 1.69242 8.57724 1.66784 8.50842 1.66663H6.17508C6.03342 1.66663 5.90842 1.77496 5.88342 1.91663L5.66675 3.45829C5.31675 3.60829 4.98342 3.79996 4.68342 4.03329L3.23342 3.44996C3.10008 3.39996 2.95008 3.44996 2.87508 3.57496L1.70842 5.59163C1.63342 5.71663 1.66675 5.87496 1.77508 5.96663L3.00842 6.93329C2.98342 7.11663 2.96675 7.30829 2.96675 7.49996C2.96675 7.69163 2.98342 7.88329 3.00842 8.07496L1.77508 9.04163C1.66675 9.13329 1.63342 9.29163 1.70842 9.41663L2.87508 11.4333C2.95008 11.5583 3.10008 11.6083 3.23342 11.5583L4.68342 10.975C4.98342 11.2083 5.30842 11.4 5.66675 11.55L5.88342 13.0916C5.90842 13.225 6.03342 13.3333 6.17508 13.3333H8.50842C8.65008 13.3333 8.77508 13.225 8.80008 13.0833L9.01675 11.5416C9.36675 11.3916 9.70008 11.2 10.0001 10.9666L11.4501 11.55C11.5834 11.6 11.7334 11.55 11.8084 11.425ZM7.34175 9.16663C6.42508 9.16663 5.67508 8.41663 5.67508 7.49996C5.67508 6.58329 6.42508 5.83329 7.34175 5.83329C8.25842 5.83329 9.00842 6.58329 9.00842 7.49996C9.00842 8.41663 8.25842 9.16663 7.34175 9.16663ZM18.2667 15.5583L17.4667 14.9416C17.4834 14.825 17.5001 14.7 17.5001 14.575C17.5001 14.45 17.4917 14.325 17.4667 14.2083L18.2584 13.5916C18.3251 13.5333 18.3501 13.4333 18.3001 13.35L17.5501 12.0583C17.5084 11.975 17.4084 11.95 17.3168 11.975L16.3917 12.35C16.2001 12.2 15.9917 12.075 15.7584 11.9833L15.6167 11C15.6135 10.9554 15.5937 10.9137 15.5614 10.8829C15.529 10.8521 15.4864 10.8344 15.4418 10.8333H13.9501C13.8584 10.8333 13.7751 10.9 13.7668 10.9916L13.6251 11.975C13.4001 12.075 13.1834 12.1916 12.9918 12.3416L12.0667 11.9666C12.0243 11.9507 11.9775 11.9503 11.9348 11.9655C11.8921 11.9808 11.8562 12.0107 11.8334 12.05L11.0834 13.3416C11.0418 13.425 11.0501 13.525 11.1251 13.5833L11.9168 14.2C11.8824 14.4432 11.8824 14.6901 11.9168 14.9333L11.1251 15.55C11.0584 15.6083 11.0334 15.7083 11.0834 15.7916L11.8334 17.0833C11.8751 17.1666 11.9751 17.1916 12.0667 17.1666L12.9918 16.7916C13.1834 16.9416 13.3918 17.0666 13.6251 17.1583L13.7668 18.1416C13.7834 18.2333 13.8584 18.3 13.9501 18.3H15.4418C15.5334 18.3 15.6167 18.2333 15.6251 18.1416L15.7667 17.1583C15.9917 17.0583 16.2084 16.9416 16.3917 16.7916L17.3251 17.1666C17.4084 17.2 17.5084 17.1666 17.5584 17.0833L18.3084 15.7916C18.3584 15.7166 18.3334 15.6166 18.2667 15.5583ZM14.6917 15.6916C14.544 15.6916 14.3976 15.6624 14.2611 15.6058C14.1246 15.5492 14.0005 15.4662 13.8961 15.3617C13.7916 15.2572 13.7088 15.1331 13.6523 14.9965C13.5958 14.8599 13.5667 14.7136 13.5668 14.5658C13.5668 14.418 13.596 14.2717 13.6526 14.1351C13.7092 13.9986 13.7921 13.8746 13.8967 13.7701C14.0012 13.6657 14.1253 13.5828 14.2619 13.5263C14.3984 13.4698 14.5448 13.4407 14.6926 13.4408C14.9911 13.4409 15.2773 13.5596 15.4883 13.7707C15.6992 13.9818 15.8177 14.2681 15.8176 14.5666C15.8175 14.8651 15.6988 15.1513 15.4877 15.3623C15.2765 15.5733 14.9902 15.6917 14.6917 15.6916Z"
            fill="currentColor" />
        </svg>
        <span class="ms-3 flex-1 whitespace-nowrap text-left rtl:text-right">Layanan</span>
        <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="m1 1 4 4 4-4" />
        </svg>
      </button>
      <ul id="dropdown-example" class="hidden space-y-2 py-2">
        <li>
          <a href="#" class="group flex items-center rounded-lg px-2 py-4 text-gray-900 hover:bg-gray-100">
            <svg class="h-5 w-5 text-gray-500 transition duration-75 group-hover:text-gray-900" width="20"
              height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M8.83183 1.67495L16.3318 3.34162C16.4262 3.36049 16.5112 3.41148 16.5723 3.48593C16.6334 3.56037 16.6668 3.65366 16.6668 3.74995V16.25C16.6668 16.3462 16.6334 16.4395 16.5723 16.514C16.5112 16.5884 16.4262 16.6394 16.3318 16.6583L8.83183 18.325C8.7714 18.337 8.70905 18.3356 8.64926 18.3206C8.58948 18.3057 8.53374 18.2777 8.48608 18.2387C8.43842 18.1996 8.40001 18.1505 8.37362 18.0948C8.34724 18.0391 8.33353 17.9782 8.3335 17.9166V2.08329C8.33353 2.02166 8.34724 1.96082 8.37362 1.90513C8.40001 1.84944 8.43842 1.8003 8.48608 1.76125C8.53374 1.72219 8.58948 1.69419 8.64926 1.67927C8.70905 1.66435 8.7714 1.66287 8.83183 1.67495ZM7.50016 3.33329V16.6666H3.9585C3.80746 16.6666 3.66154 16.6119 3.54772 16.5126C3.4339 16.4134 3.35987 16.2762 3.33933 16.1266L3.3335 16.0416V3.95829C3.3335 3.80725 3.3882 3.66133 3.48747 3.54751C3.58674 3.43369 3.72387 3.35966 3.8735 3.33912L3.9585 3.33329H7.50016ZM10.8335 9.16662C10.6125 9.16662 10.4005 9.25442 10.2442 9.4107C10.088 9.56698 10.0002 9.77894 10.0002 9.99995C10.0002 10.221 10.088 10.4329 10.2442 10.5892C10.4005 10.7455 10.6125 10.8333 10.8335 10.8333C11.0545 10.8333 11.2665 10.7455 11.4228 10.5892C11.579 10.4329 11.6668 10.221 11.6668 9.99995C11.6668 9.77894 11.579 9.56698 11.4228 9.4107C11.2665 9.25442 11.0545 9.16662 10.8335 9.16662Z"
                fill="currentColor" />
            </svg>
            <span class="ms-3">Kost</span>
          </a>
        </li>
        <li>
          <a href="#" class="group flex items-center rounded-lg px-2 py-4 text-gray-900 hover:bg-gray-100">
            <svg class="h-5 w-5 text-gray-500 transition duration-75 group-hover:text-gray-900" width="20"
              height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
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
            <span class="ms-3">Kontrakan</span>
          </a>
        </li>
        <li>
          <a href="#" class="group flex items-center rounded-lg px-2 py-4 text-gray-900 hover:bg-gray-100">
            <svg class="h-5 w-5 text-gray-500 transition duration-75 group-hover:text-gray-900" width="26"
              height="25" viewBox="0 0 26 25" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <g filter="url(#filter0_d_81_26)">
                <path
                  d="M6.33317 16.6667C5.87484 16.6667 5.48262 16.5036 5.1565 16.1775C4.83039 15.8514 4.66706 15.4589 4.6665 15V11.6667H8.83317C8.83317 11.9028 8.91317 12.1008 9.07317 12.2608C9.23317 12.4208 9.43095 12.5006 9.6665 12.5C9.88873 12.5 10.0451 12.3992 10.1357 12.1975C10.2262 11.9958 10.3476 11.8189 10.4998 11.6667H15.4998C15.4998 11.9028 15.5798 12.1008 15.7398 12.2608C15.8998 12.4208 16.0976 12.5006 16.3332 12.5C16.5554 12.5 16.7118 12.3992 16.8023 12.1975C16.8929 11.9958 17.0143 11.8189 17.1665 11.6667H21.3332V15C21.3332 15.4583 21.1701 15.8508 20.844 16.1775C20.5179 16.5042 20.1254 16.6672 19.6665 16.6667H6.33317ZM5.02067 10L6.74984 6C6.87484 5.69445 7.07623 5.45139 7.354 5.27083C7.63178 5.09028 7.93039 5 8.24984 5H8.83317V4.16667C8.83317 3.70833 8.9965 3.31583 9.32317 2.98917C9.64984 2.6625 10.0421 2.49945 10.4998 2.5H15.4998C15.9582 2.5 16.3507 2.66333 16.6773 2.99C17.004 3.31667 17.1671 3.70889 17.1665 4.16667V5H17.7498C18.0693 5 18.3679 5.09028 18.6457 5.27083C18.9234 5.45139 19.1248 5.69445 19.2498 6L20.979 10H17.1665C17.1665 9.76389 17.0865 9.56611 16.9265 9.40667C16.7665 9.24722 16.5687 9.16722 16.3332 9.16667C16.1109 9.16667 15.9548 9.2675 15.8648 9.46917C15.7748 9.67083 15.6532 9.84778 15.4998 10H10.4998C10.4998 9.76389 10.4198 9.56611 10.2598 9.40667C10.0998 9.24722 9.90206 9.16722 9.6665 9.16667C9.44428 9.16667 9.28817 9.2675 9.19817 9.46917C9.10817 9.67083 8.9865 9.84778 8.83317 10H5.02067ZM10.4998 5H15.4998V4.16667H10.4998V5Z"
                  fill="currentColor" />
              </g>
            </svg>
            <span class="ms-3">Jasa</span>
          </a>
        </li>
      </ul>
    </li>
    <li>
      <a href="#" class="group flex items-center rounded-lg px-2 py-4 text-gray-900 hover:bg-gray-100">
        <svg class="h-5 w-5 text-gray-500 transition duration-75 group-hover:text-gray-900" width="20" height="20"
          viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M10.8332 7.49996H9.1665V5.83329H10.8332M10.8332 14.1666H9.1665V9.16663H10.8332M9.99984 1.66663C8.90549 1.66663 7.82185 1.88217 6.81081 2.30096C5.79976 2.71975 4.8811 3.33358 4.10728 4.1074C2.54448 5.67021 1.6665 7.78982 1.6665 9.99996C1.6665 12.2101 2.54448 14.3297 4.10728 15.8925C4.8811 16.6663 5.79976 17.2802 6.81081 17.699C7.82185 18.1177 8.90549 18.3333 9.99984 18.3333C12.21 18.3333 14.3296 17.4553 15.8924 15.8925C17.4552 14.3297 18.3332 12.2101 18.3332 9.99996C18.3332 8.90561 18.1176 7.82198 17.6988 6.81093C17.28 5.79988 16.6662 4.88122 15.8924 4.1074C15.1186 3.33358 14.1999 2.71975 13.1889 2.30096C12.1778 1.88217 11.0942 1.66663 9.99984 1.66663Z"
            fill="currentColor" />
        </svg>
        <span class="ms-3">Tentang Kami</span>
      </a>
    </li>
    <li>
      <a href="#" class="group flex items-center rounded-lg px-2 py-4 text-gray-900 hover:bg-gray-100">
        <svg class="h-5 w-5 text-gray-500 transition duration-75 group-hover:text-gray-900" width="20" height="20"
          viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M2 9.99996C2.00044 8.25178 2.57349 6.55187 3.63152 5.16021C4.68955 3.76856 6.1743 2.76178 7.85869 2.29386C9.54308 1.82593 11.3344 1.92263 12.9586 2.56915C14.5828 3.21567 15.9506 4.37643 16.8527 5.87389C17.7547 7.37135 18.1415 9.12307 17.9537 10.8611C17.766 12.5992 17.0141 14.2279 15.813 15.4982C14.612 16.7685 13.0279 17.6104 11.3031 17.8951C9.57823 18.1799 7.80761 17.8918 6.262 17.075L2.622 17.985C2.53823 18.006 2.45043 18.005 2.36716 17.982C2.28389 17.9591 2.20799 17.9149 2.14686 17.8539C2.08573 17.7929 2.04145 17.717 2.01834 17.6338C1.99523 17.5506 1.99408 17.4628 2.015 17.379L2.925 13.738C2.31692 12.5859 1.99939 11.3027 2 9.99996ZM9.25 7.30696C9.403 7.13396 9.64 6.99996 10 6.99996C10.36 6.99996 10.597 7.13396 10.75 7.30696C10.911 7.49096 11 7.74496 11 7.99996C11 8.31696 10.929 8.52296 10.834 8.68496C10.733 8.85896 10.598 8.99896 10.411 9.19496L10.389 9.21896C10.2 9.41596 9.968 9.66296 9.791 9.99996C9.611 10.346 9.5 10.761 9.5 11.293C9.5 11.4256 9.55268 11.5527 9.64645 11.6465C9.74022 11.7403 9.86739 11.793 10 11.793C10.1326 11.793 10.2598 11.7403 10.3536 11.6465C10.4473 11.5527 10.5 11.4256 10.5 11.293C10.5 10.909 10.577 10.655 10.677 10.464C10.782 10.264 10.925 10.105 11.111 9.90996L11.153 9.86696C11.323 9.68996 11.535 9.46896 11.698 9.18896C11.884 8.86896 12 8.48896 12 7.99996C12 7.52696 11.839 7.02996 11.5 6.64596C11.153 6.25196 10.64 5.99996 10 5.99996C9.36 5.99996 8.847 6.25196 8.5 6.64596C8.16 7.03096 8 7.52596 8 7.99996C8 8.13257 8.05268 8.25974 8.14645 8.35351C8.24022 8.44728 8.36739 8.49996 8.5 8.49996C8.63261 8.49996 8.75979 8.44728 8.85355 8.35351C8.94732 8.25974 9 8.13257 9 7.99996C9 7.74496 9.089 7.48996 9.25 7.30696ZM10.7 13.513C10.7 13.3273 10.6263 13.1493 10.495 13.018C10.3637 12.8867 10.1857 12.813 10 12.813C9.81435 12.813 9.6363 12.8867 9.50503 13.018C9.37375 13.1493 9.3 13.3273 9.3 13.513C9.3 13.6986 9.37375 13.8767 9.50503 14.0079C9.6363 14.1392 9.81435 14.213 10 14.213C10.1857 14.213 10.3637 14.1392 10.495 14.0079C10.6263 13.8767 10.7 13.6986 10.7 13.513Z"
            fill="currentColor" />
        </svg>
        <span class="ms-3">Bantuan</span>
      </a>
    </li>
    <li>
      <a href="#"
        class="flex items-center rounded-lg bg-bluePrimary px-2 py-4 text-center text-gray-50 hover:bg-blueSecond" login-register>
        <span class="w-full text-center">Masuk atau Daftar</span>
      </a>
    </li>
  </ul>
</div>
</div>
<!-- End Drawer Sidebar -->