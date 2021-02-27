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

    <div class="columns is-centered">
        <div class="column is-6">
            <article class="box">
        
                <form action="{{ route('store') }}" method="POST">
                    @csrf

                    <div class="columns">
                        <div class="column is-8 field">
                            <label class="label">Title</label>
                            <div class="control">
                                <input
                                    class="input @error('title') is-danger @enderror"
                                    type="text"
                                    id="title"
                                    name="title"
                                    placeholder="Image title"
                                    value="{{ old('title') }}">
                                @error('title')
                                    <p class="help is-danger">{{ $errors->first('title') }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="column field">
                            <label class="label">Category</label>
                            <div class="control">
                                <input
                                    class="input @error('category') is-danger @enderror"
                                    type="text"
                                    id="category"
                                    name="category"
                                    placeholder="Image category"
                                    value="{{ old('category') }}">
                                @error('category')
                                    <p class="help is-danger">{{ $errors->first('category') }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Description</label>
                        <div class="control">
                            <textarea
                                class="textarea @error('description') is-danger @enderror"
                                type="text"
                                id="description"
                                name="description"
                                placeholder="Image description">{{ old('description') }}</textarea>
                            @error('description')
                                <p class="help is-danger">{{ $errors->first('description') }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Image URL</label>
                        <div class="control">
                            <input
                                class="input @error('url') is-danger @enderror"
                                type="text"
                                id="url"
                                name="url"
                                placeholder="Image url"
                                value="{{ old('url') }}">
                            @error('url')
                                <p class="help is-danger">{{ $errors->first('url') }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="field buttons is-centered p-4">
                        <button type="submit" class="button is-success">Add new image</button>
                    </div>
                </form>

            </article>
        </div>
    </div>

@endsection