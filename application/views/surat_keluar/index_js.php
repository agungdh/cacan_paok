<script type="text/javascript">
var table = $('.datatable').DataTable( {
    "scrollX": true,
    "autoWidth": false,
});

function hapus(id) {
    swal({
        title: 'Apakah anda yakin?',
        text: "Data akan dihapus!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Hapus!'
    }).then(function(result) {
        if (result.value) {
            window.location = "<?php echo base_url('surat_keluar/aksi_hapus/'); ?>" + id;
        }
    });
};

$('.select2').select2();

function suratMasuk(id) {
    if (id == 0) {
        return false;
    }

    $.get( "<?php echo base_url('surat_keluar/ajax_modal/'); ?>" + id, function( data ) {
        $("#modalmbodi").html(data);
        $("#modalSuratMasuk").modal();
    });
}
</script>

<script type="text/javascript">
$('#tanggal').daterangepicker({
  autoUpdateInput: false,
  locale: {
      cancelLabel: 'Clear',
      format: 'DD-MM-YYYY'
  }
});

$('#tanggal').on('apply.daterangepicker', function(ev, picker) {
  $(this).val(picker.startDate.format('DD-MM-YYYY') + ' - ' + picker.endDate.format('DD-MM-YYYY'));

  ajax();
});

$('#tanggal').on('cancel.daterangepicker', function(ev, picker) {
  $(this).val('');

  ajax();
});

function ajax() {
    if ($("#tanggal").val() != '') {
        $url = $("#tanggal").val().split(' - ')[0] + '/'+ $("#tanggal").val().split(' - ')[1];
    } else {
        $url = '';
    }

    $.get("<?php echo base_url('surat_keluar/ajax/'); ?>" + $("#id_kabupaten").val() + '/' + $url, function(data) {
        $('tbody').html(data);      
    }); 
}

$(function() {
    ajax();
});

$("#id_kabupaten").change(function() {
    ajax();
});
$("#tanggal").change(function() {
    ajax();
});
</script>