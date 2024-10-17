@extends('students.layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-10">
                <div class="card shadow-lg rounded">
                    <div class="card-header text-center bg-primary text-white">
                        <h2>Data Siswa</h2>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="mb-0">Daftar Siswa</h5>
                            <a href="{{ url('/student/create') }}" class="btn btn-success btn-lg" title="Add New Student">
                                <i class="fa fa-plus" aria-hidden="true"></i> + Add 
                            </a>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Nis</th>
                                        <th>Rayon</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($students as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td class="fs-4 fw-bold">{{ $item->name }}</td>
                                        <td class="fs-4 fw-bold">{{ $item->nis }}</td>
                                        <td class="fs-4 fw-bold">{{ $item->rayon }}</td>
                                        <td class="text-center">
                                            <a href="{{ url('/student/' . $item->id) }}" title="View Student">
                                                <button class="btn btn-info btn-sm">
                                                    <i class="fa fa-eye" aria-hidden="true"></i> View
                                                </button>
                                            </a>
                                            <a href="{{ url('/student/' . $item->id . '/edit') }}" title="Edit Student">
                                                <button class="btn btn-warning btn-sm">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                                </button>
                                            </a>
                                            <form id="deleteForm" method="POST" action="{{ url('/student' . '/' . $item->id) }}" accept-charset="UTF-8" class="d-inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="button" class="btn btn-danger btn-sm" title="Delete Student" onclick="confirmDelete()">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Custom Styling -->
    <style>
        /* Your existing styles here */
        /* Styling untuk header */
        h2 {
            font-family: 'Arial', sans-serif;
            text-transform: uppercase;
            margin-bottom: 20px;
            font-weight: bold;
        }

        /* Card styling */
        .card {
            background-color: #f8f9fa; /* Warna latar belakang yang lebih cerah */
            border-radius: 10px;
            color: #333;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        /* Styling tombol */
        .btn {
            border-radius: 50px;
            font-size: 16px; /* Ukuran font lebih besar */
            font-weight: bold;
            padding: 15px 30px; /* Padding lebih besar untuk tombol */
            text-transform: uppercase;
            transition: all 0.3s ease;
        }

        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
        }

        .btn-warning {
            background-color: #ffc107;
            border-color: #ffc107;
            color: #343a40; /* Mengubah warna teks untuk kontras yang lebih baik */
        }

        .btn-info {
            background-color: #17a2b8;
            border-color: #17a2b8;
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }

        /* Hover efek untuk tombol */
        .btn:hover {
            opacity: 0.9;
            transform: scale(1.05);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        /* Styling untuk tabel */
        .table {
            margin-top: 20px;
            background-color: #ffffff; /* Warna latar belakang tabel putih */
            border-radius: 10px;
            overflow: hidden;
        }

        .table th {
            background-color: #007bff; /* Warna biru untuk header tabel */
            color: white;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .table td {
            color: #333;
        }

        /* Hover efek untuk baris tabel */
        .table tbody tr:hover {
            background-color: #e9ecef; /* Warna abu-abu terang saat hover */
        }

        /* Responsive styling */
        @media (max-width: 768px) {
            .btn {
                font-size: 14px;
                padding: 10px 20px;
            }

            h2 {
                font-size: 18px;
            }
        }
    </style>

    <script>
        function confirmDelete() {
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                // If confirmed, submit the form
                document.getElementById('deleteForm').submit();
            }
        });
    }
    </script>
@endsection
