@include('pets.navegacion')

<h1>Listado de Mascotas</h1>
<a href="{{url('pet/create/')}}">New pet</a>

<table>
    <thead>
        <tr>
            <td>#</td>
            <td>Nombre</td>
            <td>Edad</td>
            <td></td>

        </tr>
    </thead>

    <tbody>
    @foreach($pets as $pet)
        <tr>
            
            <td>{{ $pet->id }}</td>
            <td>{{ $pet->name }}</td>
            <td>{{ $pet->age }}</td>
            <td><a href="{{url('/pet/'.$pet->id.'/edit')}}">Edit</a>
        </td>

            <td>
                <form action="{{url('/pet/'.$pet->id)}}" method="POST">
                    @csrf
                    {{method_field('DELETE')}}
                    <input type="submit" value="delete"
                    onclick="return confirm ('desea eliminar el registro')">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>