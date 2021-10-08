@extends('layouts.master')

@section('judul')
Edit Data Cast {{$cast->nama}}
@endsection

@section('content')
        <form action="/cast/{{$cast->id}}" method="POST">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="title">Cast Name</label>
                <input type="text" class="form-control" value="{{$cast->nama}}" name="nama" id="title" placeholder="Masukkan Title">
                @error('nama')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="body">Age</label>
                <input type="text" class="form-control" value="{{$cast->umur}}" name="umur" id="body" placeholder="Masukkan Body">
                @error('umur')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="body">Bio</label>
                <textarea name="bio" class="form-control " cols="30" rows="10">{{$cast->bio}}</textarea>
                @error('bio')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
</div>
@endsection