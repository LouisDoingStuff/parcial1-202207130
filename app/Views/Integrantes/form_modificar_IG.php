<?php echo $this->extend('plantilla'); ?>

<?= $this->section('contenido'); ?>

            <h3 class="my-3">Modificar Integrante</h3>

            <form action="<?= base_url('modificar_ig') ?>" class="row g-3" method="post" autocomplete="off">

                <div class="col-md-4">
                    <label for="integrante_id" class="form-label">ID INTEGRANTE</label>
                    <input type="number" class="form-control" id="integrante_id" name="integrante_id" required autofocus
                    value="<?php $datos['integrante_id']?>">
                </div>

                <div class="col-md-8">
                    <label for="nombre" class="form-label">NOMBRE</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required
                    value="<?php $datos['nombre']?>">
                </div>

                <div class="col-md-8">
                    <label for="apellido" class="form-label">APELLIDO</label>
                    <input type="text" class="form-control" id="apellido" name="apellido" required
                    value="<?php $datos['apellido']?>">
                </div>

                <div class="col-md-8">
                    <label for="fecha_nacimiento" class="form-label">FECHA NACIMIENTO</label>
                    <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required
                    value="<?php $datos['fecha_nacimiento']?>">
                </div>

                <div class="col-md-8">
                    <label for="fecha_muerte" class="form-label">FECHA FALLECIMIENTO</label>
                    <input type="date" class="form-control" id="fecha_muerte" name="fecha_muerte" required
                    value="<?php $datos['fecha_muerte']?>">
                </div>

                <div class="col-md-8">
                    <label for="web_oficial" class="form-label">SITIO WEB</label>
                    <input type="text" class="form-control" id="web_oficial" name="web_oficial" required
                    value="<?php $datos['web_oficial']?>">
                </div>

                <div class="col-md-8">
                    <label for="pais_nacimiento" class="form-label">PAÍS</label>
                    <input type="text" class="form-control" id="pais_nacimiento" name="pais_nacimiento" required
                    value="<?php $datos['pais_nacimiento']?>">
                </div>

                <div class="col-12">
                    <a href="<?= base_url('integrantes'); ?>" class="btn btn-secondary">Regresar</a>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>

            </form>


<?= $this->endSection('contenido'); ?>