<div class="flex-col grid grid-cols-1 md:grid-cols-1 sm:grid-cols-1 px-7 py-32">

    <!-- Top Bar -->
    <div class="flex w-[1420px]">
        <div class="w-[1420px] rounded-lg p-4 relative">
            <div class="absolute shadow inset-x-0 bottom-0 h-[1px] bg-gray-200"></div>
            <div class="flex flex-col gap-y-1.5 text-indigo-800 text-[25px] font-extrabold font-['Inter'] leading-5">Personal Services
                <div class="flex flex-row items-center">
                    <label class="text-yellow-700 text-sm font-normal font-['Inter'] leading-loose mr-1">Budget Call Forms ></label>
                    <label class="text-black text-sm font-normal font-['Inter'] leading-loose">Personal Services Form No.</label>
                </div>
                <div class="flex ml-[835px] mt-[-50px] items-start">
                    @include('components\layouts.services-buttons')
                </div>
            </div>
        </div>
    </div>

    <!-- Body -->
    <div class="w-[1420px] h-[620px] font-['Inter'] rounded-lg border border-gray-300 flex flex-col justify-center overflow-auto">

        <!-- SY & College -->
        <div class="py-4 px-3 rounded-lg space-y-2 justify-items-start">
            <div class="justify-start items-center gap-0.5 flex">
                <div class="text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">School Year 2023</div>
            </div>

            <select id="college_office" name="college_office" class="block w-56 h-10 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" style="text-indent: 10px;">
                <option disabled selected>Select College/Office</option>
                <option value="College 1">College 1</option>
                <option value="College 2">College 2</option>
                <option value="">...</option>
            </select>
        </div>


        <!-- Table -->
        <div class="overflow-x-auto max-h-xl place-self-center items-center" >
            <table id="myTable" class="w-[1360px] z-50">
                <!-- Header -->
                <thead>
                    <tr>
                        <td class="w-[5px] border border-gray-300 px-4 py-2 text-center align-middle">
                            <label>
                                <input type="checkbox" class="visually-hidden" style="width: 21px; height: 21px;">
                                <div class="checkmark"></div>
                            </label>
                        </td>
                        <td class="w-[195px] text-black text-center text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Account Code</strong></td>
                        <td class="w-[400px] text-black text-center text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Item of Expenditures</strong></td>
                        <td class="w-[250px] text-black text-center text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Proposed Budget "Year"</strong></td>
                        <td class="w-[620px] text-black text-center text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Justification</strong></td>
                    </tr>
                </thead>

                <!-- Body -->
                <tbody x-data="{ masterChecked: false }">

                    <!-- 1st Row -->
                    <tr>
                        <td class="w-[5px] border border-gray-300 px-4 py-2 text-center align-middle">
                            <label>
                                <input type="checkbox" class="visually-hidden" style="width: 21px; height: 21px;">
                                <div class="checkmark"></div>
                            </label>
                        </td>
                        <td class="w-[195px] border border-gray-300 px-4 py-2 text-center align-middle">5-01-01-010</td>
                        <td class="w-[400px] border border-gray-300 px-4 py-2 text-center align-middle">Salaries & Wages - Regular</td>
                        <td class="w-[250px] border border-gray-300 px-4 py-2 text-center align-middle">1,000,000.00</td>
                        <td class="w-[620px] border border-gray-300 px-4 py-2 text-center align-middle">
                            <div class="flex items-center">
                                <div class="flex-grow">
                                    Item of Expenditures
                                </div>
                                <!-- Dropdown -->
                                <div class="relative z-50" x-data="{ open: false }">
                                    <button @click="open = true" id="dropdownMenuIconButton" class="inline-flex items-center text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-200 dark:focus:ring-gray-200" type="button">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="black" viewBox="0 0 4 15">
                                            <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
                                        </svg>
                                    </button>
                                    <!-- Menu -->
                                    <div class="absolute right-0 mt-2 bg-white divide-y divide-gray-800 rounded-lg shadow w-32 dark:bg-gray-700 dark:divide-gray-600 z-10" x-show="open" @click.away="open = false">
                                        <ul class="py-2 text-sm text-gray-900 dark:text-gray-200" aria-labelledby="dropdownMenuIconButton">
                                            <li class="hover:bg-gray-200 dark:hover:bg-gray-200 dark:hover:text-black">
                                                <div class="w-24 px-1.5 py-1 rounded justify-start items-center gap-1.5 inline-flex z-50">
                                                    @include('components\layouts.edit-modal')
                                                </div>
                                            </li>
                                            <li class="hover:bg-gray-200 dark:hover:bg-gray-200 dark:hover:text-black">
                                                <div class="w-24 px-1.5 py-1 rounded justify-start items-center gap-1.5 inline-flex">
                                                    <div class="grow shrink basis-0 h-4 justify-start items-center gap-1.5 flex">
                                                        @include('components\layouts.delete-modal')
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <!-- 2nd Row -->
                    <tr>
                        <td class="w-[5px] border border-gray-300 px-4 py-2 text-center align-middle">
                            <label>
                                <input type="checkbox" class="visually-hidden" style="width: 21px; height: 21px;">
                                <div class="checkmark"></div>
                            </label>
                        </td>
                        <td class="w-[195px] border border-gray-300 px-4 py-2 text-center align-middle">5-01-01-020</td>
                        <td class="w-[400px] border border-gray-300 px-4 py-2 text-center align-middle">Salaries & Wages - Casual</td>
                        <td class="w-[250px] border border-gray-300 px-4 py-2 text-center align-middle">1,000,000.00</td>
                        <td class="w-[620px] border border-gray-300 px-4 py-2 text-center align-middle">
                            <div class="flex items-center">
                                <div class="flex-grow">
                                    Item of Expenditures
                                </div>
                                <!-- Dropdown -->
                                <div class="relative z-50" x-data="{ open: false }">
                                    <button @click="open = true" id="dropdownMenuIconButton2" class="inline-flex items-center text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-200 dark:focus:ring-gray-200" type="button">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="black" viewBox="0 0 4 15">
                                            <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
                                        </svg>
                                    </button>
                                    <!-- Menu -->
                                    <div class="absolute right-0 mt-2 bg-white divide-y divide-gray-800 rounded-lg shadow w-32 dark:bg-gray-700 dark:divide-gray-600 z-10" x-show="open" @click.away="open = false">
                                        <ul class="py-2 text-sm text-gray-900 dark:text-gray-200" aria-labelledby="dropdownMenuIconButton2">
                                            <li class="hover:bg-gray-200 dark:hover:bg-gray-200 dark:hover:text-black">
                                                <div class="w-24 px-1.5 py-1 rounded justify-start items-center gap-1.5 inline-flex z-50">
                                                    @include('components\layouts.edit-modal')
                                                </div>
                                            </li>
                                            <li class="hover:bg-gray-200 dark:hover:bg-gray-200 dark:hover:text-black">
                                                <div class="w-24 px-1.5 py-1 rounded justify-start items-center gap-1.5 inline-flex">
                                                    <div class="grow shrink basis-0 h-4 justify-start items-center gap-1.5 flex">
                                                        @include('components\layouts.delete-modal')
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <!-- 3rd Row -->
                    <tr>
                        <td class="w-[5px] border border-gray-300 px-4 py-2 text-center align-middle">
                            <label>
                                <input type="checkbox" class="visually-hidden" style="width: 21px; height: 21px;">
                                <div class="checkmark"></div>
                            </label>
                        </td>
                        <td class="w-[195px] border border-gray-300 px-4 py-2 text-center align-middle">5-01-02-010</td>
                        <td class="w-[400px] border border-gray-300 px-4 py-2 text-center align-middle">Personnel Economic Relief Allow (PERA - ₱2,000.00/mo/pos)</td>
                        <td class="w-[250px] border border-gray-300 px-4 py-2 text-center align-middle">1,000,000.00</td>
                        <td class="w-[620px] border border-gray-300 px-4 py-2 text-center align-middle">
                            <div class="flex items-center">
                                <div class="flex-grow">
                                    Item of Expenditures
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

                    <!-- 4th Row -->
                    <tr>
                        <td class="w-[5px] border border-gray-300 px-4 py-2 text-center align-middle">
                            <label>
                                <input type="checkbox" class="visually-hidden" style="width: 21px; height: 21px;">
                                <div class="checkmark"></div>
                            </label>
                        </td>
                        <td class="w-[195px] border border-gray-300 px-4 py-2 text-center align-middle">5-01-02-020</td>
                        <td class="w-[400px] border border-gray-300 px-4 py-2 text-center align-middle">Representation Allowance (RA)</td>
                        <td class="w-[250px] border border-gray-300 px-4 py-2 text-center align-middle">1,000,000.00</td>
                        <td class="w-[620px] border border-gray-300 px-4 py-2 text-center align-middle">
                            <div class="flex items-center">
                                <div class="flex-grow">
                                    Item of Expenditures
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

                    <!-- 5th Row -->
                    <tr>
                        <td class="w-[5px] border border-gray-300 px-4 py-2 text-center align-middle">
                            <label>
                                <input type="checkbox" class="visually-hidden" style="width: 21px; height: 21px;">
                                <div class="checkmark"></div>
                            </label>
                        </td>
                        <td class="w-[195px] border border-gray-300 px-4 py-2 text-center align-middle">5-01-02-030</td>
                        <td class="w-[400px] border border-gray-300 px-4 py-2 text-center align-middle">Transportation Allowance (TA)</td>
                        <td class="w-[250px] border border-gray-300 px-4 py-2 text-center align-middle">1,000,000.00</td>
                        <td class="w-[620px] border border-gray-300 px-4 py-2 text-center align-middle">
                            <div class="flex items-center">
                                <div class="flex-grow">
                                    Item of Expenditures
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

                    <!-- 6th Row -->
                    <tr>
                        <td class="w-[5px] border border-gray-300 px-4 py-2 text-center align-middle">
                            <label>
                                <input type="checkbox" class="visually-hidden" style="width: 21px; height: 21px;">
                                <div class="checkmark"></div>
                            </label>
                        </td>
                        <td class="w-[195px] border border-gray-300 px-4 py-2 text-center align-middle">5-01-02-040</td>
                        <td class="w-[400px] border border-gray-300 px-4 py-2 text-center align-middle">Clothing/Uniform Allowance (₱6,000.00/position/annum)</td>
                        <td class="w-[250px] border border-gray-300 px-4 py-2 text-center align-middle">1,000,000.00</td>
                        <td class="w-[620px] border border-gray-300 px-4 py-2 text-center align-middle">
                            <div class="flex items-center">
                                <div class="flex-grow">
                                    Item of Expenditures
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

                    <!-- 7th Row -->
                    <tr>
                        <td class="w-[5px] border border-gray-300 px-4 py-2 text-center align-middle">
                            <label>
                                <input type="checkbox" class="visually-hidden" style="width: 21px; height: 21px;">
                                <div class="checkmark"></div>
                            </label>
                        </td>
                        <td class="w-[195px] border border-gray-300 px-4 py-2 text-center align-middle">5-01-02-050</td>
                        <td class="w-[400px] border border-gray-300 px-4 py-2 text-center align-middle">Subsistence Allowance</td>
                        <td class="w-[250px] border border-gray-300 px-4 py-2 text-center align-middle">1,000,000.00</td>
                        <td class="w-[620px] border border-gray-300 px-4 py-2 text-center align-middle">
                            <div class="flex items-center">
                                <div class="flex-grow">
                                    Item of Expenditures
                                </div>
                                <!-- Dropdown -->
                                <div>
                                    <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots7" class="inline-flex items-center text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-200 dark:focus:ring-gray-200" type="button">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="black" viewBox="0 0 4 15">
                                            <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
                                        </svg>
                                    </button>
                                    <!-- Menu -->
                                    <div id="dropdownDots7" class="absolute right-0 mt-2 bg-white divide-y divide-gray-800 rounded-lg shadow w-32 dark:bg-gray-700 dark:divide-gray-600 hidden items-center">
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

                    <!-- 8th Row -->
                    <tr>
                        <td class="w-[5px] border border-gray-300 px-4 py-2 text-center align-middle">
                            <label>
                                <input type="checkbox" class="visually-hidden" style="width: 21px; height: 21px;">
                                <div class="checkmark"></div>
                            </label>
                        </td>
                        <td class="w-[195px] border border-gray-300 px-4 py-2 text-center align-middle">5-01-02-060</td>
                        <td class="w-[400px] border border-gray-300 px-4 py-2 text-center align-middle">Laundry Allowance</td>
                        <td class="w-[250px] border border-gray-300 px-4 py-2 text-center align-middle">1,000,000.00</td>
                        <td class="w-[620px] border border-gray-300 px-4 py-2 text-center align-middle">
                            <div class="flex items-center">
                                <div class="flex-grow">
                                    Item of Expenditures
                                </div>
                                <!-- Dropdown -->
                                <div>
                                    <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots8" class="inline-flex items-center text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-200 dark:focus:ring-gray-200" type="button">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="black" viewBox="0 0 4 15">
                                            <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
                                        </svg>
                                    </button>
                                    <!-- Menu -->
                                    <div id="dropdownDots8" class="absolute right-0 mt-2 bg-white divide-y divide-gray-800 rounded-lg shadow w-32 dark:bg-gray-700 dark:divide-gray-600 hidden items-center">
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

                    <!-- 9th Row -->
                    <tr>
                        <td class="w-[5px] border border-gray-300 px-4 py-2 text-center align-middle">
                            <label>
                                <input type="checkbox" class="visually-hidden" style="width: 21px; height: 21px;">
                                <div class="checkmark"></div>
                            </label>
                        </td>
                        <td class="w-[195px] border border-gray-300 px-4 py-2 text-center align-middle">5-01-02-100</td>
                        <td class="w-[400px] border border-gray-300 px-4 py-2 text-center align-middle">Honoria (including overload teaching, panel members, etc)</td>
                        <td class="w-[250px] border border-gray-300 px-4 py-2 text-center align-middle">1,000,000.00</td>
                        <td class="w-[620px] border border-gray-300 px-4 py-2 text-center align-middle">
                            <div class="flex items-center">
                                <div class="flex-grow">
                                    Item of Expenditures
                                </div>
                                <!-- Dropdown -->
                                <div>
                                    <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots9" class="inline-flex items-center text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-200 dark:focus:ring-gray-200" type="button">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="black" viewBox="0 0 4 15">
                                            <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
                                        </svg>
                                    </button>
                                    <!-- Menu -->
                                    <div id="dropdownDots9" class="absolute right-0 mt-2 bg-white divide-y divide-gray-800 rounded-lg shadow w-32 dark:bg-gray-700 dark:divide-gray-600 hidden items-center">
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

                    <!-- 10th Row -->
                    <tr>
                        <td class="w-[5px] border border-gray-300 px-4 py-2 text-center align-middle">
                            <label>
                                <input type="checkbox" class="visually-hidden" style="width: 21px; height: 21px;">
                                <div class="checkmark"></div>
                            </label>
                        </td>
                        <td class="w-[195px] border border-gray-300 px-4 py-2 text-center align-middle">5-01-02-110</td>
                        <td class="w-[400px] border border-gray-300 px-4 py-2 text-center align-middle">Hazard Pay</td>
                        <td class="w-[250px] border border-gray-300 px-4 py-2 text-center align-middle">1,000,000.00</td>
                        <td class="w-[620px] border border-gray-300 px-4 py-2 text-center align-middle">
                            <div class="flex items-center">
                                <div class="flex-grow">
                                    Item of Expenditures
                                </div>
                                <!-- Dropdown -->
                                <div>
                                    <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots10" class="inline-flex items-center text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-200 dark:focus:ring-gray-200" type="button">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="black" viewBox="0 0 4 15">
                                            <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
                                        </svg>
                                    </button>
                                    <!-- Menu -->
                                    <div id="dropdownDots10" class="absolute right-0 mt-2 bg-white divide-y divide-gray-800 rounded-lg shadow w-32 dark:bg-gray-700 dark:divide-gray-600 hidden items-center">
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

                    <!-- 11th Row -->
                    <tr>
                        <td class="w-[5px] border border-gray-300 px-4 py-2 text-center align-middle">
                            <label>
                                <input type="checkbox" class="visually-hidden" style="width: 21px; height: 21px;">
                                <div class="checkmark"></div>
                            </label>
                        </td>
                        <td class="w-[195px] border border-gray-300 px-4 py-2 text-center align-middle">5-01-02-120</td>
                        <td class="w-[400px] border border-gray-300 px-4 py-2 text-center align-middle">Longevity Pay</td>
                        <td class="w-[250px] border border-gray-300 px-4 py-2 text-center align-middle">1,000,000.00</td>
                        <td class="w-[620px] border border-gray-300 px-4 py-2 text-center align-middle">
                            <div class="flex items-center">
                                <div class="flex-grow">
                                    Item of Expenditures
                                </div>
                                <!-- Dropdown -->
                                <div>
                                    <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots11" class="inline-flex items-center text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-200 dark:focus:ring-gray-200" type="button">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="black" viewBox="0 0 4 15">
                                            <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
                                        </svg>
                                    </button>
                                    <!-- Menu -->
                                    <div id="dropdownDots11" class="absolute right-0 mt-2 bg-white divide-y divide-gray-800 rounded-lg shadow w-32 dark:bg-gray-700 dark:divide-gray-600 hidden items-center">
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

                    <!-- 12th Row -->
                    <tr>
                        <td class="w-[5px] border border-gray-300 px-4 py-2 text-center align-middle">
                            <label>
                                <input type="checkbox" class="visually-hidden" style="width: 21px; height: 21px;">
                                <div class="checkmark"></div>
                            </label>
                        </td>
                        <td class="w-[195px] border border-gray-300 px-4 py-2 text-center align-middle">5-01-02-130</td>
                        <td class="w-[400px] border border-gray-300 px-4 py-2 text-center align-middle">Overtime & Night Pay</td>
                        <td class="w-[250px] border border-gray-300 px-4 py-2 text-center align-middle">1,000,000.00</td>
                        <td class="w-[620px] border border-gray-300 px-4 py-2 text-center align-middle">
                            <div class="flex items-center">
                                <div class="flex-grow">
                                    Item of Expenditures
                                </div>
                                <!-- Dropdown -->
                                <div>
                                    <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots12" class="inline-flex items-center text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-200 dark:focus:ring-gray-200" type="button">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="black" viewBox="0 0 4 15">
                                            <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
                                        </svg>
                                    </button>
                                    <!-- Menu -->
                                    <div id="dropdownDots12" class="absolute right-0 mt-2 bg-white divide-y divide-gray-800 rounded-lg shadow w-32 dark:bg-gray-700 dark:divide-gray-600 hidden items-center">
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

                    <!-- 13th Row -->
                    <tr>
                        <td class="w-[5px] border border-gray-300 px-4 py-2 text-center align-middle">
                            <label>
                                <input type="checkbox" class="visually-hidden" style="width: 21px; height: 21px;">
                                <div class="checkmark"></div>
                            </label>
                        </td>
                        <td class="w-[195px] border border-gray-300 px-4 py-2 text-center align-middle">5-01-02-140</td>
                        <td class="w-[400px] border border-gray-300 px-4 py-2 text-center align-middle">Year End Bous (total of salaries & wages-regular & casual/12)</td>
                        <td class="w-[250px] border border-gray-300 px-4 py-2 text-center align-middle">1,000,000.00</td>
                        <td class="w-[620px] border border-gray-300 px-4 py-2 text-center align-middle">
                            <div class="flex items-center">
                                <div class="flex-grow">
                                    Item of Expenditures
                                </div>
                                <!-- Dropdown -->
                                <div>
                                    <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots13" class="inline-flex items-center text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-200 dark:focus:ring-gray-200" type="button">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="black" viewBox="0 0 4 15">
                                            <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
                                        </svg>
                                    </button>
                                    <!-- Menu -->
                                    <div id="dropdownDots13" class="absolute right-0 mt-2 bg-white divide-y divide-gray-800 rounded-lg shadow w-32 dark:bg-gray-700 dark:divide-gray-600 hidden items-center">
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

                    <!-- 14th Row -->
                    <tr>
                        <td class="w-[5px] border border-gray-300 px-4 py-2 text-center align-middle">
                            <label>
                                <input type="checkbox" class="visually-hidden" style="width: 21px; height: 21px;">
                                <div class="checkmark"></div>
                            </label>
                        </td>
                        <td class="w-[195px] border border-gray-300 px-4 py-2 text-center align-middle">5-01-02-150</td>
                        <td class="w-[400px] border border-gray-300 px-4 py-2 text-center align-middle">Cash Gift (₱5,000/position)</td>
                        <td class="w-[250px] border border-gray-300 px-4 py-2 text-center align-middle">1,000,000.00</td>
                        <td class="w-[620px] border border-gray-300 px-4 py-2 text-center align-middle">
                            <div class="flex items-center">
                                <div class="flex-grow">
                                    Item of Expenditures
                                </div>
                                <!-- Dropdown -->
                                <div>
                                    <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots14" class="inline-flex items-center text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-200 dark:focus:ring-gray-200" type="button">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="black" viewBox="0 0 4 15">
                                            <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
                                        </svg>
                                    </button>
                                    <!-- Menu -->
                                    <div id="dropdownDots14" class="absolute right-0 mt-2 bg-white divide-y divide-gray-800 rounded-lg shadow w-32 dark:bg-gray-700 dark:divide-gray-600 hidden items-center">
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

                    <!-- 15th Row -->
                    <tr>
                        <td class="w-[5px] border border-gray-300 px-4 py-2 text-center align-middle">
                            <label>
                                <input type="checkbox" class="visually-hidden" style="width: 21px; height: 21px;">
                                <div class="checkmark"></div>
                            </label>
                        </td>
                        <td class="w-[195px] border border-gray-300 px-4 py-2 text-center align-middle">5-01-03-010</td>
                        <td class="w-[400px] border border-gray-300 px-4 py-2 text-center align-middle">Retirement & Life Insurance Contributions (12% of salaries & wages - regular and casual)</td>
                        <td class="w-[250px] border border-gray-300 px-4 py-2 text-center align-middle">1,000,000.00</td>
                        <td class="w-[620px] border border-gray-300 px-4 py-2 text-center align-middle">
                            <div class="flex items-center">
                                <div class="flex-grow">
                                    Item of Expenditures
                                </div>
                                <!-- Dropdown -->
                                <div>
                                    <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots15" class="inline-flex items-center text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-200 dark:focus:ring-gray-200" type="button">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="black" viewBox="0 0 4 15">
                                            <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
                                        </svg>
                                    </button>
                                    <!-- Menu -->
                                    <div id="dropdownDots15" class="absolute right-0 mt-2 bg-white divide-y divide-gray-800 rounded-lg shadow w-32 dark:bg-gray-700 dark:divide-gray-600 hidden items-center">
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

                    <!-- 16th Row -->
                    <tr>
                        <td class="w-[5px] border border-gray-300 px-4 py-2 text-center align-middle">
                            <label>
                                <input type="checkbox" class="visually-hidden" style="width: 21px; height: 21px;">
                                <div class="checkmark"></div>
                            </label>
                        </td>
                        <td class="w-[195px] border border-gray-300 px-4 py-2 text-center align-middle">5-01-03-020</td>
                        <td class="w-[400px] border border-gray-300 px-4 py-2 text-center align-middle">Pag-IBIG Contributions (₱1,200.00/position/annum)</td>
                        <td class="w-[250px] border border-gray-300 px-4 py-2 text-center align-middle">1,000,000.00</td>
                        <td class="w-[620px] border border-gray-300 px-4 py-2 text-center align-middle">
                            <div class="flex items-center">
                                <div class="flex-grow">
                                    Item of Expenditures
                                </div>
                                <!-- Dropdown -->
                                <div>
                                    <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots16" class="inline-flex items-center text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-200 dark:focus:ring-gray-200" type="button">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="black" viewBox="0 0 4 15">
                                            <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
                                        </svg>
                                    </button>
                                    <!-- Menu -->
                                    <div id="dropdownDots16" class="absolute right-0 mt-2 bg-white divide-y divide-gray-800 rounded-lg shadow w-32 dark:bg-gray-700 dark:divide-gray-600 hidden items-center">
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

                    <!-- 17th Row -->
                    <tr>
                        <td class="w-[5px] border border-gray-300 px-4 py-2 text-center align-middle">
                            <label>
                                <input type="checkbox" class="visually-hidden" style="width: 21px; height: 21px;">
                                <div class="checkmark"></div>
                            </label>
                        </td>
                        <td class="w-[195px] border border-gray-300 px-4 py-2 text-center align-middle">5-01-03-030</td>
                        <td class="w-[400px] border border-gray-300 px-4 py-2 text-center align-middle">PHILHEALTH Contributions (2.5% of salaries & wages - regular and casual)</td>
                        <td class="w-[250px] border border-gray-300 px-4 py-2 text-center align-middle">1,000,000.00</td>
                        <td class="w-[620px] border border-gray-300 px-4 py-2 text-center align-middle">
                            <div class="flex items-center">
                                <div class="flex-grow">
                                    Item of Expenditures
                                </div>
                                <!-- Dropdown -->
                                <div>
                                    <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots17" class="inline-flex items-center  text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-200 dark:focus:ring-gray-200" type="button">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="black" viewBox="0 0 4 15">
                                            <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
                                        </svg>
                                    </button>
                                    <!-- Menu -->
                                    <div id="dropdownDots17" class="absolute right-0 mt-2 bg-white divide-y divide-gray-800 rounded-lg shadow w-32 dark:bg-gray-700 dark:divide-gray-600 hidden items-center">
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

                    <!-- 18th Row -->
                    <tr>
                        <td class="w-[5px] border border-gray-300 px-4 py-2 text-center align-middle">
                            <label>
                                <input type="checkbox" class="visually-hidden" style="width: 21px; height: 21px;">
                                <div class="checkmark"></div>
                            </label>
                        </td>
                        <td class="w-[195px] border border-gray-300 px-4 py-2 text-center align-middle">5-01-03-040</td>
                        <td class="w-[400px] border border-gray-300 px-4 py-2 text-center align-middle">ECC Contributions (₱1,200.00/position and annum)</td>
                        <td class="w-[250px] border border-gray-300 px-4 py-2 text-center align-middle">1,000,000.00</td>
                        <td class="w-[620px] border border-gray-300 px-4 py-2 text-center align-middle">
                            <div class="flex items-center">
                                <div class="flex-grow">
                                    Item of Expenditures
                                </div>
                                <!-- Dropdown -->
                                <div>
                                    <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots18" class="inline-flex items-center text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-200 dark:focus:ring-gray-200" type="button">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="black" viewBox="0 0 4 15">
                                            <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
                                        </svg>
                                    </button>
                                    <!-- Menu -->
                                    <div id="dropdownDots18" class="absolute right-0 mt-2 bg-white divide-y divide-gray-800 rounded-lg shadow w-32 dark:bg-gray-700 dark:divide-gray-600 hidden items-center">
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

                    <!-- 19th Row -->
                    <tr>
                        <td class="w-[5px] border border-gray-300 px-4 py-2 text-center align-middle">
                            <label>
                                <input type="checkbox" class="visually-hidden" style="width: 21px; height: 21px;">
                                <div class="checkmark"></div>
                            </label>
                        </td>
                        <td class="w-[195px] border border-gray-300 px-4 py-2 text-center align-middle">5-01-04-030</td>
                        <td class="w-[400px] border border-gray-300 px-4 py-2 text-center align-middle">Terminal Leave Benefits (accum. leave credits of retired emp.)</td>
                        <td class="w-[250px] border border-gray-300 px-4 py-2 text-center align-middle">1,000,000.00</td>
                        <td class="w-[620px] border border-gray-300 px-4 py-2 text-center align-middle">
                            <div class="flex items-center">
                                <div class="flex-grow">
                                    Item of Expenditures
                                </div>
                                <!-- Dropdown -->
                                <div>
                                    <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots19" class="inline-flex items-center text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-200 dark:focus:ring-gray-200" type="button">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="black" viewBox="0 0 4 15">
                                            <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
                                        </svg>
                                    </button>
                                    <!-- Menu -->
                                    <div id="dropdownDots19" class="absolute right-0 mt-2 bg-white divide-y divide-gray-800 rounded-lg shadow w-32 dark:bg-gray-700 dark:divide-gray-600 hidden items-center">
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

                    <!-- 20th Row -->
                    <tr>
                        <td class="w-[5px] border border-gray-300 px-4 py-2 text-center align-middle">
                            <label>
                                <input type="checkbox" class="visually-hidden" style="width: 21px; height: 21px;">
                                <div class="checkmark"></div>
                            </label>
                        </td>
                        <td class="w-[195px] border border-gray-300 px-4 py-2 text-center align-middle">5-01-04-990</td>
                        <td class="w-[400px] border border-gray-300 px-4 py-2 text-center align-middle">Other Personnel Benefits</td>
                        <td class="w-[250px] border border-gray-300 px-4 py-2 text-center align-middle">1,000,000.00</td>
                        <td class="w-[620px] border border-gray-300 px-4 py-2 text-center align-middle">
                            <div class="flex items-center">
                                <div class="flex-grow">
                                    Item of Expenditures
                                </div>
                                <!-- Dropdown -->
                                <div>
                                    <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots20" class="inline-flex items-center text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-200 dark:focus:ring-gray-200" type="button">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="black" viewBox="0 0 4 15">
                                            <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
                                        </svg>
                                    </button>
                                    <!-- Menu -->
                                    <div id="dropdownDots20" class="absolute right-0 mt-2 bg-white divide-y divide-gray-800 rounded-lg shadow w-32 dark:bg-gray-700 dark:divide-gray-600 hidden items-center">
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
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3" class="px-6 py-4 whitespace-nowrap text-right font-semibold text-black items-center">Total Personal Services</td>
                        <td class="px-6 py-4 whitespace-nowrap text-black text-center">Total Value</td>
                        <td></td>
                    </tr>
                </tfoot>
            </table>
        </div>

    
    </div>

    <!-- Scripts -->
    <script>
        document.getElementById('dropdownMenuIconButton').addEventListener('click', function() {
            var dropdownMenu = document.getElementById('dropdownDots');
            dropdownMenu.classList.toggle('hidden');
        });
    </script>
</div>
