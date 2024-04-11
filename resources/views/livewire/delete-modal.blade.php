<div>
    <div class="w-24 px-1.5 py-1 rounded justify-start items-center gap-1.5 inline-flex">
        <div class="w-3.5 h-3.5 relative">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                <path d="M2.50928 4.27426H12.3743M11.2782 4.27426V11.9471C11.2782 12.4951 10.7301 13.0432 10.1821 13.0432H4.70151C4.15345 13.0432 3.60539 12.4951 3.60539 11.9471V4.27426M5.24956 4.27426V3.17815C5.24956 2.63009 5.79762 2.08203 6.34568 2.08203H8.53791C9.08597 2.08203 9.63402 2.63009 9.63402 3.17815V4.27426" stroke="#71717A" stroke-width="0.822086" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>
        <div class="grow shrink basis-0 h-4 justify-start items-center gap-1.5 flex">
            <button data-modal-target="delete-item-modal" data-modal-toggle="delete-item-modal" class="px-4 py-2" type="button">Delete</button>
            <!-- Delete modal -->
            <div id="delete-item-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="bg-white rounded-lg shadow-lg w-full max-w-md mx-6 md:mx-0 p-4 md:p-6">
                    <!-- Modal content -->
                    <div class="relative">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between pb-4">
                            <h3 class="text-xl font-semibold text-gray-800">Edit Row</h3>
                            <button type="button" class="text-gray-400 hover:text-gray-600 focus:outline-none focus:text-gray-600" data-modal-hide="delete-item-modal">
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="space-y-4">
                            <div>
                                <label for="account-code" class="block text-sm font-medium text-gray-700">Account Code</label>
                                <input type="text" id="account-code" class="w-full h-10 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50" placeholder="Account Code">
                            </div>
                            <div>
                                <label for="item-of-expenditures" class="block text-sm font-medium text-gray-700">Item of Expenditures</label>
                                <input type="text" id="item-of-expenditures" class="w-full h-10 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50" placeholder="Item of Expenditures">
                            </div>
                            <div>
                                <label for="proposed-budget" class="block text-sm font-medium text-gray-700">Proposed Budget</label>
                                <input type="text" id="proposed-budget" class="w-full h-10 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50" placeholder="Proposed Budget">
                            </div>
                            <div>
                                <label for="justification" class="block text-sm font-medium text-gray-700">Justification</label>
                                <textarea id="justification" class="w-full h-32 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50" placeholder="Justification"></textarea>
                            </div>
                        </div>
                        <!-- Modal footer -->
                        <div class="flex justify-center pt-4">
                            <button data-modal-hide="delete-item-modal" type="button" class="mr-3 inline-flex justify-center items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-gray-700 bg-gray-200 hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Cancel</button>
                            <button data-modal-hide="delete-item-modal" class="inline-flex justify-center items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save Changes</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
