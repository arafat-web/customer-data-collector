<aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
    <div class="p-6">
        <a href="{{ route('home') }}" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Ambition Touch</a>
        {{-- <button class="w-full bg-white cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
            <i class="fas fa-plus mr-3"></i> New Report
        </button> --}}
    </div>
    <nav class="text-white text-base font-semibold pt-3">
        <a href="{{ route('home') }}" class="flex items-center {{ Route::currentRouteName() == 'home' ? 'active-nav-link' : '' }} text-white py-4 pl-6 nav-item">
            <i class="fas fa-tachometer-alt mr-3"></i>
            Dashboard
        </a>
        <a href="blank.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-plus mr-3"></i>
            Add Customer
        </a>
        <a href="tables.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-users mr-3"></i>
            Customers
        </a>
        @if (auth()->user()->role == 'admin')
            <a href="{{ route('marketers.index') }}" class="flex items-center {{ Route::currentRouteName() == 'marketers.index' || Route::currentRouteName() == 'marketers.create' || Route::currentRouteName() == 'marketers.edit' || Route::currentRouteName() == 'marketers.show' ? 'active-nav-link' : '' }} text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-user mr-3"></i>
                Marketers
            </a>
            <a href="forms.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-align-left mr-3"></i>
                Reports
            </a>
        @endif
    </nav>
</aside>
