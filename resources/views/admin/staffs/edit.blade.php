@extends('admin.master')
@section('content')
    <div>
        <div class="card">

            <div class="flex justify-between">
                <h4 class="mb-5 text-bold text-indigo-800">{{ __('Edit Staff Member') }}</h4>

                <div>

                    <span class="error">*</span>
                    <span class="dark:text-gray-200"> = {{ __('required') }}</span>
                </div>
                <div class="flex space-x-2 justify-end p-3">
                    <a href="{{ route('admin.staffs.index') }}"class="btn btn-primary p-3">{{ __('Back To Staff') }}</a>

                </div>
            </div>

            <form method="post" action="{{ route('admin.staffs.update',$staff->id) }}" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="mb-5">
                    <div class="rounded-md shadow-sm">
                        {{-- staff Title --}}
                        <label for="staff name"
                            class="block text-sm font-medium leading-5 text-gray-700 dark:text-gray-200"><strong>staff
                                Title</strong></label>
                        <input type="text" name='name'
                            class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm"
                            value="  {{ $staff->name }}">
                        @error('name')
                            <p class="error">{{ $message }}</p>
                        @enderror

                        {{-- staff Cover Image --}}
                        <label for="staff cover_image"
                            class="block text-sm font-medium leading-5 text-gray-700 dark:text-gray-200"><strong>staff
                                CoverImage</strong></label>
                        <input type="file" name='image'
                            class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm">


                        @error('image')
                            <p class="error">{{ $message }}</p>
                        @enderror
                        <div>
                            <p>Preview</p>
                            <image src="{{ asset($staff->image) }}" style="width:50% ; hieght:40%;">
                        </div>
                        {{-- staff Category  --}}
                        <label for="staff category"
                            class="block text-sm font-medium leading-5 text-gray-700 dark:text-gray-200"><strong>staff
                                Department</strong></label>
                        <select type="text" name='department'
                            class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm"
                            value="  {{ $staff->department }}">

                                <option value="young">Young Friends Of Afcic</option>
                                <option value="board">Board Directors</option>
                                <option value="accountant">Accountant</option>
                                <option value="intern">Intern</option>
                                <option value="ict">ICT</option>
                                <option value="cook">Chef</option>
                                <option value="legal">Legal Aid</option>
                        </select>
                        @error('department')
                            <p class="error">{{ $message }}</p>
                        @enderror
                        {{-- staff Excerpt --}}
                        <label for="staff bio"
                            class="block text-sm font-medium leading-5 text-gray-700 dark:text-gray-200"><strong>Staff
                                Bio</strong></label>
                        <textarea type="text" name='bio' rows="10"
                            class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm">
                           {{ $staff->bio }}
                        </textarea>
                        @error('bio')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    <button class="btn btn-primary mt-5 d-flex justify-end" type="submit">Publish</button>
                </div>

            </form>
        </div>

        </div>
    </div>

@endsection
