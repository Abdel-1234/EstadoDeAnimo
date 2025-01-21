@foreach($users as $user)
    <form action='{{url("users/$user->id")}}' method="get">
      @csrf
      <div class="caja">
        <p><strong>Nombre:</strong> {{$user->name}}<br>
          <strong>Correo:</strong> {{$user->email}}<br>
        </p>
        <button class="btn btn-success" type="input">mostrar</button>
        <br>
      </div>
    </form>
@endforeach
