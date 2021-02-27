@extends ('layout.main')

@section ('navigation')
    <nav class="breadcrumb" aria-label="breadcrumbs">
        <ul>
            <li class="is-active">
                <a href="#">
                    <span class="icon is-small"><i class="fas fa-home" aria-hidden="true"></i></span>
                    <span>Image list</span>
                </a>
            </li>
        </ul>
    </nav>
@endsection

@section ('content')

    @if (session('success'))
        <article class="message is-success has-shadow">
            <div class="message-body">
                <p>{{ session('success') }}</p>
            </div>
        </article>
    @endif

    <div class="block">
        <a href="{{ route('create') }}" class="button is-dark">
            <span class="icon is-small"><i class="fas fa-plus" aria-hidden="true"></i></span>
            <span>Add new image</span>
        </a>
    </div>    

    <div class="columns is-mobile is-multiline">
        @foreach ($images as $image)
            <div class="column is-half-mobile is-one-third-tablet is-one-quarter-widescreen">
                <a href="{{ route('show', $image) }}">
                    <article class="card card-gallery">
                        <div class="card-header is-flex is-justify-content-center is-align-items-center p-2 has-background-dark">
                            <div class="card-image">
                                <img class="image image-gallery" src="{{ $image->url }}" alt="{{ $image->title }}">
                            </div>
                        </div>
                        <div class="card-content">
                            <h1 class="title is-4 is-flex is-justify-content-space-between">
                                {{ $image->title }}
                                <span class="tag is-info">{{ $image->category }}</span>
                            </h1>
                            
                        </div>
                    </article>
                </a>
            </div>
        @endforeach
    </div>

@endsection