$(function(){

    $('.tambahData').on('click', function(){
        $('#formModalLabel').html('Input Sektor');
        $('.modal-footer button[type=submit]').html('Tambah');
        $('#form').attr('action','../../tambah.php');
        $('#kodeid').hide(); // baru
        $('#idtambah').show();// baru
        $('input[name=TAHUN]').val("2020");
        $('input[name=tahun]').val("2020");
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
            $('#form').attr('action','../../edit.php?folder=konfigurasiUnit');
            // $('#id').show(); // baru
            $('#idtambah').hide(); // baru
            $('#kodeid').show();
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
            $('#form').attr('action','../../edit.php?folder=konfigurasiUnit');
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
            $('#form').attr('action','../../edit.php?folder=konfigurasiUnit');
            $('#id').show(); // baru
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
        }else if($(this).data('href') == "cabang"){
            $('#exampleModalCabang').html('Edit Sektor');
            $('.modal-footer button[type=submit]').html('Edit');
            var id_wil = $('.id_wil'+position).text();
            var id_cab = $('.id_cab'+position).text();
            var kd_cab = $('.kd_cab'+position).text();
            var nm_cab = $('.nm_cab'+position).text();
            var tipe_cab_1 = $('.tipe_cab_1'+position).text();
            var tipe_cab_2 = $('.tipe_cab_2'+position).text();
            var status = $('.status'+position).text();
            $('#form').attr('action','../../edit.php?folder=konfigurasiUnit');
            $("#"+id_wil).attr('selected',true);
            // $('#id').show(); // baru
            $('#kodeid').show();
            $('#idtambah').hide(); // baru
            $('#kodeid').text(position); // baru
            $('#id').val(position); // baru
            $('#id_cab').val(id_cab);
            $('#kd_cab').val(kd_cab);
            $('#nm_cab').val(nm_cab);
            $("#"+tipe_cab_1).attr('selected',true);
            if(tipe_cab_2 == "KOTA BESAR"){
                $('#KOTA-BESAR').attr('selected',true);
            } else {
                $('#REMOTE').attr('selected',true);
            }
            if(status == "AKTIF"){
                $('#AKTIF').attr('selected',true);
            } else {
                $('#T_AKTIF').attr('selected',true);
            }
        }else if($(this).data('href') == "sentra"){
            $('#exampleModalSentra').html('Edit Sektor');
            $('.modal-footer button[type=submit]').html('Edit');
            var id_wil = $('.id_wil'+position).text();
            var id_sentra = $('.id_sentra'+position).text();
            var kd_sentra = $('.kd_sentra'+position).text();
            var nm_sentra = $('.nm_sentra'+position).text();
            var tipe_sentra = $('.tipe_sentra'+position).text();
            var status = $('.status'+position).text();
            $('#form').attr('action','../../edit.php?folder=konfigurasiUnit');
            // $('#id').show(); // baru
            $('#idtambah').hide(); // baru
            $('#kodeid').show();
            $('#kodeid').text(position); // baru
            $('#id').val(position); // baru
            $("#"+id_wil).attr("selected",true);
            $('#id_sentra').val(id_sentra);
            $('#kd_sentra').val(kd_sentra);
            $('#nm_sentra').val(nm_sentra);
            $('#'+tipe_sentra).attr('selected',true);
            if(status == "AKTIF"){
                $('#AKTIF').attr('selected',true);
            } else {
                $('#T_AKTIF').attr('selected',true);
            }
        }else if($(this).data('href') == "risiko"){
            // $('#exampleModalSentra').html('Edit Sektor');
            // $('.modal-footer button[type=submit]').html('Edit');
            var id_wil = $('.id_wil'+position).text();
            var id_sentra = $('.id_sentra'+position).text();
            var kd_sentra = $('.kd_sentra'+position).text();
            var nm_sentra = $('.nm_sentra'+position).text();
            var tipe_sentra = $('.tipe_sentra'+position).text();
            console.log(tipe_sentra);
            var status = $('.status'+position).text();
            // $('#form').attr('action','../../edit.php');
            // $('#id').show(); // baru
            // $('#idtambah').hide(); // baru
            $('#kodeid').show();
            $('#kodeid').text(position); // baru
            $('#id').val(position); // baru
            $("#"+id_wil).attr("selected",true);
            $('#id_sentra').val(id_sentra);
            $('#kd_sentra').val(kd_sentra);
            $('#nm_sentra').val(nm_sentra);
            $('#'+tipe_sentra).attr('selected',true);
            if(status == "AKTIF"){
                $('#AKTIF').attr('selected',true);
            } else {
                $('#T_AKTIF').attr('selected',true);
            }
        }else if($(this).data('href') == "Pa"){
            $('#exampleModalPa').html('Edit Sektor');
            $('.modal-footer button[type=submit]').html('Edit');
            var kd_pa = $('.kd_pa'+position).text();
            var nm_pa = $('.nm_pa'+position).text();
            var nm_dir = $('.nm_dir'+position).text();
            var status = $('.status'+position).text();
            $('#form').attr('action','../../edit.php?folder=konfigurasiUnit');
            $('#idtambah').hide(); // baru
            $('#kodeid').show();
            $('#kodeid').text(position); // baru
            $('#id').val(position); // baru
            $('#kd_pa').val(kd_pa);
            $('#nm_pa').val(nm_pa);
            $('#nm_dir').val(nm_dir);
            if(status == "AKTIF"){
                $('#AKTIF').attr('selected',true);
            } else {
                $('#T_AKTIF').attr('selected',true);
            }
        }else if($(this).data('href') == "cabangln"){
            $('#formModalCabangLn').html('Edit Sektor');
            $('.modal-footer button[type=submit]').html('Edit');
            var id_cab = $('.id_cab'+position).text();
            var kd_cab = $('.kd_cab'+position).text();
            var nm_cab = $('.nm_cab'+position).text();
            var status = $('.status'+position).text();
            $('#form').attr('action','../../edit.php?folder=konfigurasiUnit');
            $('#idtambah').hide(); // baru
            $('#kodeid').show();
            $('#kodeid').text(position); // baru
            $('#id').val(position); // baru
            $('#id_cab').val(id_cab);
            $('#kd_cab').val(kd_cab);
            $('#nm_cab').val(nm_cab);
            if(status == "AKTIF"){
                $('#AKTIF').attr('selected',true);
            } else {
                $('#T_AKTIF').attr('selected',true);
            }
        }else if($(this).data('href') == "perspective"){
            $('#formModalLabelPers').html('Edit Sektor');
            $('.modal-footer button[type=submit]').html('Edit');
            var ID_PERSPECTIVE = $('.ID_PERSPECTIVE'+position).text();
            var PERSPECTIVE = $('.PERSPECTIVE'+position).text();
            $('#form').attr('action','../../edit.php?folder=konfigurasiKpi');
            // $('#idtambah').hide(); // baru
            $('#kodeid').show();
            $('#kodeid').text(position); // baru
            $('#ID_PERSPECTIVE').val(position); // baru
            $('#PERSPECTIVE').val(PERSPECTIVE);
        }
    });

    $('.modal').on('hidden.bs.modal',function(){// baru
        $('option').attr("selected",false);// baru
    })// baru


    $('.aktif-radio').on('click',function(){
        var position = $(this).attr('data-id');
        $('.default-value'+position).attr('selected',false);
        $('#order'+position).attr('disabled',false);
    })
    $('.unaktif-radio').on('click',function(){
        var position = $(this).attr('data-id');
        $('.default-value'+position).attr('selected',true);
        $('#order'+position).attr('disabled',true);
    })
    console.log($('.nperspective'));

});