@include('header')

    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen">
            <div class="container">
                <h1>Отделы</h1>
                @if(isset($departments))
                    <table>
                        <tr>
                            <th>Название</th>
                            <th>Количество сотрудников</th>
                            <th>Максимальная з/п</th>
                            <th>Редактировать</th>
                            <th>Удалить</th>
                        </tr>
                        @foreach($departments as $department)
                            <tr>
                                <td>{{$department->name}}</td>
                                <td>{{$department->count}}</td>
                                <td>{{$department->max}}</td>
                                <td><button>Редактировать</button></td>
                                <td>@if($department->count == 0) <button>Удалить</button> @endif</td>
                            </tr>
                        @endforeach
                    </table>
                @endif
            </div>
        </div>
    </body>
</html>
