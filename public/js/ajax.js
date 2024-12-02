// public/js/ajaxRequest.js
function sendAjaxRequest(url, method, data, successCallback) {
    $.ajax({
        url: url,
        method: method,
        data: data,
        processData: false, // Important for FormData
        contentType: false,  // Important for FormData
        dataType: "json",
        success: function (response) {
            if (response.status == 404) {
                showToast('error', response.message);
            } else if (response.status == 400) {
                showToast('error', response.message);
            } else if (response.status == 200) {
                showToast('success', response.message);
                setTimeout(function () {
                    successCallback();
                }, 2000);
            }
        },
        error: function (xhr, status, error) {
            showToast('error', 'An error occurred: ' + error);
        }
    });
}

const showToast = (icon, title) => {
    const position = icon === 'success' ? 'top-end' : 'bottom-end';
    const Toast = Swal.mixin({
        toast: true,
        position: position,
        iconColor: 'white',
        customClass: {
            popup: 'colored-toast',
        },
        showConfirmButton: false,
        timer: 2000,
        timerProgressBar: true,
    });
    Toast.fire({
        icon: icon,
        title: title,
    });
};


function showError(field, message) {
    if (!message) {
        $("#" + field).addClass("is-valid").removeClass("is-invalid").siblings(".invalid-feedback").text("");
    } else {
        $("#" + field).addClass("is-invalid").removeClass("is-valid").siblings(".invalid-feedback").text(message);
    }
}

function removeValidationClasses(form) {
    $(form).each(function () {
        $(form).find(":input").removeClass("is-valis is-invalid");
    });
}

/**
 *
 * @param {string} id
 * @returns
 */
function inputValue(id) {
    return document.getElementById(id).value.trim();
}

function confirmIt(message, callback) {
    Swal.fire({
        title: "Konfirmasi",
        text: message,
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes"
    }).then((result) => {
            if (result.isConfirmed) callback()
        });
}

// Export function agar bisa digunakan di luar

