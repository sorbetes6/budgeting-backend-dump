<div>
    <div class="flex">
        <!--Card 1-->
        <div class="block w-[583px] h-72 px-8 py-6 bg-white border border-gray-200 rounded-lg shadow">
            <form class="space-y-4" action="#">
                <label class="text-zinc-950 text-base font-semibold font-['Inter'] leading-normal">Statement of Objectives</label>
                <div class="h-24 flex-col justify-start items-start gap-1 flex">
                    <label for="major" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Major</label>
                    <input type="major" name="major" id="major" class="w-[530px] h-[64px] px-3 py-2 bg-white rounded-md shadow border text-xs border-zinc-200 focus:ring-blue-500 focus:border-blue-500" placeholder="Description" />
                </div>
                <div>
                    <label for="specific" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Specific</label>
                    <input type="specific" name="specific" id="specific" class="w-[530px] h-[64px] px-3 py-2 bg-white rounded-md shadow border text-xs border-zinc-200 focus:ring-blue-500 focus:border-blue-500" placeholder="Description" />
                </div>
            </form>
        </div>

        <div>
            <!--Card 3-->
            <div class="block w-[583px] h-32 px-8 py-6 bg-white border border-gray-200 rounded-lg shadow mx-7">
                <form class="space-y-4" action="#">
                    <label class="text-zinc-950 text-base font-semibold font-['Inter'] leading-normal">Activity/Justification</label>
                    <div class="h-24 flex-col justify-start items-start gap-1 flex">
                        <input type="major" name="major" id="major" class="w-[530px] h-9 px-3 py-2 bg-white rounded-md shadow border text-xs border-zinc-200 focus:ring-blue-500 focus:border-blue-500" placeholder="Description" />
                    </div>
                </form>
            </div>
            <!--Card 4-->
            <div class="block w-[583px] h-32 px-8 py-6 bg-white border border-gray-200 rounded-lg shadow my-8 mx-7">
                <form class="space-y-4" action="#">
                    <label class="text-zinc-950 text-base font-semibold font-['Inter'] leading-normal required">Method of Accomplishing Objectives</label>
                    <div class="h-24 flex-col justify-start items-start gap-1 flex">
                        <input type="major" name="major" id="major" class="w-[530px] h-9 px-3 py-2 bg-white rounded-md shadow border text-xs border-zinc-200 focus:ring-blue-500 focus:border-blue-500" placeholder="Description" required />
                    </div>
                </form>
            </div>
        </div>
        
    </div>
    
    <!--Card 2-->
    <div class="w-[583px] px-8 py-6 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700 my-3">
        <div class="flex items-center justify-between mb-4">
            <label class="text-zinc-950 text-base font-semibold font-['Inter'] leading-normal">Item of Expenditures</label>
            <label class="text-zinc-950 text-base font-semibold font-['Inter'] leading-normal">Proposed Budget</label>
        </div>
        <div class="flow-root">
            <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700 ">
                <li class="py-3 sm:py-4">
                    <div class="flex items-center gap-56">
                        <div class="flex-1 min-w-0 ms-4">
                            <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">Personal Services:</label>
                        </div>
                        <div class="inline-flex items-center dark:text-white grow shrink basis-0 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight">
                            <input type="specific" name="specific" id="specific" class="w-28 h-8 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex focus:ring-blue-500 focus:border-blue-500" placeholder="₱0.00" />
                        </div>
                    </div>
                </li>
                <li class="py-3 sm:py-4">
                    <div class="flex items-center gap-56">
                        <div class="flex-1 min-w-0 ms-4">
                            <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">Maintenance and other Operating Expenses:</label>
                        </div>
                        <div class="inline-flex items-center dark:text-white grow shrink basis-0 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight">
                            <input type="specific" name="specific" id="specific" class="w-28 h-8 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex focus:ring-blue-500 focus:border-blue-500" placeholder="₱0.00" />
                        </div>
                    </div>
                </li>
                <li class="py-3 sm:py-4">
                    <div class="flex gap-56">
                        <div class="flex-1 min-w-0 ms-4">
                            <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">Capital/Equipment Outlay:</label>
                        </div>
                        <div class="inline-flex items-center dark:text-white grow shrink basis-0 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight">
                            <input type="specific" name="specific" id="specific" class="w-28 h-8 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex focus:ring-blue-500 focus:border-blue-500" placeholder="₱0.00" />
                        </div>
                    </div>
                </li>
                <li class="py-3 sm:py-4">
                    <div class="flex items-center gap-56">
                        <div class="flex-1 min-w-0 ms-4">
                            <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">Total:</label>
                        </div>
                        <div class="inline-flex items-center dark:text-white grow shrink basis-0 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight">
                            <input type="specific" name="specific" id="specific" class="w-28 h-8 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex focus:ring-blue-500 focus:border-blue-500" placeholder="₱0.00" />
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
