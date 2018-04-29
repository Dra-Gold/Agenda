<?php require("Header.php"); require("error.php");?>

<main class="container mt-3 jumbotron" role="main">
    <form action="LoginService.php" method="POST" >
        <input type="hidden" name="action" value="verificar">
        <div class="form-group">
            <h2>Bienvenido</h2>  
            <hr>
        </div>
        <div class="form-group">
            <label for="InputEmail1"><strong>Correo Electronico</strong></label>
            <input type="email" class="form-control" name="correo" required id="InputEmail1" aria-describedby="emailHelp" placeholder="Ejemplo@gmail.com">
        </div>
        <div class="form-group">
            <label for="InputPassword"><strong>Contraseña</strong></label>
            <input type="password" class="form-control" maxlength="20" minlength="6" name="contraseña" id="inputPassword" placeholder="Contraseña" required>
            <small id="passwordHelp"  class="form-text text-muted"><b>No compartas tu contraseña con nadie.</b></small>
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="Check">
            <label class="form-check-label" for="Check">Recuerdame</label>
            <hr>
        </div>
        <button type="submit" class="btn btn-primary mt-1">Iniciar Sessión</button>
    </form>
</main>

<?php require("Footer.php") ?>