@extends('layouts.app')

@section('title', 'Create Marketer')

@push('styles')
@endpush

@section('content')
    <main class="w-full flex-grow p-2">
        <h1 class="w-full text-3xl text-black pb-6">Add Marketer</h1>
        <div class="flex flex-wrap justify-center">
            <div class="w-full lg:w-1/2 mt-6 pl-0 lg:pl-2">
                {{-- <p class="text-xl pb-6 flex items-center">
                <i class="fas fa-list mr-3"></i> Add Marketer
            </p> --}}
                <div class="leading-loose">
                    <form class="p-10 bg-white rounded shadow-xl">
                        <p class="text-lg text-gray-800 font-medium pb-4">Marketer information</p>
                        <div class="">
                            <label class="block text-sm text-gray-600" for="name">Name</label>
                            <input
                                class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-blue-500"
                                id="name" name="name" type="text" required placeholder="Enter Name"
                                aria-label="Name">
                        </div>
                        <div class="mt-3">
                            <label class="block text-sm text-gray-600" for="phone">Phone</label>
                            <input
                                class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-blue-500"
                                id="phone" name="phone" type="tel" required placeholder="Enter Phone"
                                aria-label="Phone">
                        </div>
                        <div class="mt-3">
                            <label class="block text-sm text-gray-600" for="email">Email</label>
                            <input
                                class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-blue-500"
                                id="email" name="email" type="email" required placeholder="Enter Email"
                                aria-label="Email">
                        </div>
                        <div class="mt-3">
                            <label class="block text-sm text-gray-600" for="password">Password</label>
                            <input
                                class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-blue-500"
                                id="password" name="password" type="password" required placeholder="Enter Password"
                                aria-label="Password">
                        </div>
                        <div class="mt-3">
                            <label class="block text-sm text-gray-600" for="repeat_password">Repeat Password</label>
                            <input
                                class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-blue-500"
                                id="repeat_password" name="repeat_password" type="password" required
                                placeholder="Enter Password" aria-label="Repeat Password">
                        </div>
                        <div class="mt-3">
                            <label class=" block text-sm text-gray-600" for="address">Address</label>
                            <input
                                class="w-full px-5 py-3 text-gray-700 bg-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-blue-500d"
                                id="address" name="address" type="text" placeholder="Enter Address"
                                aria-label="Address">
                        </div>

                        <div class="mt-6">
                            <a class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded"
                                type="submit">Save</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
