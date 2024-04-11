<div>
    
    <!-- Top Bar -->
    <div class="flex w-[1420px] mx-[270px] mt-[110px] mb-[10px]">
        <div class="w-[1420px] mx-[0px] rounded-lg p-4 relative">
            <div class="absolute shadow inset-x-0 bottom-0 h-[1px] bg-gray-200"></div>
            <div class="flex flex-col gap-y-[5px] text-indigo-800 text-[25px] font-extrabold font-['Inter'] leading-5">Personal Services
                <div class="flex flex-row items-center">
                    <label class="text-yellow-700 text-sm font-normal font-['Inter'] leading-loose mr-1">Budget Call Forms ></label>
                    <label class="text-black text-sm font-normal font-['Inter'] leading-loose">Personal Services Form No.</label>
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
        <div class="w-[280px] p-4 rounded-lg mt-[-10px] mr-[1130px]">
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
        <div class="overflow-x-auto h-[480px]">
            <table class="w-[1360px]">
                <tbody>
                    <tr>
                        <td class="w-[5px] border border-gray-300 px-4 py-2 text-center align-middle"></td>
                        <td class="w-[195px] border border-gray-300 px-4 py-2 text-center align-middle"><strong style="font-weight: 900;">Account Code</strong></td>
                        <td class="w-[400px] border border-gray-300 px-4 py-2 text-center align-middle"><strong style="font-weight: 900;">Item of Expenditures</strong></td>
                        <td class="w-[250px] border border-gray-300 px-4 py-2 text-center align-middle"><strong style="font-weight: 900;">Proposed Budget "Year"</strong></td>
                        <td class="w-[620px] border border-gray-300 px-4 py-2 text-center align-middle"><strong style="font-weight: 900;">Justification</strong></td>
                    </tr>

                    <tr>
                        <td class="w-[5px] border border-gray-300 px-4 py-2 text-center align-middle"> 
                            <label>
                                <input type="checkbox" class="visually-hidden" style="width: 21px; height: 21px;">
                                <div class="checkmark"></div>
                            </label>
                        </td>
                        <td class="w-[195px] border border-gray-300 px-4 py-2 text-center align-middle">"5-01-01-010"</td>
                        <td class="w-[400px] border border-gray-300 px-4 py-2 text-center align-middle">Salaries & Wages - Regular</td>
                        <td class="w-[250px] border border-gray-300 px-4 py-2 text-center align-middle">"1,000,000.00"</td>
                        <td class="w-[620px] border border-gray-300 px-4 py-2 text-start align-middle">
                            <div class="flex justify-between items-center">
                                <div>
                                    Item of Expenditures
                                </div>
                                <!-- Dropdown -->
                                <div>
                                    <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots" class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-200 dark:focus:ring-gray-200" type="button">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="black" viewBox="0 0 4 15">
                                            <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
                                        </svg>
                                    </button>
                                    <!-- Menu -->
                                    <div id="dropdownDots" class="absolute z-10 bg-white divide-y divide-gray-800 rounded-lg shadow w-[80px] dark:bg-gray-700 dark:divide-gray-600 hidden">
                                        <ul class="py-2 text-sm text-gray-900 dark:text-gray-200" aria-labelledby="dropdownMenuIconButton">
                                            <li>
                                                <a href="#" class="block px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-200 dark:hover:text-black">Edit</a>
                                            </li>
                                            <li>
                                                <a href="#" class="block px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-200 dark:hover:text-black">Delete</a>
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
                        <td class="w-[195px] border border-gray-300 px-4 py-2 text-center align-middle">"5-01-01-010"</td>
                        <td class="w-[400px] border border-gray-300 px-4 py-2 text-center align-middle">Salaries & Wages - Casual</td>
                        <td class="w-[250px] border border-gray-300 px-4 py-2 text-center align-middle">"1,000,000.00"</td>
                        <td class="w-[620px] border border-gray-300 px-4 py-2 text-justified align-middle">Item of Expenditures</td>
                    </tr>
                        
                    <tr>
                        <td class="w-[5px] border border-gray-300 px-4 py-2 text-center align-middle"> 
                            <label>
                                <input type="checkbox" class="visually-hidden" style="width: 21px; height: 21px;">
                                <div class="checkmark"></div>
                            </label>
                        </td>
                        <td class="w-[195px] border border-gray-300 px-4 py-2 text-center align-middle">"5-01-01-010"</td>
                        <td class="w-[400px] border border-gray-300 px-4 py-2 text-center align-middle">Personnel Economic Relief Allow (PERA - ₱2,000.00/mo/pos)</td>
                        <td class="w-[250px] border border-gray-300 px-4 py-2 text-center align-middle">"1,000,000.00"</td>
                        <td class="w-[620px] border border-gray-300 px-4 py-2 text-justified align-middle">Item of Expenditures</td>
                    </tr>
                         
                    <tr>
                        <td class="w-[5px] border border-gray-300 px-4 py-2 text-center align-middle"> 
                            <label>
                                <input type="checkbox" class="visually-hidden" style="width: 21px; height: 21px;">
                                <div class="checkmark"></div>
                            </label>
                        </td>
                        <td class="w-[195px] border border-gray-300 px-4 py-2 text-center align-middle">"5-01-01-010"</td>
                        <td class="w-[400px] border border-gray-300 px-4 py-2 text-center align-middle">Representation Allowance (RA)</td>
                        <td class="w-[250px] border border-gray-300 px-4 py-2 text-center align-middle">"1,000,000.00"</td>
                        <td class="w-[620px] border border-gray-300 px-4 py-2 text-justified align-middle">Item of Expenditures</td>
                    </tr>
                                  
                    <tr>
                        <td class="w-[5px] border border-gray-300 px-4 py-2 text-center align-middle"> 
                            <label>
                                <input type="checkbox" class="visually-hidden" style="width: 21px; height: 21px;">
                                <div class="checkmark"></div>
                            </label>
                        </td>
                        <td class="w-[195px] border border-gray-300 px-4 py-2 text-center align-middle">"5-01-01-010"</td>
                        <td class="w-[400px] border border-gray-300 px-4 py-2 text-center align-middle">Transportation Allowance (TA)</td>
                        <td class="w-[250px] border border-gray-300 px-4 py-2 text-center align-middle">"1,000,000.00"</td>
                        <td class="w-[620px] border border-gray-300 px-4 py-2 text-justified align-middle">Item of Expenditures</td>
                    </tr>
                                
                    <tr>
                        <td class="w-[5px] border border-gray-300 px-4 py-2 text-center align-middle"> 
                            <label>
                                <input type="checkbox" class="visually-hidden" style="width: 21px; height: 21px;">
                                <div class="checkmark"></div>
                            </label>
                        </td>
                        <td class="w-[195px] border border-gray-300 px-4 py-2 text-center align-middle">"5-01-01-010"</td>
                        <td class="w-[400px] border border-gray-300 px-4 py-2 text-center align-middle">Clothing/Uniform Allowance (₱6,000.00/position/annum)</td>
                        <td class="w-[250px] border border-gray-300 px-4 py-2 text-center align-middle">"1,000,000.00"</td>
                        <td class="w-[620px] border border-gray-300 px-4 py-2 text-justified align-middle">Item of Expenditures</td>
                    </tr>
                              
                    <tr>
                        <td class="w-[5px] border border-gray-300 px-4 py-2 text-center align-middle"> 
                            <label>
                                <input type="checkbox" class="visually-hidden" style="width: 21px; height: 21px;">
                                <div class="checkmark"></div>
                            </label>
                        </td>
                        <td class="w-[195px] border border-gray-300 px-4 py-2 text-center align-middle">"5-01-01-010"</td>
                        <td class="w-[400px] border border-gray-300 px-4 py-2 text-center align-middle">Subsistence Allowance</td>
                        <td class="w-[250px] border border-gray-300 px-4 py-2 text-center align-middle">"1,000,000.00"</td>
                        <td class="w-[620px] border border-gray-300 px-4 py-2 text-justified align-middle">Item of Expenditures</td>
                    </tr>
                             
                    <tr>
                        <td class="w-[5px] border border-gray-300 px-4 py-2 text-center align-middle"> 
                            <label>
                                <input type="checkbox" class="visually-hidden" style="width: 21px; height: 21px;">
                                <div class="checkmark"></div>
                            </label>
                        </td>
                        <td class="w-[195px] border border-gray-300 px-4 py-2 text-center align-middle">"5-01-01-010"</td>
                        <td class="w-[400px] border border-gray-300 px-4 py-2 text-center align-middle">Laundry Allowance</td>
                        <td class="w-[250px] border border-gray-300 px-4 py-2 text-center align-middle">"1,000,000.00"</td>
                        <td class="w-[620px] border border-gray-300 px-4 py-2 text-justified align-middle">Item of Expenditures</td>
                    </tr>
                           
                    <tr>
                        <td class="w-[5px] border border-gray-300 px-4 py-2 text-center align-middle"> 
                            <label>
                                <input type="checkbox" class="visually-hidden" style="width: 21px; height: 21px;">
                                <div class="checkmark"></div>
                            </label>
                        </td>
                        <td class="w-[195px] border border-gray-300 px-4 py-2 text-center align-middle">"5-01-01-010"</td>
                        <td class="w-[400px] border border-gray-300 px-4 py-2 text-center align-middle">Honoria (including overload teaching, panel members, etc)</td>
                        <td class="w-[250px] border border-gray-300 px-4 py-2 text-center align-middle">"1,000,000.00"</td>
                        <td class="w-[620px] border border-gray-300 px-4 py-2 text-justified align-middle">Item of Expenditures</td>
                    </tr>
                         
                    <tr>
                        <td class="w-[5px] border border-gray-300 px-4 py-2 text-center align-middle"> 
                            <label>
                                <input type="checkbox" class="visually-hidden" style="width: 21px; height: 21px;">
                                <div class="checkmark"></div>
                            </label>
                        </td>
                        <td class="w-[195px] border border-gray-300 px-4 py-2 text-center align-middle">"5-01-01-010"</td>
                        <td class="w-[400px] border border-gray-300 px-4 py-2 text-center align-middle">Hazard Pay</td>
                        <td class="w-[250px] border border-gray-300 px-4 py-2 text-center align-middle">"1,000,000.00"</td>
                        <td class="w-[620px] border border-gray-300 px-4 py-2 text-justified align-middle">Item of Expenditures</td>
                    </tr>
                        
                    <tr>
                        <td class="w-[5px] border border-gray-300 px-4 py-2 text-center align-middle"> 
                            <label>
                                <input type="checkbox" class="visually-hidden" style="width: 21px; height: 21px;">
                                <div class="checkmark"></div>
                            </label>
                        </td>
                        <td class="w-[195px] border border-gray-300 px-4 py-2 text-center align-middle">"5-01-01-010"</td>
                        <td class="w-[400px] border border-gray-300 px-4 py-2 text-center align-middle">Longevity Pay</td>
                        <td class="w-[250px] border border-gray-300 px-4 py-2 text-center align-middle">"1,000,000.00"</td>
                        <td class="w-[620px] border border-gray-300 px-4 py-2 text-justified align-middle">Item of Expenditures</td>
                    </tr>
                         
                    <tr>
                        <td class="w-[5px] border border-gray-300 px-4 py-2 text-center align-middle"> 
                            <label>
                                <input type="checkbox" class="visually-hidden" style="width: 21px; height: 21px;">
                                <div class="checkmark"></div>
                            </label>
                        </td>
                        <td class="w-[195px] border border-gray-300 px-4 py-2 text-center align-middle">"5-01-01-010"</td>
                        <td class="w-[400px] border border-gray-300 px-4 py-2 text-center align-middle">Overtime & Night Pay</td>
                        <td class="w-[250px] border border-gray-300 px-4 py-2 text-center align-middle">"1,000,000.00"</td>
                        <td class="w-[620px] border border-gray-300 px-4 py-2 text-justified align-middle">Item of Expenditures</td>
                    </tr>
                    <tr>
                        <td class="w-[5px] border border-gray-300 px-4 py-2 text-center align-middle"> 
                            <label>
                                <input type="checkbox" class="visually-hidden" style="width: 21px; height: 21px;">
                                <div class="checkmark"></div>
                            </label>
                        </td>
                        <td class="w-[195px] border border-gray-300 px-4 py-2 text-center align-middle">"5-01-01-010"</td>
                        <td class="w-[400px] border border-gray-300 px-4 py-2 text-center align-middle">Year End Bous (total of salaries & wages-regular & casual/12)</td>
                        <td class="w-[250px] border border-gray-300 px-4 py-2 text-center align-middle">"1,000,000.00"</td>
                        <td class="w-[620px] border border-gray-300 px-4 py-2 text-justified align-middle">Item of Expenditures</td>
                    </tr>
                    <tr>
                        <td class="w-[5px] border border-gray-300 px-4 py-2 text-center align-middle"> 
                            <label>
                                <input type="checkbox" class="visually-hidden" style="width: 21px; height: 21px;">
                                <div class="checkmark"></div>
                            </label>
                        </td>
                        <td class="w-[195px] border border-gray-300 px-4 py-2 text-center align-middle">"5-01-01-010"</td>
                        <td class="w-[400px] border border-gray-300 px-4 py-2 text-center align-middle">Cash Gift (₱5,000/position)</td>
                        <td class="w-[250px] border border-gray-300 px-4 py-2 text-center align-middle">"1,000,000.00"</td>
                        <td class="w-[620px] border border-gray-300 px-4 py-2 text-justified align-middle">Item of Expenditures</td>
                    </tr>
                    <tr>
                        <td class="w-[5px] border border-gray-300 px-4 py-2 text-center align-middle"> 
                            <label>
                                <input type="checkbox" class="visually-hidden" style="width: 21px; height: 21px;">
                                <div class="checkmark"></div>
                            </label>
                        </td>
                        <td class="w-[195px] border border-gray-300 px-4 py-2 text-center align-middle">"5-01-01-010"</td>
                        <td class="w-[400px] border border-gray-300 px-4 py-2 text-center align-middle">Retirement & Life Insurance Contributions (12% of salaries & wages - regular and casual)</td>
                        <td class="w-[250px] border border-gray-300 px-4 py-2 text-center align-middle">"1,000,000.00"</td>
                        <td class="w-[620px] border border-gray-300 px-4 py-2 text-justified align-middle">Item of Expenditures</td>
                    </tr>
                    <tr>
                        <td class="w-[5px] border border-gray-300 px-4 py-2 text-center align-middle"> 
                            <label>
                                <input type="checkbox" class="visually-hidden" style="width: 21px; height: 21px;">
                                <div class="checkmark"></div>
                            </label>
                        </td>
                        <td class="w-[195px] border border-gray-300 px-4 py-2 text-center align-middle">"5-01-01-010"</td>
                        <td class="w-[400px] border border-gray-300 px-4 py-2 text-center align-middle">Pag-IBIG Contributions (₱1,200.00/position/annum)</td>
                        <td class="w-[250px] border border-gray-300 px-4 py-2 text-center align-middle">"1,000,000.00"</td>
                        <td class="w-[620px] border border-gray-300 px-4 py-2 text-justified align-middle">Item of Expenditures</td>
                    </tr>
                    <tr>
                        <td class="w-[5px] border border-gray-300 px-4 py-2 text-center align-middle"> 
                            <label>
                                <input type="checkbox" class="visually-hidden" style="width: 21px; height: 21px;">
                                <div class="checkmark"></div>
                            </label>
                        </td>
                        <td class="w-[195px] border border-gray-300 px-4 py-2 text-center align-middle">"5-01-01-010"</td>
                        <td class="w-[400px] border border-gray-300 px-4 py-2 text-center align-middle">PHILHEALTH Contributions (2.5% of salaries & wages - regular and casual)</td>
                        <td class="w-[250px] border border-gray-300 px-4 py-2 text-center align-middle">"1,000,000.00"</td>
                        <td class="w-[620px] border border-gray-300 px-4 py-2 text-justified align-middle">Item of Expenditures</td>
                    </tr>
                    <tr>
                        <td class="w-[5px] border border-gray-300 px-4 py-2 text-center align-middle"> 
                            <label>
                                <input type="checkbox" class="visually-hidden" style="width: 21px; height: 21px;">
                                <div class="checkmark"></div>
                            </label>
                        </td>
                        <td class="w-[195px] border border-gray-300 px-4 py-2 text-center align-middle">"5-01-01-010"</td>
                        <td class="w-[400px] border border-gray-300 px-4 py-2 text-center align-middle">ECC Contributions (₱1,200.00/position and annum)</td>
                        <td class="w-[250px] border border-gray-300 px-4 py-2 text-center align-middle">"1,000,000.00"</td>
                        <td class="w-[620px] border border-gray-300 px-4 py-2 text-justified align-middle">Item of Expenditures</td>
                    </tr>
                    <tr>
                        <td class="w-[5px] border border-gray-300 px-4 py-2 text-center align-middle"> 
                            <label>
                                <input type="checkbox" class="visually-hidden" style="width: 21px; height: 21px;">
                                <div class="checkmark"></div>
                            </label>
                        </td>
                        <td class="w-[195px] border border-gray-300 px-4 py-2 text-center align-middle">"5-01-01-010"</td>
                        <td class="w-[400px] border border-gray-300 px-4 py-2 text-center align-middle">Terminal Leave Benefits (accum. leave credits of retired emp.)</td>
                        <td class="w-[250px] border border-gray-300 px-4 py-2 text-center align-middle">"1,000,000.00"</td>
                        <td class="w-[620px] border border-gray-300 px-4 py-2 text-justified align-middle">Item of Expenditures</td>
                    </tr>
                    <tr>
                        <td class="w-[5px] border border-gray-300 px-4 py-2 text-center align-middle"> 
                            <label>
                                <input type="checkbox" class="visually-hidden" style="width: 21px; height: 21px;">
                                <div class="checkmark"></div>
                            </label>
                        </td>
                        <td class="w-[195px] border border-gray-300 px-4 py-2 text-center align-middle">"5-01-01-010"</td>
                        <td class="w-[400px] border border-gray-300 px-4 py-2 text-center align-middle">Other Personnel Benefits</td>
                        <td class="w-[250px] border border-gray-300 px-4 py-2 text-center align-middle">"1,000,000.00"</td>
                        <td class="w-[620px] border border-gray-300 px-4 py-2 text-justified align-middle">Item of Expenditures</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Total -->
        <div class="w-[700px] flex justify-start items-center mt-[20px] ml-[180px]">
            <label class="text-zinc-950 text-base font-semibold font-['Inter'] leading-normal text-center">Total Personal Services:</label>
            <div class="flex-shrink-0 w-[180px] h-8 px-3 py-2 ml-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex">
                <input type="justification" name="justification" id="justification" class="w-full bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="₱ 0.00">
            </div>
        </div>
        
    </div>

    <script>
        document.getElementById('dropdownMenuIconButton').addEventListener('click', function() {
            var dropdownMenu = document.getElementById('dropdownDots');
            dropdownMenu.classList.toggle('hidden');
        });
    </script>

</div>