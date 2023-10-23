// kondisi saat isi form download
$(document).ready(function() {
    const form = $(".download-form");
    const submitBtn = $("#submitBtn");

    form.submit(function(event) {
        event.preventDefault();

        submitBtn.prop("disabled", true);
        submitBtn.text("Loading...");
        submitBtn.css({
            "background-color": "#083d59",
            "cursor": "not-allowed"
        });

        $.ajax({
            type: form.attr("method"),
            url: form.attr("action"),
            data: form.serialize(),
            success: function(response) {
                if (response) {
                    Swal.fire('Good job!', 'Silahkan cek email anda!', 'success');
                    resetSuksesButton();
                } else {
                    Swal.fire('Oops...', 'Silahkan isi semua field!', 'error');
                    resetSubmitButton();
                }
            },
            error: function(xhr) {
                Swal.fire('Oops...', 'Terjadi kesalahan dalam mengirim data!', 'error');
                resetSubmitButton();
            }
        });
    });

    function resetSuksesButton() {
        submitBtn.prop("disabled", true);
        submitBtn.text("Sukses dikirim!");
        submitBtn.css("background-color", "#083d59");
        submitBtn.css("cursor", "not-allowed");
        setTimeout(function() {
            window.location.href = document.referrer;
        }, 4000);
    }

    function resetSubmitButton() {
        submitBtn.prop("disabled", false);
        submitBtn.text("Get File");
        submitBtn.css({
            "background-color": "",
            "cursor": "pointer"
        });
    }
});

// kirim whatsapp langsung lewat wa web auto
$(document).ready(function() {
    $('#submit-form').click(function() {
        // Mengirim data form menggunakan AJAX
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url("kontak/sendwa"); ?>',
            data: $('form').serialize(),
            success: function() {
                // Membuka WhatsApp Web setelah data form terkirim
                window.open('<?php echo base_url("kontak/sendwa"); ?>', '_blank');
            }
        });
        return false;
    });
});