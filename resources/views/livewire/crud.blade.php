<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
</div>

<header class="bg-white shadow">
    <div class="max-w-7x1 mx-auto py-6 px-4 sm:px-6 lh:px-8">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            CRUD
        </h2>
    </div>
</header>

<table class="table table-bordered" >

    <thead class="text-monospace" >
        <tr>
            <th >#</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Color</th>
           
            




        </tr>
    </thead>

    <tbody style="min-height:100px;">
        
    @foreach($pets as $pet)
        <tr>
            
            <td>{{ $pet->id }}</td>
            <td>{{ $pet->name }}</td>
            <td>{{ $pet->age }}</td>
            <td>{{ $pet->color }}</td>
            
            
        

            <td>
            
                <form action="{{url('/pet/'.$pet->id)}}" method="POST">
            <a href="{{url('/pet/'.$pet->id.'/edit')}}"class="btn btn-default btn-sm "  style="border:none; bakcground-color:transparent;"> <i class="glyphicon glyphicon-edit text-primary"></i> </a></a>

                    @csrf
                    {{method_field('DELETE')}}
                    <button class="btn btn-default btn-sm" type="submit" title="borrar" style="border:none; bakcground-color:transparent;"
                    onclick="return confirm ('desea eliminar el registro')"><i class="glyphicon glyphicon-trash text-danger"></i> </button>
                </form>
            </td>
        </tr>

       
        @endforeach
    </tbody>
</table>