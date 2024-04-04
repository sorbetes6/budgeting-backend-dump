<div>
    <div class="flex flex-col sm:flex-row">
        <!--Statement of Objectives-->
        <div class="w-[583px] h-[242px] px-6 py-6 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
            <form class="mt-[-20px] space-y-4" action="#">
                <label class="text-zinc-950 text-base font-semibold font-['Inter'] leading-normal">Statement of Objectives</label>
                <div class="h-[80px] flex-col justify-start items-start gap-3 flex">
                    <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Major</label>
                    <input type="text" id="activity-major" class="w-[530px] h-9 px-3 py-2 bg-white rounded-md shadow border text-xs border-zinc-200 focus:ring-blue-500 focus:border-blue-500"" placeholder="Description" />
                </div>
                <div class="h-[80px] flex-col justify-start items-start gap-3 flex">
                    <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Specific</label>
                    <input type="text" id="activity-specific" class="w-[530px] h-9 px-3 py-2 bg-white rounded-md shadow border text-xs border-zinc-200 focus:ring-blue-500 focus:border-blue-500"" placeholder="Description" />
                </div>
            </form>
        </div>

        <div class="flex flex-col">
            <!--Activity/Justification-->
            <div class="w-[583px] h-[110px] px-6 py-6 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700 mx-7">
                <form class="mt-[-20px] space-y-4" action="#">
                    <label class="text-zinc-950 text-base font-semibold font-['Inter'] leading-normal">Activity/Justification</label>
                    <div class="h-24 flex-col justify-start items-start gap-1 flex">
                        <input type="text" id="activity-justification" class="w-[530px] h-9 px-3 py-2 bg-white rounded-md shadow border text-sm border-zinc-200 focus:ring-blue-500 focus:border-blue-500" placeholder="Description" />
                    </div>
                </form>
            </div>
            <!--Method of Accomplishing Objectives-->
            <div class="w-[583px] h-[110px] px-6 py-6 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700 mx-7 mt-5">
                <form class="mt-[-20px] space-y-4" action="#">
                    <label class="text-zinc-950 text-base font-semibold font-['Inter'] leading-normal required">Method of Accomplishing Objectives</label>
                    <div class="h-24 flex-col justify-start items-start gap-1 flex">
                        <input type="text" id="activity-method" class="w-[530px] h-9 px-3 py-2 bg-white rounded-md shadow border text-sm border-zinc-200 focus:ring-blue-500 focus:border-blue-500" placeholder="Description" required />
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="flex">
        <!--Item of Expenditures-->
        <div class="w-[583px] px-8 py-6 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700 my-3">

            <div class="flex items-center justify-between mb-4">
                <label class="text-zinc-950 text-base font-semibold font-['Inter'] leading-normal">Item of Expenditures</label>
                <label class="text-zinc-950 text-base font-semibold font-['Inter'] leading-normal">Proposed Budget</label>
            </div>

            <div class="flow-root">
                <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700 ">
                    <li class="py-3 sm:py-4">
                        <div class="flex items-center">
                            <div class="flex-1 min-w-0">
                                <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">Personal Services:</label>
                            </div>
                            <div class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="activity-personal-services" class="w-32 h-8 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="₱0.00" />
                            </div>
                        </div>
                    </li>

                    <li class="py-3 sm:py-4">

                        <div class="flex items-center">
                            <div class="flex-1 min-w-0">
                                <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">Maintenance and other Operating Expenses:</label>
                            </div>
                            <div class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="activity-mooe" class="w-32 h-8 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="₱0.00" />
                            </div>
                        </div>
                    </li>

                    <li class="py-3 sm:py-4">
                        <div class="flex items-center">
                            <div class="flex-1 min-w-0">
                                <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">Capital/Equipment Outlay:</label>
                            </div>
                            <div class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="activity-outlay" class="w-32 h-8 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="₱0.00" />
                            </div>
                        </div>
                    </li>

                    <li class="py-3 sm:py-4">
                        <div class="flex items-center">
                            <div class="flex-1 min-w-0">
                                <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">Total:</label>
                            </div>
                            <div class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="activity-total-justification" class="w-32 h-8 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="₱0.00" />
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <!--Cost per Student-->
        <div class="flex flex-col">
            <div class="w-[583px] h-min px-8 py-6 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700 my-3 mx-10">
                <div class="flex items-center justify-between mb-2">
                    <label class="text-zinc-950 text-base font-semibold font-['Inter'] leading-normal">Cost per Student</label>
                </div>
                <div class="flow-root p-0">
                    <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700 ">
                        <li class="sm:py-4">
                            <div class="flex items-center">
                                <div class="flex-1 min-w-0">
                                    <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">Estimated Number of Students:</label>
                                </div>
                                <div class="flex-grow-0 flex-shrink-0">
                                    <input type="text" id="activity-estimated-students" class="w-32 h-8 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="₱0.00" />
                                </div>
                            </div>
                        </li>
                        <li class="py-3 sm:py-4">
                            <div class="flex items-center">
                                <div class="flex-1 min-w-0">
                                    <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">Total Cost (excluding Capital Outlay):</label>
                                </div>
                                <div class="flex-grow-0 flex-shrink-0">
                                    <input type="text" id="activity-totalcost-justification" class="w-32 h-8 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="₱0.00" />
                                </div>
                            </div>
                        </li>
                        <li class="py-3 sm:py-4">
                            <div class="flex items-center">
                                <div class="flex-1 min-w-0">
                                    <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">Cost per Student:</label>
                                </div>
                                <div class="flex-grow-0 flex-shrink-0">
                                    <input type="text" id="activity-cost-student" class="w-32 h-8 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="₱0.00" />
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-row-reverse">
        <button type="submit">
            <span class="w-30 h-10 px-4 py-2 bg-indigo-800 rounded-md shadow justify-center items-center gap-2 inline-flex text-white text-base font-medium font-['Inter'] leading-tight">Submit</button>
        </button>
    </div>
</div>
