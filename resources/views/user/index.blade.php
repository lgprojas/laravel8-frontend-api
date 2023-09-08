<link rel="stylesheet" href="/css/app.css">

<div class="container">
    <h3>hola desde la vista index de user</h3>
    <table class="table table-striped table-hover table-bordered">
        <thead>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Cumpleaños</th>
            <th>Dirección</th>
            <th>Ciudad</th>
        </thead>
        <tbody>
            @foreach($usuarios as $usuario)
            <tr>
                <td>{{$usuario['id']}}</td>
                <td>{{$usuario['firstname']}}</td>
                <td>{{$usuario['lastname']}}</td>
                @php $birthDate = formatDate($usuario['birthDate']) @endphp
                <td>{{$birthDate}}</td>
                <td>{{$usuario['address']['street']}}</td>
                <td>{{$usuario['address']['city']}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
