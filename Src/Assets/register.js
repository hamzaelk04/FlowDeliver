// Toggle password visibility
function togglePasswordVisibility() {
    const passwordInput = document.getElementById('password');
    const toggleIcon = document.getElementById('password-toggle-icon');
    
    if (passwordInput && toggleIcon) {
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            toggleIcon.textContent = 'visibility_off';
        } else {
            passwordInput.type = 'password';
            toggleIcon.textContent = 'visibility';
        }
    }
}

// Toggle vehicle field based on role selection
function toggleVehicleField() {
    const clientRadio = document.getElementById('role-client');
    const deliveryRadio = document.getElementById('role-delivery');
    const vehicleField = document.getElementById('vehicle-field');
    
    if (clientRadio && deliveryRadio && vehicleField) {
        if (deliveryRadio.checked) {
            vehicleField.style.display = 'block';
        } else {
            vehicleField.style.display = 'none';
        }
    }
}

// Initialize when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    // Password toggle
    const toggleButton = document.getElementById('password-toggle');
    if (toggleButton) {
        toggleButton.addEventListener('click', togglePasswordVisibility);
    }
    
    // Role selector - vehicle field toggle
    const clientRadio = document.getElementById('role-client');
    const deliveryRadio = document.getElementById('role-delivery');
    
    if (clientRadio) {
        clientRadio.addEventListener('change', toggleVehicleField);
    }
    if (deliveryRadio) {
        deliveryRadio.addEventListener('change', toggleVehicleField);
    }
    
    // Initial check on page load
    toggleVehicleField();
});


