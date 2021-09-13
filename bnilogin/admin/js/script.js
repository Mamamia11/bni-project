$(function(){

    $('.tambahData').on('click', function(){
        $('#formModalLabel').html('Input Sektor');
        $('.modal-footer button[type=submit]').html('Tambah');

    });


    $('.editData').on('click', function (){
        $('#formModalLabel').html('Edit Sektor');
        $('.modal-footer button[type=submit]').html('Edit');

        const id = $(this).data('id');
        const kd_sektor = $(this).data('kd_sektor');
        const nm_sektor = $(this).data('nm_sektor');
        const nm_dir = $(this).data('nm_dir');
        const level_dir = $(this).data('level_dir');

        // $.ajax({
        //     url: 'http://localhost/bnilogin/edit.php/editdata',
        //     data: {id : id},
        //     method: 'post',
            
        //     success: function(data) {
        //         console.log(data);
        //     }
        // });
        

        

    });

});