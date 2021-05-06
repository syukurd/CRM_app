@extends('layout.master')    

@section('content')
    

    @if(session('sukses'))
      <div class="alert alert-success" role="alert">
            {{session('sukses')}}
        </div>
        @endif
        <div class="row">
            <div class="col-6">
                <h1>Edit Indonesia Data</h1>
            </div>

    <div class="col-12">
        <form action="/siswa/{{  $siswa->id  }}/update" method="POST">
            @csrf
            <div class="row">
              <div class="col">
                <input type="text" value = "{{$siswa->nama_depan }}" name="nama_depan" class="form-control" placeholder="First name">
              </div>
              <div class="col">
                <input type="text" value="{{ $siswa->nama_belakang }}" name="nama_belakang" class="form-control" placeholder="Last name">
              </div>
            </div>
            
            <div class="form-group">
              <label for="exampleFormControlSelect1">Jenis Kelamin</label>
              <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                <option value="L" @if($siswa->jenis_kelamin == 'L' ) selected @endif>Laki laki</option>
                <option value="P"@if($siswa->jenis_kelamin == 'P') selected @endif>Perempuan</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Agama</label>  
              <input type="text" value="{{ $siswa->agama }}" name="agama" class="form-control" placeholder="Agama">
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Alamat</label>
              <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $siswa->alamat }}</textarea>
            </div>
            
            <button type="submit" class="btn btn-warning">Update</button>
          </form>


        <!-- Modal -->
    </div>
 @endsection