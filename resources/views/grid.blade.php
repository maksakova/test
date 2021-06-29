@include('header')

    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="container">
                <table>
                    <tr>
                        <th></th>
                        @foreach($departments as $department)
                            <th>{{$department->name}}</th>
                        @endforeach
                    </tr>
                    @foreach($employees as $employee)
                        <tr>
                            <td>{{$employee->first_name}} {{$employee->last_name}}</td>
                            @foreach($departments as $department)
                                <td>
                                    @foreach ($employee->departments as $employee_department)
                                        @if ($employee_department->id === $department->id)
                                            +
                                        @endif
                                    @endforeach
                                </td>
                            @endforeach
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </body>
</html>
