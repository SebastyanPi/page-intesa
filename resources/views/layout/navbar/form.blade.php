<form action="{{ route('form.inscripcion.post') }}" id="formContact" method="POST" class="p-3" style="border: 1px solid #e2dddd; border-radius:15px;">
    <h4 class="text-dark pb-3"> <i class="fas fa-pencil-alt"></i> ¿Quieres mayor información?</h4>
    @csrf
    <div class="form-row">
      <div class="col-md-12">
        <label for="exampleInputEmail1" class="text-dark d-none">Nombre *</label>
        <input type="text" name="names" id="name" class="form-control" placeholder="Nombres">
      </div>
      <div class="col-md-12">
        <label for="exampleInputEmail1" class="text-dark d-none">Apellido *</label>
        <input type="text" name="lastname" id="lastname"  class="form-control" placeholder="Apellidos">
      </div>                        
    </div>

    <div class="form-row mt-3">
        <div class="col-md-12">
          <label for="exampleInputEmail1" class="text-dark d-none">Email *</label>
          <input type="text" name="email" id="email" class="form-control" placeholder="Email">
        </div>
        <div class="col-md-12">
          <label for="exampleInputEmail1" class="text-dark d-none">Telefonos *</label>
          <input type="number" name="phone" id="phone" class="form-control" placeholder="Telefonos">
        </div>                        
    </div>

    <div class="form-row mt-3">
        <div class="col-md-12">
          <label for="exampleInputEmail1" class="text-dark d-none">Mensaje *</label>
          <input name="message" placeholder="Mensaje" id="message" class="form-control" type="text">
        </div>                     
    </div>

    <div class="form-row mt-3">
        <button type="submit" class="btn btn-secondary btn-block activeload"><i class="fas fa-paper-plane"></i> Enviar</button>                
    </div>

    <div class="alert alert-danger mt-3 d-none" id="alert_role">
      <i class="fas fa-exclamation-triangle"></i> Por favor completa todos los campos!
    </div>

  </form>


  <script>
    $("#formContact").submit(function(e) {
        let name = $("#name").val();
        let lastname = $("#lastname").val();
        let email = $("#email").val();
        let phone = $("#phone").val();
        let message = $("#message").val();

        if(name =="" || lastname =="" || email =="" || phone =="" || message ==""){
            e.preventDefault();
            $("#loadc").addClass('d-none');
            $("#alert_role").removeClass('d-none');
            setTimeout(() => {
              $("#alert_role").addClass('d-none');
            }, 1000);
        }else{
            $("#loadc").removeClass('d-none');
        }
    });
  </script>