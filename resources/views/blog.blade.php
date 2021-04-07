@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
<center><h1>Data Peserta</h1></center>
</head>
<body>
 <div class="container">
   <form action="">
      <div class="form-group">
        <label for="nama">Nama Lengkap</label>
        <input type="text" class="form-control" id="nama" aria-describedby="emailHelp" placeholder="Nama Lengkap">
        <small id="emailHelp" class="form-text text-muted">Pastikan nama anda Benar</small>
      </div>
      <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" class="form-control" id="alamat" placeholder="Alamat">
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" placeholder="email">
      </div>
      <div class="form-group">
        <label for="asal_sekolah">Asal Sekolah</label>
        <input type="text" class="form-control" id="asal_sekolah" placeholder="Asal Sekolah">
      </div>
      <div class="form-group">
        <label for="hp">Nomer Hp</label>
        <input type="number" class="form-control" id="hp" placeholder="Nomer Hp">
      </div>
      <div class="form-group">
        <label for="tempat">Tempat Lahir</label>
        <input type="text" class="form-control" id="tempat" placeholder="Tempat Lahir">
      </div>
      <tr>
            <td><label>Tanggal Lahir</label></td>
            <td>
            <select name="tgl_lahir" class="form">
            <?php 
   for($tanggal = 1; $tanggal <= 31; $tanggal++) {
       if($tanggal < 10) {
           echo '<option value="0'. $tanggal .'">0'. $tanggal .'</option>';
       }
       else {
           echo '<option value="'. $tanggal .'">'. $tanggal .'</option>';
       }
    }
 ?>
 </select>
            <select name="bln_lahir" class="form">
            <?php 
            for($bulan = 1; $bulan <= 12; $bulan++) {
                if($bulan < 10) {
                echo '<option value="0'. $bulan .'">0'. $bulan .'</option>';
                 }
                else {
                    echo '<option value="'. $bulan .'">'. $bulan .'</option>';
                 }
            }
                ?>
             </select>
                
            <select name="thn_lahir" class="form">
                <?php 
                for($tahun = date('Y'); $tahun >= 1980; $tahun--) {
                echo '<option value="'. $tahun .'">'. $tahun .'</option>';
                }
                ?>
            </select>
            </td>
        </tr>
            <h6>Jenis Kelamin</h6>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
        <label class="form-check-label" for="exampleRadios1">
          Laki Laki
       </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
        <label class="form-check-label" for="exampleRadios2">
          Perempuan
        </label>
      </div>
        <div class="form-group row">
                            <label for="code" class="col-md-4 col-form-label text-md-right">{{ __('Foto Peserta') }}</label>

                            <div class="col-md-6">
                            <input type="file" name="foto" required="required">
                            <p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
			            

                                @error('Foto Peserta')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
            </div>
        <button type="submit" class="btn btn-primary">Submit</button>
   </form>
 </div>
</body>
</html>
@endsection