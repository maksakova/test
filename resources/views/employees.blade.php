@include('header')

    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen">
            <div class="container">
                <h1>Сотрудники</h1>
                @if(isset($employees))
                    <table>
                        <tr>
                            <th>Фамилия</th>
                            <th>Имя Отчество</th>
                            <th>Пол</th>
                            <th>Заработная плата</th>
                            <th>Отдел</th>
                            <th>Редактировать</th>
                            <th>Удалить</th>
                        </tr>
                        @foreach($employees as $employee)
                            <tr>
                                <td>{{$employee->last_name}}</td>
                                <td>{{$employee->first_name}} {{$employee->second_name}}</td>
                                <td>{{$employee->sex}}</td>
                                <td>{{$employee->salary}}</td>
                                <td>@foreach($employee->departments as $department){{$loop->first ? '' : ', '}}{{$department->name}} @endforeach</td>
                                <td><button>Редактировать</button></td>
                                <td><button>Удалить</button></td>
                            </tr>
                        @endforeach
                    </table>
                @endif
            </div>
        </div>
    </body>
</html>
