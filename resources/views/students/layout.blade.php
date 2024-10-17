<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>CRUD MURID</title>
    <style>
        /* Navbar Styling */
        .navbar {
            background: linear-gradient(135deg, #71b7e6, #9b59b6);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            color: #fff;
            font-weight: bold;
            letter-spacing: 1px;
            font-size: 22px;
        }

        .navbar-brand:hover {
            color: #f8f9fa;
        }

        .nav-link {
            color: #f8f9fa;
            font-weight: 500;
            margin-right: 15px;
        }

        .nav-link:hover {
            color: #ddd;
        }

        .navbar-toggler {
            border: none;
        }

        .navbar-toggler-icon {
            filter: invert(1);
        }

        /* Body and Container */
        body {
            background-color: #f4f7fc;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            padding: 20px;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Segoe UI', sans-serif;
            color: #333;
            margin-bottom: 20px;
        }

        /* Button Style */
        .btn-primary {
            background-color: #9b59b6;
            border: none;
            font-weight: 600;
            letter-spacing: 0.5px;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #8e44ad;
        }

        /* Footer Style */
        footer {
            background-color: #333;
            padding: 20px 0;
            color: #fff;
            text-align: center;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .navbar-brand {
                font-size: 18px;
            }

            .nav-link {
                font-size: 14px;
            }
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">CRUD MURID</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('User') }}">Kelola Akun</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="container mt-4">
        @yield('content')
    </div>

    <!-- Footer -->
    

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+v8t4Y9LYt8w1MJHp5qBOZlb5qxg7" crossorigin="anonymous">
    </script>
</body>

</html>
