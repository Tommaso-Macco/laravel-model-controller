@extends('layouts.main')

@section('content')
        {{-- <div>
            <h2>
                TITLE: {{ $film['title'] }}
            </h2>
            <h5>
                VOTE: {{ $film['vote'] }}
            </h5>   
        </div> --}}

        <div class="jumbobg">
            <div class="container">
                <div class="card-container">
                    @foreach ($data as $film)
                        <div class="card-film">
                            <h4 class="title">
                                {{ $film['title'] }}
                            </h4>
                            <h6>
                                @if (substr($film['nationality'], 0, 10) == 'american/b')
                                    British
                                @else
                                    American
                                @endif
                                @if (substr($film['nationality'], 0, 10) == 'american/b')
                                    <img src="{{asset('img/british.png') }}" alt="">
                                @else
                                    <img src="{{ asset('img/american.png') }}" alt="">
                                @endif
                            </h6>
                            <div class="film-info">
                                <h6>
                                    Data di Uscita: {{ $film['date'] }}
                                </h6>
                                <h6>
                                    Voto: {{ $film['vote'] }}
                                </h6>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        



@endsection

