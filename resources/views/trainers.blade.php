@extends('layouts.app')

@section('content')
    @include('inc.new-trainer')
    <h2 class="mt-5">Список тренеров в клуба</h2>
    <div class="row mt-3">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">№</th>
                <th scope="col">Имя</th>
                <th scope="col">Фамилия</th>
                <th scope="col">Телефон</th>
                <th scope="col">Специализация</th>
                <th scope="col">Действия</th>
            </tr>
            </thead>
            <tbody>
                @foreach($data as $elem)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $elem->name }}</td>
                        <td>{{ $elem->surname }}</td>
                        <td>{{ $elem->phone }}</td>
                        <td>{{ $elem->special }}</td>
                        <td>
                            <form action="{{ route('delete-trainer', $elem->id) }}" method='POST'>
                                @csrf
                                <button type='submit' class="btn btn-danger btn-sm">Удалить</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('one-trainer', $elem->id) }}">
                                @csrf
                                <button type='submit' class="btn btn-info btn-sm">Редактировать</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection


