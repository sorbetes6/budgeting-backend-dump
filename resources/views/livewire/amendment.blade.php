<div class="mx-80 my-32 space-y-5">
    <div class="text-black text-2xl font-medium font-['Inter'] leading-9 my-30">Amendment</div>
    <!--1st Row-->
    <div class="flex flex-col sm:flex-row sm:gap-x-6 sm:my-10">
        <div class="w-full sm:w-52 h-24 relative bg-white rounded-xl shadow border border-zinc-200 content-center justify-start">
            <form class="space-y-2" action="#">
                <div class="flex flex-col m-4 gap-y-3">
                    <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Plan No. being revised:</label>
                    <input type="date" id="amendment-revise" class="w-full h-8 px-2 py-1.5 bg-white rounded-md shadow border border-zinc-200 focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight gap-1.5"/>
                </div>
            </form>
        </div>
        <div class="w-full sm:w-52 h-24 relative bg-white rounded-xl shadow border border-zinc-200 content-center justify-start">
            <form class="space-y-2" action="#">
                <div class="flex flex-col m-4 gap-y-3">
                    <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Date of Revision:</label>
                    <input type="date" id="amendment-date-revision" class="w-full h-8 px-2 py-1.5 bg-white rounded-md shadow border border-zinc-200 focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight gap-1.5"/>
                </div>
            </form>
        </div>
        <div class="w-full sm:w-52 h-24 relative bg-white rounded-xl shadow border border-zinc-200 content-center justify-start">
            <form class="space-y-2" action="#">
                <div class="flex flex-col m-4 gap-y-3">
                    <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Planned Ammount</label>
                    <input type="text" id="amendment-planned-amount" class="w-full h-8 px-2 py-1.5 bg-white rounded-md shadow border border-zinc-200 focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight gap-1.5" placeholder="₱ 0.00"/>
                </div>
            </form>
        </div>
        <div class="w-full sm:w-52 h-24 relative bg-white rounded-xl shadow border border-zinc-200 content-center justify-start">
            <form class="space-y-2" action="#">
                <div class="flex flex-col m-4 gap-y-3">
                    <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Date Submitted:</label>
                    <input type="date" id="amendment-date-submitted" class="w-full h-8 px-2 py-1.5 bg-white rounded-md shadow border border-zinc-200 focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight gap-1.5"/>
                </div>
            </form>
        </div>
    </div>
    <div class="text-black text-base font-medium font-['Inter'] leading-9">Items to be Substituted/Replaced</div>
    <div class="max-w-5xl h-80 px-8 py-3 bg-white rounded-xl shadow border border-zinc-200 content-center justify-start space-y-5">
        <div class="flex flex-row gap-x-6">
            <form class="space-y-2" action="#">
                <div class="flex flex-col gap-y-3">
                    <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Item No.:</label>
                    <input type="text" id="amendment-item" class="w-20 h-8 px-2 py-1.5 bg-white rounded-md shadow border border-zinc-200 focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight gap-1.5" placeholder="0" />
                </div>
            </form>
            <form class="space-y-2" action="#">
                <div class="flex flex-col gap-y-3">
                    <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Description:</label>
                    <input type="text" id="amendment-description" class="w-96 h-8 px-2 py-1.5 bg-white rounded-md shadow border border-zinc-200 focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight gap-1.5" placeholder="Description" />
                </div>
            </form>
            <form class="space-y-2" action="#">
                <div class="flex flex-col gap-y-3">
                    <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Quantity:</label>
                    <input type="text" id="amendment-quantity" class="w-20 h-8 px-2 py-1.5 bg-white rounded-md shadow border border-zinc-200 focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight gap-1.5" placeholder="0" />
                </div>
            </form>
            <form class="space-y-2" action="#">
                <div class="flex flex-col gap-y-3">
                    <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Unit:</label>
                    <input type="text" id="amendment-unit" class="w-20 h-8 px-2 py-1.5 bg-white rounded-md shadow border border-zinc-200 focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight gap-1.5" placeholder="Description" />
                </div>
            </form>
            <form class="space-y-2" action="#">
                <div class="flex flex-col gap-y-3">
                    <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Unit Cost:</label>
                    <input type="text" id="amendment-unit-cost" class="w-20 h-8 px-2 py-1.5 bg-white rounded-md shadow border border-zinc-200 focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight gap-1.5" placeholder="₱ 0.00" />
                </div>
            </form>
            <form class="space-y-2" action="#">
                <div class="flex flex-col gap-y-3">
                    <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Ammount:</label>
                    <input type="text" id="amendment-ammount" class="w-20 h-8 px-2 py-1.5 bg-white rounded-md shadow border border-zinc-200 focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight gap-1.5" placeholder="₱ 0.00" />
                </div>
            </form>
        </div>
        <div class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Procurement Already Effected</div>
        <div class="flex flex-row gap-x-6">
            <form class="space-y-2" action="#">
                <div class="flex flex-col gap-y-3">
                    <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Quantity:</label>
                    <input type="text" id="amendment-quantity-effected" class="w-20 h-8 px-2 py-1.5 bg-white rounded-md shadow border border-zinc-200 focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight gap-1.5" placeholder="0" />
                </div>
            </form>
            <form class="space-y-2" action="#">
                <div class="flex flex-col gap-y-3">
                    <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Ammount:</label>
                    <input type="text" id="amendment-ammount-effected" class="w-20 h-8 px-2 py-1.5 bg-white rounded-md shadow border border-zinc-200 focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight gap-1.5" placeholder="₱ 0.00" />
                </div>
            </form>
            <form class="space-y-2" action="#">
                <div class="flex flex-col gap-y-3">
                    <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Justification:</label>
                    <input type="text" id="amendment-justification" class="w-[695px] h-8 px-2 py-1.5 bg-white rounded-md shadow border border-zinc-200 focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight gap-1.5" placeholder="Description" />
                </div>
            </form>
        </div>

        <button class="w-44 h-9 px-4 py-2 bg-white rounded-md shadow border border-zinc-200 justify-center items-center gap-2 inline-flex">
            <div class="w-4 h-4 relative">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path d="M3.33301 8.00065H12.6663M7.99967 3.33398V12.6673" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <span class="text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Add another data</span>
        </button>
    </div>

    <button class="w-[1200px] flex justify-end mt-4">
        <span class="w-30 h-10 px-4 py-2 bg-indigo-800 rounded-md shadow justify-center items-center text-white text-base font-medium font-['Inter'] leading-tight">Submit</span>
    </button>


</div>
