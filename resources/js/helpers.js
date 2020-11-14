$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})

if (document.querySelector('.check-toggle')) {
    $('.check-toggle').each(function (e, element) {
        $(element).bootstrapToggle();
    });
}

if (document.querySelector('.ckeditor-content')) {
    $('.ckeditor-content').each(function (e, element) {
        // console.log(window.CKFinder);
        window.ClassicEditor.create(element, {
            // plugins: [SimpleUploadAdapter, CKFinder],
            // toolbar: ['imageUpload'],
            // ckfinder: {
            //     // Upload the images to the server using the CKFinder QuickUpload command.
            //     uploadUrl: 'https://example.com/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images&responseType=json'
            // }
        }).then(function (editor) {
            //console.log(editor);
        })["catch"](function (error) {
            console.error(error);
        });
    });
}

if (document.querySelector('.dropify')) {
    $('.dropify').dropify({
        tpl: {
            wrap: '<div class="dropify-wrapper user"></div>',
            loader: '<div class="dropify-loader"></div>',
            message: '<div class="dropify-message"><span class="file-icon"></span> <p class="text-uppercase">Arrastra y suelta aquí para subir</p><button type="button" class="mt-3 cs-file-drop-btn btn btn-primary btn-sm">O seleccione archivo</button></div>',
            preview: '<div class="dropify-preview"><span class="dropify-render"></span><div class="dropify-infos"><div class="dropify-infos-inner"><p class="dropify-infos-message fs-12">Arrastra y suelta o haz clic para reemplazar</p></div></div></div>',
            filename: '<p class="dropify-filename"><span class="file-icon"></span> <span class="dropify-filename-inner"></span></p>',
            clearButton: '<button type="button" class="dropify-clear">Quitar</button>',
            errorLine: '<p class="dropify-error">{{ error }}</p>',
            errorsContainer: '<div class="dropify-errors-container"><ul></ul></div>'
        }
    });
}

window.showCustomSucces = function showCustomSucces(text) {
    window.Swal.fire(
        'Success!',
        text,
        'success'
    )
}

window.showDeletedDialog = function showDeletedDialog(text) {
    window.Swal.fire(
        'Deleted!',
        text,
        'Success'
    );
}

window.showCustomError = function showCustomError(text) {
    window.Swal.fire({
        icon: 'error',
        title: '<h5 class="text-danger">Error en la informaci&oacute;n ingresada</h5>',
        html: text,
        //text: text
    });
}

window.errorAjax = function errorAjax(err) {
    var errors = $.parseJSON(err.responseText);
    var mns = "";

    $.each(errors, function (key, error) {
        if (key == 'errors') {
            $.each(error, function (item, value) {
                mns += value[0] + '<br>';
            });
        }

        if (key == 'message') {
            mns += error + '<br>';
        }
    });

    window.showCustomError(mns);
}

window.responseAjax = function responseAjax(data, reload) {
    reload = (reload) ? reload : false;

    if (data.status) {
        if (reload) {
            window.location.reload();
        }

        window.showCustomSucces(data.message);
    } else {
        window.showCustomError(data.errors)
    }
}

window.deleteModalAjax = function deleteModalAjax(id) {
    $('#' + id).on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Button that triggered the modal
        var data_id = button.data('id'); // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.


        var form = $('#' + id).find("form");
        var action = $(form).attr('data-action').slice(0, -1);
        action += data_id;

        $(form).attr('action', action);

        var modal = $(this);
        modal.find('.modal-title').text('Borrar registro #: ' + data_id);
    });
}

window.disableInputForm = function disableInputForm(id) {
    $("#" + id + " input").prop('disabled', true);
    $("#" + id + " select").prop('disabled', true);
}

window.initSelect2 = function initSelect2(element) {
    // console.log('Nr', element);
    $(element).select2({
        language: "es"
    });
}

window.initAjaxSelect2 = function initAjaxSelect2(element) {
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    // console.log('Ajax: ', element);
    $(element).select2({
        language: "es",
        ajax: {
            data: function (params) {
                var query = {
                    _token: CSRF_TOKEN,
                    search: params.term,
                    type: 'public'
                }
                return query;
            },
            processResults: function (data) {
                return {
                    results: data
                };
            },
        },
    });
}

$('.select2').each(function (e, element) {
    var param_ajax = $(this).attr('data-ajax--url');
    if (param_ajax != undefined) {
        window.initAjaxSelect2(element);
    } else {
        window.initSelect2(element);
    }
});


window.countWords = function countWords(element_id, element_error_id, submit_id, min, maxword) {
    if (maxword == undefined) {
        maxword = 100;
    }

    if (min == undefined) {
        min = 0;
    }

    let str = document.getElementById(element_id).value;
    var spaces = str.match(/\S+/g);
    var words = spaces ? spaces.length : 0;

    document.getElementById("count-words").innerHTML = words + " palabras";

    if (words > min && words <= maxword || words == 0) {
        $("#" + element_error_id).removeClass('d-inline');
        $('#' + element_id).removeClass('is-invalid');
        $('#' + submit_id).removeAttr('disabled');
    }
    else if (words < min) {
        $("#" + element_error_id).html('Llene el mínimo de palabras necesarias');
        $("#" + element_error_id).addClass('d-inline');
        $('#' + element_id).addClass('is-invalid');
        $('#submitbutton').attr('disabled', 'disabled');
    }
    else {
        $("#" + element_error_id).html('Ha sobrepasado el límite de palabras permitido');
        $("#" + element_error_id).addClass('d-inline');
        $('#' + element_id).addClass('is-invalid');
        $('#' + submit_id).attr('disabled', 'disabled');
    }
}

/**
 * A Javascript module to loadeding/refreshing options of a select2 list box using ajax based on selection of another select2 list box.
 *
 * @url : https://gist.github.com/ajaxray/187e7c9a00666a7ffff52a8a69b8bf31
 * @auther : Anis Uddin Ahmad <anis.programmer@gmail.com>
 *
 * Live demo - https://codepen.io/ajaxray/full/oBPbQe/
 * w: http://ajaxray.com | t: @ajaxray
 */
window.Select2Cascade = (function (window, $) {
    function Select2Cascade(parent, child, url, select2Options) {
        var afterActions = [];
        var options = select2Options || {};

        // Register functions to be called after cascading data loading done
        this.then = function (callback) {
            afterActions.push(callback);
            return this;
        };

        parent.on("change", function (e) {
            child.prop("disabled", true);

            var _url = (url.slice(0, -1)) + $(this).val();

            $.getJSON(_url, function (items) {
                var newOptions = '<option value="">-- Select --</option>';
                $.each(items, function (index, item) {
                    newOptions += '<option value="' + item.id + '">' + item.text + '</option>';
                });

                child.select2('destroy').html(newOptions).prop("disabled", false)
                    .select2(options);

                afterActions.forEach(function (callback) {
                    callback(parent, child, items);
                });
            });
        });
    }

    return Select2Cascade;

})(window, $);
