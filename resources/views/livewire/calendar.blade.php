<div class="container mx-auto my-8">
    <div id="calendar"></div>

    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.10.2/dist/fullcalendar.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var calendarEl = document.getElementById('calendar');

                var calendar = new FullCalendar.Calendar(calendarEl, {
                    plugins: ['dayGrid'],
                    themeSystem: 'tailwind',
                    height: 'auto',
                });

                calendar.render();
            });
        </script>
    @endpush
</div>
