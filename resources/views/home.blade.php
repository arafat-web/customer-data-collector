@extends('layouts.app')

@section('content')
    <main class="w-full flex-grow p-6">
        <h1 class="text-3xl text-black pb-6">Dashboard</h1>
        <div class="grid grid-cols-1 gap-4 mt-8 sm:grid-cols-4">
            <div class="flex items-center bg-white border rounded-sm overflow-hidden shadow">
                <div class="p-4 bg-indigo-400">
                    <i class="fas fa-users text-white text-5xl"></i>
                </div>
                <div class="px-4 text-gray-700">
                    <h3 class="text-sm tracking-wider">Today</h3>
                    <p class="text-3xl">142,334</p>
                </div>
            </div>
            @if (auth()->user()->role == 'marketer')
            <div class="flex items-center bg-white border rounded-sm overflow-hidden shadow">
                <div class="p-4 bg-blue-400"><i class="fas fa-user text-white text-5xl"></i></div>
                <div class="px-4 text-gray-700">
                    <h3 class="text-sm tracking-wider">Last Day</h3>
                    <p class="text-3xl">39,265</p>
                </div>
            </div>
        @endif
            <div class="flex items-center bg-white border rounded-sm overflow-hidden shadow">
                <div class="p-4 bg-red-400"><i class="fas fa-users text-white text-5xl"></i></div>
                <div class="px-4 text-gray-700">
                    <h3 class="text-sm tracking-wider">This Month</h3>
                    <p class="text-3xl">34</p>
                </div>
            </div>
            <div class="flex items-center bg-white border rounded-sm overflow-hidden shadow">
                <div class="p-4 bg-green-400"><i class="fas fa-users text-white text-5xl"></i></div>
                <div class="px-4 text-gray-700">
                    <h3 class="text-sm tracking-wider">Total Customers</h3>
                    <p class="text-3xl">12,768</p>
                </div>
            </div>
            @if (auth()->user()->role == 'admin')
                <div class="flex items-center bg-white border rounded-sm overflow-hidden shadow">
                    <div class="p-4 bg-blue-400"><i class="fas fa-user text-white text-5xl"></i></div>
                    <div class="px-4 text-gray-700">
                        <h3 class="text-sm tracking-wider">Total Marketer</h3>
                        <p class="text-3xl">39,265</p>
                    </div>
                </div>
            @endif
        </div>
        @if (auth()->user()->role == 'admin')
            <div class="w-full mt-12">
                <p class="text-xl pb-3 flex items-center">
                    <i class="fas fa-list mr-3"></i> Latest Reports
                </p>
                <div class="bg-white overflow-auto">
                    <table class="min-w-full bg-white">
                        <thead class="bg-gray-800 text-white">
                            <tr>
                                <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Name</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Phone</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Email</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Date</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Added By</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">
                            <tr>
                                <td class="w-1/3 text-left py-3 px-4">Lian</td>
                                <td class="w-1/3 text-left py-3 px-4">Smith</td>
                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500"
                                        href="tel:622322662">622322662</a></td>
                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500"
                                        href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                            </tr>
                            <tr class="bg-gray-200">
                                <td class="w-1/3 text-left py-3 px-4">Emma</td>
                                <td class="w-1/3 text-left py-3 px-4">Johnson</td>
                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500"
                                        href="tel:622322662">622322662</a></td>
                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500"
                                        href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                            </tr>
                            <tr>
                                <td class="w-1/3 text-left py-3 px-4">Oliver</td>
                                <td class="w-1/3 text-left py-3 px-4">Williams</td>
                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500"
                                        href="tel:622322662">622322662</a></td>
                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500"
                                        href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                            </tr>
                            <tr class="bg-gray-200">
                                <td class="w-1/3 text-left py-3 px-4">Isabella</td>
                                <td class="w-1/3 text-left py-3 px-4">Brown</td>
                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500"
                                        href="tel:622322662">622322662</a></td>
                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500"
                                        href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                            </tr>
                            <tr>
                                <td class="w-1/3 text-left py-3 px-4">Lian</td>
                                <td class="w-1/3 text-left py-3 px-4">Smith</td>
                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500"
                                        href="tel:622322662">622322662</a></td>
                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500"
                                        href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                            </tr>
                            <tr class="bg-gray-200">
                                <td class="w-1/3 text-left py-3 px-4">Emma</td>
                                <td class="w-1/3 text-left py-3 px-4">Johnson</td>
                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500"
                                        href="tel:622322662">622322662</a></td>
                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500"
                                        href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                            </tr>
                            <tr>
                                <td class="w-1/3 text-left py-3 px-4">Oliver</td>
                                <td class="w-1/3 text-left py-3 px-4">Williams</td>
                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500"
                                        href="tel:622322662">622322662</a></td>
                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500"
                                        href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                            </tr>
                            <tr class="bg-gray-200">
                                <td class="w-1/3 text-left py-3 px-4">Isabella</td>
                                <td class="w-1/3 text-left py-3 px-4">Brown</td>
                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500"
                                        href="tel:622322662">622322662</a></td>
                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500"
                                        href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        @endif
    </main>
@endsection
