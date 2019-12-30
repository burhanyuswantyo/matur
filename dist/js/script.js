// Kategori modal
$(function () {

	$('.tambahKategoriModal').on('click', function () {
		$('#kategoriModalLabel').html('Tambah Kategori');
		$('.modal-body form').attr('action', 'http://localhost/matur/kategori/tambah');
		$('#id').val('');
		$('#kategori').val('');
	});

	$('.editKategoriModal').on('click', function () {
		$('#kategoriModalLabel').html('Edit Kategori');
		$('.modal-body form').attr('action', 'http://localhost/matur/kategori/edit');

		const id = $(this).data('id');

		$.ajax({
			url: 'http://localhost/matur/kategori/getkategori',
			data: {
				id: id
			},
			method: 'post',
			dataType: 'json',
			success: function (data) {
				console.log(data);
				$('#id').val(data.id);
				$('#kategori').val(data.kategori);
			}
		});
	});

});

// User modal
$(function () {

	$('.tambahUserModal').on('click', function () {
		$('#userModalLabel').html('Tambah User');
		$('.modal-body form').attr('action', 'http://localhost/matur/user/tambah');
		$('#id').val('');
		$('#user').val('');
	});

	$('.editUserModal').on('click', function () {
		$('#userModalLabel').html('Edit User');
		$('.modal-body form').attr('action', 'http://localhost/matur/user/edit');

		const id = $(this).data('id');

		$.ajax({
			url: 'http://localhost/matur/user/getuser',
			data: {
				id: id
			},
			method: 'post',
			dataType: 'json',
			success: function (data) {
				console.log(data);
				$('#id').val(data.id);
				$('#kategori').val(data.kategori);
			}
		});
	});

});
