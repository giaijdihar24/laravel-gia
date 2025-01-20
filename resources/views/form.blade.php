@extends('template.master')
@section('judul', 'form')
@section('konten')
<
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">form Genre</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="namaGenre">Nama Genre</label>
                    <input type="text" class="form-control" id="namaGenre" placeholder="Masukan nama genre">
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

            <!-- general form elements -->
          
            <!-- /.card -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">form film</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="judul">judul film</label>
                    <input type="text" class="form-control" id="judul" placeholder="masukan judul">
                  </div>
                  <div class="form-group">
                    <label for="ringkasan">Ringkasan</label>
                    <input type="text" class="form-control" id="ringkasan" placeholder="masukan ringkasan">
                  </div>
                  <div class="form-group">
                    <label for="tahun">tahun</label>
                    <input type="number" class="form-control" id="tahun" placeholder="masukan tahun">
                  </div>
                  <div class="form-group">
                    <label for="poster">poster</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="poster">
                        <label class="custom-file-label" for="poster">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
          <!--/.col (left) -->
          <!-- right column -->
          
          <!--/.col (right) -->
        
@endsection