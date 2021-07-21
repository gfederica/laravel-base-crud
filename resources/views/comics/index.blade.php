@extends('layouts.main')

@section('content')
<div class="container">
    <h2>Elenco fumetti:</h2>
    <table>
        <thead>
            <tr>
                <th>Titolo</th>
                <th>Serie</th>
                <th>Prezzo</th>
                <th colspan="3">Azioni</th>
            </tr>    
        </thead>
        <tbody>  
            @foreach ($comics as $item)
                <tr>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->series }}</td>
                    <td>{{ $item->price }}</td>
                    <td>
                        <a href="{{route('comics.show', $item->id)}}">SHOW</a>
                    </td>
                    <td>
                        <a href="{{route('comics.edit', [$item->id])}}">EDIT</a>
                    </td>
                    <td>DELETE</td>
                </tr> 
            @endforeach
        </tbody>
    </table>

    {{ $comics->links() }}
</div>
@endsection