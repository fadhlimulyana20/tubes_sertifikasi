<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container py-5">
        <h1>Mengubah Penawaran Sertifikasi</h1>
        <form action="{{ route('penawaran_sertifikasi.update', $penawaran_sertifikasi->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label" for="periode">Periode</label>
                <input class="form-control" type="text" name="periode" id="periode"
                    value="{{ $penawaran_sertifikasi->periode }}" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi_penawaran" class="form-label">Deskripsi Penawaran</label>
                <textarea class="form-control" name="deskripsi_penawaran" id="deskripsi_penawaran" rows="5"
                required>{{ $penawaran_sertifikasi->deskripsi_penawaran }}</textarea>
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" name="is_active" value="" id="is_active">
                <label class="form-check-label" for="is_active">
                    Active?
                </label>
            </div>
            <button class="btn btn-success" type="submit">Simpan</button>
        </form>
    </div>
</body>

</html>