<div class="modal fade" id="myModal popup" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Data</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{ route("dataUpdate", ["user"=>$user->id]) }}" method="POST">
            <div class="form-floating mb-3">
              <input type="text" class="form-control" name="file" id="floatingInput" placeholder="File" value="{{ $user->file }}">
              <label for="floatingInput">file</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" name="nomor" id="floatingInput" placeholder="08xxxx" value="{{ $user->nomor }}">
              <label for="floatingInput">nomor</label>
            </div>
            <div class="form-floating mb-1">
              <input type="text" class="form-control" name="jenis" id="floatingInput" placeholder="Dana" value="{{ $user->jenis }}">
              <label for="floatingInput">jenis payment</label>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
      </div>
    </div>
</div>