<!-- Modal -->

  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data Jabatan</h5>
        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-start">
        <form action="/updatejabatan/{{$item->id}}" method="post">
        @csrf
        @method('PUT')

        <label for="example-text-input" class="form-control-label">Nama Jabatan</label>
        <div class="input-group mb-3">

            <input type="text" class="form-control " value="{{$item->nama_jabatan}}" name="nama_jabatan" placeholder="Enter Nama Jabatan" aria-label="Example text with button addon" aria-describedby="button-addon1">

        </div>

        <label for="example-text-input" class="form-control-label">Gaji Pokok</label>
        <div class="input-group mb-3">

            <input type="number" class="form-control " value="{{$item->gaji_pokok}}"  name="gaji_pokok" placeholder="Enter Gaji Pokok" aria-label="Example text with button addon" aria-describedby="button-addon1">

        </div>
        <label for="example-text-input" class="form-control-label">Tunjangan Transport</label>
        <div class="input-group mb-3">

            <input type="number" class="form-control " value="{{$item->tj_transport}}"  name="tj_transport" placeholder="Enter Tunjangan Transport" aria-label="Example text with button addon" aria-describedby="button-addon1">

        </div>
        <label for="example-text-input" class="form-control-label">Uang Makan</label>
        <div class="input-group mb-3">

            <input type="number" class="form-control " value="{{$item->uang_makan}}" name="uang_makan" placeholder="Enter Uang Makan" aria-label="Example text with button addon" aria-describedby="button-addon1">

        </div>




    <div class="modal-footer">
        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn bg-gradient-primary">Submit</button>
      </div>
    </form>
      </div>

    </div>
  </div>
</div>
