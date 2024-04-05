<div class="mx-80 my-32">
    <div class="text-black text-2xl font-medium font-['Inter'] leading-9 mt-30 ">Budget Call</div>

    <!-- Forms Tabs-->
    <div class="w-[1300px] mb-4 border-b border-gray-200 dark:border-gray-200">
        <ul class="flex flex-nowrap -mb-px text-sm font-medium text-center" id="default-styled-tab" data-tabs-toggle="#default-styled-tab-content" data-tabs-active-classes="text-black hover:text-black dark:text-black dark:hover:text-inherit border-black dark:border-black" data-tabs-inactive-classes="dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300" role="tablist">
            <li class="me-[30px]" role="presentation">
                <button class="inline-block w-full max-w-xs p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 truncate" id="justification-tab" data-tabs-target="#justification" type="button" role="tab" aria-controls="justification" aria-selected="false">Activity Justification</button>
            </li>
            <li class="me-[30px]" role="presentation">
                <button class="inline-block w-full max-w-xs p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 truncate" id="services-tab" data-tabs-target="#services" type="button" role="tab" aria-controls="services" aria-selected="false">Personal Services</button>
            </li>
            <li class="me-[30px]" role="presentation">
                <button class="inline-block w-full max-w-xs p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 truncate" id="schedule-tab" data-tabs-target="#schedule" type="button" role="tab" aria-controls="schedule" aria-selected="false">Personnel Schedule</button>
            </li>
            <li class="me-[30px]" role="presentation">
                <button class="inline-block w-full max-w-xs p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 truncate" id="capital-outlay-tab" data-tabs-target="#capitaloutlay" type="button" role="tab" aria-controls="capitaloutlay" aria-selected="false">Capital Outlay</button>
            </li>
            <li class="me-[30px]" role="presentation">
                <button class="inline-block w-full max-w-xs p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 truncate" id="ppmp-tab" data-tabs-target="#ppmp" type="button" role="tab" aria-controls="ppmp" aria-selected="false">Project Procurement Management Plan</button>
            </li>
            <li class="me-[30px]" role="presentation">
                <button class="inline-block w-full max-w-ws p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 truncate" id="maintenance-tab" data-tabs-target="#maintenance" type="button" role="tab" aria-controls="maintenance" aria-selected="false">Maintenance and Other Operating Expenses</button>
            </li>

        </ul>
    </div>

    <!--Forms Tabs Content-->
    <div id="default-tab-content">
        <div id="justification" role="tabpanel" aria-labelledby="justification-tab">
            @include('livewire.activity-justification-form')
        </div>

        <div id="services" role="tabpanel" aria-labelledby="services-tab">
            @include('livewire.personal-services-form')
        </div>

        <div id="schedule" role="tabpanel" aria-labelledby="schedule-tab">
            @include('livewire.personnel-schedule-form')
        </div>

        <div id="capitaloutlay" role="tabpanel" aria-labelledby="capital-outlay-tab">
            @include('livewire.capital-outlay-form')
        </div>

        <div id="ppmp" role="tabpanel" aria-labelledby="ppmp-tab">
            @include('livewire.ppmp-form')
        </div>

        <div id="maintenance" role="tabpanel" aria-labelledby="maintenance-tab">
            @include('livewire.maintenance-form')
        </div>

    </div>
</div>
