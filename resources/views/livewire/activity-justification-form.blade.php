<div class="px-6 py-32">
    <!-- Header -->
    <div class="text-black text-2xl font-medium font-['Inter'] leading-9">Activity Justification</div>

    <!-- Select College/Office -->
    <div class="w-[280px] py-6 rounded-lg">
        <select id="college_office" name="college_office" class="block w-full h-10 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" style="text-indent: 10px;">
            <option disabled selected>Select College/Office</option>
            <option value="College 1">College 1</option>
            <option value="College 2">College 2</option>
            <option value="">...</option>
        </select>
    </div>

    <div class="flex flex-col sm:flex-row">
        <!-- Statement of Objectives -->
        <div class="w-[583px] h-[242px] px-6 py-8 bg-white rounded-xl shadow border border-zinc-200">
            <div class="mt-[-20px] space-y-4" action="#">
                <label class="text-zinc-950 text-base font-semibold font-['Inter'] leading-normal">Statement of Objectives</label>
                <!-- Major -->
                <form class="h-[80px] flex-col justify-start items-start gap-3 flex">
                    <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Major</label>
                    <input type="text" id="activity-major" class="w-[530px] h-9 px-3 py-2 bg-white rounded-md shadow border text-sm border-zinc-200 focus:ring-blue-500 focus:border-blue-500" placeholder="Description" />
                </form>
                <!-- Specific -->
                <form class="h-[80px] flex-col justify-start items-start gap-3 flex">
                    <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Specific</label>
                    <input type="text" id="activity-specific" class="w-[530px] h-9 px-3 py-2 bg-white rounded-md shadow border text-sm border-zinc-200 focus:ring-blue-500 focus:border-blue-500" placeholder="Description" />
                </form>
            </div>
        </div>

        <div class="flex flex-col justify-items-center">
            <!-- Activity/Justification -->
            <div class="w-[583px] h-[110px] px-6 py-8 bg-white rounded-xl shadow border border-zinc-200 mx-4">
                <div class="mt-[-20px] space-y-4" action="#">
                    <label class="text-zinc-950 text-base font-semibold font-['Inter'] leading-normal">Activity/Justification</label>
                    <form class="h-24 flex-col justify-start items-start gap-1 flex">
                        <input type="text" id="activity-justification" class="w-[530px] h-9 px-3 py-2 bg-white rounded-md shadow border text-sm border-zinc-200 focus:ring-blue-500 focus:border-blue-500" placeholder="Description" />
                    </form>
                </div>
            </div>
            <!-- Method of Accomplishing Objectives -->
            <div class="w-[583px] h-[110px] px-6 py-8 bg-white rounded-xl shadow border border-zinc-200 mx-4 mt-5">
                <div class="mt-[-20px] space-y-4" action="#">
                    <label class="text-zinc-950 text-base font-semibold font-['Inter'] leading-normal required">Method of Accomplishing Objectives</label>
                    <form class="h-24 flex-col justify-start items-start gap-1 flex">
                        <input type="text" id="activity-method" class="w-[530px] h-9 px-3 py-2 bg-white rounded-md shadow border text-sm border-zinc-200 focus:ring-blue-500 focus:border-blue-500" placeholder="Description" required />
                    </form>
                </div>
            </div>
        </div>

    </div>

    <div class="flex">

        <!-- Item of Expenditures -->
        <div class="w-[583px] px-8 py-6 bg-white rounded-xl shadow border border-zinc-200 my-3">
            <!-- Header -->
            <div class="flex items-center justify-between mb-4">
                <label class="text-zinc-950 text-base font-semibold font-['Inter'] leading-normal">Item of Expenditures</label>
                <label class="text-zinc-950 text-base font-semibold font-['Inter'] leading-normal">Proposed Budget</label>
            </div>
            <!-- Body -->
            <div class="flow-root">
                <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-200 ">
                    <!-- Personal Services -->
                    <li class="py-3 sm:py-4">
                        <div class="flex items-center">
                            <div class="flex-1 min-w-0">
                                <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">Personal Services:</label>
                            </div>
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="number" step="0.01" id="activity-personal-services" class="w-32 h-8 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="₱0.00" />
                            </form>
                        </div>
                    </li>
                    <!-- Maintenance and other Operating Expenses -->
                    <li class="py-3 sm:py-4">
                        <div class="flex items-center">
                            <div class="flex-1 min-w-0">
                                <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">Maintenance and other Operating Expenses:</label>
                            </div>
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="number" step="0.01" id="activity-mooe" class="w-32 h-8 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="₱0.00" />
                            </form>
                        </div>
                    </li>
                    <!-- Capital/Equipment Outlay -->
                    <li class="py-3 sm:py-4">
                        <div class="flex items-center">
                            <div class="flex-1 min-w-0">
                                <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">Capital/Equipment Outlay:</label>
                            </div>
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="number" step="0.01" id="activity-outlay" class="w-32 h-8 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="₱0.00" />
                            </form>
                        </div>
                    </li>
                    <!-- Total -->
                    <li class="py-3 sm:py-4">
                        <div class="flex items-center">
                            <div class="flex-1 min-w-0">
                                <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">Total:</label>
                            </div>
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="number" step="0.01" id="activity-total-justification" class="w-32 h-8 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="₱0.00" />
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Cost per Student -->
        <div class="flex flex-col">
            <div class="w-[583px] h-min px-8 py-6 bg-white rounded-xl shadow border border-zinc-200 my-3 mx-4">
                <!-- Header -->
                <div class="flex items-center justify-between mb-2">
                    <label class="text-zinc-950 text-base font-semibold font-['Inter'] leading-normal">Cost per Student</label>
                </div>
                <!-- Body -->
                <div class="flow-root p-0">
                    <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-200">
                        <!-- Estimated Number of Students -->
                        <li class="sm:py-4">
                            <div class="flex items-center">
                                <div class="flex-1 min-w-0">
                                    <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">Estimated Number of Students:</label>
                                </div>
                                <div class="flex-grow-0 flex-shrink-0">
                                    <input type="number" id="activity-estimated-students" class="w-32 h-8 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="0" />
                                </div>
                            </div>
                        </li>
                        <!-- Total Cost (excluding Capital Outlay) -->
                        <li class="py-3 sm:py-4">
                            <div class="flex items-center">
                                <div class="flex-1 min-w-0">
                                    <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">Total Cost (excluding Capital Outlay):</label>
                                </div>
                                <div class="flex-grow-0 flex-shrink-0">
                                    <input type="number" step="0.01" id="activity-totalcost-justification" class="w-32 h-8 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="₱0.00" />
                                </div>
                            </div>
                        </li>
                        <!-- Cost per Student -->
                        <li class="py-3 sm:py-4">
                            <div class="flex items-center">
                                <div class="flex-1 min-w-0">
                                    <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">Cost per Student:</label>
                                </div>
                                <div class="flex-grow-0 flex-shrink-0">
                                    <input type="number" step="0.01"" id="activity-cost-student" class="w-32 h-8 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="₱0.00" />
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="flex flex-row-reverse"style="padding-right: 15px; padding-top: 20px">
        <button type="submit">
            <span class="w-30 h-10 px-4 py-2 bg-indigo-800 rounded-md shadow justify-center items-center gap-2 inline-flex text-white text-base font-medium font-['Inter'] leading-tight">Submit</button>
        </button>
    </div>
        </div>
    </div>


</div>
