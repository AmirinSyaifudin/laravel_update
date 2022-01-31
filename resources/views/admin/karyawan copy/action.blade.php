{{-- <a href="{{ route('admin.karyawan.edit', $karyawan_id) }}" class="btn btn-warning">Edit</a> --}}
{{-- <a href="{{ route('admin.karyawan.destroy', $karyawan_id) }}" class="btn btn-danger">Hapus</a> --}}





<!-- route di ubah menjadi  -->
{{-- <a href="{{ route('admin.karyawan.detail', $karyawan_id) }}" class="btn btn-info">DETAIL</a> --}}
<a href="{{ route('admin.karyawan.edit', $karyawan_id) }}" class="btn btn-primary">EDIT</a>
<button href="{{ route('admin.karyawan.destroy', $karyawan_id) }}" class="btn btn-danger" id="delete">HAPUS</button>
<!-- alert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

<!-- // di taruh di sini untuk bisa tertrigger , karna menggunakan dataTable -->
<script>
    // ajax element 
    $('button#delete').on('click', function(e){ // error
        e.preventDefault(); 
        //  variavel 
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


