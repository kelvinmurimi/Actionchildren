@extends('admin.master')
@section('content')
<div>
    <div class="card">

        <div class="flex justify-between">
            <h4 class="mb-5 text-bold text-indigo-800">{{ __('Publish New Job') }}</h4>

            <div>

                <span class="error">*</span>
                <span class="dark:text-gray-200"> = {{ __('required') }}</span>
            </div>
            <div class="flex space-x-2 justify-end p-3">
                <a href="{{ route('admin.careers.index') }}"class="btn btn-primary p-3">{{ __('Back To Careers') }}</a>

            </div>
        </div>

        <form method="post" action="{{ route('admin.careers.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-5">
                <div class="rounded-md shadow-sm">
                    {{-- career Title --}}
                    <label for="Career Title"
                        class="block text-sm font-medium leading-5 text-gray-700 dark:text-gray-200"><strong>Job
                            Title</strong></label>
                    <input type="text" name='title'
                        class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm"
                        value="  {{ old('title') }}">
                    @error('title')
                        <p class="error">{{ $message }}</p>
                    @enderror
                    {{-- Career Description --}}
                    <label for="Careeer Description"
                        class="block text-sm font-medium leading-5 text-gray-700 dark:text-gray-200"><strong>Career Description</strong></label>
                    <textarea type="text" name='description' rows="10"
                        class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm">
                        {{ old('description') }}
                    </textarea>
                    @error('description')
                        <p class="error">{{ $message }}</p>
                    @enderror
                    {{-- career Document --}}
                    <label for="Article cover_image"
                        class="block text-sm font-medium leading-5 text-gray-700 dark:text-gray-200"><strong>Career Document</strong></label>
                    <input type="file" name='document'
                        class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm">


                    @error('document')
                        <p class="error">{{ $message }}</p>
                    @enderror
                   
                    {{-- Article content --}}
                    <label for="Article Content"
                        class="block text-sm font-medium leading-5 text-gray-700 dark:text-gray-200"><strong>Job
                            Content</strong></label>
                    <textarea type="text" name='content'id="content"rows="10" cols="80"
                        class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm">
                          {{ old('content') }}
                        </textarea>
                    @error('content')
                        <p class="error">{{ $message }}</p>
                    @enderror
                </div>

                <button class="btn btn-primary mt-5 d-flex justify-end" type="submit">Publish</button>
            </div>

        </form>



    </div>
</div>

@endsection