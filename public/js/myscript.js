const flashData = $('.flash-data').data('flashdata');

if (flashData) {
    Swal.fire(
        'Data Mobil',
        'Berhasil ' + flashData,
        'success'
    )
}

$('.tombol-hapus').on('click', function(e) {
    e.preventDefault();
    const href = $(this).attr('href')
    Swal.fire({
        title: 'Apakah anda yakin?',
        text: "Anda akan menghapus sebuah data Mobil!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus Data!'
      }).then((result) => {
        if (result.isConfirmed) {
          document.location.href = href
        }
      })
})