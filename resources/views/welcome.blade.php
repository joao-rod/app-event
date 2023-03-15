@extends('layouts.main')

@section('title', 'Dashboard')

@section('css')
    <link rel="stylesheet" href="../css/welcome.css">
@endsection

@section('content')
    <main class="container">
        <section class="cards">
            <form action="/" method="GET" class="search">
                <input type="text" name="search" id="search" placeholder="Pesquise por um evento...">
                <button><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>

            @if ($search)
                <div class="title"><h2>Resultados da busca por "{{ $search }}"</h2></div>
            @elseif (!$events->isNotEmpty() && $search)
                <div class="title">
                    <h2>Nenhum evento encontrado <a href="/">Voltar à home</a></h2>
                </div>
            @elseif (!$events->isNotEmpty())
                <div class="title"><h2>Nenhum evento encontrado</h2></div>
            @else
                <div class="title"><h2>Eventos cadastrados</h2></div>
            @endif

            @foreach ($events as $event)
                <div class="card">
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
                            <i class="fa-solid fa-calendar"></i>
                            {{ date('d/m/Y', strtotime($event->date)) }}
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

                        <a class="btn" href="/events/{{ $event->id }}">
                            <div>Saiba mais</div>
                        </a>
                    </div>
                </div>
            @endforeach

            <div class="card">
                <div class="add-event">
                    <a href="events/create">
                        <i class="fa-solid fa-circle-plus fa-6x"></i><br>
                    </a>
                    <small>Adicionar evento</small>
                </div>
            </div>
        </section>
    </main>
@endsection
