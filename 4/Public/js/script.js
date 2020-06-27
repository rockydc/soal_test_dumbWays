$(function(){
    $('.tampilModalUbah').on('click', function(){
        $('#forModalLabel').html('Ubah Provinsi');
        $('.modal-body button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action','http://localhost/phpmvc/dumbway/public/home/ubah');
        const id = $(this).data('id');
        $.ajax({
            url:'http://localhost/phpmvc/dumbway/public/home/getubah',
            data: {id:id},
            method: 'post',
            dataType:'json',
            success: function(data){
                $('#nama').val(data.nama);
                $('#tglresmi').val(data.diresmikan);
                $('#photo').val(data.photo);
                $('#pulau').val(data.pulau);
                $('#id').val(data.id);

            }
        });
    })

    $('.tampilModalTambah').on('click', function(){
        $('#forModalLabel').html('Tambah Provinsi');
        $('.modal-body button[type=submit]').html('Tambah Data');
        $('.modal-body form').attr('action','http://localhost/phpmvc/dumbway/public/home/tambah');
 
     
    })
})