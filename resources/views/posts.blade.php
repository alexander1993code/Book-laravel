@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach($posts as $post)

            <div class="card">

                <div class="card-body">
                    @if ($post->image)
                        <img src="{{ $post->get_image }}" class="card-img-top">
                    @elseif ($post->iframe)
                    
                        {!! $post->iframe !!}

                    @endif
                    <h5 class="card-title">{{ $post->title}}</h5>
                    <p class="card-text">
                        {{ $post->get_excerpt }}
                        <a href="{{ route('post', $post) }}">Leer mas</a>
                    </p>
                    <p class="text-muted mb-0">
                        <em>
                            &dash; {{ $post->user->name }}
                        </em>
                        {{ $post->created_at->format('d M Y') }}
                    </p>
                </div>
            @endforeach
        
            </div>
            {{ $posts->links("pagination::bootstrap-4") }}
        </div>
    </div>
</div>
@endsection
