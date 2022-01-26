@include('inc.navbar')

<div class="mt-4 p-5 text-black rounded">
    <h1>Lihat Siswa</h1>
    <p>Lorem ipsum...</p>
  </div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Lahir</th>
      <th scope="col">Gender</th>
      <th scope="col">Agama</th>
      <th scope="col">Alamat</th>
      <th scope="col">Telp</th>
      <th scope="col">Email</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
      @php $i=0 @endphp
      @foreach ($bios as $bio)
      @php $i++ @endphp
    <tr>
        <td>{{ $i }}</td>
        <td>{{ $bio->nama}}</td>
        <td>{{ $bio->lahir}},{{ $bio->tgl }}</td>
        <td>{{ $bio->jk}}</td>
        <td>{{ $bio->agama}}</td>
        <td>{{ $bio->alamat}}</td>
        <td>{{ $bio->telp}}</td>
        <td>{{ $bio->email}}</td>
        <td>
            <button type="button" class="btn btn-warning">Edit</button>
            <button type="button" class="btn btn-danger">Delete</button>
            <button type="button" class="btn btn-primary">Lihat</button>
    </tr>
        @endforeach
  </tbody>
</table>
