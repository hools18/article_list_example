window.showAlert = function (errors, status = 'success') {

    let statuses = ['success', 'info', 'warning', 'error'];

    if (Object.prototype.toString.call(errors) === "[object Object]") {
        let err_text = '';

        for (let error in errors) {
            err_text += ' * ' + errors[error] + '<br>';
        }

        errors = err_text;
    }

    if (statuses.includes(status)) {
        eval('toastr.' + status)(errors);
    } else {
        toastr.success(errors);
    }
};
