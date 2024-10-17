@extends('students.layout')
@section('content')

<div class="container mt-5">
    <div class="card shadow-lg rounded">
        <div class="card-header bg-primary text-white text-center">
            <h4>Edit Siswa</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('student') }}" method="post">
                {!! csrf_field() !!}

                <div class="form-group mb-3">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Masukkan nama siswa" required>
                </div>

                <div class="form-group mb-3">
                    <label for="nis">Nis</label>
                    <input type="number" name="nis" id="nis" class="form-control" placeholder="Masukkan NIS" required>
                </div>

                <div class="form-group mb-3">
                    <label for="rayon">Rayon</label>
                    <input type="text" name="rayon" id="rayon" class="form-control" placeholder="Masukkan rayon" required>
                </div>

                <div class="text-center">
                    <!-- Menambahkan tombol Back di sebelah Save -->
                    <a href="{{ url('student') }}" class="btn btn-secondary btn-lg me-2">
                        <i class="fa fa-arrow-left" aria-hidden="true"></i> Back
                    </a>
 

                    <input type="submit" value="Save" class="btn btn-success btn-lg">
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Custom Styling -->
<style>
    /* Styling untuk card */
    .card {
        background-color: #f8f9fa; /* Warna latar belakang yang lebih cerah */
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    /* Styling untuk header card */
    .card-header {
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    /* Styling untuk label */
    label {
        font-weight: bold;
        color: #333;
    }

    /* Styling untuk button */
    .btn {
        border-radius: 50px;
        font-size: 16px; /* Ukuran font lebih besar */
        font-weight: bold;
        padding: 10px 20px; /* Padding lebih besar untuk tombol */
        transition: all 0.3s ease;
    }

    /* Hover efek untuk tombol */
    .btn:hover {
        opacity: 0.9;
        transform: scale(1.05);
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

    /* Responsive styling */
    @media (max-width: 768px) {
        .btn {
            font-size: 14px;
            padding: 8px 16px;
        }

        .card {
            margin: 20px;
        }
    }
</style>

@stop
