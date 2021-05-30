<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>ref jenis sertifikasi</title>
</head>
<body>
    <div class="container py-5">
        <h1>Tabel Jenis Sertifikasi</h1>
        <a class="btn btn-success" href="{{ route('ref_jenis_sertifikasi.create') }}">tambah</a>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Status jenis sertifikasi</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($ref_jenis_sertifikasi as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->keterangan}}</td>
                    <td>{{$item->status_jenis_sertifikasi}}</td>
                    <td class="d-flex justify-content-start gap-1">
                        <div>
                            <a class="btn btn-link" href="">Edit</a>
                        </div>
                        <div>
                            <form action="" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-link">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
              @endforeach
            </tbody>
          </table>
    </div>
</body>
</html>
