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
                                <input class="input" type="text" id="title" name="title" placeholder="Image title">
                            </div>
                        </div>

                        <div class="column field">
                            <label class="label">Category</label>
                            <div class="control">
                                <input class="input" type="text" id="category" name="category" placeholder="Image category">
                            </div>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Description</label>
                        <div class="control">
                            <textarea class="textarea" type="text" id="description" name="description" placeholder="Image description"></textarea>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Image URL</label>
                        <div class="control">
                            <input class="input" type="text" id="url" name="url" placeholder="Image url">
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