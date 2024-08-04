<?php 
    include("vistas/cabecera.php");
?>


    <select class="custom-select custom-select-lg mb-3 text-center center">
      <option selected>Seleccione Especialidad</option>
      <option value="1" class="esp" onclick="get('oftarmologia')">Oftarmología</option> <!--saco esto de infoFinanciera/index.html body button-->
      <option value="2">Cardiología</option>
      <option value="3">Gastroenterología</option>
      <option value="4">Neurología</option>
      <option value="5">Pediatría</option>
      <option value="6">Obstetricia y Ginecología</option>
      <option value="7">Dermatología</option>
      <option value="8">Nutrición</option>
      <option value="9">Traumatología</option>
      <option value="10">Medicina Familiar</option>
      <option value="11">Urología</option>
    </select>


<?php 
    include("vistas/pie.php");
?>