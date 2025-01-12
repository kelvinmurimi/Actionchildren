@extends('admin.master')
@section('content')
    <div>
        <div class="card">

            <div class="flex justify-between">
                <h4 class="mb-5 text-bold text-indigo-800">{{ __('Edit Project') }}</h4>

                <div>

                    <span class="error">*</span>
                    <span class="dark:text-gray-200"> = {{ __('required') }}</span>
                </div>
                <div class="flex space-x-2 justify-end p-3">
                    <a href="{{ route('admin.projects.index') }}"class="btn btn-primary p-3">{{ __('Back To Projects') }}</a>

                </div>
            </div>

            <form method="post" action="{{ route('admin.projects.update',$project->id) }}" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="mb-5">
                    <div class="rounded-md shadow-sm">
                        {{-- Article Title --}}
                        <label for="project Title"
                            class="block text-sm font-medium leading-5 text-gray-700 dark:text-gray-200"><strong>Project
                                Title</strong></label>
                        <input type="text" name='title'
                            class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm"
                            value="  {{ $project->title }}">
                        @error('title')
                            <p class="error">{{ $message }}</p>
                        @enderror
                        {{-- Article Excerpt --}}
                        <label for="project description"
                            class="block text-sm font-medium leading-5 text-gray-700 dark:text-gray-200"><strong>Project description</strong></label>
                        <textarea type="text" name='description' rows="10"
                            class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm">
                            {{  $project->description }}
                        </textarea>
                        @error('description')
                            <p class="error">{{ $message }}</p>
                        @enderror
                        {{-- Article Cover Image --}}
                        <label for="Project Cover image"
                            class="block text-sm font-medium leading-5 text-gray-700 dark:text-gray-200"><strong>Project Cover Image</strong></label>
                        <input type="file" name='image'
                            class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm">


                        @error('image')
                            <p class="error">{{ $message }}</p>
                        @enderror
                        {{-- -Article Category
                        <label for="Article category"
                            class="block text-sm font-medium leading-5 text-gray-700 dark:text-gray-200"><strong>Article
                                Category</strong></label>
                        <select type="text" name='category_id'
                            class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm"
                            value="  {{ old('category_id') }}">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach

                        </select>
                        @error('category_id')
                            <p class="error">{{ $message }}</p>
                        @enderror ---}}
                        {{-- Article content --}}
                        <label for="project Details"
                            class="block text-sm font-medium leading-5 text-gray-700 dark:text-gray-200"><strong>Project Details</strong></label>
                        <textarea type="text" name='details'id="content"rows="10" cols="80"
                            class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm">
                              {{ $project->details }}
                            </textarea>
                        @error('details')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    </div>

                    <button class="btn btn-primary mt-5 d-flex justify-end" type="submit">Update</button>
                </div>

            </form>







        </div>
    </div>
    <script src="{{ asset('tinymce/tinymce.min.js') }}"></script>

    <script src="{{ asset('tinymce.js') }}"></script>
@endsection
