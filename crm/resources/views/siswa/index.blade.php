@extends('layout.master')    

@section('content')


      @if(session('sukses'))
      <div class="alert alert-success" role="alert">
  {{session('sukses')}}
</div>
@endif
        <div class="row">
            <div class="col-6">
    <h1>Indonesia Data</h1>
</div>
<div class="col-6">
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Tambah Data
  </button>
  
  </div>
    <table class="table">
        <tr>
        <th>Nama Depan</th>
        <th>Nama Belakang</th>
        <th>Jenis Kelamin</th>
        <th>Agama</th>
        <th>Alamat</th>
        <th>Action</th>
        </tr>
        @foreach ($data_siswa as $siswa)
        <tr>
            <td>{{$siswa -> nama_depan}}</td>
            <td>{{$siswa -> nama_belakang}}</td>
            <td>{{$siswa -> jenis_kelamin}}</td>
            <td>{{$siswa -> agama}}</td>
            <td>{{$siswa -> alamat}}</td>
            <td><a href="/siswa/{{ $siswa->id }}/edit" class="btn btn-warning sm" >Edit</a></td>
            <td><a href="/siswa/{{ $siswa->id }}/delete" class="btn btn-danger sm" onclick="return confirm ('are you sure to delete?')">Delete</a></td>
        </tr>
        @endforeach
    </table>
</div>
</div>
</div>


 <!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="/create/siswa" method="POST">
            @csrf
            <div class="row">
              <div class="col">
                <input type="text" name="nama_depan" class="form-control" placeholder="First name">
              </div>
              <div class="col">
                <input type="text" name="nama_belakang" class="form-control" placeholder="Last name">
              </div>
            </div>
            
            <div class="form-group">
              <label for="exampleFormControlSelect1">Jenis Kelamin</label>
              <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                <option value="L">Laki laki</option>
                <option value="P">Perempuan</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Agama</label>  
              <input type="text" name="agama" class="form-control" placeholder="Agama">
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Alamat</label>
              <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </form>
        </div>
      </div>
   @endsection