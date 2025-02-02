@extends('admin.master')
@section('content')
    <div>
        <div class="card">

            <div class="flex justify-between">
                <h4 class="mb-5 text-bold text-indigo-800">{{ __('Edit Resource') }}</h4>

                <div>

                    <span class="error">*</span>
                    <span class="dark:text-gray-200"> = {{ __('required') }}</span>
                </div>
                <div class="flex space-x-2 justify-end p-3">
                    <a href="{{ route('admin.articles.index') }}"class="btn btn-primary p-3">{{ __('Back To Resource') }}</a>

                </div>
            </div>

            <form method="post" action="{{ route('admin.articles.update',$article->id) }}" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="mb-5">
                    <div class="rounded-md shadow-sm">
                        {{-- Resource Title --}}
                        <label for="Resource Title" class="block text-sm font-medium leading-5 text-gray-700 dark:text-gray-200"><strong>Resource Title</strong></label>
                        <input type="text" name='title'
                            class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm"
                            value="   {{$article->title }}">
                        @error('title')
                            <p class="error">{{ $message }}</p>
                        @enderror
                        {{-- Resource Excerpt --}}
                        <label for="Resource excerpt"  class="block text-sm font-medium leading-5 text-gray-700 dark:text-gray-200"><strong>Resource Excerpt</strong></label>
                        <textarea type="text" name='excerpt' rows="10"
                            class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm">
                            {{ $article->excerpt }}
                        </textarea>
                        @error('excerpt')
                            <p class="error">{{ $message }}</p>
                        @enderror
                        {{-- Resource Cover Image --}}
                        <label for="Resource cover_image"  class="block text-sm font-medium leading-5 text-gray-700 dark:text-gray-200"><strong>Resource CoverImage</strong></label>
                        <input type="file" name='cover_image'
                            class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm" valu="{{ $article->image }}">


                        @error('cover_image')
                            <p class="error">{{ $message }}</p>
                        @enderror
                        <div>
                            <img src=" {{asset($article->image) }}" alt="" srcset="" width="30%" height="40">
                        </div>
                         {{-- Resource Category  --}}
                         <label for="Resource category" class="block text-sm font-medium leading-5 text-gray-700 dark:text-gray-200"><strong>Resource Category</strong></label>
                         <select type="text" name='category_id'
                             class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm"
                             value="  {{ old('category_id') }}">
                             @foreach ($categories as $category)
                             <option value="{{ $category->id }}">{{ $category->name }}</option>
                             @endforeach

                            </select>
                         @error('category_id')
                             <p class="error">{{ $message }}</p>
                         @enderror
                        {{-- Resource content --}}
                        <label for="Resource Content"  class="block text-sm font-medium leading-5 text-gray-700 dark:text-gray-200"><strong>Resource Content</strong></label>
                        <textarea type="text" name='content' id="content"
                            class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm">
                              {{$article->body }}
                            </textarea>
                        @error('content')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    </div>

                    <button class="btn btn-primary mt-5 d-flex justify-end" type="submit">Update</button>
                </div>

            </form>







        </div>
    </div>


@endsection

