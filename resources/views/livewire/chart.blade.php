<div>
    <!-- WELCOME! -->
    <div class="relative w-[540px] h-[340px] rounded-lg shadow border border-gray border-opacity-50 bg-cover bg-center ml-[275px] mt-[120px]">
        <div class="absolute inset-0 rounded-lg"></div>
        <img class="w-[540px] h-[340px] opacity-40 mx-auto mt-auto" src="css/images/background.png">
        <div class= "absolute inset-0 flex flex-col items-start ml-6 justify-top text-left left-2 mt-8">
            <div class="flex items-center">
                <img class="w-[50px] h-[50px]" src="css/images/image 5.png">
                <img class="h-[40px] ml-2" src="css/images/image 4.png">
            </div>
            <h1 class="text-2xl font-extrabold ml-2 mt-3 mb-3 text-blue-800 z-10 relative">PLM Budget System</h1>
            <h2 class="text-[55px] font-extrabold ml-2 mb-1 text-blue-800 z-10 relative">Welcome,</h1>
            <p class= "text-2xl font-bold ml-2 text-cyan-800 z-10 relative">Maribeth Solquio.</p>
        </div>
    </div>

    <!-- Status of Appropriations -->
    <div class="flex flex-col w-[540px] h-[340px] rounded-lg shadow border border-gray border-opacity-20 ml-[275px] mt-[15px]">
        <!-- Title -->
        <div class="flex items-center ml-5 mt-5">
            <img class="w-[30px] h-[30px] mr-1" src="css/images/icon1.png">
            <h1 class="text-[20px] font-extrabold text-blue-800 mb-1">Status of Appropriations</h1>
        </div>
        <h2 class="text-[15px] font-extrabold ml-[55px] text-cyan-800">Budget Call Documents</h2>
        <!-- Donut Chart -->
        <livewire:donut-chart/>
    </div>

    <!-- Project Procuremente Management Plan -->
    <div class="w-[540px] h-[340px] rounded-lg shadow border border-gray border-opacity-20 ml-[835px] mt-[-340px]">
        <div class="flex items-center ml-5 mt-5">
            <img class="w-[30px] h-[30px] mr-1" src="css/images/icon1.png">
            <h1 class="text-[20px] font-extrabold text-blue-800 mb-1">Project Procurement Management Plan</h1>
        </div>
        <!-- NEED FUNCTIONALITY Column Chart -->
        <h2 class="text-[15px] font-extrabold ml-[55px] text-cyan-800">Overall Budget</h2>
    </div>

    <!-- Payment Request Form -->
    <div class="w-[540px] h-[125px] rounded-lg shadow border border-gray border-opacity-20 ml-[835px] mt-[-480px]">
        <div class="flex items-center ml-5 mt-3">
            <img class="w-[30px] h-[30px] mr-1" src="css/images/icon1.png">
            <h1 class="text-[20px] font-extrabold text-blue-800 mb-1">Payment Request Form</h1>
        </div>
        <div class="flex">
            <div class="flex items-center justify-center ml-5 mt-2 w-[160px] h-[60px] bg-blue-800 text-[13px] text-white rounded-md p-4">
                <a href="/BUR" class="text-[11px] text-white btn text-center">Budget Utilization Request</a>
            </div>
            <div class="flex items-center justify-center ml-3 mt-2 w-[160px] h-[60px] bg-blue-800 text-[13px] text-white rounded-md p-4">
                <a href="/purchase-order" class="text-[11px] text-white btn text-center">Purchase Order</a>
            </div>
            <div class="flex items-center justify-center ml-3 mt-2 w-[160px] h-[60px] bg-blue-800 text-[13px] text-white rounded-md p-4">
                <a href="/amendment" class="text-[11px] text-white btn text-center">Amendment Form</a>
            </div>
        </div>
    </div>

    <!-- Budget Call Forms -->
    <div class="w-[540px] h-[200px] rounded-lg shadow border border-gray border-opacity-20 ml-[835px] mt-[-340px]">
        <div class="flex items-center ml-5 mt-1">
            <img class="w-[30px] h-[30px] mr-1" src="css/images/icon1.png">
            <h1 class="text-[20px] font-extrabold text-blue-800 mb-1">Budget Call Forms</h1>
        </div>
        <div class="flex items-center ml-5 mt-2">
            <!-- Activity Justification Document -->
            <div class="flex items-center justify-center mt-1 w-[160px] h-[60px] bg-blue-800 text-[13px] text-white rounded-md p-4">
                <a href="/activity-justification" class="text-[11px] text-white btn text-center">Activity Justification Document</a>
            </div>
            <!-- Personnel Schedule -->
            <div class="flex items-center justify-center mt-1 ml-3 w-[160px] h-[60px] bg-blue-800 text-[13px] text-white rounded-md p-4">
                <a href="/personnel-schedule" class="text-[11px] text-white btn text-center">Personnel Schedule</a>
            </div>
            <!-- Project Procurement Management Plan -->
            <div class="flex items-center justify-center mt-1 ml-3 w-[160px] h-[60px] bg-blue-800 text-[13px] text-white rounded-md p-4">
                <a href="/PPMP" class="text-[11px] text-white btn text-center">Project Procurement Management Plan</a>
            </div>
        </div>
        <div class="flex items-center ml-5 mt-2.5">
            <!-- Personal Services -->
            <div class="flex items-center justify-center mt-1 w-[160px] h-[60px] bg-blue-800 text-[13px] text-white rounded-md p-4">
                <a href="/personal-services" class="text-[11px] text-white btn text-center">Personal Services</a>
            </div>
            <!-- Maintenance and Other Operating Expenses -->
            <div class="flex items-center justify-center mt-1 ml-3 w-[160px] h-[60px] bg-blue-800 text-[13px] text-white rounded-md p-4">
                <a href="/MOOE" class="text-[11px] text-white btn text-center">Maintenance and Other Operating Expenses</a>
            </div>
            <!-- Capital Outlay -->
            <div class="flex items-center justify-center mt-1 ml-3 w-[160px] h-[60px] bg-blue-800 text-[13px] text-white rounded-md p-4">
                <a href="/capital-outlay" class="text-[11px] text-white btn text-center">Capital Outlay</a>
            </div>
        </div>
    </div>

    <!-- Recent Activities -->
    <div class="w-[290px] h-[340px] rounded-lg shadow border border-gray border-opacity-20 ml-[1395px] mt-[-200px]">
        <div class="flex items-center border-b-2">
            <img class="w-[18px] h-[18px] ml-3" src="css/images/icon2.png">
            <h1 class="flex items-top justify-left text-[15px] font-bold ml-1 mt-2 mb-2">Recent Activities</h1>
        </div>
    <!-- NEED FUNCTIONALITY -->
        <div class="flex items-center h-[75px] border-b-2">
            <div class="ml-[15px]"> 
                <h1 class="flex items-top justify-left text-[15px] font-extrabold ">Maribeth Solquio</h1>
                <h2 class="flex items-top justify-left text-[11px] font-bold">Edited Status of Appropriations</h2>
                <div class="flex items-top">
                    <h3 class="flex items-top justify-left text-[11px]">15 minutes ago</h3>
                    <a href="#" class="flex items-top justify-left text-[11px] text-blue-800 underline ml-[120px] btn">View form</a>
                </div>
            </div>
        </div>
        <div class="flex items-center h-[75px] border-b-2">
            <div class="ml-[15px]"> 
                <h1 class="flex items-top justify-left text-[15px] font-extrabold ">Maribeth Solquio</h1>
                <h2 class="flex items-top justify-left text-[11px] font-bold">Edited Capital Outlay</h2>
                <div class="flex items-top">
                    <h3 class="flex items-top justify-left text-[11px]">15 minutes ago</h3>
                    <a href="#" class="flex items-top justify-left text-[11px] text-blue-800 underline ml-[120px] btn">View form</a>
                </div>
            </div>
        </div>
        <div class="flex items-center h-[75px] border-b-2">
            <div class="ml-[15px]"> 
                <h1 class="flex items-top justify-left text-[15px] font-extrabold ">Maribeth Solquio</h1>
                <h2 class="flex items-top justify-left text-[11px] font-bold">Edited User Info</h2>
                <div class="flex items-top">
                    <h3 class="flex items-top justify-left text-[11px]">15 minutes ago</h3>
                    <a href="#" class="flex items-top justify-left text-[11px] text-blue-800 underline ml-[120px] btn">View form</a>
                </div>
            </div>
        </div>
        <div class="flex items-center h-[75px]">
            <div class="ml-[15px]"> 
                <h1 class="flex items-top justify-left text-[15px] font-extrabold ">Maribeth Solquio</h1>
                <h2 class="flex items-top justify-left text-[11px] font-bold">Created New PPMP Form </h2>
                <div class="flex items-top">
                    <h3 class="flex items-top justify-left text-[11px]">15 minutes ago</h3>
                    <a href="#" class="flex items-top justify-left text-[11px] text-blue-800 underline ml-[120px] btn">View form</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Calendar -->
    <div x-data="calendarData()" x-init="init()" class="relative flex flex-col items-center w-[290px] h-[340px] rounded-lg shadow border border-gray border-opacity-20 ml-[1395px] mt-[15px]">
        <div class="flex items-center">
            <button @click="prevMonth" class="absolute left-3 top-3 flex items-center justify-center w-5 h-10 rounded-lg shadow border border-gray border-opacity-20 text-black font-bold py-4 px-4">&lt;</button>
            <h1 x-text="currentMonth" class="text-[25px] font-bold mb-3 mt-3 mx-5">February</h1>
            <button @click="nextMonth" class="absolute right-3 top-3 flex items-center justify-center w-5 h-10 rounded-lg shadow border border-gray border-opacity-20 text-black font-bold py-4 px-4">&gt;</button>
        </div>
        <!-- Calendar Table -->
        <div class="flex w-[290px] h-[240px] ml-3 mt-7">
            <table class="calendar-table pt-1">
                <thead>
                    <tr>
                        <template x-for="day in daysOfWeek" :key="day">
                            <th x-text="day" class="px-1.5 py-1"></th>
                        </template>
                    </tr>
                </thead>
                <tbody>
                    <template x-for="(week, index) in weeks" :key="index">
                        <tr>
                            <template x-for="(day, dayIndex) in week" :key="dayIndex">
                                <td :class="{ 'bg-blue-700 rounded-full': day.highlighted }" class="px-2 py-0.5" style="text-align: center;" x-text="day.day"></td>
                            </template>
                        </tr>
                    </template>
                </tbody>
            </table>
        </div>
    </div>

<!-- Scripts -->
    <!-- Calendar -->
    <script>
        function calendarData() {
            const daysOfWeek = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
            let now = new Date();
            let year = now.getFullYear();
            let month = now.getMonth();
            let day = now.getDate(); // Get the current day
            let currentYear = now.getFullYear();
            let currentMonth = now.getMonth() + 1; // Adding 1 because getMonth() returns zero-based month index

            const updateCalendar = () => {
                let firstDay = new Date(year, month, 1).getDay();
                let daysInMonth = new Date(year, month + 1, 0).getDate();
                let weeks = [[]];
                let currentWeek = 0;

                for (let i = 0; i < firstDay; i++) {
                    weeks[currentWeek].push('');
                }

                for (let i = 1; i <= daysInMonth; i++) {
                    if (weeks[currentWeek].length === 7) {
                        currentWeek++;
                        weeks.push([]);
                    }
                    let highlighted = (i === day && month === currentMonth - 1 && year === currentYear);
                    weeks[currentWeek].push({ day: i, highlighted: highlighted });
                }

                return {
                    daysOfWeek,
                    weeks,
                    currentMonth: (new Date(year, month)).toLocaleString('default', { month: 'long', year: 'numeric' }),
                    currentDay: day, // Add current day to data
                };
            };

            return {
                ...updateCalendar(),
                prevMonth() {
                    month -= 1;
                    if (month === -1) {
                        year -= 1;
                        month = 11;
                    }
                    Object.assign(this.$data, updateCalendar());
                },
                nextMonth() {
                    month += 1;
                    if (month === 12) {
                        year += 1;
                        month = 0;
                    }
                    Object.assign(this.$data, updateCalendar());
                },
                init() {
                    setInterval(() => {
                        Object.assign(this.$data, updateCalendar());
                    }, 1000);
                },
            };
        }
    </script>

    <!-- User Menu -->
    <script>
        function toggleDropdown() {
            var dropdown = document.getElementById("dropdown");
            dropdown.classList.toggle("hidden");
            console.log("Dropdown toggled");
        }
    </script>
</div>
