/* Custom validation */

function clear_form_errors(selector='.validation_field') {
    var element = $(selector);
    element.removeClass('form_error_border');
    var feedback = element.next('.feedback');
    feedback.remove();
}

function set_form_errors(errors, type = '') {
    for (var key of Object.keys(errors)) {
        console.log(key + "  " + errors[key]);
        var element = $('#' + key + type);
        element.addClass('form_error_border');
        element.after('<span class=feedback>' + errors[key] + '</span>');
    }
}

$('.validation_field').on('keyup blur change', function () //whenever you click off an input element
    {
        if (!$(this).val()) { //if it is blank. 
            clear_form_errors(this);
            var element = $(this);
            element.addClass('form_error_border');
            element.after('<span class=feedback>Field could not be empty</span>');
        } else {
            clear_form_errors(this);
        }
    }
);