@extends('layout.main')

@section('title', 'Form Tambah data Mahasiswa')


@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form Tambah Data Mahasiswa</h1>

            <form method="post" action="/students">
                {{-- token check in inspect element --}}
                @csrf
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama" value="{{ old('nama') }}">
                  @error('nama') <div class="invalid-feedback"> {{ $message }}
                  </div> @enderror
                </div>
                <div class="form-group">
                  <label for="phone">Phone</label>
                  <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" placeholder="Masukkan Phone" name="phone" value="{{ old('phone') }}">
                  @error('phone') <div class="invalid-feedback"> {{ $message }}
                </div> @enderror
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan Email" name="email" value="{{ old('email') }}">
                  @error('email') <div class="invalid-feedback"> {{ $message }}
                </div> @enderror
                </div>
                <div class="form-group">
                  <label for="jurusan">Jurusan</label>
                  <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" placeholder="Masukkan Jurusan" name="jurusan" value="{{ old('jurusan') }}">
                  @error('jurusan') <div class="invalid-feedback"> {{ $message }}
                </div> @enderror
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data!</button>
              </form>
        </div>
    </div>
</div>
@endsection
