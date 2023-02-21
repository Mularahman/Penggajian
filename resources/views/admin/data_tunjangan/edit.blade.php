<!-- Modal -->

  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data Tunjangan</h5>
        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-start">
        <form action="/updatetunjangan/{{$item->id}}" method="post">
        @csrf
        @method('PUT')

        <label for="example-text-input" class="form-control-label">Nama Tunjangan</label>
        <div class="input-group mb-3">

            <input type="text" class="form-control " value="{{$item->nama_tunjangan}}"  name="nama_tunjangan" placeholder="Enter Nama Tunjangan" aria-label="Example text with button addon" aria-describedby="button-addon1">

        </div>

        <label for="example-text-input" class="form-control-label">Jumlah Tunjangan</label>
        <div class="input-group mb-3">

            <input type="number" class="form-control " value="{{$item->jumlah_tunjangan}}" name="jumlah_tunjangan" placeholder="Enter Jumlah Tunjangan" aria-label="Example text with button addon" aria-describedby="button-addon1">

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
