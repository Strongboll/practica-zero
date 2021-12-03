 <?php 

            $cbd = mysqli_connect('localhost','root','','phpavanzado1806') or exit('No se pudo conectar a la BD');
            $consulta = mysqli_query($cbd, "SELECT * FROM clases");
            ?>  
      
        
                <div class="container-fluid">
                    <div class="card" style="">
                      <div class="card-body">
                        <h5 class="card-title">Listado de clases</h5>

                            <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col" colspan="3">Clase</th>
                                  <th scope="col">Unidad</th>
                                  <th scope="col">Fecha</th>
                                </tr>
                              </thead>
                                <?php    while ($listado=mysqli_fetch_assoc($consulta))
         {?>
                              <tbody>
                                <tr>
                                  <td colspan="3"><?php echo $listado["id_clase"];?></td>
                                  <td><?php echo $listado["unidad"];?></td>
                                  <td><?php echo $listado["fecha"];?></td>
                                </tr>
                              </tbody>
                                <?php 
        }
mysqli_close($cbd)
         ?>
                            </table>
                    </div>
                </div>
              </div>

      
