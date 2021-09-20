$(function(){

    $('.tambahData').on('click', function(){
        $('#formModalLabel').html('Input Sektor');
        $('.modal-footer button[type=submit]').html('Tambah');
        $('#form').attr('action','../../tambah.php');
        $('#kodeid').hide(); // baru
        $('#idtambah').show();// baru
        $('.form-control').val("");// baru
        $('option').attr("selected",false);// baru
        $('textarea').val("");// baru
    });


    $('.editData').on('click', function (){
        var position = $(this).data('id');
        if($(this).data('href') == "sektor"){
            $('#formModalLabel').html('Edit Sektor');
            $('.modal-footer button[type=submit]').html('Edit');
            var kd_sektor = $('.kd_sektor'+position).text();
            var nm_sektor = $('.nm_sektor'+position).text();
            var nm_dir = $('.nm_dir'+position).text();
            var level_dir = $('.level_dir'+position).text();
            var status = $('.status'+position).text();
            $('#form').attr('action','../../edit.php');
            // $('#id').show(); // baru
            $('#idtambah').hide(); // baru
            $('#kodeid').text(position); // baru
            $('#id').val(position); // baru
            $('#kd_sektor').val(kd_sektor);
            $('#nm_sektor').val(nm_sektor);
            $('#nm_dir').val(nm_dir);
            $('#'+level_dir).attr('selected',true);
            if(status == "AKTIF"){
                $('#AKTIF').attr('selected',true);
            } else {
                $('#T_AKTIF').attr('selected',true);
            }
        } else if($(this).data('href') == "divisi"){
            $('#exampleModalLabel').html('Edit Divisi');
            $('.modal-footer button[type=submit]').html('Edit');
            var kd_sektor = $('.kd_sektor'+position).text();
            var kd_divisi = $('.kd_divisi'+position).text();
            var nm_divisi = $('.nm_divisi'+position).text();
            var nm_gm = $('.nm_gm'+position).text();
            var tipe_divisi = $('.tipe_divisi'+position).text();
            var level_divisi = $('.level_divisi'+position).text();
            var status = $('.status'+position).text();
            $('#form').attr('action','../../edit.php');
            $("#"+kd_sektor).attr('selected',true);
            // $('#id').show(); // baru
            $('#idtambah').hide(); // baru
            $('#kodeid').show();
            $('#kodeid').text(position); // baru
            $('#id').val(position); // baru
            $('#kd_divisi').val(kd_divisi);
            $('#nm_divisi').val(nm_divisi);
            $('#nm_gm').val(nm_gm);
            $("#"+tipe_divisi).attr('selected',true);
            $("#"+level_divisi).attr('selected',true);
            if(status == "AKTIF"){
                $('#AKTIF').attr('selected',true);
            } else {
                $('#T_AKTIF').attr('selected',true);
            }
        }else if($(this).data('href') == "wilayah"){
            $('#formModalWilayah').html('Edit Sektor');
            $('.modal-footer button[type=submit]').html('Edit');
            var id_wil = $('.id_wil'+position).text();
            var kd_wil = $('.kd_wil'+position).text();
            var nm_wil = $('.nm_wil'+position).text();
            var nm_ceo = $('.nm_ceo'+position).text();
            var status = $('.status'+position).text();
            $('#form').attr('action','../../edit.php');
            // $('#id').show(); // baru
            $('#kodeid').show();
            $('#idtambah').hide(); // baru
            $('#kodeid').text(position); // baru
            $('#id').val(position); // baru
            $('#id_wil').val(id_wil);
            $('#kd_wil').val(kd_wil);
            $('#nm_wil').val(nm_wil);
            $('#nm_ceo').val(nm_ceo);
            if(status == "AKTIF"){
                $('#AKTIF').attr('selected',true);
            } else {
                $('#T_AKTIF').attr('selected',true);
            }
        }
     
    });

    $('.modal').on('hidden.bs.modal',function(){// baru
        $('option').attr("selected",false);// baru
    })// baru

});