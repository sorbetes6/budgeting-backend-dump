<div class="mx-80 my-32">

    <div class="text-black text-2xl font-medium font-['Inter'] leading-9 mt-30 ">Payment Request</div>
    <!-- Forms Tabs -->
    <div class="w-[1300px] mb-4 border-b border-gray-200 dark:border-gray-200">
        <ul class="flex flex-nowrap -mb-px text-sm font-medium text-center" id="default-styled-tab" data-tabs-toggle="#default-styled-tab-content" data-tabs-active-classes="text-black hover:text-black dark:text-black dark:hover:text-inherit border-black dark:border-black" data-tabs-inactive-classes="dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300" role="tablist">
            <!-- BUR -->
            <li class="me-[30px]" role="presentation">
                <button class="inline-block w-full max-w-xs p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 truncate" id="bureq-tab" data-tabs-target="#bureq" type="button" role="tab" aria-controls="bureq" aria-selected="false">Budget Utilization Request</button>
            </li>
            <!-- Purchase Order -->
            <li class="me-[30px]" role="presentation">
                <button class="inline-block w-full max-w-xs p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 truncate" id="purder-tab" data-tabs-target="#purder" type="button" role="tab" aria-controls="purder" aria-selected="false">Purchase Order</button>
            </li>
        </ul>
    </div>

    <!--Forms Tabs Content-->
    <div id="default-tab-content">
        <!-- BUR -->
        <div id="bureq" role="tabpanel" aria-labelledby="bureq-tab">
            @include('livewire.b-u-r')
        </div>
        <!-- Purchase Order -->
        <div id="purder" role="tabpanel" aria-labelledby="purder-tab">
            @include('livewire.purchase-order')
        </div>
    </div>

</div>
