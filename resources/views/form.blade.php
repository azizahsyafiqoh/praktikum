<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    @include('inc.navbar')
    <h1>Tambah Siswa</h1>
    <form>
        @csrf
        <div class="form-group">
            <label for="inputAddress">Nama</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Nama Lengkap">
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Tempat Lahir</label>
              <input type="email" name="lahir" class="form-control" id="inputAddress" placeholder="Tempat Lahir">
            </div>
            <div class="form-group col-md-6">
              <label for="inputState">Tanggal Lahir</label>
              <input type="date" name="tgl" class="form-control" id="inputState" placeholder="dd/mm/yy">
            </div>
          </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Jenis Kelamin</label>
            <select id="inputState" class="form-control" name="jk">
                <option selected>Pilih</option>
                <option value="perempuan">Perempuan</option>
                <option value="laki laki">Laki laki</option>
              </select>

          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Agama</label>
            <select id="inputState" class="form-control" name="agama">
            <option selected>pilih</option>
            <option value="islam">Islam</option>
            <option value="kristen">Kristen</option>
            <option value="budha">Budha</option>
            <option value="hindu">Hindu</option>
          </select>

          </div>
        </div>
        <div class="form-group">
          <label for="inputAddress">Hobi</label>
          <input type="text" name="hobi" class="form-control" id="inputAddress" placeholder="">
        </div>
        <div class="form-group">
          <label for="inputAddress2">Alamat</label>
          <input type="text" name="alamat" class="form-control" id="inputAddress2" placeholder="">
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">Telepon</label>
            <input type="text" name="telepon" class="form-control" id="inputCity">
          </div>
          <div class="form-group col-md-4">
            <label for="inputEmail4">Email</label>
            <input type="text" name="email" class="form-control" id="inputCity">


          </div>

        </div>
        <div class="form-group">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Add Siswa
            </label>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
      </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
