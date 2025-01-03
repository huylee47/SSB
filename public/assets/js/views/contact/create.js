$(document).ready(function () {
    $('#contactForm').on('submit', function (e) {
        e.preventDefault();

        // Disable the submit button to prevent multiple clicks
        const submitButton = $(this).find(':submit');
        submitButton.prop('disabled', true);

        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            success: function (response) {
                Swal.fire('Thành công', 'Tin nhắn của bạn đã được gửi đi!', 'success').then(function () {
                    $('#contactForm')[0].reset();
                    submitButton.prop('disabled', false); // Re-enable button after SweetAlert
                });
            },
            error: function (xhr) {
                let errorMessage = 'Lỗi gửi tin nhắn';
                if (xhr.status === 409 ||xhr.status === 422 ) {
                    errorMessage = 'Email đã gửi đi trước đó!';
                }

                Swal.fire('Error', errorMessage, 'error').then(function () {
                    submitButton.prop('disabled', false); // Re-enable button after SweetAlert
                });
            }
        });
    });
});
