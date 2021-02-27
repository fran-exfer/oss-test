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
                    <span class="icon is-small"><i class="fas fa-trash" aria-hidden="true"></i></span>
                    <span>Delete image "{{ $image->title }}"</span>
                </a>
            </li>
        </ul>
    </nav>
@endsection

@section ('content')

    <div class="columns is-centered">
        <div class="column is-6">
            <article class="message is-danger has-shadow">
                <div class="message-header">
                    <p>Confirm delete action</p>
                </div>
                <div class="message-body">
                    <p class="block">Are you sure you want to delete this image? This action is irreversible.</p>
                    <div class="block buttons is-centered">
                    <form action="{{ route('destroy', $image) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="button is-danger" value="Delete the image">
                    </form>
                    </div>
                </div>
            </article>
        </div>
    </div>
    

@endsection