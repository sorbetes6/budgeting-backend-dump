<div>
    
    <!-- Top Bar -->    
    <div class="flex w-[1420px] mx-[270px] mt-[110px] mb-[10px]">
    <div class="w-[1420px] mx-[0px] rounded-lg p-4 relative">
        <div class="absolute shadow inset-x-0 bottom-0 h-[1px] bg-gray-200"></div>
        <div class="flex flex-col gap-y-[5px] text-indigo-800 text-[25px] font-extrabold font-['Inter'] leading-5">Maintenance and Other Operating Expenses
            <div class="flex flex-row items-center">
                <label class="text-yellow-700 text-sm font-normal font-['Inter'] leading-loose mr-1">Budget Call Forms ></label>
                <label class="text-black text-sm font-normal font-['Inter'] leading-loose">Maintenance and Other Operating Expenses Form No.</label>
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
            <select id="college_office" name="college_office" class="block w-full h-[30px] mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" style="text-indent: 10px;"   >
                <option disabled selected>Select College/Office</option>
                <option value="College 1">College 1</option>
                <option value="College 2">College 2</option>
                <option value="">...</option>
                <!-- Add your options here -->
            </select>
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
                        <td class="w-[5px]   border border-gray-300 px-4 py-2 text-center align-middle"> 
                            <div class="flex justify-center items-center w-5 h-5 bg-white border border-gray-500 rounded-md cursor-pointer hover:bg-gray-100 mx-auto"></div>
                        </td>
                        <td class="w-[195px] border border-gray-300 px-4 py-2 text-center align-middle">"5-01-01-010"</td>
                        <td class="w-[400px] border border-gray-300 px-4 py-2 text-center align-middle">Traveling Expenses - Local</td>
                        <td class="w-[250px] border border-gray-300 px-4 py-2 text-center align-middle">"1,000,000.00"</td>
                        <td class="w-[620px] border border-gray-300 px-4 py-2 text-center align-middle">"Item of Expenditures"</td>
                    </tr>
                    <tr>
                        <td class="w-[5px]   border border-gray-300 px-4 py-2 text-center align-middle">
                            <div class="flex justify-center items-center w-5 h-5 bg-white border border-gray-500 rounded-md cursor-pointer hover:bg-gray-100 mx-auto"></div>
                        </td>
                        <td class="w-[195px] border border-gray-300 px-4 py-2 text-center align-middle">"5-01-01-010"</td>
                        <td class="w-[400px] border border-gray-300 px-4 py-2 text-center align-middle">Traveling Expenses - Foreign</td>
                        <td class="w-[250px] border border-gray-300 px-4 py-2 text-center align-middle">"1,000,000.00"</td>
                        <td class="w-[620px] border border-gray-300 px-4 py-2 text-center align-middle">"Item of Expenditures"</td>
                    </tr>    
                    <tr>
                        <td class="w-[5px]   border border-gray-300 px-4 py-2 text-center align-middle">
                            <div class="flex justify-center items-center w-5 h-5 bg-white border border-gray-500 rounded-md cursor-pointer hover:bg-gray-100 mx-auto"></div>
                        </td>
                        <td class="w-[195px] border border-gray-300 px-4 py-2 text-center align-middle">"5-01-01-010"</td>
                        <td class="w-[400px] border border-gray-300 px-4 py-2 text-center align-middle">Traveling Expenses</td>
                        <td class="w-[250px] border border-gray-300 px-4 py-2 text-center align-middle">"1,000,000.00"</td>
                        <td class="w-[620px] border border-gray-300 px-4 py-2 text-center align-middle">"Item of Expenditures"</td>
                    </tr>     
                    <tr>
                        <td class="w-[5px]   border border-gray-300 px-4 py-2 text-center align-middle">
                            <div class="flex justify-center items-center w-5 h-5 bg-white border border-gray-500 rounded-md cursor-pointer hover:bg-gray-100 mx-auto"></div>
                        </td>
                        <td class="w-[195px] border border-gray-300 px-4 py-2 text-center align-middle">"5-01-01-010"</td>
                        <td class="w-[400px] border border-gray-300 px-4 py-2 text-center align-middle">Office Supplies Expenses</td>
                        <td class="w-[250px] border border-gray-300 px-4 py-2 text-center align-middle">"1,000,000.00"</td>
                        <td class="w-[620px] border border-gray-300 px-4 py-2 text-center align-middle">"Item of Expenditures"</td>
                    </tr>              
                    <tr>
                        <td class="w-[5px]   border border-gray-300 px-4 py-2 text-center align-middle">
                            <div class="flex justify-center items-center w-5 h-5 bg-white border border-gray-500 rounded-md cursor-pointer hover:bg-gray-100 mx-auto"></div>
                        </td>
                        <td class="w-[195px] border border-gray-300 px-4 py-2 text-center align-middle">"5-01-01-010"</td>
                        <td class="w-[400px] border border-gray-300 px-4 py-2 text-center align-middle">Accountable Forms Expenses</td>
                        <td class="w-[250px] border border-gray-300 px-4 py-2 text-center align-middle">"1,000,000.00"</td>
                        <td class="w-[620px] border border-gray-300 px-4 py-2 text-center align-middle">"Item of Expenditures"</td>
                    </tr>            
                    <tr>
                        <td class="w-[5px]   border border-gray-300 px-4 py-2 text-center align-middle">
                            <div class="flex justify-center items-center w-5 h-5 bg-white border border-gray-500 rounded-md cursor-pointer hover:bg-gray-100 mx-auto"></div>
                        </td>
                        <td class="w-[195px] border border-gray-300 px-4 py-2 text-center align-middle">"5-01-01-010"</td>
                        <td class="w-[400px] border border-gray-300 px-4 py-2 text-center align-middle">Drugs & Medicines Expenses</td>
                        <td class="w-[250px] border border-gray-300 px-4 py-2 text-center align-middle">"1,000,000.00"</td>
                        <td class="w-[620px] border border-gray-300 px-4 py-2 text-center align-middle">"Item of Expenditures"</td>
                    </tr>          
                    <tr>
                        <td class="w-[5px]   border border-gray-300 px-4 py-2 text-center align-middle">
                            <div class="flex justify-center items-center w-5 h-5 bg-white border border-gray-500 rounded-md cursor-pointer hover:bg-gray-100 mx-auto"></div>
                        </td>
                        <td class="w-[195px] border border-gray-300 px-4 py-2 text-center align-middle">"5-01-01-010"</td>
                        <td class="w-[400px] border border-gray-300 px-4 py-2 text-center align-middle">Medical, Dental, & Lab Supplies Expenses</td>
                        <td class="w-[250px] border border-gray-300 px-4 py-2 text-center align-middle">"1,000,000.00"</td>
                        <td class="w-[620px] border border-gray-300 px-4 py-2 text-center align-middle">"Item of Expenditures"</td>
                    </tr>         
                    <tr>
                        <td class="w-[5px]   border border-gray-300 px-4 py-2 text-center align-middle">
                            <div class="flex justify-center items-center w-5 h-5 bg-white border border-gray-500 rounded-md cursor-pointer hover:bg-gray-100 mx-auto"></div>
                        </td>
                        <td class="w-[195px] border border-gray-300 px-4 py-2 text-center align-middle">"5-01-01-010"</td>
                        <td class="w-[400px] border border-gray-300 px-4 py-2 text-center align-middle">Fuel, Oil, & Lubricants Expenses</td>
                        <td class="w-[250px] border border-gray-300 px-4 py-2 text-center align-middle">"1,000,000.00"</td>
                        <td class="w-[620px] border border-gray-300 px-4 py-2 text-center align-middle">"Item of Expenditures"</td>
                    </tr>       
                    <tr>
                        <td class="w-[5px]   border border-gray-300 px-4 py-2 text-center align-middle">
                            <div class="flex justify-center items-center w-5 h-5 bg-white border border-gray-500 rounded-md cursor-pointer hover:bg-gray-100 mx-auto"></div>
                        </td>
                        <td class="w-[195px] border border-gray-300 px-4 py-2 text-center align-middle">"5-01-01-010"</td>
                        <td class="w-[400px] border border-gray-300 px-4 py-2 text-center align-middle">Other Supplies Materials Expenses</td>
                        <td class="w-[250px] border border-gray-300 px-4 py-2 text-center align-middle">"1,000,000.00"</td>
                        <td class="w-[620px] border border-gray-300 px-4 py-2 text-center align-middle">"Item of Expenditures"</td>
                    </tr>     
                    <tr>
                        <td class="w-[5px]   border border-gray-300 px-4 py-2 text-center align-middle">
                            <div class="flex justify-center items-center w-5 h-5 bg-white border border-gray-500 rounded-md cursor-pointer hover:bg-gray-100 mx-auto"></div>
                        </td>
                        <td class="w-[195px] border border-gray-300 px-4 py-2 text-center align-middle">"5-01-01-010"</td>
                        <td class="w-[400px] border border-gray-300 px-4 py-2 text-center align-middle">Water Expenses</td>
                        <td class="w-[250px] border border-gray-300 px-4 py-2 text-center align-middle">"1,000,000.00"</td>
                        <td class="w-[620px] border border-gray-300 px-4 py-2 text-center align-middle">"Item of Expenditures"</td>
                    </tr>    
                    <tr>
                        <td class="w-[5px]   border border-gray-300 px-4 py-2 text-center align-middle">
                            <div class="flex justify-center items-center w-5 h-5 bg-white border border-gray-500 rounded-md cursor-pointer hover:bg-gray-100 mx-auto"></div>
                        </td>
                        <td class="w-[195px] border border-gray-300 px-4 py-2 text-center align-middle">"5-01-01-010"</td>
                        <td class="w-[400px] border border-gray-300 px-4 py-2 text-center align-middle">Electricity Expenses</td>
                        <td class="w-[250px] border border-gray-300 px-4 py-2 text-center align-middle">"1,000,000.00"</td>
                        <td class="w-[620px] border border-gray-300 px-4 py-2 text-center align-middle">"Item of Expenditures"</td>
                    </tr>     
                    <tr>
                        <td class="w-[5px]   border border-gray-300 px-4 py-2 text-center align-middle">
                            <div class="flex justify-center items-center w-5 h-5 bg-white border border-gray-500 rounded-md cursor-pointer hover:bg-gray-100 mx-auto"></div>
                        </td>
                        <td class="w-[195px] border border-gray-300 px-4 py-2 text-center align-middle">"5-01-01-010"</td>
                        <td class="w-[400px] border border-gray-300 px-4 py-2 text-center align-middle">Postage & Courier Services</td>
                        <td class="w-[250px] border border-gray-300 px-4 py-2 text-center align-middle">"1,000,000.00"</td>
                        <td class="w-[620px] border border-gray-300 px-4 py-2 text-center align-middle">"Item of Expenditures"</td>
                    </tr>
                    <tr>
                        <td class="w-[5px]   border border-gray-300 px-4 py-2 text-center align-middle">
                            <div class="flex justify-center items-center w-5 h-5 bg-white border border-gray-500 rounded-md cursor-pointer hover:bg-gray-100 mx-auto"></div>
                        </td>
                        <td class="w-[195px] border border-gray-300 px-4 py-2 text-center align-middle">"5-01-01-010"</td>
                        <td class="w-[400px] border border-gray-300 px-4 py-2 text-center align-middle">Telephone Expenses</td>
                        <td class="w-[250px] border border-gray-300 px-4 py-2 text-center align-middle">"1,000,000.00"</td>
                        <td class="w-[620px] border border-gray-300 px-4 py-2 text-center align-middle">"Item of Expenditures"</td>
                    </tr>
                    <tr>
                        <td class="w-[5px]   border border-gray-300 px-4 py-2 text-center align-middle">
                            <div class="flex justify-center items-center w-5 h-5 bg-white border border-gray-500 rounded-md cursor-pointer hover:bg-gray-100 mx-auto"></div>
                        </td>
                        <td class="w-[195px] border border-gray-300 px-4 py-2 text-center align-middle">"5-01-01-010"</td>
                        <td class="w-[400px] border border-gray-300 px-4 py-2 text-center align-middle">Internet Subscription Expenses</td>
                        <td class="w-[250px] border border-gray-300 px-4 py-2 text-center align-middle">"1,000,000.00"</td>
                        <td class="w-[620px] border border-gray-300 px-4 py-2 text-center align-middle">"Item of Expenditures"</td>
                    </tr>
                    <tr>
                        <td class="w-[5px]   border border-gray-300 px-4 py-2 text-center align-middle">
                            <div class="flex justify-center items-center w-5 h-5 bg-white border border-gray-500 rounded-md cursor-pointer hover:bg-gray-100 mx-auto"></div>
                        </td>
                        <td class="w-[195px] border border-gray-300 px-4 py-2 text-center align-middle">"5-01-01-010"</td>
                        <td class="w-[400px] border border-gray-300 px-4 py-2 text-center align-middle">Extraordinary & Miscellaneous Expenses </td>
                        <td class="w-[250px] border border-gray-300 px-4 py-2 text-center align-middle">"1,000,000.00"</td>
                        <td class="w-[620px] border border-gray-300 px-4 py-2 text-center align-middle">"Item of Expenditures"</td>
                    </tr>
                    <tr>
                        <td class="w-[5px]   border border-gray-300 px-4 py-2 text-center align-middle">
                            <div class="flex justify-center items-center w-5 h-5 bg-white border border-gray-500 rounded-md cursor-pointer hover:bg-gray-100 mx-auto"></div>
                        </td>
                        <td class="w-[195px] border border-gray-300 px-4 py-2 text-center align-middle">"5-01-01-010"</td>
                        <td class="w-[400px] border border-gray-300 px-4 py-2 text-center align-middle">Consultancy Services</td>
                        <td class="w-[250px] border border-gray-300 px-4 py-2 text-center align-middle">"1,000,000.00"</td>
                        <td class="w-[620px] border border-gray-300 px-4 py-2 text-center align-middle">"Item of Expenditures"</td>
                    </tr>
                    <tr>
                        <td class="w-[5px]   border border-gray-300 px-4 py-2 text-center align-middle">
                            <div class="flex justify-center items-center w-5 h-5 bg-white border border-gray-500 rounded-md cursor-pointer hover:bg-gray-100 mx-auto"></div>
                        </td>
                        <td class="w-[195px] border border-gray-300 px-4 py-2 text-center align-middle">"5-01-01-010"</td>
                        <td class="w-[400px] border border-gray-300 px-4 py-2 text-center align-middle">Other Professional Services </td>
                        <td class="w-[250px] border border-gray-300 px-4 py-2 text-center align-middle">"1,000,000.00"</td>
                        <td class="w-[620px] border border-gray-300 px-4 py-2 text-center align-middle">"Item of Expenditures"</td>
                    </tr>
                    <tr>
                        <td class="w-[5px]   border border-gray-300 px-4 py-2 text-center align-middle">
                            <div class="flex justify-center items-center w-5 h-5 bg-white border border-gray-500 rounded-md cursor-pointer hover:bg-gray-100 mx-auto"></div>
                        </td>
                        <td class="w-[195px] border border-gray-300 px-4 py-2 text-center align-middle">"5-01-01-010"</td>
                        <td class="w-[400px] border border-gray-300 px-4 py-2 text-center align-middle">Rep. Maint. - Buildings & Other Structures</td>
                        <td class="w-[250px] border border-gray-300 px-4 py-2 text-center align-middle">"1,000,000.00"</td>
                        <td class="w-[620px] border border-gray-300 px-4 py-2 text-center align-middle">"Item of Expenditures"</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Total -->
        <div class="w-[700px] flex justify-start items-center mt-[20px] mr-[230px]">
            <label class="text-zinc-950 text-base font-semibold font-['Inter'] leading-normal text-center">Total Maintenance and Other Operating Expenses :</label>
            <div class="flex-shrink-0 w-[180px] h-8 px-3 py-2 ml-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex">
                <input type="justification" name="justification" id="justification" class="w-full bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="₱ 0.00">
            </div>
        </div>
        
    </div>
    
</div>