@extends('students.layout')
@section('content')

<div class="container mt-5">
    <div class="card shadow-lg rounded">
        <div class="card-header bg-primary text-white text-center">
            <h4>Show Student</h4>
        </div>
        <div class="card-body text-center">
            <div class="mb-4">
                <h5 class="card-title">
                    Name: <span class="text-dark">{{ $students->name }}</span>
                </h5>
                <p class="card-text">
                    Nis: <strong class="text-dark">{{ $students->nis }}</strong>
                </p>
                <p class="card-text">
                    Rayon: <strong class="text-danger">{{ $students->rayon }}</strong>
                </p>
            </div>

            <!-- Tombol Kembali -->
            <div class="mt-4">
                <a href="{{ url('student') }}" class="btn btn-secondary btn-lg">
                    <i class="fa fa-arrow-left" aria-hidden="true"></i> Back
                </a>
            </div>
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

    /* Styling untuk title dan text */
    .card-title {
        font-size: 1.5rem; /* Ukuran font lebih besar untuk judul */
        color: #333;
        margin-bottom: 5px; /* Jarak bawah untuk memberikan spasi */
        padding: 10px; /* Padding untuk menambah ruang di dalam elemen */
        border: 1px solid #ddd; /* Border halus di sekitar judul */
        border-radius: 5px; /* Membuat sudut border lebih halus */
        background-color: #e9f5fe; /* Warna latar belakang untuk menonjolkan judul */
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif
    }
   

    .card-text {
        font-size: 1.5rem; /* Ukuran font yang sama untuk semua teks */
        color: #333;
        margin: 5px 0; /* Jarak atas dan bawah untuk setiap paragraf */
        padding: 10px; /* Padding untuk memberikan ruang di dalam teks */
        border: 1px solid #ddd; /* Border halus di sekitar teks */
        border-radius: 5px; /* Membuat sudut border lebih halus */
        background-color: #f0f8ff; /* Warna latar belakang untuk menonjolkan teks */
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif
    }

    /* Styling untuk button */
    .btn {
        border-radius: 50px;
        font-size: 1.5rem; /* Ukuran font lebih besar */
        font-weight: bold;
        padding: 10px 20px; /* Padding lebih besar untuk tombol */
        transition: all 0.3s ease;
    }

    /* Hover efek untuk tombol */
    .btn:hover {
        opacity: 0.9;
        transform: scale(1.05);
        box-shadow: 0 4px 10px rgba(6, 217, 70, 0.2);
    }
</style>

@stop
