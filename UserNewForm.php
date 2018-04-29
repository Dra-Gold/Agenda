<?php require("Header.php");  
require("error.php");
?>

<div class="container mt-3" >
            <form action="LoginService.php" method="POST">
                    <div><h3>Crear Cuenta</h3></div>
                    <input type="hidden" name="action" value="crear">
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail">Correo Electronico</label><i class="fas fa-envelope ml-1"></i>
                        <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Ejemplo@gmail.com" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword">Contraseña</label><i class="fas fa-key ml-1"></i>
                        <input type="password" class="form-control" maxlength="20" minlength="6" name="contraseña" id="inputPassword" placeholder="Contraseña" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputName">Nombre</label>
                      <input type="text" class="form-control" id="inputName" name="nombre" placeholder="Nombre de Usuario" required>
                    </div>
                    <div class="form-group">
                            <div class="form-check form-check-inline">
                                    <input class="form-check-input" value="Hombre" type="radio" name="GeneroOptions" id="Radio1" >
                                    <i class="fas fa-male mr-1"></i> <label class="form-check-label" for="inlineRadio1">Hombre</label>
                            </div>
                            <div class="form-check form-check-inline">
                                    <input class="form-check-input" value="Mujer" type="radio" name="GeneroOptions" id="Radio2" >
                                    <i class="fas fa-female mr-1"></i><label class="form-check-label" for="inlineRadio2">Mujer</label>
                            </div>
                    </div>
                    <button type="submit"  class="btn btn-primary">Crear Cuenta</button>
                  </form>
</div>

<?php require("Footer.php") ?>