@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">{{ __('Create a Kelas') }}</div>
        <div class="card-body">
            <form action="{{route('kelas.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nama_kelas">Nama Kelas</label>
                    <input type="text" name="nama_kelas" class="form-control">
                </div>
                <button class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
@endsection