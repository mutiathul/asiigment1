@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">{{ __('Create a Siswa') }}</div>
        <div class="card-body">
            <form action="{{route('siswa.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nama_siswa">Nama Siswa</label>
                    <input type="text" name="nama_siswa" class="form-control">
                </div>
                <div class="form-group">
                    <select name="kelas_id" id="" class="form-control">
                        @forelse($kelas as $kelas)
                        <option value="{{$kelas->_id}}">{{$kelas->nama_kelas}}</option>
                        @empty
                            <option value="">No Kelas</option>
                        @endforelse
                    </select>
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis KElamin</label>
                    <input type="text" name="jenis_kelamin" class="form-control">
                </div>
                <div class="form-group">
                    <label for="alamat">alamat</label>
                    <input type="text" name="alamat" class="form-control">
                </div>
                <button class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
@endsection