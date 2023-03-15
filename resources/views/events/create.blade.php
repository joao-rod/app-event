@extends('layouts.main')

@section('title', 'Criar novo evento')

@section('css')
    <link rel="stylesheet" href="../css/events/create.css">
@endsection

@section('content')
    <main class="container">
        <form action="/events" method="POST" class="form-content">
            @csrf

            <h2>Preencha os dados para criar o evento</h2>

            <div class="form-input">
                <label for="title">Título</label>
                <input type="text" name="title" id="title" placeholder="Nome do evento" required>
            </div>

            <div class="form-input">
                <label for="date">Data</label>
                <input type="date" name="date" id="date" required>
            </div>

            <div class="form-input">
                <label for="city">Local</label>
                <input type="text" name="city" id="city" placeholder="Cidade do evento" required>
            </div>

            <div class="form-input">
                <label for="description">Descrição</label>
                <textarea name="description" id="description" placeholder="Descrição do evento" required></textarea>
            </div>

            <div class="form-input">
                <label>Tipo</label>
                <div>
                    <input type="radio" name="type" id="public" value=0 required><label for="public">Público</label>
                </div>
                <div>
                    <input type="radio" name="type" id="private" value=1 required><label for="private">Privado</label>
                </div>
            </div>

            <div class="btn-form">
                <button type="submit">Criar Evento</button>
            </div>
        </form>
    </main>
@endsection
