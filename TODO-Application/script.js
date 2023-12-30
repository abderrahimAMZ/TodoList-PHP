addEventListener('DOMContentLoaded', function() {
    // Get all checkboxes with the class 'largerCheckbox'
    var checkboxes = document.querySelectorAll('.largerCheckbox');

    // Add an event listener to each checkbox
    checkboxes.forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            // Get the corresponding task text element
            var taskText = checkbox.nextElementSibling;

            // Apply or remove the 'line-through' style based on the checkbox state
            if (checkbox.checked) {
                taskText.style.textDecoration = 'line-through';
            } else {
                taskText.style.textDecoration = 'none';
            }
        });
    });
});
