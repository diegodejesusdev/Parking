<aside>
    <div class="side-bar">
        <?php if (!isset($_SESSION['identity'])): ?>
            <p class="text-center mt-5 fs-3 fw-bold">Sing In</p>
            <form class="form-sidebar" action="#" method="post" style="padding: 10px">
                    <div class="input-login">
                        <label for="identification" class="form-label">ID</label>
                        <input type="text" class="form-control" id="identification">
                    </div>
                    <div class="input-login">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password">
                    </div>
                    <div id="input-login" class="d-grid gap-2 col-6 mx-auto">
                        <input type="submit" value="Done" class="btn btn-dark"><br>
                    </div>
                    <h6 class="registro-texto ">Are you not register?</h6>
                    <a href="registro.php" class="registro-enlace">¡Sing Up!</a>
            </form>
        <?php else: ?>
            <p> Aún no implementado</p>
            <p> Aquí van los datos del usuario que inicio sesión</p>
        <?php endif; ?>
    </div>
</aside>