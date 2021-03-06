<!-- route di ubah menjadi  -->
<a href="{{ route('admin.pasien.detail', $pasien_id) }}" class="btn btn-info">DETAIL</a>
<a href="{{ route('admin.pasien.edit', $pasien_id) }}" class="btn btn-primary">EDIT</a>
<button href="{{ route('admin.pasien.destroy', $pasien_id) }}" class="btn btn-danger" id="delete">HAPUS</button>
<!-- alert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

<!-- // di taruh di sini untuk bisa tertrigger , karna menggunakan dataTable -->
<script>
    // membuat request ajax menggunakan element 
    $('button#delete').on('click', function(e){ // error
        e.preventDefault(); // belum jalan
        // membuat variavel 
        var href = $(this).attr('href');

            // alert
            Swal.fire({
                    title:'Apakah Kamu yakin hapus data ini',
                    text: 'Data yang sudah di hapus tidak datap di kembalikan',
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, Hapus saja!'
                }).then((result) => {
                    if (result.value) {
                    // membuat tombol trigger untuk tombol form 
                    document.getElementById('deleteForm').action = href;
                    document.getElementById('deleteForm').submit();

                        Swal.fire(
                            'Terhapus!', // kalo sukses
                            'Data kamu berhasil dihapus...Oyeachh.',
                            'success'
                        )
                    }
                })
    })
</script>


