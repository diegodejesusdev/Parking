<aside>
    <div class="side-bar">
        <?php if (!isset($_SESSION['identity'])): ?>
            <p class="text-center">Ingresar</p>
            <form action="#" method="post" style="padding: 10px">
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Cédula</label>
                    <input type="number" class="form-control" id="formGroupExampleInput">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="formGroupExampleInput2">
                </div>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <input type="submit" value="Enviar" class="btn btn-primary"><br>
                </div>
                <h6 class="registro-texto">No estas registrado?</h6>
                <a href="registro.php" class="registro-enlace">Registrese</a>
            </form>
        <?php else: ?>
            <p> Aún no implementado</p>
            <p> Aquí van los datos del usuario que inicio sesión</p>
        <?php endif; ?>
    </div>
</aside>