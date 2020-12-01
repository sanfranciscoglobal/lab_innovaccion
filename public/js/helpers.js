/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/helpers.js":
/*!*********************************!*\
  !*** ./resources/js/helpers.js ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

window.optionsMaps = {
  //types: ["locality", "political", "geocode"],
  //types: ['(cities)'],
  componentRestrictions: {
    country: 'ec'
  }
};
window.currentAddressInput = 0;
window.autocomplete = null;
$(function () {
  $('[data-toggle="tooltip"]').tooltip();
  $('.datatables-demo').dataTable();
});

if (document.querySelector('.check-toggle')) {
  $('.check-toggle').each(function (e, element) {
    $(element).bootstrapToggle();
  });
}

if (document.querySelector('.ckeditor-content')) {
  $('.ckeditor-content').each(function (e, element) {
    // console.log(window.CKFinder);
    window.ClassicEditor.create(element, {// plugins: [SimpleUploadAdapter, CKFinder],
      // toolbar: ['imageUpload'],
      // ckfinder: {
      //     // Upload the images to the server using the CKFinder QuickUpload command.
      //     uploadUrl: 'https://example.com/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images&responseType=json'
      // }
    }).then(function (editor) {//console.log(editor);
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
    },
    error: {
      'fileSize': 'El tamaño del archivo es demasiado grande ({{ value }} máximo).',
      'minWidth': 'El ancho de la imagen es demasiado pequeño ({{ value }}}px mínimo).',
      'maxWidth': 'El ancho de la imagen es demasiado grande ({{ value }}}px máximo).',
      'minHeight': 'La altura de la imagen es demasiado pequeña ({{ value }}}px mínimo).',
      'maxHeight': 'La altura de la imagen es demasiado grande ({{ value }}px máximo).',
      'imageFormat': 'El formato de imagen no está permitido ({{ value }} solamente).'
    },
    messages: {
      'default': 'Arrastre y suelte un archivo aquí o haga clic en',
      'replace': 'Arrastra y suelta o haz clic para reemplazar',
      'remove': 'Eliminar',
      'error': 'Tenemos problemas con a imagen a cargar'
    }
  });
}

window.showCustomSucces = function showCustomSucces(text) {
  window.Swal.fire('Success!', text, 'success');
};

window.showDeletedDialog = function showDeletedDialog(text) {
  window.Swal.fire('Deleted!', text, 'Success');
};

window.showCustomError = function showCustomError(text) {
  window.Swal.fire({
    icon: 'error',
    title: '<h5 class="text-danger">Error en la informaci&oacute;n ingresada</h5>',
    html: text //text: text

  });
};

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
};

window.responseAjax = function responseAjax(data, reload) {
  reload = reload ? reload : false;

  if (data.status) {
    if (reload) {
      window.location.reload();
    }

    window.showCustomSucces(data.message);
  } else {
    window.showCustomError(data.errors);
  }
};

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
};

window.disableInputForm = function disableInputForm(id) {
  $("#" + id + " input").prop('disabled', true);
  $("#" + id + " select").prop('disabled', true);
};

window.initSelect2 = function initSelect2(element) {
  // console.log('Nr', element);
  $(element).select2({
    language: "es"
  });
};

window.initAjaxSelect2 = function initAjaxSelect2(element) {
  var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content'); // console.log('Ajax: ', element);

  $(element).select2({
    language: "es",
    ajax: {
      data: function data(params) {
        var query = {
          _token: CSRF_TOKEN,
          search: params.term,
          type: 'public'
        };
        return query;
      },
      processResults: function processResults(data) {
        return {
          results: data
        };
      }
    }
  });
};

$('.select2').each(function (e, element) {
  var param_ajax = $(this).attr('data-ajax--url');

  if (param_ajax != undefined) {
    window.initAjaxSelect2(element);
  } else {
    window.initSelect2(element);
  }
});

window.countWords = function countWords(element_id, element_error_id, submit_id, min, maxword, count_words_id) {
  maxword = maxword == undefined ? 100 : maxword;
  min = min == undefined ? 0 : min;
  count_words_id = count_words_id == undefined ? 'count-words' : count_words_id;
  var str = document.getElementById(element_id).value;
  var spaces = str.match(/\S+/g);
  var words = spaces ? spaces.length : 0;
  document.getElementById(count_words_id).innerHTML = words + " palabras";

  if (words >= min && words <= maxword || words == 0) {
    $("#" + element_error_id).removeClass('d-inline');
    $('#' + element_id).removeClass('is-invalid');
    $('#' + submit_id).removeAttr('disabled');
  } else if (words < min) {
    $("#" + element_error_id).html('Llene el mínimo de palabras necesarias');
    $("#" + element_error_id).addClass('d-inline');
    $('#' + element_id).addClass('is-invalid');
    $('#submitbutton').attr('disabled', 'disabled');
  } else {
    $("#" + element_error_id).html('Ha sobrepasado el límite de palabras permitido');
    $("#" + element_error_id).addClass('d-inline');
    $('#' + element_id).addClass('is-invalid');
    $('#' + submit_id).attr('disabled', 'disabled');
  }
};

window.countCharacters = function countCharacters(element_id, element_error_id, submit_id, min, maxword, count_words_id) {
  maxword = maxword == undefined ? 100 : maxword;
  min = min == undefined ? 0 : min;
  count_words_id = count_words_id == undefined ? 'count-words' : count_words_id;
  var str = document.getElementById(element_id).value;
  var words = str ? str.length : 0;
  document.getElementById(count_words_id).innerHTML = words + " caracteres";

  if (words >= min && words <= maxword || words == 0) {
    $("#" + element_error_id).removeClass('d-inline');
    $('#' + element_id).removeClass('is-invalid');
    $('#' + submit_id).removeAttr('disabled');
  } else if (words < min) {
    $("#" + element_error_id).html('Llene el mínimo de caracteres necesarias');
    $("#" + element_error_id).addClass('d-inline');
    $('#' + element_id).addClass('is-invalid');
    $('#' + submit_id).attr('disabled', 'disabled');
  } else {
    $("#" + element_error_id).html('Ha sobrepasado el límite de caracteres permitido');
    $("#" + element_error_id).addClass('d-inline');
    $('#' + element_id).addClass('is-invalid');
    $('#' + submit_id).attr('disabled', 'disabled');
  }
};

window.initMap = function initMap() {
  try {
    var input = document.getElementById('evento_direccion');
    var content = document.getElementById('map');
    if (!content) throw 'No existe div content #map';
    var latitud = $(input).data('latitud') ? $(input).data('latitud') : null;
    var longitud = $(input).data('longitud') ? $(input).data('longitud') : null;
    navigator.geolocation.getCurrentPosition(function (position) {
      var latUsuario = latitud != undefined ? latitud : position.coords.latitude;
      var lonUsuario = longitud != undefined ? longitud : position.coords.longitude;
      var zoom = 16;
      var dragMarker = true;
      myLatlng = new google.maps.LatLng(latUsuario, lonUsuario);
      geocoder = new google.maps.Geocoder();
      infowindow = new google.maps.InfoWindow();
      window.autocomplete = input ? new google.maps.places.Autocomplete(input, window.optionsMaps) : null;
      map = new google.maps.Map(document.getElementById('map'), {
        center: myLatlng,
        zoom: zoom,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      }); // console.log(map);

      marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        //icon: baseURL + '/images/markers/me_icon.png',
        draggable: dragMarker,
        animation: google.maps.Animation.DROP,
        title: 'Arrastre para seleccionar la ubicación'
      });
      geocoder.geocode({
        'latLng': myLatlng
      }, function (results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
          if (results[0]) {
            jQuery('input.ubicacion-' + window.currentAddressInput).val(results[0].formatted_address);
            jQuery('input.lat-' + window.currentAddressInput).val(marker.getPosition().lat());
            jQuery('input.long-' + window.currentAddressInput).val(marker.getPosition().lng());
            $.each(results[0].address_components, function (index, value) {
              if (value.types.indexOf('locality') > -1) {
                jQuery('input.localidad-' + window.currentAddressInput).val(value.short_name);
              }

              if (value.types.indexOf('administrative_area_level_1') > -1) {
                jQuery('input.area1-' + window.currentAddressInput).val(value.short_name);
              }

              if (value.types.indexOf('administrative_area_level_2') > -1) {
                jQuery('input.area2-' + window.currentAddressInput).val(value.short_name);
              }
            });
            infowindow.setContent(results[0].formatted_address);
            infowindow.open(map, marker);
          }
        }
      });
      google.maps.event.addListener(marker, 'dragend', function () {
        geocoder.geocode({
          'latLng': marker.getPosition()
        }, function (results, status) {
          if (status == google.maps.GeocoderStatus.OK) {
            if (results[0]) {
              jQuery('input.ubicacion-' + window.currentAddressInput).val(results[0].formatted_address);
              jQuery('input.lat-' + window.currentAddressInput).val(marker.getPosition().lat());
              jQuery('input.long-' + window.currentAddressInput).val(marker.getPosition().lng());
              $.each(results[0].address_components, function (index, value) {
                if (value.types.indexOf('locality') > -1) {
                  jQuery('input.localidad-' + window.currentAddressInput).val(value.short_name);
                }

                if (value.types.indexOf('administrative_area_level_1') > -1) {
                  jQuery('input.area1-' + window.currentAddressInput).val(value.short_name);
                }

                if (value.types.indexOf('administrative_area_level_2') > -1) {
                  jQuery('input.area2-' + window.currentAddressInput).val(value.short_name);
                }
              });
              infowindow.setContent(results[0].formatted_address);
              infowindow.open(map, marker);
            }
          }
        });
      });
      window.autocomplete ? window.autocomplete.addListener('place_changed', window.setnewAddress) : null; //console.log('Init: ', window.autocomplete);
    });
  } catch (e) {
    console.log(e);
  }
};

window.setnewAddress = function setnewAddress() {
  var place = window.autocomplete.getPlace();
  console.log(place);
  Latlng = new google.maps.LatLng(place.geometry.location.lat(), place.geometry.location.lng());
  marker.setPosition(Latlng);
  infowindow.setContent(place.formatted_address);
  map.panTo(Latlng);
  console.log('set: ', window.currentAddressInput);
  $.each(place.address_components, function (index, value) {
    if (value.types.indexOf('locality') > -1) {
      jQuery('input.localidad-' + window.currentAddressInput).val(value.short_name);
    }

    if (value.types.indexOf('administrative_area_level_1') > -1) {
      jQuery('input.area1-' + window.currentAddressInput).val(value.short_name);
    }

    if (value.types.indexOf('administrative_area_level_2') > -1) {
      jQuery('input.area2-' + window.currentAddressInput).val(value.short_name);
    }
  });
  jQuery('input.lat-' + window.currentAddressInput).val(place.geometry.location.lat());
  jQuery('input.long-' + window.currentAddressInput).val(place.geometry.location.lng());
};

window.addSearchMap = function addSearchMap() {
  var addressIterator = document.getElementsByClassName("ubicaciones").length;
  var html = '';
  html += '<div class="form-group ubicaciones direccion border-bottom" data-row="' + addressIterator + '">';
  html += '<div class="row">';
  html += '<div class="col-lg-12">';
  html += '<label class="control-label">Dirección Sucursal</label>';
  html += '<input type="text" required="required" data-adresscontainer="' + addressIterator + '" class="form-control ubicacion ubicacion-' + addressIterator + '"';
  html += 'placeholder="Escriba la dirección" name="Ubicaciones[' + addressIterator + '][direccion]"';
  html += 'value=""/>';
  html += '<input type="hidden" class="lat lat-' + addressIterator + '" name="Ubicaciones[' + addressIterator + '][latitud]" value="">';
  html += '<input type="hidden" class="long long-' + addressIterator + '" name="Ubicaciones[' + addressIterator + '][longitud]" value="">';
  html += '<input type="hidden" class="localidad localidad-' + addressIterator + '" name="Ubicaciones[' + addressIterator + '][localidad]" value="">';
  html += '<input type="hidden" class="area1 area1-' + addressIterator + '" name="Ubicaciones[' + addressIterator + '][area1]" value="">';
  html += '<input type="hidden" class="area2 area2-' + addressIterator + '" name="Ubicaciones[' + addressIterator + '][area2]" value="">';
  html += '</div>';
  html += '</div></div>';
  $('#sedes-container').append(html);
  var newInput = document.getElementsByClassName('ubicacion-' + addressIterator)[0];
  window.initSearchMap(newInput);
};

window.initSearchMap = function initSearchMap(element) {
  element.focus();
  window.autocomplete = new google.maps.places.Autocomplete(element, window.optionsMaps);
  window.autocomplete.addListener('place_changed', setnewAddress);
};

window.validateFormEvent = function validateFormEvent(btn, class_content, scroll) {
  var curStep = btn.closest("." + class_content);
  var curInputs = curStep.find("input,select,textarea,file, radio");
  var isValid = true;

  for (var i = 0; i < curInputs.length; i++) {
    var element = curInputs[i];

    if (!element.validity.valid) {
      isValid = false;
      $(element).closest(".form-group").addClass("has-error");
      $(element).addClass('d-inline');
      $(element).addClass('is-invalid');
      $(element).removeClass('is-valid');
      var file_preload = "";

      if (file_preload = $(element).attr('data-default-file')) {
        isValid = true;
        $(element).closest(".form-group").removeClass("has-error");
        $(element).removeClass('is-invalid');
        $(element).addClass('is-valid');
      }
    } else {
      $(element).closest(".form-group").removeClass("has-error");
      $(element).removeClass('d-inline');
      $(element).removeClass('is-invalid');
      $(element).addClass('is-valid');
    }
  }

  if (!isValid && scroll) {
    $("html, body").animate({
      scrollTop: $(curStep).offset().top - 130
    }, 500);
  }

  return isValid;
};
/**
 * A Javascript module to loadeding/refreshing options of a select2 list box using ajax based on selection of another select2 list box.
 *
 * @url : https://gist.github.com/ajaxray/187e7c9a00666a7ffff52a8a69b8bf31
 * @auther : Anis Uddin Ahmad <anis.programmer@gmail.com>
 *
 * Live demo - https://codepen.io/ajaxray/full/oBPbQe/
 * w: http://ajaxray.com | t: @ajaxray
 */


window.Select2Cascade = function (window, $) {
  function Select2Cascade(parent, child, url, select2Options) {
    var afterActions = [];
    var options = select2Options || {}; // Register functions to be called after cascading data loading done

    this.then = function (callback) {
      afterActions.push(callback);
      return this;
    };

    parent.on("change", function (e) {
      child.prop("disabled", true);

      var _url = url.slice(0, -1) + $(this).val();

      $.getJSON(_url, function (items) {
        var newOptions = '<option value="">-- Select --</option>';
        $.each(items, function (index, item) {
          newOptions += '<option value="' + item.id + '">' + item.text + '</option>';
        });
        child.select2('destroy').html(newOptions).prop("disabled", false).select2(options);
        afterActions.forEach(function (callback) {
          callback(parent, child, items);
        });
      });
    });
  }

  return Select2Cascade;
}(window, $);

/***/ }),

/***/ 1:
/*!***************************************!*\
  !*** multi ./resources/js/helpers.js ***!
  \***************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/martinvelez/Desktop/urba/lab_innovaccion/resources/js/helpers.js */"./resources/js/helpers.js");


/***/ })

/******/ });