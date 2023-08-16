window.showAlert = function (messages, status = 'success') {

    let statuses = ['success', 'info', 'warning', 'error'];

    if (Object.prototype.toString.call(messages) === "[object Object]") {
        let err_text = '';

        for(let message in messages){
            err_text += ' - ' + messages[message] + '<br>';
        }

        messages = err_text;
    }

    if (statuses.includes(status)) {
        eval('toastr.' + status)(messages);
    } else {
        toastr.success(messages);
    }
};
