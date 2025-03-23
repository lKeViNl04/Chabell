(() => {
    'use strict'

    const forms = document.querySelectorAll('.needs-validation')

    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }

            form.classList.add('was-validated')
        }, false)
    })
})()

setTimeout(function () {
    var alertElement = document.getElementById('myAlert');
    if (alertElement) {
        alertElement.style.display = 'none';
    }
}, 15000);
