<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Saya</title>
    <link rel="stylesheet" href="style.css">
</head>
@extends('component.app')

@section('content')
    <div class="container">
        
        <main>
            <section class="profile">
                <img src="profil.png" alt="Foto Profil">
                <h2>{{$name}}</h2>
                <p>{{$deskripsi}}</p>
            </section>
        </main>
        
    </div>
@endsection