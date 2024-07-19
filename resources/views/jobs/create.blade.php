@extends('layouts.admin')

@section('main-content')
    <div class="container">
        <h1>Create Job</h1>

        <form action="{{ route('jobs.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="starting_year">Tahun Awal</label>
                <input type="number" name="starting_year" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="year_end">Akhir Tahun</label>
                <input type="number" name="year_end" class="form-control">
            </div>
            <div class="form-group">
                <label for="field">Bidang</label>
                <input type="text" name="field" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="company">Perusahaan</label>
                <input type="text" name="company" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="address">Alamat</label>
                <input type="text" name="address" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="work_description">Deskripsi Pekerjaan</label>
                <textarea name="work_description" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection
