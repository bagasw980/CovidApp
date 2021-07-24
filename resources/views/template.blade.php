<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | CovidApp</title>
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/datatables/datatables.min.css">
</head>
<body>
    <nav>
        <div class="logo">Covid<span>App</span></div>
        <div class="navbar">
            <ul>
                <a href="/"><li>Beranda</li></a>
                <a href="/statitiska"><li>Statitiska</li></a>
                <a href="/rumah-sakit-rujukan"><li>Data Rumah Sakit Rujukan Covid-19</li></a>
                <a href="/registrasi-vaksinasi"><li>Registrasi Vaksinasi Covid</li></a>
            </ul>
        </div>
    </nav>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>Made with <i class="fas fa-heart"></i> by Bagas</p>
    </footer>
    <script src="../../assets/jquery-3.6.0.min.js"></script>
    <script src="../../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/datatables/datatables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#table').DataTable();
        } );
    </script>
</body>
</html>