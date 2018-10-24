var bool = false;

function validImage() {
    var extension = $('#image_file').val().split('.').pop().toLowerCase();
    if (extension != '') {
        if (jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
            swal("Invalid image file", "", "warning").
            then((value) => {
                $('#image_file').val('');
            });
            bool = false;
            return false;
        }
    }
    if ($('#image_file').val() == "") {
        swal("Please input image", "", "warning");
        bool = false;
        return false;
    } else {
        bool = true;
    }
}

function validName() {
    if ($('#pet_name').val() == '') {
        $('#pet_name').addClass('is-invalid');
        bool = false;
    } else {
        $('#pet_name').removeClass('is-invalid');
        bool = true;
    }
}

function validType() {
    var opt = $('#pet_type option[disabled]:selected').val();
    if (opt == "Choose type") {
        $('#pet_type').addClass('is-invalid');
        bool = false;
    } else {
        $('#pet_type').removeClass('is-invalid');
        bool = true;
    }
}

function validCategory() {

}

function validAge() {
    if ($('#pet_age').val() == '') {
        $('#pet_age').addClass('is-invalid');
        $('#pet_age_message').html('Please enter age');
        bool = false;
    } else if ($('#pet_age').val() <= 0) {
        $('#pet_age_message').html('Please a valid age');
        bool = false;
    } else {
        $('#pet_age').removeClass('is-invalid');
        bool = true;
    }
}

function validDewormed() {
    var opt = $('#pet_dewormed option[disabled]:selected').val();
    if (opt == "Choose type") {
        $('#pet_dewormed').addClass('is-invalid');
        bool = false;
    } else {
        $('#pet_dewormed').removeClass('is-invalid');
        bool = true;
    }
}

function validVacinated() {
    var opt = $('#pet_vaccinated option[disabled]:selected').val();
    if (opt == "Choose type") {
        $('#pet_vaccinated').addClass('is-invalid');
        bool = false;
    } else {
        $('#pet_vaccinated').removeClass('is-invalid');
        bool = true;
    }
}

function validDescription() {
    if ($('#pet_description').val() == '') {
        $('#pet_description').addClass('is-invalid');
        bool = false;
    } else {
        $('#pet_description').removeClass('is-invalid');
        bool = true;
    }
}

function validateAll() {
    if (bool) {
        var form = $('#post_form')[0];
        var formData = new FormData(form);
        $.ajax({
            url: 'upload.php',
            method: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function (data) {
                swal('Uploaded Successfully', '', 'success', {
                    closeOnClickOutside: false
                });
            }
        });
    }
}

$('#pet_name').bind('input', function () {
    validName();
});
$('#pet_age').bind('input', function () {
    validAge();
});
$('#pet_description').bind('input', function () {
    validDescription();
});
$('#pet_name').blur(function () {
    validName();
});
$('#pet_type').blur(function () {
    validType();
});
$('#pet_age').blur(function () {
    validAge();
});
$('#pet_dewormed').blur(function () {
    validDewormed();
});
$('#pet_vacinated').blur(function () {
    validVacinated();
});
$('#pet_description').blur(function () {
    validDescription();
});

function Validate() {
    validImage();
    validName();
    validType();
    validAge();
    validDewormed();
    validVacinated();
    validDescription();
    validateAll();
    return false;
}