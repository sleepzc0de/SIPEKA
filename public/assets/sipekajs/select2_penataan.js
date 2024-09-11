
// Setup module
// ------------------------------

var Select2Selects = function() {


//
// Setup module components
//

// Select2 Penataan
var _componentSelect2 = function() {
    if (!$().select2) {
        console.warn('Warning - select2.min.js is not loaded.');
        return;
    }


    //
    // Basic examples
    //

    // Default initialization
    $('.select').select2();

      $('#provinsi').on('change', function() {
        var provinsiId = $(this).val();

        if (provinsiId) {
            $.ajax({
                url: '/get-kab-kota/' + provinsiId,
                type: "GET",
                dataType: "json",
                success: function(data) {
                    $('#kabupaten-kota').empty();
                    $('#kabupaten-kota').append('<option></option>');

                    $.each(data, function(key, value) {

                        var isKota = value.isKota == true ? 'Kota' : (value.isKota == false ? 'Kabupaten' : 'Belum Terdefinisi');

                        $('#kabupaten-kota').append('<option value="' + value.id + '">' + value.id +" - "+isKota+" "+value.nama_kab_kota +'</option>');
                    });

                    $('#kabupaten-kota').select2();
                }
            });
        } else {
            $('#kabupaten-kota').empty().select2();
        }
    });

};

return {
    init: function() {
        _componentSelect2();
    }
}
}();


// Initialize module
// ------------------------------

document.addEventListener('DOMContentLoaded', function() {
Select2Selects.init();
});
