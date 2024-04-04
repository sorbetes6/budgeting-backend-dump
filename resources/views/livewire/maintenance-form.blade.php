<!-- Select College/Office -->
<div class="w-[280px] p-3 rounded-lg">
    <select id="college_office" name="college_office" class="block w-full h-[30px] border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" style="text-indent: 10px;">
        <option disabled selected>Select College/Office</option>
        <option value="College 1">College 1</option>
        <option value="College 2">College 2</option>
        <option value="">...</option>
    </select>
</div>

<!-- Table -->
<div>
    <div class="w-[1200px] max-h-fit bg-white rounded-xl shadow border border-zinc-200">
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <!-- Table Header -->
                <thead class="text-zinc-950 text-base font-semibold font-['Inter'] leading-normal gap-y-12">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Account Code
                        </th>
                        <th scope="col" class="pr-10 py-3">
                            Item of Expenditures
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Proposed Budget
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Justification
                        </th>
                    </tr>
                </thead>

                <!-- Table Body -->
                <tbody>
                    <tr class="gap-6">
                        <th scope="row" class="px-6 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            5-02-01-010
                        </th>
                        <td class="pr-10 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            Traveling Expenses - Local
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="mooe-form-trvlngxpnseslcl-budget" class="w-36 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="₱ 0.00">
                            </form>
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="mooe-form-trvlngxpnseslcl-justification" class="w-96 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description">
                            </form>
                        </td>
                    </tr>

                    <tr class="gap-6">
                        <th scope="row" class="px-6 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            5-02-01-020
                        </th>
                        <td class="pr-10 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            Traveling Expenses - Foreign
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="mooe-form-trvlngxpnsesfrgn-budget" class="w-36 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="₱ 0.00">
                            </form>
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="mooe-form-trvlngxpnsesfrgn-justification" class="w-96 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description">
                            </form>
                        </td>
                    </tr>

                    <tr class="gap-6">
                        <th scope="row" class="px-6 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            5-02-02-010
                        </th>
                        <td class="pr-10 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            Training Expenses
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="mooe-form-trvlngxpnses-budget" class="w-36 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="₱ 0.00">
                            </form>
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="mooe-form-trvlngxpnses-justification" class="w-96 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description">
                            </form>
                        </td>
                    </tr>

                    <tr class="gap-6">
                        <th scope="row" class="px-6 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            5-02-03-010
                        </th>
                        <td class="pr-10 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            Office Supplies Expenses
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="mooe-form-offcspplsxpns-budget" class="w-36 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="₱ 0.00">
                            </form>
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="mooe-form-offcspplsxpns-justification" class="w-96 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description">
                            </form>
                        </td>
                    </tr>

                    <tr class="gap-6">
                        <th scope="row" class="px-6 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            5-02-03-020
                        </th>
                        <td class="pr-10 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            Accountable Forms Expenses
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="mooe-form-accntblefrmxpnses-budget" class="w-36 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="₱ 0.00">
                            </form>
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="mooe-form-accntblefrmxpnses-justification" class="w-96 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description">
                            </form>
                        </td>
                    </tr>

                    <tr class="gap-6">
                        <th scope="row" class="px-6 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            5-02-03-070
                        </th>
                        <td class="pr-10 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            Drugs and Medicine Expenses
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="mooe-form-drgsmdcnexpnses-budget" class="w-36 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="₱ 0.00">
                            </form>
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="mooe-form-drgsmdcnexpnses-justification" class="w-96 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description">
                            </form>
                        </td>
                    </tr>

                    <tr class="gap-6">
                        <th scope="row" class="px-6 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            5-02-03-080
                        </th>
                        <td class="pr-10 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            Medical, Dental, and Laboratory Supplies Expenses
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="mooe-form-mdlsxpnses-budget" class="w-36 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="₱ 0.00">
                            </form>
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="mooe-form-mdlsxpnses-justification" class="w-96 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description">
                            </form>
                        </td>
                    </tr>

                    <tr class="gap-6">
                        <th scope="row" class="px-6 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            5-02-03-090
                        </th>
                        <td class="pr-10 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            Fuel, Oil, and Lubricants Expenses
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="mooe-form-fuoiluxpnses-budget" class="w-36 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="₱ 0.00">
                            </form>
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="mooe-form-fuoiluxpnses-justification" class="w-96 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description">
                            </form>
                        </td>
                    </tr>

                    <tr class="gap-6">
                        <th scope="row" class="px-6 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            5-02-03-990
                        </th>
                        <td class="pr-10 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            Other Supplies and Materials Expenses
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="mooe-form-othrspplsmtrlsxpnses-budget" class="w-36 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="₱ 0.00">
                            </form>
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="mooe-form-othrspplsmtrlsxpnses-justification" class="w-96 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description">
                            </form>
                        </td>
                    </tr>

                    <tr class="gap-6">
                        <th scope="row" class="px-6 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                        5-02-04-010
                        </th>
                        <td class="pr-10 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            Water Expenses
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="mooe-form-wtrxpnses-budget" class="w-36 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="₱ 0.00">
                            </form>
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="mooe-form-wtrxpnses-justification" class="w-96 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description">
                            </form>
                        </td>
                    </tr>

                    <tr class="gap-6">
                        <th scope="row" class="px-6 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            5-02-04-010
                        </th>
                        <td class="pr-10 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            Electricity Expenses
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="mooe-form-elctctyxpnses-budget" class="w-36 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="₱ 0.00">
                            </form>
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="mooe-form-elctctyxpnses-justification" class="w-96 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description">
                            </form>
                        </td>
                    </tr>

                    <tr class="gap-6">
                        <th scope="row" class="px-6 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            5-02-05-010
                        </th>
                        <td class="pr-10 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            Postage and Courier Services
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="mooe-form-pstgcrsrvcs-budget" class="w-36 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="₱ 0.00">
                            </form>
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="mooe-form-pstgcrsrvcs-justification" class="w-96 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description">
                            </form>
                        </td>
                    </tr>

                    <tr class="gap-6">
                        <th scope="row" class="px-6 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            5-02-05-020
                        </th>
                        <td class="pr-10 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            Telephone Expenses
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="mooe-form-tlphnxpnses-budget" class="w-36 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="₱ 0.00">
                            </form>
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="mooe-form-tlphnxpnses-justification" class="w-96 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description">
                            </form>
                        </td>
                    </tr>

                    <tr class="gap-6">
                        <th scope="row" class="px-6 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            5-02-05-030
                        </th>
                        <td class="pr-10 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            Internet Subscription Expenses
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="mooe-form-intrntsbscrptnxpnses-budget" class="w-36 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="₱ 0.00">
                            </form>
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="mooe-form-intrntsbscrptnxpnses-justification" class="w-96 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description">
                            </form>
                        </td>
                    </tr>

                    <tr class="gap-6">
                        <th scope="row" class="px-6 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            5-02-10-030
                        </th>
                        <td class="pr-10 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            Extraordinary and Miscellaneuous Expenses
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="mooe-form-extrmiscexpnses-budget" class="w-36 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="₱ 0.00">
                            </form>
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="mooe-form-extrmiscexpnses-justification" class="w-96 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description">
                            </form>
                        </td>
                    </tr>

                    <tr class="gap-6">
                        <th scope="row" class="px-6 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            5-02-11-030
                        </th>
                        <td class="pr-10 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            Consultancy Services
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="mooe-form-cnsltncsrvces-budget" class="w-36 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="₱ 0.00">
                            </form>
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="mooe-form-cnsltncsrvces-justification" class="w-96 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description">
                            </form>
                        </td>
                    </tr>

                    <tr class="gap-6">
                        <th scope="row" class="px-6 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            5-02-11-990
                        </th>
                        <td class="pr-10 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            Other Professional Services
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="mooe-form-othrprosrvces-budget" class="w-36 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="₱ 0.00">
                            </form>
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="mooe-form-othrprosrvces-justification" class="w-96 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description">
                            </form>
                        </td>
                    </tr>

                    <tr class="gap-6">
                        <th scope="row" class="px-6 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            5-02-13-040
                        </th>
                        <td class="pr-10 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            Rep. & Maint. - Buildings and Other Structures
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="mooe-form-rmbldgothrstrctrs-budget" class="w-36 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="₱ 0.00">
                            </form>
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="mooe-form-rmbldgothrstrctrs-justification" class="w-96 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description">
                            </form>
                        </td>
                    </tr>

                    <tr class="gap-6">
                        <th scope="row" class="px-6 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            5-02-13-050
                        </th>
                        <td class="pr-10 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            Rep. & Maint. - Machinery & Equipment
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="mooe-form-rmmchnryeqpmnt-budget" class="w-36 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="₱ 0.00">
                            </form>
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="mooe-form-rmmchnryeqpmnt-justification" class="w-96 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description">
                            </form>
                        </td>
                    </tr>

                    <tr class="gap-6">
                        <th scope="row" class="px-6 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            5-02-13-060
                        </th>
                        <td class="pr-10 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            Rep. & Maint. - Transportation Equipment
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="mooe-form-rmtrnprtatneqpmnt-budget" class="w-36 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="₱ 0.00">
                            </form>
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="mooe-form-rmtrnprtatneqpmnt-justification" class="w-96 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description">
                            </form>
                        </td>
                    </tr>

                    <tr class="gap-6">
                        <th scope="row" class="px-6 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            5-02-13-070
                        </th>
                        <td class="pr-10 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            Rep. & Maint. - Furniture and Fixtures
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="mooe-form-rmfurfix-budget" class="w-36 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="₱ 0.00">
                            </form>
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="mooe-form-rmfurfix-justification" class="w-96 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description">
                            </form>
                        </td>
                    </tr>

                    <tr class="gap-6">
                        <th scope="row" class="px-6 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            5-02-16-020
                        </th>
                        <td class="pr-10 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            Fidelity Bond Premiums
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="mooe-form-fibopre-budget" class="w-36 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="₱ 0.00">
                            </form>
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="mooe-form-fibopre-justification" class="w-96 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description">
                            </form>
                        </td>
                    </tr>

                    <tr class="gap-6">
                        <th scope="row" class="px-6 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            5-02-16-030
                        </th>
                        <td class="pr-10 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            Insurance Expenses
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="mooe-form-insrncexpnses-budget" class="w-36 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="₱ 0.00">
                            </form>
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="mooe-form-insrncexpnses-justification" class="w-96 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description">
                            </form>
                        </td>
                    </tr>

                    <tr class="gap-6">
                        <th scope="row" class="px-6 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            5-02-99-010
                        </th>
                        <td class="pr-10 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            Advertising Expenses
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="mooe-form-advrtsingexpnses-budget" class="w-36 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="₱ 0.00">
                            </form>
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="mooe-form-advrtsingexpnses-justification" class="w-96 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description">
                            </form>
                        </td>
                    </tr>

                    <tr class="gap-6">
                        <th scope="row" class="px-6 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            5-02-99-020
                        </th>
                        <td class="pr-10 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            Printing and Publication Expenses
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="mooe-form-pripubexpnses-budget" class="w-36 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="₱ 0.00">
                            </form>
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="mooe-form-pripubexpnses-justification" class="w-96 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description">
                            </form>
                        </td>
                    </tr>

                    <tr class="gap-6">
                        <th scope="row" class="px-6 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            5-02-99-050
                        </th>
                        <td class="pr-10 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            Rent Expenses
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="mooe-form-rntxpnses-budget" class="w-36 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="₱ 0.00">
                            </form>
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="mooe-form-rntxpnses-justification" class="w-96 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description">
                            </form>
                        </td>
                    </tr>

                    <tr class="gap-6">
                        <th scope="row" class="px-6 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            5-02-99-060
                        </th>
                        <td class="pr-10 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            Membership Dues and Contributions to Organizations
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="mooe-form-mdco-budget" class="w-36 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="₱ 0.00">
                            </form>
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="mooe-form-mdco-justification" class="w-96 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description">
                            </form>
                        </td>
                    </tr>

                    <tr class="gap-6">
                        <th scope="row" class="px-6 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            5-02-99-070
                        </th>
                        <td class="pr-10 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            Subcription Expenses
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="mooe-form-sbcrptnexpnses-budget" class="w-36 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="₱ 0.00">
                            </form>
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="mooe-form-sbcrptnexpnses-justification" class="w-96 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description">
                            </form>
                        </td>
                    </tr>
                    
                    <tr class="gap-6">
                        <th scope="row" class="px-6 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            5-02-99-990
                        </th>
                        <td class="pr-10 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            Other Maintenance and Operating Expenses
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="mooe-form-omaopex-budget" class="w-36 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="₱ 0.00">
                            </form>
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="mooe-form-omaopex-justification" class="w-96 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description">
                            </form>
                        </td>
                    </tr>            
                </tbody>
            </table>
        </div>
    </div>

    <!-- Total MOOE: CALCULATION DAPAT-->
    <div class="flex justify-center items-center py-10">
        <div>
            <div class="w-full flex justify-start items-center gap-4">
                <label class="text-zinc-950 text-base font-semibold font-['Inter'] leading-normal text-center">Total Maintenance and Other Operating Expenses:</label>
                <div class="flex-shrink-0 w-32 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex">
                    <input type="justification" id="justification" class="w-full bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="₱ 0.00">
                </div>
            </div>
        </div>
    </div>

    <!-- Submit Button -->
    <div class="w-[1200px] flex justify-end">
        <button class="w-30 h-10 px-4 py-2 bg-indigo-800 rounded-md shadow justify-center items-center text-white text-base font-medium font-['Inter'] leading-tight">Submit</button>
    </div>

</div>