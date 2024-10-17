@extends('students.layout')

@section('content')

<div class="container mt-5">
    <div class="card shadow-lg rounded">
        <div class="card-header bg-primary text-white text-center">
            <h4>Edit Student</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('student/' . $students->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                
                <input type="hidden" name="id" id="id" value="{{ $students->id }}" />
                
                <div class="form-group mb-3">
                    <label for="name" class="font-weight-bold">Name</label>
                    <input type="text" name="name" id="name" value="{{ $students->name }}" class="form-control" placeholder="Enter student's name" required>
                </div>
                
                <div class="form-group mb-3">
                    <label for="nis" class="font-weight-bold">NIS</label>
                    <input type="number" name="nis" id="nis" value="{{ $students->nis }}" class="form-control" placeholder="Enter NIS" required>
                </div>
                
                <div class="form-group mb-3">
                    <label for="rayon" class="font-weight-bold">Rayon</label>
                    <input type="text" name="rayon" id="rayon" value="{{ $students->rayon }}" class="form-control" placeholder="Enter rayon" required>
                </div>
                
                <div class="text-center">
                    <input type="submit" value="Update" class="btn btn-success btn-lg">
                    <a href="{{ url('student') }}" class="btn btn-secondary btn-lg ms-2">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Custom Styling -->
<style>
    /* Custom styling for card */
    .card {
        background-color: #f8f9fa; /* Light background color */
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    /* Styling for card header */
    .card-header {
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    /* Styling for labels */
    label {
        color: #333;
        font-weight: bold;
    }

    /* Styling for buttons */
    .btn {
        border-radius: 50px;
        font-size: 16px; /* Larger font size */
        font-weight: bold;
        padding: 10px 20px; /* Increased padding for buttons */
        transition: all 0.3s ease;
    }

    /* Hover effect for buttons */
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
