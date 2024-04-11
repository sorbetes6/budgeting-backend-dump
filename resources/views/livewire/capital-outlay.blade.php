<div>   

    <!-- Top Bar --> 
    <div class="flex w-[1420px] mx-[270px] mt-[110px] mb-[10px]">
        <div class="w-[1420px] mx-[0px] rounded-lg p-4 relative">
            <div class="absolute shadow inset-x-0 bottom-0 h-[1px] bg-gray-200"></div>
            <div class="flex flex-col gap-y-[5px] text-indigo-800 text-[25px] font-extrabold font-['Inter'] leading-5">Capital Outlay
                <div class="flex flex-row items-center">
                    <label class="text-yellow-700 text-sm font-normal font-['Inter'] leading-loose mr-1">Budget Call Forms ></label>
                    <label class="text-black text-sm font-normal font-['Inter'] leading-loose">Capital Outlay Form No.</label>
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
                        <td class="w-[400px] border border-gray-300 px-4 py-2 text-center align-middle">School Buildings</td>
                        <td class="w-[250px] border border-gray-300 px-4 py-2 text-center align-middle">"1,000,000.00"</td>
                        <td class="w-[620px] border border-gray-300 px-4 py-2 text-center align-middle">"Item of Expenditures"</td>
                    </tr>
                    <tr>
                        <td class="w-[5px] border border-gray-300 px-4 py-2 text-center align-middle"> 
                            <label>
                                <input type="checkbox" class="visually-hidden" style="width: 21px; height: 21px;">
                                <div class="checkmark"></div>
                            </label>
                        </td>
                        <td class="w-[195px] border border-gray-300 px-4 py-2 text-center align-middle">"5-01-01-010"</td>
                        <td class="w-[400px] border border-gray-300 px-4 py-2 text-center align-middle">Office Equipment</td>
                        <td class="w-[250px] border border-gray-300 px-4 py-2 text-center align-middle">"1,000,000.00"</td>
                        <td class="w-[620px] border border-gray-300 px-4 py-2 text-center align-middle">"Item of Expenditures"</td>
                    </tr>    
                    <tr>
                        <td class="w-[5px] border border-gray-300 px-4 py-2 text-center align-middle"> 
                            <label>
                                <input type="checkbox" class="visually-hidden" style="width: 21px; height: 21px;">
                                <div class="checkmark"></div>
                            </label>
                        </td>
                        <td class="w-[195px] border border-gray-300 px-4 py-2 text-center align-middle">"5-01-01-010"</td>
                        <td class="w-[400px] border border-gray-300 px-4 py-2 text-center align-middle">Information  & Communication Technology Equipment</td>
                        <td class="w-[250px] border border-gray-300 px-4 py-2 text-center align-middle">"1,000,000.00"</td>
                        <td class="w-[620px] border border-gray-300 px-4 py-2 text-center align-middle">"Item of Expenditures"</td>
                    </tr>     
                    <tr>
                        <td class="w-[5px] border border-gray-300 px-4 py-2 text-center align-middle"> 
                            <label>
                                <input type="checkbox" class="visually-hidden" style="width: 21px; height: 21px;">
                                <div class="checkmark"></div>
                            </label>
                        </td>
                        <td class="w-[195px] border border-gray-300 px-4 py-2 text-center align-middle">"5-01-01-010"</td>
                        <td class="w-[400px] border border-gray-300 px-4 py-2 text-center align-middle">Communication Equipment</td>
                        <td class="w-[250px] border border-gray-300 px-4 py-2 text-center align-middle">"1,000,000.00"</td>
                        <td class="w-[620px] border border-gray-300 px-4 py-2 text-center align-middle">"Item of Expenditures"</td>
                    </tr>              
                    <tr>
                        <td class="w-[5px] border border-gray-300 px-4 py-2 text-center align-middle"> 
                            <label>
                                <input type="checkbox" class="visually-hidden" style="width: 21px; height: 21px;">
                                <div class="checkmark"></div>
                            </label>
                        </td>
                        <td class="w-[195px] border border-gray-300 px-4 py-2 text-center align-middle">"5-01-01-010"</td>
                        <td class="w-[400px] border border-gray-300 px-4 py-2 text-center align-middle">Disaster Response & Rescue Equipment</td>
                        <td class="w-[250px] border border-gray-300 px-4 py-2 text-center align-middle">"1,000,000.00"</td>
                        <td class="w-[620px] border border-gray-300 px-4 py-2 text-center align-middle">"Item of Expenditures"</td>
                    </tr>            
                    <tr>
                        <td class="w-[5px] border border-gray-300 px-4 py-2 text-center align-middle"> 
                            <label>
                                <input type="checkbox" class="visually-hidden" style="width: 21px; height: 21px;">
                                <div class="checkmark"></div>
                            </label>
                        </td>
                        <td class="w-[195px] border border-gray-300 px-4 py-2 text-center align-middle">"5-01-01-010"</td>
                        <td class="w-[400px] border border-gray-300 px-4 py-2 text-center align-middle">Medical Equipment</td>
                        <td class="w-[250px] border border-gray-300 px-4 py-2 text-center align-middle">"1,000,000.00"</td>
                        <td class="w-[620px] border border-gray-300 px-4 py-2 text-center align-middle">"Item of Expenditures"</td>
                    </tr>          
                    <tr>
                        <td class="w-[5px] border border-gray-300 px-4 py-2 text-center align-middle"> 
                            <label>
                                <input type="checkbox" class="visually-hidden" style="width: 21px; height: 21px;">
                                <div class="checkmark"></div>
                            </label>
                        </td>
                        <td class="w-[195px] border border-gray-300 px-4 py-2 text-center align-middle">"5-01-01-010"</td>
                        <td class="w-[400px] border border-gray-300 px-4 py-2 text-center align-middle">Sports Equipment</td>
                        <td class="w-[250px] border border-gray-300 px-4 py-2 text-center align-middle">"1,000,000.00"</td>
                        <td class="w-[620px] border border-gray-300 px-4 py-2 text-center align-middle">"Item of Expenditures"</td>
                    </tr>         
                    <tr>
                        <td class="w-[5px] border border-gray-300 px-4 py-2 text-center align-middle"> 
                            <label>
                                <input type="checkbox" class="visually-hidden" style="width: 21px; height: 21px;">
                                <div class="checkmark"></div>
                            </label>
                        </td>
                        <td class="w-[195px] border border-gray-300 px-4 py-2 text-center align-middle">"5-01-01-010"</td>
                        <td class="w-[400px] border border-gray-300 px-4 py-2 text-center align-middle">Technical & Scientific Equipment</td>
                        <td class="w-[250px] border border-gray-300 px-4 py-2 text-center align-middle">"1,000,000.00"</td>
                        <td class="w-[620px] border border-gray-300 px-4 py-2 text-center align-middle">"Item of Expenditures"</td>
                    </tr>       
                    <tr>
                        <td class="w-[5px] border border-gray-300 px-4 py-2 text-center align-middle"> 
                            <label>
                                <input type="checkbox" class="visually-hidden" style="width: 21px; height: 21px;">
                                <div class="checkmark"></div>
                            </label>
                        </td>
                        <td class="w-[195px] border border-gray-300 px-4 py-2 text-center align-middle">"5-01-01-010"</td>
                        <td class="w-[400px] border border-gray-300 px-4 py-2 text-center align-middle">Other Machinery & Equipment</td>
                        <td class="w-[250px] border border-gray-300 px-4 py-2 text-center align-middle">"1,000,000.00"</td>
                        <td class="w-[620px] border border-gray-300 px-4 py-2 text-center align-middle">"Item of Expenditures"</td>
                    </tr>     
                    <tr>
                        <td class="w-[5px] border border-gray-300 px-4 py-2 text-center align-middle"> 
                            <label>
                                <input type="checkbox" class="visually-hidden" style="width: 21px; height: 21px;">
                                <div class="checkmark"></div>
                            </label>
                        </td>
                        <td class="w-[195px] border border-gray-300 px-4 py-2 text-center align-middle">"5-01-01-010"</td>
                        <td class="w-[400px] border border-gray-300 px-4 py-2 text-center align-middle">Transportation Equipment</td>
                        <td class="w-[250px] border border-gray-300 px-4 py-2 text-center align-middle">"1,000,000.00"</td>
                        <td class="w-[620px] border border-gray-300 px-4 py-2 text-center align-middle">"Item of Expenditures"</td>
                    </tr>    
                    <tr>
                        <td class="w-[5px] border border-gray-300 px-4 py-2 text-center align-middle"> 
                            <label>
                                <input type="checkbox" class="visually-hidden" style="width: 21px; height: 21px;">
                                <div class="checkmark"></div>
                            </label>
                        </td>
                        <td class="w-[195px] border border-gray-300 px-4 py-2 text-center align-middle">"5-01-01-010"</td>
                        <td class="w-[400px] border border-gray-300 px-4 py-2 text-center align-middle">Furniture & Fixtures</td>
                        <td class="w-[250px] border border-gray-300 px-4 py-2 text-center align-middle">"1,000,000.00"</td>
                        <td class="w-[620px] border border-gray-300 px-4 py-2 text-center align-middle">"Item of Expenditures"</td>
                    </tr>     
                    <tr>
                        <td class="w-[5px] border border-gray-300 px-4 py-2 text-center align-middle"> 
                            <label>
                                <input type="checkbox" class="visually-hidden" style="width: 21px; height: 21px;">
                                <div class="checkmark"></div>
                            </label>
                        </td>
                        <td class="w-[195px] border border-gray-300 px-4 py-2 text-center align-middle">"5-01-01-010"</td>
                        <td class="w-[400px] border border-gray-300 px-4 py-2 text-center align-middle">Books</td>
                        <td class="w-[250px] border border-gray-300 px-4 py-2 text-center align-middle">"1,000,000.00"</td>
                        <td class="w-[620px] border border-gray-300 px-4 py-2 text-center align-middle">"Item of Expenditures"</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Total -->
        <div class="w-[700px] flex justify-start items-center mt-[20px] ml-[250px]">
            <label class="text-zinc-950 text-base font-semibold font-['Inter'] leading-normal text-center">Total Capital Outlay:</label>
            <div class="flex-shrink-0 w-[180px] h-8 px-3 py-2 ml-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex">
                <input type="justification" name="justification" id="justification" class="w-full bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="₱ 0.00">
            </div>
        </div>
        
    </div>

</div>