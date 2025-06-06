@extends('template')

@section('content')
    <h1 style="margin-bottom: 30px;">Цехи</h1>
    <section>
        @foreach($workshops as $workshop)
            <article>
                <h3>{{ $workshop->name }}</h3>
            </article>
        @endforeach
    </section>
    <style>
        h3 {
            font-size: 16px;
            font-weight: 400;
        }

        section {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 20px;
        }
    </style>
@endsection
