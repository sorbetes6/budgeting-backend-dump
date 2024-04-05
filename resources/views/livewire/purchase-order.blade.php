<div class="mx-80 my-32">
    <div class="text-black text-2xl font-medium font-['Inter'] leading-9 mt-30 ">Purchase Order</div>
    <div class="flex flex-col sm:flex-row my-3 gap-x-9">
        <div class="flex flex-row sm:flex-col">
            <!--1st Row-->
            <div class="flex flex-col sm:flex-row gap-y-3 sm:gap-x-3">
                <div class="w-full h-full sm:h-12 relative bg-white rounded-xl shadow border border-zinc-200 content-center">
                    <form class="space-y-2" action="#">
                        <div class="flex flex-row items-center m-1 px-2 space-x-4">
                            <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal whitespace-nowrap">Purchase Order No.</label>
                            <input type="text" id="purchase-number" class="w-full h-8 py-1.5 bg-white rounded-md shadow border border-zinc-200 focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight gap-1.5" placeholder="0" />
                        </div>
                    </form>
                </div>
                <div class="w-full sm:w-64 h-12 relative bg-white rounded-xl shadow border border-zinc-200 content-center">
                    <form class="space-y-2" action="#">
                        <div class="flex flex-row items-center m-1 px-2 space-x-4">
                            <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal whitespace-nowrap">PR No.</label>
                            <input type="text" id="purchase-pr" class="w-40 h-8 px-2 py-1.5 bg-white rounded-md shadow border border-zinc-200 focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight gap-1.5" placeholder="0" />
                        </div>
                    </form>
                </div>
            </div>

            <!--2nd Row-->
            <div class="flex flex-col sm:flex-row gap-y-3 sm:gap-x-3 my-6">
                <div class="w-full sm:w-full h-full sm:h-12 relative bg-white rounded-xl shadow border border-zinc-200 content-center">
                    <form class="space-y-2" action="#">
                        <div class="flex flex-row items-center m-1 px-2 space-x-4">
                            <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal whitespace-nowrap">TIN: </label>
                            <input type="text" id="purchase-TIN" class="w-full h-8 px-2 py-1.5 bg-white rounded-md shadow border border-zinc-200 focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight gap-1.5" placeholder="0" />
                        </div>
                    </form>
                </div>
                <div class="w-full sm:w-64 h-12 relative bg-white rounded-xl shadow border border-zinc-200 content-center">
                    <form class="space-y-2" action="#">
                        <div class="flex flex-row items-center m-1 px-2 space-x-4">
                            <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal whitespace-nowrap">Tel No.</label>
                            <input type="text" id="purchase-trl" class="w-40 h-8 px-2 py-1.5 bg-white rounded-md shadow border border-zinc-200 focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight gap-1.5" placeholder="0" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--Right Cards-->
        <div class="flex flex-col sm:flex-row gap-y-3 sm:gap-x-3">
            <div class="w-full sm:w-52 h-24 relative bg-white rounded-xl shadow border border-zinc-200 content-center justify-start">
                <form class="space-y-2" action="#">
                    <div class="flex flex-col m-4 space-4 gap-y-3">
                        <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Supplier</label>
                        <input type="text" id="purchase-supplier" class="w-full h-8 px-2 py-1.5 bg-white rounded-md shadow border border-zinc-200 focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight gap-1.5" placeholder="Description" />
                    </div>
                </form>
            </div>
            <div class="w-full sm:w-52 h-24 relative bg-white rounded-xl shadow border border-zinc-200 content-center justify-start">
                <form class="space-y-2" action="#">
                    <div class="flex flex-col m-4 space-4 gap-y-3">
                        <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Date</label>
                        <input type="date" id="purchase-date" class="w-full h-8 px-2 py-1.5 bg-white rounded-md shadow border border-zinc-200 focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight gap-1.5"/>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="flex flex-col sm:flex-row gap-x-9">
        <!-- Address & Mode-->
        <div class="flex flex-row sm:flex-col gap-y-3">
            <div class="w-full sm:w-auto h-24 relative bg-white rounded-xl shadow border border-zinc-200 content-center justify-start">
                <form class="space-y-2" action="#">
                    <div class="flex flex-col m-4 space-4 gap-y-3">
                        <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Address</label>
                        <input type="text" id="purchase-address" class="w-full h-8 px-2 py-1.5 bg-white rounded-md shadow border border-zinc-200 focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight gap-1.5" placeholder="Description" />
                    </div>
                </form>
            </div>

        <!-- Mode of Procurement -->
        <div class="w-full sm:w-auto h-24 relative bg-white rounded-xl shadow border border-zinc-200 content-center justify-start">
            <form class="space-2" action="#">
                <div class="flex flex-col m-4 space-4 gap-y-3">
                    <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Mode of Procurement</label>
                    <input type="text" id="purchase-mode-procurement" class="w-full h-8 px-2 py-1.5 bg-white rounded-md shadow border border-zinc-200 focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight gap-1.5" placeholder="Description" />
                </div>
            </form>
        </div>
    </div>
        <div class="flex flex-col">
            <div class="w-96 h-min px-8 py-6 bg-white rounded-xl shadow border border-zinc-200 content-center justify-start">
                <div class="flow-root p-0">
                    <ul role="list">
                        <li class="sm:py-4">
                            <div class="flex items-center gap-x-4">
                                <div class="flex-1 min-w-0">
                                    <label class="text-zinc-950 text-sm font-medium font-['Inter']">Price Validity:</label>
                                </div>
                                <div class="flex-grow-0 flex-shrink-0">
                                    <input type="text" id="purchase-price-validity" class="w-full h-8 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description" />
                                </div>
                            </div>
                        </li>
                        <li class="py-2 sm:py-4">
                            <div class="flex items-center  gap-x-4">
                                <div class="flex-1 min-w-0">
                                    <label class="text-zinc-950 text-sm font-medium font-['Inter']">Payment Term:</label>
                                </div>
                                <div class="flex-grow-0 flex-shrink-0">
                                    <input type="text" id="purchase-payment-term" class="w-full h-8 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description" />
                                </div>
                            </div>
                        </li>
                        <li class="py-2 sm:py-4">
                            <div class="flex items-center  gap-x-4">
                                <div class="flex-1 min-w-0">
                                    <label class="text-zinc-950 text-sm font-medium font-['Inter']">Place of Delivery:</label>
                                </div>
                                <div class="flex-grow-0 flex-shrink-0">
                                    <input type="text" id="purchase-place-delivery" class="w-full h-8 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description" />
                                </div>
                            </div>
                        </li>
                        <li class="py-2 sm:py-4">
                            <div class="flex items-center">
                                <div class="flex-1 min-w-0">
                                    <label class="text-zinc-950 text-sm font-medium font-['Inter']">Date of Delivery:</label>
                                </div>
                                <div class="flex-grow-0 flex-shrink-0">
                                    <input type="date" id="purchase-date-delivery" class="h-8 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 text-left focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight"/>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
