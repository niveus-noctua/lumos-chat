function getData(obj_form) {
    var hData = {};

    $('input, textarea, select', obj_form).each(function () {
        if (this.name && this.name != '') {
            hData[this.name] = this.value;
            console.log('hData[' + this.name + '] = ' + hData[this.name]);
        }
    });
    return hData;
}


function registerNewUser() {
    var postData = getData('#reg-form');


    $.ajax({
        type: 'POST',
        async: false,
        url:"/user/register",
        data: postData,
        dataType: 'json',
        success: function (data) {
            if (data['success']) {
                data['message'];
            } else {
                alert(data['message']);
            }
        }
    });
}