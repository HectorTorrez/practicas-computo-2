<h1>Editr dato de mascota</h1>

<form action="{{ url('/pet/'.$pet->id) }}" method="POST">
@csrf
{{ method_field('PUT') }}
@include('pets.form')
</form>