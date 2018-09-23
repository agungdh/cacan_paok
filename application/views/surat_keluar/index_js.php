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