
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Toko Printer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        /* Add custom CSS here */
        .navbar-custom {
            background-color: #395c82;
        }

        .navbar-custom .navbar-brand {
            color: #fff;
        }

        .navbar-custom .navbar-nav .nav-link {
            color: #fff;
        }

        .navbar-collapse {
            justify-content: flex-end;
        }

        .footer-custom {
            background-color: #395c82;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
        }
        .navbar-collapse {
            justify-content: flex-end;
        }


    </style>
</head>
<body class="bg-light">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container">
            {{-- <a class="navbar-brand" href="#">
                <img src="{{ asset('picture/logorpl.jpeg') }}" alt="Logo">
            </a> --}}
            <a class="navbar-brand" href="#">Toko Printer</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <img class="nav-link" href="{{ url('cart') }}" src="{{ asset('icons/shopping-cart.png') }}" width="50" height="50" >
                    </li>

                    <li class="nav-item">
                        <img class="nav-link" href="#" src="{{ asset('icons/message.png') }}" width="50" height="50" >
                    </li>

                    <li class="nav-item">
                        <img class="nav-link" href="#" src="{{ asset('icons/user.png') }}" width="50" height="50" >
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container">
        <br>
        @include('komponen.pesan')
        @yield('konten')
    </main>

    <!-- Footer -->
    <footer class="footer-custom">
        <div class="container">
            &copy; Radja Mahesa Waluya
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>
