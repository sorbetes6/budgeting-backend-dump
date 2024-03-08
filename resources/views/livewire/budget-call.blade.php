<div class="mx-80 my-32">
    <div class="text-black text-2xl font-medium font-['Inter'] leading-9 mt-30 ">Budget Call</div>
    
    <!-- Forms Tabs-->
    <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
        <ul class="flex flex-nowrap -mb-px text-sm font-medium text-center" id="default-styled-tab" data-tabs-toggle="#default-styled-tab-content" data-tabs-active-classes="text-black hover:text-black dark:text-black dark:hover:text-inherit border-black dark:border-black" data-tabs-inactive-classes="dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300" role="tablist">
            <li class="me-2" role="presentation">
                <button class="inline-block p-4 border-b-2 rounded-t-lg" id="justification-tab" data-tabs-target="#justification" type="button" role="tab" aria-controls="justification" aria-selected="false">Activity Justification</button>
            </li>
            <li class="me-2" role="presentation">
                <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="services-tab" data-tabs-target="#services" type="button" role="tab" aria-controls="services" aria-selected="false">Personnel Services</button>
            </li>
            <li class="me-2" role="presentation">
                <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="schedule-tab" data-tabs-target="#schedule" type="button" role="tab" aria-controls="schedule" aria-selected="false">Personnel Schedule</button>
            </li>
            <li class="me-2" role="presentation">
                <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="mooe-tab" data-tabs-target="#mooe" type="button" role="tab" aria-controls="mooe" aria-selected="false">Maintenance and Other Operating Expenses</button>
            </li>
            <li class="me-2" role="presentation">
                <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="capital-outlay-tab" data-tabs-target="#capitaloutlay" type="button" role="tab" aria-controls="capitaloutlay" aria-selected="false">Capital Outlay</button>
            </li>
            <li class="me-2" role="presentation">
                <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="ppmp-tab" data-tabs-target="#ppmp" type="button" role="tab" aria-controls="ppmp" aria-selected="false">Project Procurement Management Plan</button>
            </li>
        </ul>
    </div>
    
    <!--Forms Tabs Content-->
    <div id="default-tab-content">
        <div id="justification" role="tabpanel" aria-labelledby="justification-tab">
            @include('livewire.activity-justification')
        </div>
        <div id="services" role="tabpanel" aria-labelledby="services-tab">
            @include('livewire.personnel-services') 
        </div>
        <div id="schedule" role="tabpanel" aria-labelledby="schedule-tab">
            @include('livewire.personnel-schedule')
        </div>
        <div id="mooe" role="tabpanel" aria-labelledby="mooe-tab">
            @include('livewire.m-o-o-e')
        </div>
        <div id="capitaloutlay" role="tabpanel" aria-labelledby="capital-outlay-tab">
            @include('livewire.capital-outlay')
        </div>
        <div id="ppmp" role="tabpanel" aria-labelledby="ppmp-tab">
            @include('livewire.p-p-m-p')
        </div>
    </div>
</div>
