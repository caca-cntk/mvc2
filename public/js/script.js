//mau menambahkan jquery

$(function() {

    $('tombolTambahData').on('click', function() {

        $('#judulModalLabel').html('Tambah Data Murid');
        $('.modal-footer button[type=submit]').html('Tambah Data');

    });

    //jquery tolong carikan saya sebuah elemen yg nama kelas nya tampilModalUbah
    //lalu ketika di klik
    //jalankan fungsi berikut ini



    $('.tampilModalUbah').on('click', function() { 
        


        $('#judulModalLabel').html('Ubah Data Murid');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost:8081/phpmvc/public/murid/ubah');


        const id = $(this).data('id'); 

      
        $.ajax({ 
            url: 'http://localhost:8081/phpmvc/public/murid/getubah',
            data: {id :  id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#nama').val(data.nama);
                $('#nip').val(data.nip);
                $('#email').val(data.email);
                $('#jurusan').val(data.jurusan);
                $('#id').val(data.id);
                

            }

        });     

    });

});


