<div class="px-6 py-32">
    <!-- Header -->
    <div class="text-black text-2xl font-medium font-['Inter'] leading-9">Capital Outlay</div>

    <!-- Select College/Office -->
    <div class="w-[280px] py-6 rounded-lg">
        <select wire:model="collegeOffice" id="college_office" name="college_office" class="block w-full h-10 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" style="text-indent: 10px;">
            <option disabled selected>Select College/Office</option>
            <option value="College 1">College 1</option>
            <option value="College 2">College 2</option>
            <!-- Other options -->
        </select>
        @error('collegeOffice') <span class="text-red-500">{{ $message }}</span> @enderror
    </div>

    <form>
        <div class="w-[1200px] max-h-fit bg-white rounded-xl shadow border border-zinc-200">
            <div class="relative overflow-x-auto">
                <!-- Table -->
                <table id="capital-outlay-table" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <!-- Header -->
                    <thead class="text-zinc-950 text-base font-semibold font-['Inter'] leading-normal gap-y-12">
                        <tr>
                            <th scope="col" class="px-6 py-3">Account Code</th>
                            <th scope="col" class="pr-10 py-3">Item of Expenditures</th>
                            <th scope="col" class="px-6 py-3">Proposed Budget</th>
                            <th scope="col" class="px-6 py-3 text-center">Justification</th>
                        </tr>
                    </thead>
                    <!-- Body -->
                    <tbody id="capital-outlay-tbody">
                        @foreach($items as $index => $item)
                            <tr class="gap-6">
                                <th scope="row" class="px-6 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">{{ $item['account_code'] }}</th>
                                <td class="pr-10 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">{{ $item['item'] }}</td>
                                <td class="px-6 py-2">
                                    <input type="text" wire:model="items.{{ $index }}.budget" class="w-36 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="₱ 0.00">
                                    @error('items.'.$index.'.budget') <span class="text-red-500">{{ $message }}</span> @enderror
                                </td>
                                <td class="px-6 py-2">
                                    <input type="text" wire:model="items.{{ $index }}.justification" class="w-96 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description">
                                    @error('items.'.$index.'.justification') <span class="text-red-500">{{ $message }}</span> @enderror
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </form>
    <!-- Submit -->
    <div class="w-[1200px] flex justify-end mt-4">
        <button wire:click.prevent="submit" id="submit-btn" class="w-30 h-10 px-4 py-2 bg-indigo-800 rounded-md shadow justify-center items-center text-white text-base font-medium font-['Inter'] leading-tight">Submit</button>
    </div>

    <!-- Success Message -->
    @if (session()->has('message'))
        <div class="w-[1200px] mt-4 text-green-500">
            {{ session('message') }}
        </div>
    @endif
</div>
