@extends('template.master')
@section('judul', 'form')
@section('content')
<div class="col-md-12">
            <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Form Genre</h3>
        </div>
              <!-- /.card-header -->
              <!-- form start -->
            <form action="{{ route('genre.store') }}" method="post">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                  <label for="namaGenre">Nama Genre</label>
                  <input type="text" class="form-control @error('nama') {{ 'is-invalid' }} @enderror" class="form-control" id="namaGenre" name="nama" placeholder="Masukkan Nama Genre" value="{{ old('nama') }}">
                  </div>
                  @error('nama')
                   <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
                   @enderror
                </div>
                <!-- /.card-body -->

                <div>
                <button type="reset" class="btn btn-warning">Reset</button>
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
    </div>
</div>
@endsection