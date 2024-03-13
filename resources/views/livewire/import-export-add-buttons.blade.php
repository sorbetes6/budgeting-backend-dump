<div class="flex flex-row justify-end gap-x-3">
    <!-- Year -->
    <button id="YearDropdown" data-dropdown-toggle="yearDropdown" class="w-24 h-11 pl-2 py-1 bg-white rounded-lg border border-zinc-300 justify-start items-center gap-3 inline-flex">
        <div class="w-5 h-6 relative">
            <svg class="w-2.5 h-2.5 m-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
            </svg>
        </div>
        <span class="text-black text-sm font-normal font-inter leading-tight text-center">Year</span>
    </button>


    <!-- Year Dropdown menu -->
    <div id="yearDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="YearDropdown">
        <li>
            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">2023</a>
        </li>
        <li>
            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">2022</a>
        </li>
        <li>
            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">2021</a>
        </li>
        <li>
            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">2020</a>
        </li>
        </ul>
    </div>

    <!--Sort -->
    <button id="SortDropdown" data-dropdown-toggle="sortDropdown" class="w-36 h-11 pl-2 py-1 bg-white rounded-lg border border-zinc-300 justify-start items-center gap-2 inline-flex">
        <div class="w-5 h-6 relative">
            <svg class="w-2.5 h-2.5 m-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
            </svg>
        </div>
        <span class="text-black text-sm font-normal font-inter leading-tight text-center">Sort records by</span>
    </button>


    <!-- Sort Dropdown menu -->
    <div id="sortDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="SortDropdown">
            <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Newest First</a>
            </li>
            <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Oldest First</a>
            </li>
        </ul>
    </div>


    <button class="w-20 h-11 px-4 bg-indigo-50 rounded-lg shadow border border-indigo-50 justify-center items-center gap-2 inline-flex">
        <span type="button" class="text-indigo-800 text-sm font-semibold font-['Inter'] leading-tight">Import</span>
    </button>

    <button class="w-20 h-11 px-4 bg-indigo-50 rounded-lg shadow border border-indigo-50 justify-center items-center gap-2 inline-flex">
        <span type="button" class="text-indigo-800 text-sm font-semibold font-['Inter'] leading-tight">Export</span>
    </button>

    <div class="justify-start items-start inline-flex">
        <a href="/budgetcall" class="w-28 h-11 px-4 bg-indigo-800 rounded-lg shadow justify-center items-center gap-2 flex">
            <span class="text-white text-base font-extrabold font-['Inter'] leading-tight">Add Form</span>
        </a>
    </div>
</div>
