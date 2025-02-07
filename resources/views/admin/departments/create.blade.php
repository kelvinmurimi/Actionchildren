@extends('admin.master')
@section('content')
    <div>
        <div class="card">

            <div class="flex justify-between">
                <h4 class="mb-5 text-bold text-indigo-800">{{ __('Publish Department') }}</h4>

                <div>

                    <span class="error">*</span>
                    <span class="dark:text-gray-200"> = {{ __('required') }}</span>
                </div>
                <div class="flex space-x-2 justify-end p-3">
                    <a href="{{ route('departments.index') }}"class="btn btn-primary p-3">{{ __('Back To Departments') }}</a>

                </div>
            </div>

            <form method="post" action="{{ route('departments.store') }}" >
                @csrf
                <div class="mb-5">
                    <div class="rounded-md shadow-sm">
                        {{-- Article Title --}}
                        <label for="Article Title" class="block text-sm font-medium leading-5 text-gray-700 dark:text-gray-200"><strong>Department  Name</strong></label>
                        <input type="text" name='department_name'
                            class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm"
                            value="  {{ old('department_name') }}">
                        @error('department_name')
                            <p class="error">{{ $message }}</p>
                        @enderror

                    </div>

                    <button class="btn btn-primary mt-5 d-flex justify-end" type="submit">+Add</button>
                </div>

            </form>







        </div>
    </div>
@endsection
