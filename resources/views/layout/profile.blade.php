<h1>Profle page</h1>
<h1>Welcome, {{ $userInfo->name }}</h1>
<p>Email: {{ $userInfo->email }}</p>
<img src="{{ asset('storage/' . $userInfo->picture) }}" alt="" height="100" width="100">
{{-- to view image and set the path We have to use php artisan storage:link command to connect the path of storage/app/public folder --}}
<a href="{{ route('auth.logout') }}">Logout</a>
