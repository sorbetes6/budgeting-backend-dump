<div>
    <div id="calendar"></div>
</div>

@push('scripts')
    <script>
        document.addEventListener('livewire:load', function () {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                plugins: ['dayGrid'],
                events: [
                    // Your events data here
                ],
            });

            calendar.render();
        });
    </script>
@endpush
