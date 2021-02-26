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
                    <span class="icon is-small"><i class="fas fa-plus" aria-hidden="true"></i></span>
                    <span>Create new image</span>
                </a>
            </li>
        </ul>
    </nav>
@endsection

@section ('content')
    
    

@endsection