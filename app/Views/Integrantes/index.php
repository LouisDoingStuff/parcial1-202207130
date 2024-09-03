<?php echo $this->extend('plantilla'); ?>

<?= $this->section('contenido'); ?>

<h3 class="my-3" id="titulo">INTEGRANTES</h3>

            <a href="<?= base_url('nuevo_ig') ?>" class="btn btn-success">Agregar</a>

            <table class="table table-hover table-bordered my-3" aria-describedby="titulo">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">INTEGRANTE ID</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">APELLIDO</th>
                        <th scope="col">FECHA NACIMIENTO</th>
                        <th scope="col">FECHA FALLECIMIENTO</th>
                        <th scope="col">WEB</th>
                        <th scope="col">PAIS</th>
                        <th scope="col">ACCIONES</th>
                        
                    </tr>
                </thead>
                <?php
                foreach($integrante as $integrante):
                ?>
                <tr>
                    <td><?php echo $integrante->integrante_id; ?></td>
                    <td><?php echo $integrante->nombre; ?></td>
                    <td><?php echo $integrante->apellido; ?></td>
                    <td><?php echo $integrante->fecha_nacimiento; ?></td>
                    <td><?php echo $integrante->fecha_muerte; ?></td>
                    <td><?php echo $integrante->web_oficial; ?></td>
                    <td><?php echo $integrante->pais_nacimiento; ?></td>
                    <td>
                        <a href="<?= base_url('eliminar_ig/' . $integrante->integrante_id); ?>" class="btn btn-danger">Eliminar</a>
                        <a href="<?= base_url('buscar_ig/' . $integrante->integrante_id); ?>" class="btn btn-info">Modificar</a>
                    </td>
                    
                    

                    </td>
                </tr>
                <?php endforeach; ?>
                <tbody>

                </tbody>
            </table>
<?= $this->endSection('contenido'); ?>