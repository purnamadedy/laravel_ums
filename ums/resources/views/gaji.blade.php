<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-info fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#home">GARUDA</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#portfolio">Portfolio</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
        
        <table>
        <h1>TABLE GAJI PT GARUDA</h1>
            <thead>
                <tr>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Gaji</th>
                <th scope="col">Setaus</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row">Danang</td>
                    <td>Jakarta</td>
                    <td>4000.000</td>
                    <td>Karyawan Tetap</td>
                </tr>
                <tr>
                    <td scope="row">Soni</td>
                    <td>Tangerang</td>
                    <td>3000.000</td>
                    <td>Karyawan Kontrak</td>
                </tr>
                <tr>
                    <td scope="row">jajang</td>
                    <td>Bandung</td>
                    <td>2000.000</td>
                    <td>Magang</td>
                </tr>
            </tbody>
        </table>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>