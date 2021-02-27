@extends ('layout.main')

@section ('navigation')
    <nav class="breadcrumb" aria-label="breadcrumbs">
        <ul>
            <li>
                <a href="{{ route('index') }}">
                    <span class="icon is-small"><i class="fas fa-home" aria-hidden="true"></i></span>
                    <span>Image list</span>
                </a>
            </li>
            <li class="is-active">
                <a href="#">
                    <span class="icon is-small"><i class="fas fa-list" aria-hidden="true"></i></span>
                    <span>Image details</span>
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

    <article class="box">
        <div class="columns">
            <div class="column is-3 is-flex is-align-items-center">
                <img class="image image-gallery" src="{{ $image['url'] }}">
            </div>
            <div class="column">
                <div class="block">
                    <h1 class="title is-size-4 is-flex is-justify-content-space-between">
                        {{ $image['title'] }}
                        <span class="tag is-info">{{ $image['category'] }}</span>
                    </h2>
                    <p>{{ $image['description'] }}</p>
                </div>

                <div class="block">
                    <a href="{{ route('edit', $image) }}" class="button is-link is-small">
                        <span class="icon is-small"><i class="fas fa-edit" aria-hidden="true"></i></span>
                        <span>Edit</span>
                    </a>
                    <a href="{{ route('deleteconfirm', $image) }}" class="button is-danger is-small js-delete">
                        <span class="icon is-small"><i class="fas fa-trash" aria-hidden="true"></i></span>
                        <span>Delete</span>
                    </a>
                </div>
            </div>
        </div>

    </article>

@endsection