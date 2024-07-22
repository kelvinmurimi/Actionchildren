@extends('admin.master')
@section('content')
    <div>
        <div class="card">

            <div class="flex justify-between">
                <h4 class="mb-5 text-bold text-indigo-800">{{ __('Add New partner') }}</h4>

                <div>

                    <span class="error">*</span>
                    <span class="dark:text-gray-200"> = {{ __('required') }}</span>
                </div>
                <div class="flex space-x-2 justify-end p-3">
                    <a href="{{ route('admin.partners.index') }}"class="btn btn-primary p-3">{{ __('Back To partners') }}</a>

                </div>
            </div>

            <form method="post" action="{{ route('admin.partners.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-5">
                    <div class="rounded-md shadow-sm">
                        {{-- partner Title --}}
                        <label for="partner Name"
                            class="block text-sm font-medium leading-5 text-gray-700 dark:text-gray-200"><strong>Partner Name</strong></label>
                        <input type="text" name='name'
                            class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm"
                            value="  {{ old('name') }}">
                        @error('name')
                            <p class="error">{{ $message }}</p>
                        @enderror
                        {{-- partner Website --}}
                        <label for="partner website"
                            class="block text-sm font-medium leading-5 text-gray-700 dark:text-gray-200"><strong>Partners website Link</strong></label>
                        <input type="text" name='linkurl' rows="10"
                            class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm"
                           value="{{ old('linkurl') }}" >

                        @error('linkurl')
                            <p class="error">{{ $message }}</p>
                        @enderror
                        {{-- partner Cover Image --}}
                        <label for="partner image"
                            class="block text-sm font-medium leading-5 text-gray-700 dark:text-gray-200"><strong>Partner Logo
                                Image</strong></label>
                        <input type="file" name='image'
                            class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm">


                        @error('image')
                            <p class="error">{{ $message }}</p>
                        @enderror


                        {{-- partner content --}}
                        <label for="partner Content"
                            class="block text-sm font-medium leading-5 text-gray-700 dark:text-gray-200"><strong>Partner Details <span class="text sm text-green-500">Short description</span></strong></label>
                        <textarea type="text" name='description'id="description"rows="10" cols="80"
                            class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-md">
                              {{ old('description') }}
                            </textarea>
                        @error('description')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    </div>

                    <button class="btn btn-primary mt-5 d-flex justify-end" type="submit">Publish</button>
                </div>

            </form>







        </div>
    </div>

@endsection
