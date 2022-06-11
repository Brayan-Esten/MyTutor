@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2 class="h2">Edit post</h2>
    </div>

    <div class="col-lg-8">
        <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="mb-5">


            @method('put')

            {{-- wajib di tiap form --}}
            @csrf


            {{-- title --}}
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $post->title) }}" autofocus>
                
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>



            {{-- slug --}}
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" readonly value={{ old('slug', $post->slug) }}>
               
                @error('slug')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>



            {{-- category --}}
            <div class="mb-3">
                <label for="category_id" class="form-label">Category</label>
                <select class="form-select" id="category_id" name="category_id">
                    @foreach ($categories as $category)
                        @if(old('category_id', $post->category_id) == $category->id)
                            <option selected value="{{ $category->id }}">{{ $category->name }}</option>
                        @else
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>


            {{-- detail --}}
            <div class="mb-3">
                <label for="detail" class="form-label">Body</label>
                @error('detail')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <input id="detail" type="hidden" name="detail" value="{{ old('detail', $post->detail) }}">
                <trix-editor input="detail"></trix-editor>
            </div>


            <button type="submit" class="btn btn-primary">Update post</button>
        </form>
    </div>

    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function(){
            fetch('/dashboard/posts/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
        });


    </script>

@endsection
