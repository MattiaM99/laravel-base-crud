@extends('layouts.main')


@section('content')

<div class="container">
    <h1>{{ $comic->title }}</h1>
    <p>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint eum eveniet consectetur placeat dolorum dolorem quam velit voluptatem. Fuga quaerat eaque dolores ab voluptas voluptate dolorum rem accusantium quasi distinctio.
    </p>
</div>

<div class="container">
    <a href="{{ route('comics.index') }}"><< torna all'elenco</a>
</div>

@endsection