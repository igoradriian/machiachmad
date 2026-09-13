@extends('admin.layouts.app')

@section('title', 'Verifikasi User')

@section('content')
<div class="container py-4">
    <h1 class="mb-4">Daftar User Terdaftar</h1>

    @if(session('success'))
    <div class="alert alert-success mb-3">{{ session('success') }}</div>
    @endif

    <a href="{{ route('admin.users.create') }}" class="btn btn-primary mb-3">+ Tambah User</a>

    <div class="table-responsive">
        <table class="table table-bordered table-striped bg-white text-black">
            <thead class="table-dark text-center">
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Verifikasi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                <tr>
                    <td class="text-center">{{ $user->name }}</td>
                    <td class="text-center">{{ $user->email }}</td>
                    <td class="text-center">
                        @if($user->is_verified)
                        <span class="badge bg-success">Terverifikasi</span>
                        @else
                        <span class="badge bg-danger">Belum</span>
                        @endif
                    </td>
                    <td class="text-center">
                        <div class="d-flex justify-content-center gap-2">
                            <form action="{{ route('admin.users.verify', $user->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-sm {{ $user->is_verified ? 'btn-warning' : 'btn-success' }}">
                                    {{ $user->is_verified ? 'Batalkan' : 'Verifikasi' }}
                                </button>
                            </form>

                            <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus user ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center">Belum ada user terdaftar.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary mt-3">← Kembali ke Dashboard</a>
</div>
@endsection