<div class="px-6 py-32">

    <!-- Title Header -->
    <div class="text-black text-2xl font-medium font-['Inter'] leading-9 mt-30 ">Purchase Order</div>

    <!-- 1st Row -->
    <div class="flex flex-col sm:flex-row my-3 gap-x-4">
        <div class="flex flex-row sm:flex-col">

        @foreach($items as $index => $item)

            <!-- 1st Row -->
            <div class="flex flex-col sm:flex-row gap-y-3 sm:gap-x-3">

                <!-- Purchase Order No. -->
                <div class="w-full h-full sm:h-12 relative bg-white rounded-xl shadow border border-zinc-200 content-center">
                    <form class="space-y-2" action="#">
                        <div class="flex flex-row items-center m-1 px-2 space-x-4">
                            <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal whitespace-nowrap">Purchase Order No.</label>
                            <input type="number" id="purchase-number-{{ $item['id'] }}" wire:model="items.{{ $index }}.purchase-number" class="w-full h-8 py-1.5 bg-white rounded-md shadow border border-zinc-200 focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight gap-1.5" placeholder="0" />
                        </div>
                    </form>
                </div>

                <!-- PR No. -->
                <div class="w-full sm:w-64 h-12 relative bg-white rounded-xl shadow border border-zinc-200 content-center">
                    <form class="space-y-2" action="#">
                        <div class="flex flex-row items-center m-1 px-2 space-x-4">
                            <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal whitespace-nowrap">PR No.</label>
                            <input type="number" id="purchase-pr-{{ $item['id'] }}" wire:model="items.{{ $index }}.purchase-pr" class="w-40 h-8 px-2 py-1.5 bg-white rounded-md shadow border border-zinc-200 focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight gap-1.5" placeholder="0" />
                        </div>
                    </form>
                </div>
            </div>

            <!--2nd Row-->
            <div class="flex flex-col sm:flex-row gap-y-3 sm:gap-x-3 my-3">

                <!-- TIN: -->
                <div class="w-full sm:w-full h-full sm:h-12 relative bg-white rounded-xl shadow border border-zinc-200 content-center">
                    <form class="space-y-2" action="#">
                        <div class="flex flex-row items-center m-1 px-2 space-x-4">
                            <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal whitespace-nowrap">TIN: </label>
                            <input type="number" id="purchase-TIN-{{ $item['id'] }}" wire:model="items.{{ $index }}.purchase-TIN" class="w-full h-8 px-2 py-1.5 bg-white rounded-md shadow border border-zinc-200 focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight gap-1.5" placeholder="0" />
                        </div>
                    </form>
                </div>

                <!-- Tel No. -->
                <div class="w-full sm:w-64 h-12 relative bg-white rounded-xl shadow border border-zinc-200 content-center">
                    <form class="space-y-2" action="#">
                        <div class="flex flex-row items-center m-1 px-2 space-x-4">
                            <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal whitespace-nowrap">Tel No.</label>
                            <input type="number" id="purchase-tel-{{ $item['id'] }}" wire:model="items.{{ $index }}.purchase-tel" class="w-40 h-8 px-2 py-1.5 bg-white rounded-md shadow border border-zinc-200 focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight gap-1.5" placeholder="0" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Right Cards-->
        <div class="flex flex-col sm:flex-row gap-y-3 sm:gap-x-3">

            <!-- Supplier -->
            <div class="w-full sm:w-52 h-24 relative bg-white rounded-xl shadow border border-zinc-200 content-center justify-start">
                <form class="space-y-2" action="#">
                    <div class="flex flex-col m-4  gap-y-3">
                        <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Supplier</label>
                        <input type="text" id="purchase-supplier-{{ $item['id'] }}" wire:model="items.{{ $index }}.purchase-supplier" class="w-full h-8 px-2 py-1.5 bg-white rounded-md shadow border border-zinc-200 focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight gap-1.5" placeholder="Description" />
                    </div>
                </form>
            </div>

            <!-- Date -->
            <div class="w-full sm:w-52 h-24 relative bg-white rounded-xl shadow border border-zinc-200 content-center justify-start">
                <form class="space-y-2" action="#">
                    <div class="flex flex-col m-4 gap-y-3">
                        <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Date</label>
                        <input type="date" id="purchase-date-{{ $item['id'] }}" wire:model="items.{{ $index }}.purchase-date" class="w-full h-8 px-2 py-1.5 bg-white rounded-md shadow border border-zinc-200 focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight gap-1.5"/>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- 2nd Row -->
    <div class="flex flex-row gap-5">
        <div class="flex flex-col gap-y-4">

            <!-- Address -->
            <div class="w-full sm:w-[655px] h-28 bg-white rounded-xl shadow border border-zinc-200">
                <form class="space-y-2 p-4 gap-y-3" action="#">
                    <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Address</label>
                    <input type="text" id="purchase-address-{{ $item['id'] }}" wire:model="items.{{ $index }}.purchase-address" class="w-full h-10 px-2 py-1.5 bg-white rounded-md shadow border border-zinc-200 focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description" />
                </form>
            </div>

            <!-- Mode of Procurement -->
            <div class="w-full sm:w-[655px] h-28 bg-white rounded-xl shadow border border-zinc-200">
                <form class="space-y-2 p-4 gap-y-3" action="#">
                    <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Mode of Procurement</label>
                    <input type="text" id="purchase-mode-procurement-{{ $item['id'] }}" wire:model="items.{{ $index }}.purchase-mode-procurement" class="w-full h-10 px-2 py-1.5 bg-white rounded-md shadow border border-zinc-200 focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description" />
                </form>
            </div>
        </div>

        <!-- Right Card -->
        <div class="flex">
            <div class="w-[430px] h-60 px-8 py-3 bg-white rounded-xl shadow border border-zinc-200 content-center justify-start">
                <div class="flow-root">
                    <ul role="list">

                        <!-- Price Validity: -->
                        <li class="py-3 sm:py-3">
                            <form class="flex items-center">
                                <div class="flex-1 min-w-0">
                                    <label class="text-zinc-950 text-sm font-medium font-['Inter']">Price Validity:</label>
                                </div>
                                <div class="flex-grow-0 flex-shrink-0">
                                    <input type="text" id="purchase-price-validity-{{ $item['id'] }}" wire:model="items.{{ $index }}.purchase-price validity" class="w-full h-8 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description" />
                                </div>
                            </form>
                        </li>

                        <!-- Payment Term: -->
                        <li class="py-3 sm:py-3">
                            <form class="flex items-center">
                                <div class="flex-1 min-w-0">
                                    <label class="text-zinc-950 text-sm font-medium font-['Inter']">Payment Term:</label>
                                </div>
                                <div class="flex-grow-0 flex-shrink-0">
                                    <input type="text" id="purchase-payment-term-{{ $item['id'] }}" wire:model="items.{{ $index }}.purchase-payment-term" class="w-full h-8 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description" />
                                </div>
                            </form>
                        </li>

                        <!-- Place of Delivery: -->
                        <li class="py-3 sm:py-3">
                            <form class="flex items-center">
                                <div class="flex-1 min-w-0">
                                    <label class="text-zinc-950 text-sm font-medium font-['Inter']">Place of Delivery:</label>
                                </div>
                                <div class="flex-grow-0 flex-shrink-0">
                                    <input type="text" id="purchase-place-delivery-{{ $item['id'] }}" wire:model="items.{{ $index }}.purchase-place-delivery" class="w-full h-8 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description" />
                                </div>
                            </form>
                        </li>

                        <!-- Date of Delivery: -->
                        <li class="py-3 sm:py-3">
                            <form class="flex items-center">
                                <div class="flex-1 min-w-0">
                                    <label class="text-zinc-950 text-sm font-medium font-['Inter']">Date of Delivery:</label>
                                </div>
                                <div class="flex-grow-0 flex-shrink-0">
                                    <input type="date" id="purchase-date-delivery-{{ $item['id'] }}" wire:model="items.{{ $index }}.purchase-date-delivery" class="h-8 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 text-left focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight"/>
                                </div>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- 3rd Row -->
    <div class="w-[1110px] h-64 px-5 py-3 bg-white rounded-xl shadow border border-zinc-200 content-center justify-start space-y-4 my-5">

        <!-- 1st Row -->
        <div class="flex flex-row gap-x-6">

            <!-- Item No: -->
            <form class="space-y-2" action="#">
                <div class="flex flex-col gap-y-3">
                    <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Item No.:</label>
                    <input type="number" id="purchase-item-1-{{ $item['id'] }}" wire:model="items.{{ $index }}.purchase-item-1" class="w-28 h-8 px-2 py-1.5 bg-white rounded-md shadow border border-zinc-200 focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight gap-1.5" placeholder="0" />
                </div>
            </form>

            <!-- Quantity: -->
            <form class="space-y-2" action="#">
                <div class="flex flex-col gap-y-3">
                    <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Quantity:</label>
                    <input type="number" id="purchase-quantity-1-{{ $item['id'] }}" wire:model="items.{{ $index }}.purchase-quantity-1" class="w-28 h-8 px-2 py-1.5 bg-white rounded-md shadow border border-zinc-200 focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight gap-1.5" placeholder="0" />
                </div>
            </form>

            <!-- Unit: -->
            <form class="space-y-2" action="#">
                <div class="flex flex-col gap-y-3">
                    <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Unit:</label>
                    <input type="text" id="purchase-unit-1-{{ $item['id'] }}" wire:model="items.{{ $index }}.purchase-unit-1" class="w-28 h-8 px-2 py-1.5 bg-white rounded-md shadow border border-zinc-200 focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight gap-1.5" placeholder="Description" />
                </div>
            </form>

            <!-- Description: -->
            <form class="space-y-2" action="#">
                <div class="flex flex-col gap-y-3">
                    <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Description:</label>
                    <input type="text" id="purchase-description-1-{{ $item['id'] }}" wire:model="items.{{ $index }}.purchase-description-1" class="w-96 h-8 px-2 py-1.5 bg-white rounded-md shadow border border-zinc-200 focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight gap-1.5" placeholder="Description" />
                </div>
            </form>

            <!-- Unit Cost: -->
            <form class="space-y-2" action="#">
                <div class="flex flex-col gap-y-3">
                    <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Unit Cost:</label>
                    <input type="number" step="0.01" id="purchase-unit-cost-1-{{ $item['id'] }}" wire:model="items.{{ $index }}.purchase-unit-cost-1" class="w-28 h-8 px-2 py-1.5 bg-white rounded-md shadow border border-zinc-200 focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight gap-1.5" placeholder="₱0.00" />
                </div>
            </form>

            <!-- Amount: -->
            <form class="space-y-2" action="#">
                <div class="flex flex-col gap-y-3">
                    <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Amount:</label>
                    <input type="number" step="0.01" id="purchase-ammount-1-{{ $item['id'] }}" wire:model="items.{{ $index }}.purchase-ammount-1" class="w-28 h-8 px-2 py-1.5 bg-white rounded-md shadow border border-zinc-200 focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight gap-1.5" placeholder="₱0.00" />
                </div>
            </form>
        </div>

        <!-- 2nd Row -->
        <div class="flex flex-row gap-x-6">

            <!-- Item No.: -->
            <form class="space-y-2" action="#">
                <div class="flex flex-col gap-y-3">
                    <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Item No.:</label>
                    <input type="number" id="purchase-item-2-{{ $item['id'] }}" wire:model="items.{{ $index }}.purchase-item-2" class="w-28 h-8 px-2 py-1.5 bg-white rounded-md shadow border border-zinc-200 focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight gap-1.5" placeholder="0" />
                </div>
            </form>

            <!-- Quantity: -->
            <form class="space-y-2" action="#">
                <div class="flex flex-col gap-y-3">
                    <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Quantity:</label>
                    <input type="number" id="purchase-quantity-2-{{ $item['id'] }}" wire:model="items.{{ $index }}.purchase-quantity-2" class="w-28 h-8 px-2 py-1.5 bg-white rounded-md shadow border border-zinc-200 focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight gap-1.5" placeholder="0" />
                </div>
            </form>

            <!-- Unit: -->
            <form class="space-y-2" action="#">
                <div class="flex flex-col gap-y-3">
                    <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Unit:</label>
                    <input type="text" id="purchase-unit-2-{{ $item['id'] }}" wire:model="items.{{ $index }}.purchase-unit-2" class="w-28 h-8 px-2 py-1.5 bg-white rounded-md shadow border border-zinc-200 focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight gap-1.5" placeholder="Description" />
                </div>
            </form>

            <!-- Description: -->
            <form class="space-y-2" action="#">
                <div class="flex flex-col gap-y-3">
                    <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Description:</label>
                    <input type="text" id="purchase-description-2-{{ $item['id'] }}" wire:model="items.{{ $index }}.purchase-description-2" class="w-96 h-8 px-2 py-1.5 bg-white rounded-md shadow border border-zinc-200 focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight gap-1.5" placeholder="Description" />
                </div>
            </form>

            <!-- Unit Cost: -->
            <form class="space-y-2" action="#">
                <div class="flex flex-col gap-y-3">
                    <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Unit Cost:</label>
                    <input type="number" step="0.01" id="purchase-unit-cost-2-{{ $item['id'] }}" wire:model="items.{{ $index }}.purchase-unit-cost-2" class="w-28 h-8 px-2 py-1.5 bg-white rounded-md shadow border border-zinc-200 focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight gap-1.5" placeholder="₱0.00" />
                </div>
            </form>

            <!-- Amount: -->
            <form class="space-y-2" action="#">
                <div class="flex flex-col gap-y-3">
                    <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Ammount:</label>
                    <input type="number" step="0.01" id="purchase-ammount-2-{{ $item['id'] }}" wire:model="items.{{ $index }}.purchase-ammount-2" class="w-28 h-8 px-2 py-1.5 bg-white rounded-md shadow border border-zinc-200 focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight gap-1.5" placeholder="₱0.00" />
                </div>
            </form>
        </div>

    @endforeach

        <!-- Add another data -->
        <button wire:click.prevent="addItem" class="w-44 h-9 px-4 py-2 bg-white rounded-md shadow border border-zinc-200 justify-center items-center gap-2 inline-flex my-6">
            <div class="w-4 h-4 relative">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path d="M3.33301 8.00065H12.6663M7.99967 3.33398V12.6673" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <span class="text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Add another data</span>
        </button>

    </div>

    <!-- Submit -->
    <button class="w-[1200px] flex justify-end mt-4">
        <span class="w-30 h-10 px-4 py-2 bg-indigo-800 rounded-md shadow justify-center items-center text-white text-base font-medium font-['Inter'] leading-tight">Submit</span>
    </button>

</div>
