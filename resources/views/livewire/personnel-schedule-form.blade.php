<div> 

    <div class="w-[200px] h-[60px] px-5 py-3.5 bg-white rounded-xl shadow border border-zinc-200 flex-col justify-start items-start gap-2.5 inline-flex mx-2">
        
        <!-- Item No. -->
        <form class="space-y-2" action="#">
            <div class="flex justify-center items-center flex-row">
                <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal mr-2">Item No.</label>
                <form class="flex">
                    <input type="text" id="persched-form-itmno" class="w-[80px] h-8 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="0" />
                </form>
            </div>
        </form>
    </div>

    <div class="space-y-[20px]">
       
        <!-- Grade Step -->
        <div class="w-[250px] h-24 px-5 py-3.5 bg-white rounded-xl shadow border border-zinc-200 flex-col justify-start items-start gap-2.5 inline-flex mx-2">
            <form class="space-y-2" action="#">
                <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Grade Step</label>
                <form class="flex-grow-0 flex-shrink-0">
                    <input type="text" id="persched-form-grdstp" class="w-[200px] h-8 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description" />
                </form>
            </form>
        </div>

        <!-- Position -->
        <div class="w-[250px] h-24 px-5 py-3.5 bg-white rounded-xl shadow border border-zinc-200 flex-col justify-start items-start gap-2.5 inline-flex mx-2">
            <form class="space-y-2" action="#">
                <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Position</label>
                <form class="flex-grow-0 flex-shrink-0">
                    <input type="text" id="persched-form-pstn" class="w-[200px] h-8 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Chief (By Designation)" />
                </form>
            </form>
        </div>

        <!-- Name of Incumbent -->
        <div class="w-[250px] h-24 px-5 py-3.5 bg-white rounded-xl shadow border border-zinc-200 flex-col justify-start items-start gap-2.5 inline-flex mx-2">
            <form class="space-y-2" action="#">
                <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Name of Incumbent</label>
                <form class="flex-grow-0 flex-shrink-0">
                    <input type="text" id="persched-form-nmfinc" class="w-[200px] h-8 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description" />
                </form>
            </form>
        </div>
    </div>

    <!-- CY 2023 (Current Year) Actual Salary/Annum  -->
    <div class="mt-[20px]">
        <div class="w-[790px] h-[60px] px-5 py-3.5 bg-white rounded-xl shadow border border-zinc-200 flex-col justify-start items-start gap-2.5 inline-flex mx-2 ">
            <div class="space-y-2" action="#">
                <div class="flex items-center flex-row">
                    <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">CY 2023 (Current Year) Actual Salary/Annum</label>
                    <form class="flex ml-[210px] justify-end">
                        <input type="text" id="persched-form-crntyr" class="w-[230px] h-8 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="₱ 0.00" />
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- CY 2024 (Budget Year) Proposed Salary/Annum  -->
    <div class="mt-[20px]">
        <div class="w-[790px] h-[60px] px-5 py-3.5 bg-white rounded-xl shadow border border-zinc-200 flex-col justify-start items-start gap-2.5 inline-flex mx-2 ">
            <div class="space-y-2" action="#">
                <div class="flex items-center flex-row">
                    <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">CY 2024 (Budget Year) Proposed Salary/Annum </label>
                    <form class="flex ml-[190px]">
                        <input type="text" id="persched-form-bdgtyr" class="w-[230px] h-8 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="₱ 0.00" />
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="space-y-[20px]">

        <!-- Increase -->
        <div class="w-[250px] h-24 px-5 py-3.5 bg-white rounded-xl shadow border border-zinc-200 flex-col justify-start items-start gap-2.5 inline-flex mx-2">
            <form class="space-y-2" action="#">
                <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Increase</label>
                <form class="flex-grow-0 flex-shrink-0">
                    <input type="text" id="persched-form-incrs" class="w-[200px] h-8 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description" />
                </form>
            </form>
        </div>

        <!-- Totals -->
        <div class="flex-row w-[520px] h-24 px-5 py-3.5 bg-white rounded-xl shadow border border-zinc-200 justify-start items-start gap-2.5 inline-flex mx-2">
            
            <!-- Sub-total -->
            <form class="space-y-2" action="#">
                <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Sub-total</label>
                <form class="flex-grow-0 flex-shrink-0">
                    <input type="text" id="persched-form-subttl" class="w-[200px] h-8 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="₱ 0.00">
                </form>
            </form>
            
            <!-- Total -->
            <form class="space-y-2 ml-[20px]" action="#">
                <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Total</label>
                <form class="flex-grow-0 flex-shrink-0">
                    <input type="text" id="persched-form-ttl" class="w-[200px] h-8 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="₱ 0.00" />
                </form>
            </form>
        </div>
    </div>

    <!-- Submit button -->
    <div class="flex flex-row">
        <div class="mt-4 ml-[715px] bg-indigo-800 rounded-md shadow">
            <button type="button" class="w-30 h-10 px-4 py-2 justify-center items-center gap-2 inline-flex text-white text-base font-medium font-['Inter'] leading-tight">Submit</button>
        </div>
    </div>
    
</div>
