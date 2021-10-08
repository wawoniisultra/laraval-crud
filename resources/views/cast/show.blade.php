@extends('layouts.master')

@section('judul')
Detail Cast {{$cast->nama}}
@endsection

@section('content')

<h1>Nama Cast = {{$cast->nama}}</h1>
<p>Umur = {{$cast->umur}}</p>
<p>Bio = {{$cast->bio}}</p>
@endsection