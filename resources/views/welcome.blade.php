@include('layouts.app')
<div class="container">
    <form action="{{route('enviarcorreo')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nombre completo</label>
            <input type="text" name="nombre" class="form-control" id="nombre" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Asunto</label>
            <input type="text" name="asunto" class="form-control" id="asunto" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Correo Electronico</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
        </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Mensaje</label>
            <textarea class="form-control" name="mensaje" id="mensaje" rows="3"></textarea>
          </div>
          <div class="mb-3">
                <button type="submit" class="btn btn-primary">Enviar</button>
          </div>
    </form>
    
</div>