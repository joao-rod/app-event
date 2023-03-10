@extends('layouts.main')

@section('title', "Evento: $event->title")

@section('css')
    <link rel="stylesheet" href="../css/events/show.css">
@endsection

@section('content')
    <main class="container">
        <div class="content">
            <div class="event-description">
                <h2>{{ $event->title }}</h2>
                <small>
                    <i class="fa-sharp fa-solid fa-user-tie"></i>
                    Criador do evento
                </small><br><br>
                <p>{{ $event->description }}</p>
            </div>

            <hr>

            <div class="event-info">
                <h2>Informações adicionais <i class="fa-solid fa-circle-info"></i></h2><br>
                <p>
                    <i class="fa-solid fa-location-dot"></i>
                    {{ $event->city }}
                </p>

                <p>
                    <i class="fa-solid fa-user-group"></i>
                    (XXXXX) participantes
                </p>

                <p>
                    @if ($event->type == 0)
                        <i class="fa-solid fa-lock-open"></i>
                        Evento público
                    @else
                        <i class="fa-solid fa-lock"></i>
                        Evento privado
                    @endif
                </p>

                <a href="#">Confirmar presença</a>
            </div>
        </div>
    </main>
@endsection
