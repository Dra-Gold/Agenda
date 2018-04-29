<?php require("Header.php"); require("error.php");?>

<div class="container mt-3">
    <form action="LoginService.php" method="POST" >
        <input type="hidden" name="action" value="verificar">
        <div class="form-group">
            <h2>Bienvenido</h2>  
            <hr>
        </div>
        <div class="form-group">
            <label for="InputEmail1">Correo Electronico</label>
            <input type="email" class="form-control" name="correo" required id="InputEmail1" aria-describedby="emailHelp" placeholder="Ejemplo@gmail.com">
        </div>
        <div class="form-group">
            <label for="InputPassword">Contraseña</label>
            <input type="password" class="form-control" maxlength="20" minlength="6" name="contraseña" id="inputPassword" placeholder="Contraseña" required>
            <small id="passwordHelp"  class="form-text text-muted">No compartas tu contraseña con nadie.</small>
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="Check">
            <label class="form-check-label" for="Check">Recuerdame</label>
        </div>
        <button type="submit" class="btn btn-primary mt-1">Iniciar Sessión</button>
    </form>
</div>

<?php require("Footer.php") ?>