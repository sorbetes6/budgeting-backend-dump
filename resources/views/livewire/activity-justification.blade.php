<div>

    <!-- Top Bar -->
    <div class="flex w-[1420px] mx-[270px] mt-[110px] mb-[10px]">
        <div class="w-[1420px] mx-[0px] rounded-lg p-4 relative">
            <div class="absolute shadow inset-x-0 bottom-0 h-[1px] bg-gray-200"></div>
            <div class="flex flex-col gap-y-[5px] text-indigo-800 text-[25px] font-extrabold font-['Inter'] leading-5">Activity Justification
                <div class="flex flex-row items-center">
                    <label class="text-yellow-700 text-sm font-normal font-['Inter'] leading-loose mr-1">Budget Call Forms ></label>
                    <label class="text-black text-sm font-normal font-['Inter'] leading-loose">Activity Justification Form No.</label>
                </div>
                <div class="flex ml-[835px] mt-[-50px] items-start">
                    @include('livewire.import-export-add-buttons')
                </div>
            </div>
        </div>
    </div>

    <!-- Body -->
    <div class="w-[1420px] h-[620px] mx-[270px] font-['Inter'] rounded-lg border border-gray-300 flex flex-col items-center justify-center overflow-auto">

        <!-- Select College/Office -->
        <div class="w-[280px] p-4 rounded-lg mt-[-50px] mr-[1130px]">
            <!-- Dropdown for different colleges and offices -->
            <button id="dropdownDelayButton" data-dropdown-toggle="dropdownDelay" data-dropdown-delay="500" data-dropdown-trigger="hover" class="text-black bg-gray-800 hover:bg-gray-200 border border-gray-400 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-gray-700" type="button">
                Select College/Office
                <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                </svg>
            </button>
            <div id="dropdownDelay" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                <ul class="py-2 text-sm text-black dark:text-gray-200" aria-labelledby="dropdownDelayButton">
                    <li>
                        <a href="#" class="block px-4 py-2 text-black hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">College/Office 1</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 text-black hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">College/Office 2</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Table -->
        <div class="overflow-x-auto h-[480px] p-4 rounded-lg mt-[-10px] mr-4">
            <table class="w-[1360px]">
                <tbody>
                    <!-- First Header -->
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center align-middle"></td>
                        <td class="border border-gray-300 px-4 py-2 text-center align-middle"><strong style="font-weight: 900;">Major</strong></td>
                        <td class="border border-gray-300 px-4 py-2 text-center align-middle"><strong style="font-weight: 900;">Specific</strong></td>
                        <td class="border border-gray-300 px-4 py-2 text-center align-middle"><strong style="font-weight: 900;">Activity/Justification</strong></td>
                        <td class="border border-gray-300 px-4 py-2 text-center align-middle" colspan="2"><strong style="font-weight: 900;">Method of Accomplishing Objectives</strong></td>
                    </tr>

                    <!-- First Content -->
                    <tr>
                        <td class="w-[5px] border border-gray-300 px-4 py-2 text-center align-middle">
                            <label>
                                <input type="checkbox" class="visually-hidden" style="width: 21px; height: 21px;">
                                <div class="checkmark"></div>
                            </label>
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center align-middle">Description</td>
                        <td class="border border-gray-300 px-4 py-2 text-center align-middle">Description</td>
                        <td class="border border-gray-300 px-4 py-2 text-center align-middle">Item of Expenditures</td>
                        <td class="border border-gray-300 px-4 py-2 text-start align-middle" colspan="2">
                            <div class="flex items-center">
                                <div class="text-center flex-grow">
                                    Description
                                </div>
                                <!-- Dropdown -->
                                <div>
                                    <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots1" class="inline-flex items-center text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-200 dark:focus:ring-gray-200" type="button">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="black" viewBox="0 0 4 15">
                                            <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
                                        </svg>
                                    </button>
                                    <!-- Menu -->
                                    <div id="dropdownDots1" class="absolute right-0 mt-2 bg-white divide-y divide-gray-800 rounded-lg shadow w-32 dark:bg-gray-700 dark:divide-gray-600 hidden items-center">
                                        <ul class="py-2 text-sm text-gray-900 dark:text-gray-200 z-auto" aria-labelledby="dropdownMenuIconButton">
                                            <li class="hover:bg-gray-200 dark:hover:bg-gray-200 dark:hover:text-black">
                                                <div class="w-24 px-1.5 py-1 rounded justify-start items-center gap-1.5 inline-flex">
                                                    <div class="w-3.5 h-3.5 relative">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14" fill="none">
                                                            <g clip-path="url(#clip0_4744_10818)">
                                                                <path d="M10.1823 1.78801C10.3262 1.64407 10.4971 1.52988 10.6852 1.45198C10.8733 1.37408 11.0748 1.33398 11.2784 1.33398C11.482 1.33398 11.6835 1.37408 11.8716 1.45198C12.0597 1.52988 12.2306 1.64407 12.3745 1.78801C12.5185 1.93195 12.6326 2.10284 12.7105 2.29091C12.7884 2.47898 12.8285 2.68056 12.8285 2.88412C12.8285 3.08769 12.7884 3.28927 12.7105 3.47734C12.6326 3.66541 12.5185 3.8363 12.3745 3.98024L4.97574 11.379L1.96143 12.2011L2.78351 9.18678L10.1823 1.78801Z" stroke="#71717A" stroke-width="0.822086" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_4744_10818">
                                                                    <rect width="13.1534" height="13.1534" fill="white" transform="translate(0.865234 0.144531)"/>
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                    </div>
                                                    <div class="grow shrink basis-0 h-4 justify-start items-center gap-1.5 flex">
                                                        <a href="#" class="block px-4 py-2">Edit</a>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="hover:bg-gray-200 dark:hover:bg-gray-200 dark:hover:text-black">
                                                <div class="w-24 px-1.5 py-1 rounded justify-start items-center gap-1.5 inline-flex">
                                                    <div class="w-3.5 h-3.5 relative">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                            <path d="M2.50928 4.27426H12.3743M11.2782 4.27426V11.9471C11.2782 12.4951 10.7301 13.0432 10.1821 13.0432H4.70151C4.15345 13.0432 3.60539 12.4951 3.60539 11.9471V4.27426M5.24956 4.27426V3.17815C5.24956 2.63009 5.79762 2.08203 6.34568 2.08203H8.53791C9.08597 2.08203 9.63402 2.63009 9.63402 3.17815V4.27426" stroke="#71717A" stroke-width="0.822086" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                    </div>
                                                    <div class="grow shrink basis-0 h-4 justify-start items-center gap-1.5 flex">
                                                        <a href="#" class="block px-4 py-2">Delete</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>

                    <tr>
                        <td class="w-[5px] border border-gray-300 px-4 py-2 text-center align-middle">
                            <label>
                                <input type="checkbox" class="visually-hidden" style="width: 21px; height: 21px;">
                                <div class="checkmark"></div>
                            </label>
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center align-middle">Description</td>
                        <td class="border border-gray-300 px-4 py-2 text-center align-middle">Description</td>
                        <td class="border border-gray-300 px-4 py-2 text-center align-middle">Item of Expenditures</td>
                        <td class="border border-gray-300 px-4 py-2 text-start align-middle" colspan="2">
                            <div class="flex items-center">
                                <div class="text-center flex-grow">
                                    Description
                                </div>
                                <!-- Dropdown -->
                                <div>
                                    <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots2" class="inline-flex items-center text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-200 dark:focus:ring-gray-200" type="button">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="black" viewBox="0 0 4 15">
                                            <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
                                        </svg>
                                    </button>
                                    <!-- Menu -->
                                    <div id="dropdownDots2" class="absolute right-0 mt-2 bg-white divide-y divide-gray-800 rounded-lg shadow w-32 dark:bg-gray-700 dark:divide-gray-600 hidden items-center">
                                        <ul class="py-2 text-sm text-gray-900 dark:text-gray-200 z-auto" aria-labelledby="dropdownMenuIconButton">
                                            <li class="hover:bg-gray-200 dark:hover:bg-gray-200 dark:hover:text-black">
                                                <div class="w-24 px-1.5 py-1 rounded justify-start items-center gap-1.5 inline-flex">
                                                    <div class="w-3.5 h-3.5 relative">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14" fill="none">
                                                            <g clip-path="url(#clip0_4744_10818)">
                                                                <path d="M10.1823 1.78801C10.3262 1.64407 10.4971 1.52988 10.6852 1.45198C10.8733 1.37408 11.0748 1.33398 11.2784 1.33398C11.482 1.33398 11.6835 1.37408 11.8716 1.45198C12.0597 1.52988 12.2306 1.64407 12.3745 1.78801C12.5185 1.93195 12.6326 2.10284 12.7105 2.29091C12.7884 2.47898 12.8285 2.68056 12.8285 2.88412C12.8285 3.08769 12.7884 3.28927 12.7105 3.47734C12.6326 3.66541 12.5185 3.8363 12.3745 3.98024L4.97574 11.379L1.96143 12.2011L2.78351 9.18678L10.1823 1.78801Z" stroke="#71717A" stroke-width="0.822086" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_4744_10818">
                                                                    <rect width="13.1534" height="13.1534" fill="white" transform="translate(0.865234 0.144531)"/>
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                    </div>
                                                    <div class="grow shrink basis-0 h-4 justify-start items-center gap-1.5 flex">
                                                        <a href="#" class="block px-4 py-2">Edit</a>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="hover:bg-gray-200 dark:hover:bg-gray-200 dark:hover:text-black">
                                                <div class="w-24 px-1.5 py-1 rounded justify-start items-center gap-1.5 inline-flex">
                                                    <div class="w-3.5 h-3.5 relative">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                            <path d="M2.50928 4.27426H12.3743M11.2782 4.27426V11.9471C11.2782 12.4951 10.7301 13.0432 10.1821 13.0432H4.70151C4.15345 13.0432 3.60539 12.4951 3.60539 11.9471V4.27426M5.24956 4.27426V3.17815C5.24956 2.63009 5.79762 2.08203 6.34568 2.08203H8.53791C9.08597 2.08203 9.63402 2.63009 9.63402 3.17815V4.27426" stroke="#71717A" stroke-width="0.822086" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                    </div>
                                                    <div class="grow shrink basis-0 h-4 justify-start items-center gap-1.5 flex">
                                                        <a href="#" class="block px-4 py-2">Delete</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>

                    <tr>
                        <td class="w-[5px] border border-gray-300 px-4 py-2 text-center align-middle">
                            <label>
                                <input type="checkbox" class="visually-hidden" style="width: 21px; height: 21px;">
                                <div class="checkmark"></div>
                            </label>
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center align-middle">Description</td>
                        <td class="border border-gray-300 px-4 py-2 text-center align-middle">Description</td>
                        <td class="border border-gray-300 px-4 py-2 text-center align-middle">Item of Expenditures</td>
                        <td class="border border-gray-300 px-4 py-2 text-start align-middle" colspan="2">
                            <div class="flex items-center">
                                <div class="text-center flex-grow">
                                    Description
                                </div>
                                <!-- Dropdown -->
                                <div>
                                    <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots3" class="inline-flex items-center text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-200 dark:focus:ring-gray-200" type="button">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="black" viewBox="0 0 4 15">
                                            <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
                                        </svg>
                                    </button>
                                    <!-- Menu -->
                                    <div id="dropdownDots3" class="absolute right-0 mt-2 bg-white divide-y divide-gray-800 rounded-lg shadow w-32 dark:bg-gray-700 dark:divide-gray-600 hidden items-center">
                                        <ul class="py-2 text-sm text-gray-900 dark:text-gray-200 z-auto" aria-labelledby="dropdownMenuIconButton">
                                            <li class="hover:bg-gray-200 dark:hover:bg-gray-200 dark:hover:text-black">
                                                <div class="w-24 px-1.5 py-1 rounded justify-start items-center gap-1.5 inline-flex">
                                                    <div class="w-3.5 h-3.5 relative">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14" fill="none">
                                                            <g clip-path="url(#clip0_4744_10818)">
                                                                <path d="M10.1823 1.78801C10.3262 1.64407 10.4971 1.52988 10.6852 1.45198C10.8733 1.37408 11.0748 1.33398 11.2784 1.33398C11.482 1.33398 11.6835 1.37408 11.8716 1.45198C12.0597 1.52988 12.2306 1.64407 12.3745 1.78801C12.5185 1.93195 12.6326 2.10284 12.7105 2.29091C12.7884 2.47898 12.8285 2.68056 12.8285 2.88412C12.8285 3.08769 12.7884 3.28927 12.7105 3.47734C12.6326 3.66541 12.5185 3.8363 12.3745 3.98024L4.97574 11.379L1.96143 12.2011L2.78351 9.18678L10.1823 1.78801Z" stroke="#71717A" stroke-width="0.822086" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_4744_10818">
                                                                    <rect width="13.1534" height="13.1534" fill="white" transform="translate(0.865234 0.144531)"/>
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                    </div>
                                                    <div class="grow shrink basis-0 h-4 justify-start items-center gap-1.5 flex">
                                                        <a href="#" class="block px-4 py-2">Edit</a>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="hover:bg-gray-200 dark:hover:bg-gray-200 dark:hover:text-black">
                                                <div class="w-24 px-1.5 py-1 rounded justify-start items-center gap-1.5 inline-flex">
                                                    <div class="w-3.5 h-3.5 relative">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                            <path d="M2.50928 4.27426H12.3743M11.2782 4.27426V11.9471C11.2782 12.4951 10.7301 13.0432 10.1821 13.0432H4.70151C4.15345 13.0432 3.60539 12.4951 3.60539 11.9471V4.27426M5.24956 4.27426V3.17815C5.24956 2.63009 5.79762 2.08203 6.34568 2.08203H8.53791C9.08597 2.08203 9.63402 2.63009 9.63402 3.17815V4.27426" stroke="#71717A" stroke-width="0.822086" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                    </div>
                                                    <div class="grow shrink basis-0 h-4 justify-start items-center gap-1.5 flex">
                                                        <a href="#" class="block px-4 py-2">Delete</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>

                    <!-- Second Header -->
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center align-middle"></td>
                        <td class="border border-gray-300 px-4 py-2 text-center align-middle" colspan="2"><strong style="font-weight: 900;">Cost per Student</strong></td>
                        <td class="border border-gray-300 px-4 py-2 text-center align-middle"><strong style="font-weight: 900;">Amount</strong></td>
                        <td class="border border-gray-300 px-4 py-2 text-center align-middle"><strong style="font-weight: 900;">Items of Expenditure</strong></td>
                        <td class="border border-gray-300 px-4 py-2 text-center align-middle"><strong style="font-weight: 900;">Proposed Budget 2024</strong></td>
                    </tr>

                     <!-- Second Content -->
                     <tr>
                        <td class="w-[5px] border border-gray-300 px-4 py-2 text-center align-middle">
                            <label>
                                <input type="checkbox" class="visually-hidden" style="width: 21px; height: 21px;">
                                <div class="checkmark"></div>
                            </label>
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center align-middle" colspan="2">Estimated Number of Students</td>
                        <td class="border border-gray-300 px-4 py-2 text-center align-middle">100</td>
                        <td class="border border-gray-300 px-4 py-2 text-center align-middle">Personal Services</td>
                        <td class="border border-gray-300 px-4 py-2 text-start align-middle">
                            <div class="flex items-center">
                                <div class="text-center flex-grow">
                                    1,000,000
                                </div>
                                <!-- Dropdown -->
                                <div>
                                    <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots4" class="inline-flex items-center text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-200 dark:focus:ring-gray-200" type="button">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="black" viewBox="0 0 4 15">
                                            <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
                                        </svg>
                                    </button>
                                    <!-- Menu -->
                                    <div id="dropdownDots4" class="absolute right-0 mt-2 bg-white divide-y divide-gray-800 rounded-lg shadow w-32 dark:bg-gray-700 dark:divide-gray-600 hidden items-center">
                                        <ul class="py-2 text-sm text-gray-900 dark:text-gray-200 z-auto" aria-labelledby="dropdownMenuIconButton">
                                            <li class="hover:bg-gray-200 dark:hover:bg-gray-200 dark:hover:text-black">
                                                <div class="w-24 px-1.5 py-1 rounded justify-start items-center gap-1.5 inline-flex">
                                                    <div class="w-3.5 h-3.5 relative">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14" fill="none">
                                                            <g clip-path="url(#clip0_4744_10818)">
                                                                <path d="M10.1823 1.78801C10.3262 1.64407 10.4971 1.52988 10.6852 1.45198C10.8733 1.37408 11.0748 1.33398 11.2784 1.33398C11.482 1.33398 11.6835 1.37408 11.8716 1.45198C12.0597 1.52988 12.2306 1.64407 12.3745 1.78801C12.5185 1.93195 12.6326 2.10284 12.7105 2.29091C12.7884 2.47898 12.8285 2.68056 12.8285 2.88412C12.8285 3.08769 12.7884 3.28927 12.7105 3.47734C12.6326 3.66541 12.5185 3.8363 12.3745 3.98024L4.97574 11.379L1.96143 12.2011L2.78351 9.18678L10.1823 1.78801Z" stroke="#71717A" stroke-width="0.822086" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_4744_10818">
                                                                    <rect width="13.1534" height="13.1534" fill="white" transform="translate(0.865234 0.144531)"/>
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                    </div>
                                                    <div class="grow shrink basis-0 h-4 justify-start items-center gap-1.5 flex">
                                                        <a href="#" class="block px-4 py-2">Edit</a>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="hover:bg-gray-200 dark:hover:bg-gray-200 dark:hover:text-black">
                                                <div class="w-24 px-1.5 py-1 rounded justify-start items-center gap-1.5 inline-flex">
                                                    <div class="w-3.5 h-3.5 relative">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                            <path d="M2.50928 4.27426H12.3743M11.2782 4.27426V11.9471C11.2782 12.4951 10.7301 13.0432 10.1821 13.0432H4.70151C4.15345 13.0432 3.60539 12.4951 3.60539 11.9471V4.27426M5.24956 4.27426V3.17815C5.24956 2.63009 5.79762 2.08203 6.34568 2.08203H8.53791C9.08597 2.08203 9.63402 2.63009 9.63402 3.17815V4.27426" stroke="#71717A" stroke-width="0.822086" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                    </div>
                                                    <div class="grow shrink basis-0 h-4 justify-start items-center gap-1.5 flex">
                                                        <a href="#" class="block px-4 py-2">Delete</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="w-[5px] border border-gray-300 px-4 py-2 text-center align-middle">
                            <label>
                                <input type="checkbox" class="visually-hidden" style="width: 21px; height: 21px;">
                                <div class="checkmark"></div>
                            </label>
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center align-middle" colspan="2">Total Cost</td>
                        <td class="border border-gray-300 px-4 py-2 text-center align-middle">1,000,000.00</td>
                        <td class="border border-gray-300 px-4 py-2 text-center align-middle">Maintenance and other Operating Expenses</td>
                        <td class="border border-gray-300 px-4 py-2 text-start align-middle">
                            <div class="flex items-center">
                                <div class="text-center flex-grow">
                                    1,000,000
                                </div>
                                <!-- Dropdown -->
                                <div>
                                    <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots5" class="inline-flex items-center text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-200 dark:focus:ring-gray-200" type="button">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="black" viewBox="0 0 4 15">
                                            <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
                                        </svg>
                                    </button>
                                    <!-- Menu -->
                                    <div id="dropdownDots5" class="absolute right-0 mt-2 bg-white divide-y divide-gray-800 rounded-lg shadow w-32 dark:bg-gray-700 dark:divide-gray-600 hidden items-center">
                                        <ul class="py-2 text-sm text-gray-900 dark:text-gray-200 z-auto" aria-labelledby="dropdownMenuIconButton">
                                            <li class="hover:bg-gray-200 dark:hover:bg-gray-200 dark:hover:text-black">
                                                <div class="w-24 px-1.5 py-1 rounded justify-start items-center gap-1.5 inline-flex">
                                                    <div class="w-3.5 h-3.5 relative">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14" fill="none">
                                                            <g clip-path="url(#clip0_4744_10818)">
                                                                <path d="M10.1823 1.78801C10.3262 1.64407 10.4971 1.52988 10.6852 1.45198C10.8733 1.37408 11.0748 1.33398 11.2784 1.33398C11.482 1.33398 11.6835 1.37408 11.8716 1.45198C12.0597 1.52988 12.2306 1.64407 12.3745 1.78801C12.5185 1.93195 12.6326 2.10284 12.7105 2.29091C12.7884 2.47898 12.8285 2.68056 12.8285 2.88412C12.8285 3.08769 12.7884 3.28927 12.7105 3.47734C12.6326 3.66541 12.5185 3.8363 12.3745 3.98024L4.97574 11.379L1.96143 12.2011L2.78351 9.18678L10.1823 1.78801Z" stroke="#71717A" stroke-width="0.822086" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_4744_10818">
                                                                    <rect width="13.1534" height="13.1534" fill="white" transform="translate(0.865234 0.144531)"/>
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                    </div>
                                                    <div class="grow shrink basis-0 h-4 justify-start items-center gap-1.5 flex">
                                                        <a href="#" class="block px-4 py-2">Edit</a>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="hover:bg-gray-200 dark:hover:bg-gray-200 dark:hover:text-black">
                                                <div class="w-24 px-1.5 py-1 rounded justify-start items-center gap-1.5 inline-flex">
                                                    <div class="w-3.5 h-3.5 relative">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                            <path d="M2.50928 4.27426H12.3743M11.2782 4.27426V11.9471C11.2782 12.4951 10.7301 13.0432 10.1821 13.0432H4.70151C4.15345 13.0432 3.60539 12.4951 3.60539 11.9471V4.27426M5.24956 4.27426V3.17815C5.24956 2.63009 5.79762 2.08203 6.34568 2.08203H8.53791C9.08597 2.08203 9.63402 2.63009 9.63402 3.17815V4.27426" stroke="#71717A" stroke-width="0.822086" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                    </div>
                                                    <div class="grow shrink basis-0 h-4 justify-start items-center gap-1.5 flex">
                                                        <a href="#" class="block px-4 py-2">Delete</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="w-[5px] border border-gray-300 px-4 py-2 text-center align-middle">
                            <label>
                                <input type="checkbox" class="visually-hidden" style="width: 21px; height: 21px;">
                                <div class="checkmark"></div>
                            </label>
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center align-middle" colspan="2">Cost per Student</td>
                        <td class="border border-gray-300 px-4 py-2 text-center align-middle">1,000</td>
                        <td class="border border-gray-300 px-4 py-2 text-center align-middle">Capital/Equipment Outlay</td>
                        <td class="border border-gray-300 px-4 py-2 text-start align-middle" >
                            <div class="flex items-center">
                                <div class="text-center flex-grow">
                                    1,000,000
                                </div>
                                <!-- Dropdown -->
                                <div>
                                    <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots6" class="inline-flex items-center text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-200 dark:focus:ring-gray-200" type="button">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="black" viewBox="0 0 4 15">
                                            <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
                                        </svg>
                                    </button>
                                    <!-- Menu -->
                                    <div id="dropdownDots6" class="absolute right-0 mt-2 bg-white divide-y divide-gray-800 rounded-lg shadow w-32 dark:bg-gray-700 dark:divide-gray-600 hidden items-center">
                                        <ul class="py-2 text-sm text-gray-900 dark:text-gray-200 z-auto" aria-labelledby="dropdownMenuIconButton">
                                            <li class="hover:bg-gray-200 dark:hover:bg-gray-200 dark:hover:text-black">
                                                <div class="w-24 px-1.5 py-1 rounded justify-start items-center gap-1.5 inline-flex">
                                                    <div class="w-3.5 h-3.5 relative">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14" fill="none">
                                                            <g clip-path="url(#clip0_4744_10818)">
                                                                <path d="M10.1823 1.78801C10.3262 1.64407 10.4971 1.52988 10.6852 1.45198C10.8733 1.37408 11.0748 1.33398 11.2784 1.33398C11.482 1.33398 11.6835 1.37408 11.8716 1.45198C12.0597 1.52988 12.2306 1.64407 12.3745 1.78801C12.5185 1.93195 12.6326 2.10284 12.7105 2.29091C12.7884 2.47898 12.8285 2.68056 12.8285 2.88412C12.8285 3.08769 12.7884 3.28927 12.7105 3.47734C12.6326 3.66541 12.5185 3.8363 12.3745 3.98024L4.97574 11.379L1.96143 12.2011L2.78351 9.18678L10.1823 1.78801Z" stroke="#71717A" stroke-width="0.822086" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_4744_10818">
                                                                    <rect width="13.1534" height="13.1534" fill="white" transform="translate(0.865234 0.144531)"/>
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                    </div>
                                                    <div class="grow shrink basis-0 h-4 justify-start items-center gap-1.5 flex">
                                                        <a href="#" class="block px-4 py-2">Edit</a>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="hover:bg-gray-200 dark:hover:bg-gray-200 dark:hover:text-black">
                                                <div class="w-24 px-1.5 py-1 rounded justify-start items-center gap-1.5 inline-flex">
                                                    <div class="w-3.5 h-3.5 relative">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                            <path d="M2.50928 4.27426H12.3743M11.2782 4.27426V11.9471C11.2782 12.4951 10.7301 13.0432 10.1821 13.0432H4.70151C4.15345 13.0432 3.60539 12.4951 3.60539 11.9471V4.27426M5.24956 4.27426V3.17815C5.24956 2.63009 5.79762 2.08203 6.34568 2.08203H8.53791C9.08597 2.08203 9.63402 2.63009 9.63402 3.17815V4.27426" stroke="#71717A" stroke-width="0.822086" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                    </div>
                                                    <div class="grow shrink basis-0 h-4 justify-start items-center gap-1.5 flex">
                                                        <a href="#" class="block px-4 py-2">Delete</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <!-- Total -->
                    <tr>
                        <td class="w-[5px] border border-gray-300 px-4 py-2 text-center align-middle"></td>
                        <td class="border border-gray-300 px-4 py-2 text-center align-middle" colspan="2"></td>
                        <td class="border border-gray-300 px-4 py-2 text-center align-middle"></td>
                        <td class="border border-gray-300 px-4 py-2 text-center align-middle"><strong style="font-weight: 900;">Total</strong></td>
                        <td class="border border-gray-300 px-4 py-2 text-center align-middle item">1,000,000</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>



</div>
