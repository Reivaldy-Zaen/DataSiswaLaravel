@extends('students.layout')
@section('content')
    @push('style')
        <style>
            /* Global Style */
            body {
                background: linear-gradient(135deg, #71b7e6, #9b59b6);
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                color: #333;
                margin: 0;
                padding: 0;
            }

            .login-container {
                max-width: 400px;
                margin: 60px auto;
                padding: 20px;
                background-color: rgba(255, 255, 255, 0.9);
                border-radius: 15px;
                box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
                position: relative;
            }

            /* Card Style */
            .card {
                border-radius: 10px;
                background-color: #fff;
                box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
                padding: 20px;
            }

            .card-header {
                text-align: center;
                padding-bottom: 15px;
            }

            .card-header h4 {
                font-size: 26px;
                font-weight: 600;
                color: #333;
                margin-bottom: 5px;
            }

            .card-header h6 {
                font-size: 14px;
                color: #666;
            }

            /* Form Control Style */
            .form-control {
                border-radius: 6px;
                border: 1px solid #ced4da;
                padding: 12px 18px;
                font-size: 15px;
                transition: all 0.3s ease;
                margin-bottom: 15px;
            }

            .form-control:focus {
                box-shadow: 0 0 8px rgba(0, 123, 255, 0.4);
                border-color: #007bff;
            }

            .form-label {
                font-weight: 500;
                color: #333;
            }

            /* Button Style */
            .btn-primary {
                background-color: #ff01d5;
                border: none;
                padding: 12px;
                font-weight: 600;
                font-size: 15px;
                border-radius: 6px;
                transition: background-color 0.3s ease;
            }

            .btn-primary:hover {
                background-color: #8e44ad;
            }

            /* Password Eye Icon */
            .eye-icon {
                position: absolute;
                right: 15px;
                top: 45px;
                cursor: pointer;
                font-size: 20px;
            }

            /* Responsive adjustments */
            @media screen and (max-width: 768px) {
                .login-container {
                    max-width: 100%;
                    margin: 20px;
                    padding: 20px;
                }
            }
        </style>
    @endpush

    <div class="login-container">
        <div class="card">
            <div class="card-header text-center">
                <h4 class="mb-0">Akun</h4>
                <h6>Isi akun Anda terlebih dahulu</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('user.tambah.akun') }}" method="POST">
                @csrf
                    <div class="mb-2">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama Anda">
                    </div>

                    <div class="mb-2 position-relative">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Masukkan password Anda">
                        <span class="eye-icon" onclick="togglePassword()">👁</span>
                    </div>

                    <div class="mb-2">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email Anda">
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById("password");
            const eyeIcon = document.querySelector(".eye-icon");
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                eyeIcon.textContent = "🙈"; // Mengganti ikon saat password terlihat
            } else {
                passwordInput.type = "password";
                eyeIcon.textContent = "👁"; // Mengganti ikon saat password tersembunyi
            }
        }
    </script>
@endsection
