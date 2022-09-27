<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "../layouts/head.php"; ?>
</head>
<body>
    <!-- nanbar -->
    <?php include "../layouts/nadvar.php"; ?>
<!-- conteiner -->
<div class="container-fluid">
    <!-- sidebar -->
    <?php include "../layouts/sidebar.php"; ?>
        <!-- contenido -->
        <div class="col-lg-10 col-sm-12">
            <div class="border-bottom">
                <div class="row m-2">
                    <div class="col">
                        <p>Productos</p>
                    </div>
                    <div class="col">
                        <button class="btn btn-info float-end" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createProductModel" >
                            Añadir Productos
                        </button>
                    </div>

                </div>
            </div>
            <div class="row">
                <?php for($i=0; $i<12; $i++){?>
                <div class="col-md-4 col-sm-10 p-2 ">
                <div class="card " style="width: 18rem;">
                <img src="../public/img/logo.png" class="card-img-top img-fluid-1" alt="...">
                <div class="card-body">
                <h5 class="card-title">Titulo</h5>
                 <h6 class="card-subtitle mb-2 text-muted">Categoria</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <div class="row">
                        <a href="#" class="btn btn-warning col-6" type="button" onclick="remove(this)">Eliminar</a>
                        <a href="#" class="btn btn-danger col-6" type="button" data-bs-toggle="modal" data-bs-target="#createProductModel">Editar</a>
                        <a href="../details.php" class="btn btn-info col-12" type="button">Detalles</a>
                    </div>
                </div>
                </div>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
</div>
    
</div>
<!--Modal-->
<div class="modal fade" id="createProductModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...<?php for($i=0; $i<6; $i++){?>
            <div class="input-group mb-3">
                    <label class="text-center">
                        Correo electronico
                    </label>
                    <span class="input-group-text" id="basic-addon1">@</span>
                    <input type="text" class="form-control" placeholder="Correo@examp.com" aria-label="Username" aria-describedby="basic-addon1">
                </div>
            <?php }?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<?php include "../layouts/scripts.php"; ?>
                  <script type="text/javascript">
                    function remove(target){
                      Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  }
})
                    }
                  </script>
  </body>

</html>