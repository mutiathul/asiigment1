@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">{{ __('Kelas') }}</div>

        <div class="card-body">
            <a href="{{route('kelas.create')}}" class="btn btn-primary">Create New Kelas</a>
            <div class="mt-3">
                <h3>List of Kelas</h3>
                <ul class="list-group">
                    @forelse($kelas as $kelas)
                        <li class="list-group-item">
                            {{$kelas->nama_kelas}} 
                            <span class="float-right d-flex">
                                <a href="{{route('kelas.edit', [$kelas])}}"
                                   class="btn btn-warning btn-sm mr-2">Edit</a>
                                <form action="{{route('kelas.destroy', [$kelas])}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </span>
                        </li>
                    @empty
                        <li class="list-group-item">No Authors Added Yet</li>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
@endsection