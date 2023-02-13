<!-- Modal -->

  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data Pegawai</h5>
        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-start">
        <form action="/updatepegawai/{{$item->id}}" method="post">
        @csrf
        @method('PUT')


        <label for="example-text-input" class="form-control-label" >NIK</label>
        <div class="input-group mb-3">

            <input type="number" class="form-control " value="{{$item->nik}}"  name="nik" placeholder="Enter NIK" aria-label="Example text with button addon" aria-describedby="button-addon1">

        </div>

        <label for="example-text-input" class="form-control-label">Username</label>
        <div class="input-group mb-3">

            <input type="text" class="form-control "   value="{{$item->name}}"  name="name" placeholder="Enter Username" aria-label="Example text with button addon" aria-describedby="button-addon1">

        </div>
        <label for="example-text-input" class="form-control-label">Password</label>
        <div class="input-group mb-3">


            <input class="form-control" type="password"  value="{{$item->password}}"  name="password" placeholder="Enter Password" aria-label="Example text with button addon" aria-describedby="button-addon1">
        </div>



        <div class="form-group">
              <label for="example-text-input" class="form-control-label">Jenis Kelamin</label>

            <select  class="form-control" name="jenis_kelamin">
                <option   value="{{$item->jenis_kelamin}}" >{{$item->jenis_kelamin}}</option>
                {{--  @foreach($pemilik as $pemilik2)  --}}
                    <option value="Laki-laki">Laki - laki</option>
                    <option value="Perempuan">Perempuan</option>
                {{--  @endforeach  --}}
            </select>
          </div>


          <div class="form-group">

              <label for="example-text-input" class="form-control-label">Jabatan</label>

          <select  class="form-control" name="jabatan">
            <option value="">{{$item->jabatan->nama_jabatan}}</option>
            @foreach($jabatan as $j)
                <option value="{{$j->id}}">{{$j->nama_jabatan}}</option>

            @endforeach
          </select>
        </div>

        <label for="example-text-input" class="form-control-label">Tanggal Masuk</label>
        <div class="input-group mb-3">


            <input  class="form-control " type="date"  value="{{$item->tanggal_masuk}}"  name="tanggal_masuk" placeholder="Enter Email" aria-label="Example text with button addon" aria-describedby="button-addon1">
        </div>

        <div class="form-group">
            <label for="example-text-input" class="form-control-label">Status</label>

          <select  class="form-control" name="status">
              <option  value="{{$item->status}}" >{{$item->status}}</option>
              {{--  @foreach($pemilik as $pemilik2)  --}}
                  <option value="Karyawan Tetap">Karyawan Tetap</option>
                  <option value="Karyawan Tidak Tetap">Karyawan Tidak Tetap</option>
              {{--  @endforeach  --}}
          </select>
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
