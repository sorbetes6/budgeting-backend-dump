<div class="px-6 py-32">
    <!-- Header -->
    <div class="text-black text-2xl font-medium font-['Inter'] leading-9">Project Procurement Management Plan</div>

    <!-- Select College/Office -->
    <div class="w-[280px] py-6 rounded-lg">
        <select id="college_office" name="college_office" class="block w-full h-10 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" style="text-indent: 10px;">
            <option disabled selected>Select College/Office</option>
            <option value="College 1">College 1</option>
            <option value="College 2">College 2</option>
            <option value="">...</option>
        </select>
    </div>

    <div class="flex w-[1200px]">
        <!-- 1st Program Title -->
        <div class="w-[585px] h-[90px] px-5 py-6 bg-white border border-gray-200 rounded-lg shadow sm:p-4">
            <form class="space-y-2" action="#">
                <div class="h-6 flex-col justify-start items-start flex">
                    <label class="text-zinc-950 text-base font-semibold font-['Inter'] leading-normal">Program Title</label>
                    <form class="flex-grow-0 flex-shrink-0">
                        <input type="text" id="ppmp-form-progtitle1" class="w-[550px] h-8 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center inline-flex focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description" />
                    </form>
                </div>
            </form>
        </div>

        <!-- 2nd Program Title -->
        <div class="w-[585px] h-[90px] px-5 py-6 bg-white border border-gray-200 rounded-lg shadow sm:p-4 mx-[30px]">
            <form class="space-y-2" action="#">
                <div class="h-6 flex-col justify-start items-start flex">
                    <label class="text-zinc-950 text-base font-semibold font-['Inter'] leading-normal">Program Title</label>
                    <form class="flex-grow-0 flex-shrink-0">
                        <input type="text" id="ppmp-form-progtitle2" class="w-[550px] h-8 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center inline-flex focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description" />
                    </form>
                </div>
            </form>
        </div>
    </div>

    <!-- Row 1 -->
    <div class="flex my-5 w-[1200px]">
        
        <!-- Type of Contract -->
        <div class="w-[220px] h-24 px-4 py-3.5 bg-white rounded-xl shadow border border-zinc-200 flex-col justify-start items-start inline-flex">
            <form class="space-y-2" action="#">
                <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Type of Contract</label>
                <form class="flex-grow-0 flex-shrink-0">
                    <input type="text" id="ppmp-form-typfcntrct" class="w-40 h-8 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description" />
                </form>
            </form>
        </div>

        <!-- Account Title -->
        <div class="w-[220px] h-24 px-4 py-3.5 bg-white rounded-xl shadow border border-zinc-200 flex-col justify-start items-start gap-2.5 inline-flex ml-[25px]">
            <form class="space-y-2" action="#">
                <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Account Title</label>
                <form class="flex-grow-0 flex-shrink-0">
                    <input type="text" id="ppmp-form-accnttle" class="w-40 h-8 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description" />
                </form>
            </form>
        </div>

        <!-- Item/Name -->
        <div class="w-[220px] h-24 px-4 py-3.5 bg-white rounded-xl shadow border border-zinc-200 flex-col justify-start items-start gap-2.5 inline-flex ml-[25px]">
            <form class="space-y-2" action="#">
                <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Item/Name</label>
                <form class="flex-grow-0 flex-shrink-0">
                    <input type="text" id="ppmp-form-itmnme" class="w-40 h-8 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description" />
                </form>
            </form>
        </div>

        <!-- Unit of Issue -->
        <div class="w-[220px] h-24 px-4 py-3.5 bg-white rounded-xl shadow border border-zinc-200 flex-col justify-start items-start gap-2.5 inline-flex ml-[25px]">
            <form class="space-y-2" action="#">
                <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Unit of Issue</label>
                <form class="flex-grow-0 flex-shrink-0">
                    <input type="text" id="ppmp-form-untfissue" class="w-40 h-8 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description" />
                </form>
            </form>
        </div>

        <!-- Unit Price -->
        <div class="w-[220px] h-24 px-4 py-3.5 bg-white rounded-xl shadow border border-zinc-200 flex-col justify-start items-start gap-2.5 inline-flex ml-[25px]">
            <form class="space-y-2" action="#">
                <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Unit Price</label>
                <form class="flex-grow-0 flex-shrink-0">
                    <input type="text" id="ppmp-form-untprce" class="w-40 h-8 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="₱0.00" />
                </form>
            </form>
        </div>

    </div>

    <!-- Row 2 -->
    <div class="flex my-5 w-[1200px]">
       
        <!-- Quantity -->
        <div class="w-[220px] h-24 px-4 py-2 bg-white rounded-xl shadow border border-zinc-200 flex-col justify-start items-start gap-2.5 inline-flex">
            <form class="space-y-2" action="#">
                <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Quantity</label>
                <form class="flex-grow-0 flex-shrink-0">
                    <input type="text" id="ppmp-form-qntty" class="w-40 h-8 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="0" />
                </form>
            </form>
        </div>

        <!-- Account Code -->
        <div class="w-[220px] h-24 px-4 py-2 bg-white rounded-xl shadow border border-zinc-200 flex-col justify-start items-start gap-2.5 inline-flex ml-[25px]">
            <form class="space-y-2" action="#">
                <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Account Code</label>
                <form class="flex-grow-0 flex-shrink-0">
                    <input type="text" id="ppmp-form-accntcde" class="w-40 h-8 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description" />
                </form>
            </form>
        </div>

        <!-- Description -->
        <div class="w-[220px] h-24 px-4 py-2 bg-white rounded-xl shadow border border-zinc-200 flex-col justify-start items-start gap-2.5 inline-flex ml-[25px]">
            <form class="space-y-2" action="#">
                <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Description</label>
                <form class="flex-grow-0 flex-shrink-0">
                    <input type="text" id="ppmp-form-dscrptn" class="w-40 h-8 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description" />
                </form>
            </form>
        </div>

        <!-- Procurement Method -->
        <div class="w-[220px] h-24 px-4 py-2 bg-white rounded-xl shadow border border-zinc-200 flex-col justify-start items-start gap-2.5 inline-flex ml-[25px]">
            <form class="space-y-2" action="#">
                <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Procurement Method</label>
                <form class="flex-grow-0 flex-shrink-0">
                    <input type="text" id="ppmp-form-prcrmntmthd" class="w-40 h-8 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description" />
                </form>
            </form>
        </div>

        <!-- Estimated Budget -->
        <div class="w-[220px] h-24 px-4 py-2 bg-white rounded-xl shadow border border-zinc-200 flex-col justify-start items-start gap-2.5 inline-flex ml-[25px]">
            <form class="space-y-2" action="#">
                <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Estimated Budget</label>
                <form class="flex-grow-0 flex-shrink-0">
                    <input type="text" id="ppmp-form-estmtdbdgt" class="w-40 h-8 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="₱0.00" />
                </form>
            </form>
        </div>
    </div>

    <!-- Delivery/Implementation Schedule -->
    <div class="flex flex-col">
        <div class="w-[1200px] h-40 px-5 py-3.5 bg-white rounded-xl shadow border border-zinc-200 flex-col justify-start items-start gap-2.5 inline-flex">
            <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Delivery/Implementation Schedule</label>
            <form class="w-[1150px]">
                <input type="text" id="ppmp-form-schdle" class="w-full h-[100px] py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description" style="overflow-wrap: break-word;" />
            </form>
        </div>
    </div>


    <!-- Add another data -->
    <button class="w-44 h-9 px-4 py-2 bg-white rounded-md shadow border border-zinc-200 justify-center items-center gap-2 inline-flex my-6">
        <div class="w-4 h-4 relative">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                <path d="M3.33301 8.00065H12.6663M7.99967 3.33398V12.6673" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>
        <label type="button" class="text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Add another data</label>
    </button>

    <!-- Submit -->
    <div class="w-[1200px] flex justify-end mt-4">
        <button class="w-30 h-10 px-4 py-2 bg-indigo-800 rounded-md shadow justify-center items-center text-white text-base font-medium font-['Inter'] leading-tight">Submit</button>
    </div>
    
</div>
