@extends ('layout.main')

@section ('content')
    <ul>
        @foreach ($images as $image)
            <li>{{ $image['title'] }}</li>
        @endforeach
    </ul>
@endsection