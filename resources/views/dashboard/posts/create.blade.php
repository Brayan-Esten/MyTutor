@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2 class="h2">Create new post</h2>
    </div>

    <div class="col-lg-8">
        <form action="/dashboard/posts" method="post" class="mb-5" enctype="multipart/form-data">

            {{-- wajib di tiap form --}}
            @csrf 


            {{-- title --}}
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}" autofocus>
                
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>



            {{-- slug --}}
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" readonly value="{{ old('slug') }}">
               
                @error('slug')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>



            {{-- category --}}
            <div class="mb-3">
                <label for="category_id" class="form-label">Category</label>
                <select class="form-select" id="category_id" name="category_id" value="{{ old('category_id') }}">
                    @foreach ($categories as $category)
                        @if(old('category_id') == $category->id)
                            <option selected value="{{ $category->id }}">{{ $category->name }}</option>
                        @else
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>


            {{-- image --}}
            <div class="mb-3">
                <label for="image" class="form-label @error('image') is-invalid @enderror">Post's Image</label>

                <img src="" alt="" class="img-preview img-fluid mb-3 col-sm-5">

                <input class="form-control" type="file" id="image" name="image" onchange="previewImg()">
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

                
            </div>


            {{-- detail --}}
            <div class="mb-3">
                <label for="detail" class="form-label">Body</label>
                @error('detail')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <input id="detail" type="hidden" name="detail" value="{{ old('detail') }}">
                <trix-editor input="detail"></trix-editor>
            </div>


            <button type="submit" class="btn btn-primary">Create post</button>
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


        function previewImg(){
            const img = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');
            
            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent){
                imgPreview.src = oFREvent.target.result;
            }
        }
            




    </script>

@endsection
