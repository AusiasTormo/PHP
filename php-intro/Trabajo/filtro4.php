<?php
include 'header.php';
?>
<?php
include_once 'conexion.php';

?>

<div class="container mt-5">
            <div class="row">
                <div class="col-md-6">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
   
    <form method="POST" action="resufiltro4.php">
  <div class="mb-3">
    <label for="exampleInputEmail1"
    class="form-label">IP</label>
    <input type="text" class="form-control" name="ip">
  </div>
 
  <button type="submit" class="btn btn-primary">Buscar</button>
</form>

<?php
include 'footer.php';
?>