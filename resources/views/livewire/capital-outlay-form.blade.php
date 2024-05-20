<div class="px-6 py-32">

    <!-- Header -->
    <div class="text-black text-2xl font-medium font-['Inter'] leading-9">Capital Outlay</div>

     <!-- Select College/Office -->
    <div class="w-[280px] py-6 rounded-lg">
        <select id="college_office" name="college_office" class="block w-full h-10 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" style="text-indent: 10px;">
            <option disabled selected>Select College/Office</option>
            <option value="College 1">College 1</option>
            <option value="College 2">College 2</option>
            <option value="">...</option>
        </select>
    </div>

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
                    <!-- Existing rows (placeholders) -->
                    <tr class="gap-6">
                        <th scope="row" class="px-6 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">1-07-04-020</th>
                        <td class="pr-10 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">School Buildings</td>
                        <td class="px-6 py-2">
                            <input type="text" id="capital-form-schoolbldg-budget" class="w-36 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="₱ 0.00">
                        </td>
                        <td class="px-6 py-2">
                            <input type="text" id="capital-form-schoolbldg-justification" class="w-96 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description">
                        </td>
                    </tr>
                    <!-- 2nd Row -->
                    <tr class="gap-6">
                        <th scope="row" class="px-6 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                        1-07-05-020
                        </th>
                        <td class="pr-10 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            Office Equipment
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="capital-form-ofceeqpmnt-budget" class="w-36 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="₱ 0.00">
                            </form>
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="capital-form-ofceeqpmnt-justification" class="w-96 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description">
                            </form>
                        </td>
                    </tr>

                    <!-- 3rd Row -->
                    <tr class="gap-6">
                        <th scope="row" class="px-6 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            1-07-05-030
                        </th>
                        <td class="pr-10 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            Information and Communication Technology Equipment
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="capital-form-icteqpmnt-budget" class="w-36 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="₱ 0.00">
                            </form>
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="capital-form-icteqpmnt-justification" class="w-96 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description">
                            </form>
                        </td>
                    </tr>

                    <!-- 4th Row -->
                    <tr class="gap-6">
                        <th scope="row" class="px-6 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            1-07-05-070
                        </th>
                        <td class="pr-10 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            Communication Equipment
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="capital-form-commeqpmnt-budget" class="w-36 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="₱ 0.00">
                            </form>
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="capital-form-commeqpmnt-justification" class="w-96 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description">
                            </form>
                        </td>
                    </tr>

                    <!-- 5th Row -->
                    <tr class="gap-6">
                        <th scope="row" class="px-6 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            1-07-05-090
                        </th>
                        <td class="pr-10 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            Disaster Response and Rescue Equipment
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="capital-form-drre-budget" class="w-36 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="₱ 0.00">
                            </form>
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="capital-form-drre-justification" class="w-96 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description">
                            </form>
                        </td>
                    </tr>

                    <!-- 6th Row -->
                    <tr class="gap-6">
                        <th scope="row" class="px-6 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            1-07-05-110
                        </th>
                        <td class="pr-10 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            Medical Equipment
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="capital-form-medeqpmnt-budget" class="w-36 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="₱ 0.00">
                            </form>
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="capital-form-medeqpmnt-justification" class="w-96 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description">
                            </form>
                        </td>
                    </tr>

                    <!-- 7th Row -->
                    <tr class="gap-6">
                        <th scope="row" class="px-6 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            1-07-05-130
                        </th>
                        <td class="pr-10 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            Sports Equipment
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="capital-form-sportseqpmnt-budget" class="w-36 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="₱ 0.00">
                            </form>
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="capital-form-sportseqpmnt-justification" class="w-96 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description">
                            </form>
                        </td>
                    </tr>

                    <!-- 8th Row -->
                    <tr class="gap-6">
                        <th scope="row" class="px-6 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            1-07-05-140
                        </th>
                        <td class="pr-10 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            Technical and Scientific Equipment
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="capital-form-techscieqpmnt-budget" class="w-36 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="₱ 0.00">
                            </form>
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="capital-form-techscieqpmnt-justification" class="w-96 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description">
                            </form>
                        </td>
                    </tr>

                    <!-- 9th Row -->
                    <tr class="gap-6">
                        <th scope="row" class="px-6 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            1-07-05-990
                        </th>
                        <td class="pr-10 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            Other Machinery and Equipment
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="capital-form-othrmchnery-budget" class="w-36 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="₱ 0.00">
                            </form>
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="capital-form-othrmchnery-justification" class="w-96 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description">
                            </form>
                        </td>
                    </tr>

                    <!-- 10th Row -->
                    <tr class="gap-6">
                        <th scope="row" class="px-6 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            1-07-06-010
                        </th>
                        <td class="pr-10 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            Transportation Equipment
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="capital-form-transpoeqpmnt-budget" class="w-36 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="₱ 0.00">
                            </form>
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="capital-form-transpoeqpmnt-justification" class="w-96 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description">
                            </form>
                        </td>
                    </tr>

                    <!-- 11th Row -->
                    <tr class="gap-6">
                        <th scope="row" class="px-6 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            1-07-07-010
                        </th>
                        <td class="pr-10 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            Furniture and Fixtures
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="capital-form-furfix-budget" class="w-36 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="₱ 0.00">
                            </form>
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="capital-form-furfix-justification" class="w-96 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description">
                            </form>
                        </td>
                    </tr>

                    <!-- 12th Row -->
                    <tr class="gap-6">
                        <th scope="row" class="px-6 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            1-07-07-020
                        </th>
                        <td class="pr-10 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            Books
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="capital-form-books-budget" class="w-36 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="₱ 0.00">
                            </form>
                        </td>
                        <td class="px-6 py-2">
                            <form class="flex-grow-0 flex-shrink-0">
                                <input type="text" id="capital-form-books-justification" class="w-96 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description">
                            </form>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>

    <!-- Add Row Button -->
    <div class="w-[1200px] flex justify-end mt-4">
        <button id="add-row-btn" class="w-30 h-10 px-4 py-2 bg-green-500 rounded-md shadow justify-center items-center text-white text-base font-medium font-['Inter'] leading-tight">Add Row</button>
    </div>

    <!-- Submit -->
    <div class="w-[1200px] flex justify-end mt-4">
        <button id="submit-btn" class="w-30 h-10 px-4 py-2 bg-indigo-800 rounded-md shadow justify-center items-center text-white text-base font-medium font-['Inter'] leading-tight">Submit</button>
    </div>

    <script>
        document.getElementById('add-row-btn').addEventListener('click', function() {
            const newRow = document.createElement('tr');
            newRow.className = 'gap-6';

            newRow.innerHTML = `
                <th scope="row" class="px-6 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                    <input type="text" class="w-full h-8 px-3 py-2 rounded-md shadow border border-zinc-200 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug" placeholder="Account Code">
                </th>
                <td class="pr-10 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                    <input type="text" class="w-full h-8 px-3 py-2 rounded-md shadow border border-zinc-200 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug" placeholder="Item of Expenditures">
                </td>
                <td class="px-6 py-2">
                    <input type="text" class="w-36 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="₱ 0.00">
                </td>
                <td class="px-6 py-2">
                    <input type="text" class="w-96 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description">
                </td>
            `;

            document.getElementById('capital-outlay-tbody').appendChild(newRow);
        });

        document.getElementById('submit-btn').addEventListener('click', function() {
            const table = document.getElementById('capital-outlay-table');
            const rows = table.querySelectorAll('tbody tr');
            const data = [];

            rows.forEach(row => {
                const rowData = {
                    accountCode: row.cells[0].querySelector('input') ? row.cells[0].querySelector('input').value : row.cells[0].innerText,
                    itemExpenditures: row.cells[1].querySelector('input') ? row.cells[1].querySelector('input').value : row.cells[1].innerText,
                    proposedBudget: row.cells[2].querySelector('input').value,
                    justification: row.cells[3].querySelector('input').value
                };
                data.push(rowData);
            });

            fetch('/save-budget-data', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data)
            })
            .then(response => response.json())
            .then(result => {
                console.log(result);
                alert('Data submitted successfully!');
            })
            .catch(error => {
                console.error('Error:', error);
                alert('There was an error submitting the data.');
            });
        });
    </script>

</div>
