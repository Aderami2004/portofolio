@if(count($errors)>0)
@foreach ($errors->all() as $error)
{{ $error }}
@endforeach
@endif
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="text/html; charset=utf-8">
    <title>ADERAMI</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-center fw-bold mt-2">PROFILE</h2>
                <FORM action="{{ $action }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="col-mb-3">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" name="nama" class="form=control mb-3" id="">
                    </div>
                    <div class="col-mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" name="username" class="form=control mb-3" id="">
                    </div>
                    <div class="col-mb-3">
                        <label class="form-label">About</label>
                        <textarea name="about" class="form-control"></textarea>
                    </div>
                    <div class="col-mb-3">
                        <label class="form-label">Nomor HP</label>
                        <input type="number" name="nohp" class="form=control mb-3" id="">
                    </div>
                    <div class="col-mb-3">
                        <label class="form-label">Alamat</label>
                        <textarea name="alamat" id="" class="form-control"></textarea>
                    </div>
                    <div class="col-mb-3">
                        <label class="form-label">Foto</label>
                        <input type="file" name="foto" id="">
                    </div>
                    <div class="modal-footer mt-4">
                        <button class="btn btn-secondary"><a stlye="border: none" class="bg-tranparent text-white text-decoration-none" href="/admin">Close</a></button>
                        <button type="submit" name="simpan" class="btn btn-primary mx-2">Simpan</button>
                    </div>
                </FORM>
            </div>
        </div>
    </div>
</body>
</html>