function getErrorHtml(elementErrors){
    
    if((typeof(elementErrors) === 'undefined') || (elementErrors.length < 1)){
        return;
    }

    var out = '<div id="finder"><ul class="errors">';
    for(var i=0; i<elementErrors.length; i++){
        out += '<li>' + elementErrors[i] + '</li>';
    }
    out += '</ul></div>';
    return out;
}

function elementValidation(id, action, formId){

    var formElements;

    function addFormToken(){
        var Token = $('#' + formId + " input[name=_token").val();
        formElements.append('_token', Token);
    }

    function sendAjaxReq(){
        $.ajax({
            type: 'POST',
            url: action,
            data: formElements,
            dataType: "json",
            error: function(data){
                if(data.status == 422){
                    var errorMessage = JSON.parse(data.responseText);
                    $('#' + id).parent().find('#finder').html(' ');
                    $("#" + id).after(getErrorHtml(errorMessage[id]));
                }
            },
            contentType: false,
            processData: false
        });
    }

    var element = $('#' + formId + ' :input[name=' + id + ']');
    if(element.attr('type') === 'file'){
        if(element.val() != ''){
            inputValue = element.get(0).file(0);
        } else {
            inputValue = new File([""], "");
        }
    } else {
        inputValue = element.val();
    }

    formElements = new FormData();
    formElements.append(id, inputValue);
    addFormToken();
    sendAjaxReq();
}

function formValidation(action, formId){

    var form = new FormData(document.getElementById(formId));

    $.ajax({
        type: 'POST',
        url: action,
        data: form,
        dataType: "json",
        error: function(data){
            if(data.status === 422){
                var errorMessages = JSON.parse(data.responseText);
                $.each(errorMessages, function(id){
                    $("#" + id).parent().find('#finder').html(' ');
                    $("#" + id).after(getErrorHtml(errorMessages[id]));
                });
            }
        },
        success: function(data){
            window.location.replace(data.redirect);
        },
        contentType: false,
        processData: false
    });
}