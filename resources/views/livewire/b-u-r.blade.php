<div class="mx-80 mt-[130px] mb-8">

    <!-- Header -->
    <div class="text-black text-2xl font-medium font-['Inter'] leading-9 my-4">Budget Utilization Request</div>

    <!-- 1st Row -->
    <div class="w-[150px] h-[60px] px-5 py-3.5 bg-white rounded-xl shadow border border-zinc-200 flex-col justify-start items-start gap-2.5 inline-flex mx-2">
        
        <!-- No. -->
        <form class="space-y-2" action="#">
            <div class="flex justify-center items-center flex-row">
                <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal mr-2">No.</label>
                <form class="flex">
                    <input type="text" id="bur-no." class="w-[80px] h-8 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="0" />
                </form>
            </div>
        </form>
    </div>

    <!-- 2nd Row -->
    <div class="space-y-[20px]">

        <!-- Payee -->
        <div class="w-[250px] h-24 px-5 py-3.5 bg-white rounded-xl shadow border border-zinc-200 flex-col justify-start items-start gap-2.5 inline-flex mx-2">
            <form class="space-y-2" action="#">
                <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Payee</label>
                <form class="flex-grow-0 flex-shrink-0">
                    <input type="text" id="bur-payee" class="w-[200px] h-8 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description" />
                </form>
            </form>
        </div>

        <!-- Office -->
        <div class="w-[250px] h-24 px-5 py-3.5 bg-white rounded-xl shadow border border-zinc-200 flex-col justify-start items-start gap-2.5 inline-flex mx-2">
            <form class="space-y-2" action="#">
                <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Office</label>
                <form class="flex-grow-0 flex-shrink-0">
                    <input type="text" id="bur-office" class="w-[200px] h-8 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description" />
                </form>
            </form>
        </div>

        <!-- Address -->
        <div class="w-[250px] h-24 px-5 py-3.5 bg-white rounded-xl shadow border border-zinc-200 flex-col justify-start items-start gap-2.5 inline-flex mx-2">
            <form class="space-y-2" action="#">
                <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Address</label>
                <form class="flex-grow-0 flex-shrink-0">
                    <input type="text" id="bur-address" class="w-[200px] h-8 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description" />
                </form>
            </form>
        </div>
    </div>

    <!-- Third Row -->
    <div class="space-y-4 mt-[20px]">
        <div class="w-[790px] h-[140px] px-5 py-3.5 bg-white rounded-xl shadow border border-zinc-200 flex-col justify-start items-start gap-2.5 inline-flex mx-2 ">

            <div class="mt-2 space-y-2" action="#">
                <div class="flex justify-center items-center flex-row">
                    <!-- Responsibility Center -->
                    <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Responsibility Center: </label>
                    <form class="flex ml-2">
                        <input type="text" id="bur-center" class="w-[230px] h-8 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description" />
                    </form>

                    <!-- Account Code -->
                    <label class="ml-4 text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Account Code: </label>
                    <form class="flex ml-2">
                        <input type="text" id="bur-code" class="w-[230px] h-8 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description" />
                    </form>
                </div>
            </div>

            <div class="mt-5 space-y-2" action="#">
                <div class="flex justify-center items-center flex-row">
                    <!-- Particulars -->
                    <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Particulars: </label>
                    <form class="flex ml-[78px]">
                        <input type="text" id="bur-particulars" class="w-[230px] h-8 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description" />
                    </form>
                    
                    <!-- Amount -->
                    <label class="ml-4 text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Amount: </label>
                    <form class="flex ml-[52px]">
                        <input type="text" id="bur-amount" class="w-[230px] h-8 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description" />
                    </form>
                </div>
            </div>

        </div>
    </div>

    <!-- Fourth Row -->
    <div class="flex flex-row">

        <!-- Add another data -->
        <button class="w-44 h-9 px-4 py-2 bg-white rounded-md shadow border border-zinc-200 justify-center items-center gap-2 inline-flex my-[20px] mx-2">
            <div class="w-4 h-4 relative">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path d="M3.33301 8.00065H12.6663M7.99967 3.33398V12.6673" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <span type="button" class="text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Add another data</span>
        </button>

        <!-- Submit button -->
        <div class="mt-[80px] ml-[520px] bg-indigo-800 rounded-md shadow">
            <button type="button" class="w-30 h-10 px-4 py-2 justify-center items-center gap-2 inline-flex text-white text-base font-medium font-['Inter'] leading-tight">Submit</button>
        </div>
    </div>

</div>