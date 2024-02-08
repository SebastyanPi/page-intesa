<form action="{{ route('form.inscripcion.post') }}" method="POST" class="p-3" style="border: 1px solid #e2dddd; border-radius:15px;">
    <h4 class="text-dark pb-3"> <i class="fas fa-pencil-alt"></i> ¿Quieres mayor información?</h4>
    @csrf
    <div class="form-row">
      <div class="col">
        <label for="exampleInputEmail1" class="text-dark d-none">Nombre *</label>
        <input type="text" name="names" class="form-control" placeholder="Nombres">
      </div>
      <div class="col">
        <label for="exampleInputEmail1" class="text-dark d-none">Apellido *</label>
        <input type="text" name="lastname" class="form-control" placeholder="Apellidos">
      </div>                        
    </div>

    <div class="form-row mt-3">
        <div class="col">
          <label for="exampleInputEmail1" class="text-dark d-none">Email *</label>
          <input type="text" name="email" class="form-control" placeholder="Email">
        </div>
        <div class="col">
          <label for="exampleInputEmail1" class="text-dark d-none">Telefonos *</label>
          <input type="number" name="phone" class="form-control" placeholder="Telefonos">
        </div>                        
    </div>

    <div class="form-row mt-3">
        <div class="col">
          <label for="exampleInputEmail1" class="text-dark d-none">Mensaje *</label>
          <input name="message" placeholder="Mensaje" class="form-control" type="text">
        </div>                     
    </div>

    <div class="form-row mt-3">
        <button type="submit" class="btn btn-secondary btn-block activeload"><i class="fas fa-paper-plane"></i> Enviar</button>                
    </div>

  </form>