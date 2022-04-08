@include('pets.navegacion')
<h2>Nueva mascosta</h2>

<form action="{{url('pet')}}" method="POST">
    @csrf
    @include('pets.form')
</form>

