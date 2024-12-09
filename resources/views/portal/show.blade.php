@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Portal Pengguna</div>

                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <div class="circle-image">
                                <!-- Tampilkan foto profil jika ada -->
                                @if ($user->profile_photo_path)
                                    <img src="{{ asset('storage/' . $user->profile_photo_path) }}" class="img-fluid rounded-circle" style="max-width: 100px;">
                                @else
                                    <img src="https://via.placeholder.com/100" class="img-fluid rounded-circle" alt="Foto Profil">
                                @endif
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h5>{{ $user->name }}</h5>
                            <p>{{ $user->email }}</p>
                            <p>Total Saldo: <strong>Rp. 1.000.000</strong></p>
                        </div>
                    </div>

                    <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="profile_photo" class="col-md-4 col-form-label text-md-end">Foto Profil</label>

                            <div class="col-md-6">
                                <input type="file" id="profile_photo" name="profile_photo" class="form-control">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">Perbarui Foto Profil</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .circle-image img {
        width: 100px;
        height: 100px;
        object-fit: cover;
    }
</style>
@endpush
