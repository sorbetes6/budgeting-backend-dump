<div class="flex flex-col grid grid-cols-1 md:grid-cols-1 sm:grid-cols-1 px-7 py-32">
   <!-- Top Bar -->
   <div class="flex w-[1420px]">
        <div class="w-[1420px] rounded-lg p-4 relative">
            <div class="absolute shadow inset-x-0 bottom-0 h-[1px] bg-gray-200"></div>
            <div class="flex flex-col gap-y-1.5 text-indigo-800 text-[25px] font-extrabold font-['Inter'] leading-5">Budget Utilization Request
                <div class="flex flex-row items-center">
                    <label class="text-yellow-700 text-sm font-normal font-['Inter'] leading-loose mr-1">Payment Request ></label>
                    <label class="text-black text-sm font-normal font-['Inter'] leading-loose">Budget Utilization Request Form No.</label>
                </div>
                <div class="flex ml-[835px] mt-[-50px] items-start">
                    @include('components\layouts.bur-import-export-add')
                </div>
            </div>
        </div>
    </div>

</div>
