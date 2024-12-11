$(function() {
    // Prevent default form submission
    $('#schedule-form').on('submit', function(e) {
        e.preventDefault(); // Stop the form from submitting normally
        
        var selectedTime = $('.time-slot.active').data('time');
        var selectedDate = $('#fecha_cita').val();
        var doctorName = $('#doctor_nombre').val();

        // Find matching appointment
        var matchedAppointment = null;
        
        Object.keys(scheds).forEach(function(key) {
            var appointment = scheds[key];
            
            // Extract date and time from appointment
            var appointmentDate = appointment.fecha_cita.split(' ')[0];
            var appointmentTime = appointment.fecha_cita.split(' ')[1].substring(0, 5);

            // Check if date and time match
            if (appointmentDate === selectedDate && appointmentTime === selectedTime) {
                matchedAppointment = appointment;
            }
        });

        // Time slot button click handler
        $('.time-slot').click(function() {
            // Remove active class from all buttons
            $('.time-slot').removeClass('active');
            // Add active class to clicked button
            $(this).addClass('active');
        });

        // If appointment found, populate modal
        if (matchedAppointment) {
            $('#event-details-modal #title').text(matchedAppointment.title || 'Appointment');
            $('#event-details-modal #description').text(matchedAppointment.description || 'No description');
            $('#event-details-modal #start').text(matchedAppointment.sdate || selectedDate + ' ' + selectedTime);
            $('#event-details-modal #end').text(matchedAppointment.edate || 'N/A');
            $('#event-details-modal #edit, #event-details-modal #delete').attr('data-id', matchedAppointment.id);
            $('#event-details-modal').modal('show');
        } else {
            // If no appointment, still show modal with available information
            $('#event-details-modal #title').text('New Appointment');
            $('#event-details-modal #description').text('Doctor: ' + doctorName);
            $('#event-details-modal #start').text(selectedDate + ' ' + selectedTime);
            $('#event-details-modal #end').text('Not scheduled');
            $('#event-details-modal').modal('show');
        }
    });
});