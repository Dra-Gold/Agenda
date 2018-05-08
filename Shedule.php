<?php 
 require("index.php");  
 require("Parcial/error.php");
//si no se a iniciado una session dirige al index 
if(!isset($_SESSION["Estado"])) 
    {
        header("Location:index.php");
    }
?>

<div class="container mt-3">
      <div class="row">
        <div class="col-6 d-flex justify-content-end ">   
         <div class="card bg-light" style="width: 18rem;">
            <div class="card-header">Nuevo Evento</div>
            <div class="card-body">
              <form method="POST" action="Service/SheduleService.php" >
                  <div class="form-group">
                        <div class="form-group">
                          <label for="NombreEvento">Nombre</label>
                          <input type="email" class="form-control" name="Nombre" required id="NombreEvento" placeholder="Nombre del Evento">
                        </div>
                   <div class="form-group">
                        <div class="form-group">
                          <label for="FechaEvento">Fecha</label>
                          <input type="date" class="form-control" name="Fecha" required id="FechaEvento">
                        </div>
                  </div>
                  <div class="form-group ">
                        <div class="form-group ">
                          <label for="HoraInicio">Hora de Inicio</label>
                          <input type="time" class="form-control" name="HoraI" required id="HoraInicio">
                        </div>
                  </div>
                  <div class="form-group ">
                        <div class="form-group ">
                          <label for="HoraTermino">Hora de  Termino</label>
                          <input type="time" class="form-control" name="HoraT" required id="HoraTermino">
                        </div>
                  </div>
                  <div class="form-group ">
                        <div class="form-group ">
                          <label for="FechaEvento">Lugar</label>
                          <input type="text" class="form-control"  name="Lugar" required id="pac-input">
                        </div>
                  </div>
                  <input type="submit" class="btn btn-primary" value="Crear Nuevo Evento">
                </form>   
              </div>
            </div>
         </div>
        </div> 
        <div class="col-6"><div id="map" class="map"></div></div>
      </div>
</div>

<script  src="Js/Maps.js" > </script>
<script src="https://maps.googleapis.com/maps/api/js?key=apikey&libraries=places&callback=initMap"
        async defer></script>
   
<?php require("Parcial/Footer.php") ?>