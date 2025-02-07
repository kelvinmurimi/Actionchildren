@extends('admin.master')
@section('content')
<div>
    <div class="flex justify-between">

        <h1>{{ $title}} </h1>

        <div>

        </div>

    </div>

    <div class="mt-5 mb-5 grid sm:grid-cols-1 md:grid-cols-3 gap-4">

        <div class="col-span-2">
            <x-form.input type="search" name="name" wire:model="name" label="none" :placeholder="__('Search Pages')" />
        </div>

    </div>

    <div class="mb-5">

        <button type="button" class="inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs leading-4 font-medium rounded-t text-grey-700 bg-gray-200 hover:bg-grey-300 dark:bg-gray-700 dark:text-gray-200 transition ease-in-out duration-150">
            <svg class="h-5 w-5 text-gray-500 dark:text-gray-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
            </svg>
            {{ __('Advanced Search') }}
        </button>

        <button type="button" wire:click="resetFilters" class="inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs leading-4 font-medium rounded text-grey-700 bg-gray-200 hover:bg-grey-300 dark:bg-gray-700 dark:text-gray-200 transition ease-in-out duration-150">
            <svg class="h-5 w-5 text-gray-500 dark:text-gray-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
            </svg>
            {{ __('Reset form') }}
        </button>

        <div
                x-show="isOpen"
                x-transition:enter="transition ease-out duration-100 transform"
                x-transition:enter-start="opacity-0 scale-95"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-75 transform"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-95"
                class="bg-gray-200 dark:bg-gray-700 rounded-b-md p-5"
                wire:ignore.self>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                <x-form.input type="email" id="email" name="email" :label="__('Title')"  />

            </div>
        </div>

    </div>

    <div class="flex space-x-2 justify-end p-3">
        <a href="{{ route('departments.create') }}"class="btn btn-primary p-3" >{{ __('Add Department') }}</a>

     </div>
      @include('errors.messages')
    <div class="overflow-x-scroll shadow-md">
        <table>
        <thead>
        <tr>

            <th><a href="#" wire:click.prevent="sortBy('first_name')">{{ __('Page Name') }}</a></th>
            <th><a href="#" wire:click.prevent="sortBy('email')">{{ __('Action') }}</a></th>

        </tr>
        </thead>
        <tbody>
        @foreach($departments as $department)
            <tr>
                <div class="mr-8">

                    <td>

                        <div class="pl-8 pt-1 "><strong>{{$department->department_name }}</strong></div>
                    </td>
                </div>
               <td>
                    <div class="flex space-x-1">
                      <a href="{{ route('departments.edit',$department->id) }}"class="btn btn-primary" >{{ __('Edit') }}</a>
                    <form action="{{ route('departments.destroy',$department->id) }}" method="post">

                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger bg-red-800 :hover bg-red-600 text-gray-50">Delete</button>
                    </form>
                   </div>
                </td>
            </tr>
        @endforeach
        </tbody>
        </table>
    </div>

    {{ $departments->links() }}

</div>
@endsection


