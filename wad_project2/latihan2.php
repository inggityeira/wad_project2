<!DOCTYPE html>
<html>
<head>
    <title>TUGAS 2 INGGIT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
        }

        h1 {
            font-size: 30px;
            font-weight: bold;
        }

        p {
            font-size: 20px;
        }
    </style>
</head>
<body>
    <nav class="navbar bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <p class="d-flex align-items-center" style="font-weight: bold;">
                    TUGAS 2 - PENGENALAN SERVER SIDE & DASAR PHP
                    </p>
                    <p class="card-text" style="font-size: 15px">Pengembangan Aplikasi Website</p>
                </a>
        </div>
    </nav>

    <div class="card">
        <div class="card-body text-center">
            <h1>Inggit Yeira Budi Agranata (1202213238)</h1>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h3>Input Area</h3>

            <form>
            <div class="mb-3">
                <label for="NamaLengkap" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="input_string" name="input_string">
                <div id="input_string" class="form-text">Masukkan Nama Lengkap sesuai dengan yang tertera pada KTP!</div>
            </div>
            <div class="mb-3">
                <label for="InputNomorUrut" class="form-label">NIM</label>
                <input type="number" class="form-control" id="input_numberurut">
                <div id="input_numberurut" class="form-text">Masukkan NIM sesuai dengan yang tertera pada KTM!</div>
            </div>
            <select class="form-select" aria-label="Default select example">
                <option selected>Pilih Kelas</option>
                <option value="1">SI4501</option>
                <option value="2">SI4502</option>
                <option value="3">SI4503</option>
                <option value="4">SI4504</option>
                <option value="5">SI4505</option>
                <option value="6">SI4506</option>
                <option value="7">SI4507</option>
                <option value="8">SI4508</option>
                <option value="9">SI4509</option>
                <option value="10">SI45INT</option>
            </select>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Yakin</label>
            </div>
            <button type="submit" class="btn btn-primary">Hitung</button>
            </form>
        </div>
    </div>
</body>
</html>
