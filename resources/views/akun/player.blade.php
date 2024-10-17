@extends('students.layout')

@section('content')

    <div class="d-flex justify-content-end">
        <a href="{{ route('user.login') }}" class="btn btn-success mt-2 mx-2 rounded-circle"> + Add</a>
    </div>

    @if (Session::get('success'))
        <div class="alert alert-danger">{{ Session::get('success') }}</div>
    @endif

    <div class="table-responsive mt-3">
        <table class="table table-bordered table-striped text-center">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $number = 1;
                @endphp
                @foreach ($userss as $index => $players)
                    <tr>
                        <td>{{ $number++ }}</td>
                        <td>{{ $players['name'] }}</td>
                        <td>{{ $players['email'] }}</td>
                        <td>{{ $players['password'] }}</td>
                        <td class="d-flex justify-content-center py-1">
                            <a href="{{ route('user.login', $players['id']) }}"></a>
                            <button type="button" class="btn btn-danger"
                                onclick="showModal('{{ $players->id }}', '{{ $players->name }}')">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form id="form-delete-akun" method="POST">
                @csrf
                @method('DELETE')
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Hapus Data</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Apakah anda yakin ingin menghapus data ini <span id="nama-akun"></span>?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Hapus</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection

@push('script')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        function showModal(id, name) {
            let action = '{{ route('user.delete', ':id') }}';
            action = action.replace(':id', id);
            $('#form-delete-akun').attr('action', action);
            $('#exampleModal').modal('show');
            $('#nama-akun').text(name);
        }
    </script>
@endpush
