<form action="">
	<div class="form-group">
		<label for="Name">Nama</label>
		<input type="text" name="name" class="form-control" placeholder="Nama" required/>
	</div>
	<div class="form-group">
		<label for="Email">Email</label>
		<input type="email" name="email" class="form-control" placeholder="Email" required/>
	</div>
	<div class="form-group">
		<label for="Kategori">Kategori</label>
		<select class="form-control">
			<option name="#">-Pilih Kategori-</option>
			<option value="">Kategori 1</option>
			<option value="">Kategori 2</option>
			<option value="">Kategori 3</option>
			<option value="">Kategori 4</option>
		</select>
	</div>
	<div class="form-group">
		<label for="Suara Anda">Suara Anda</label>
		<textarea name="suaraanda" class="form-control" ></textarea>
	</div>
	<div class="modal-footer">
		<button class="btn btn-success" type="submit">
			Kirim
		</button>
	</div>
</form>