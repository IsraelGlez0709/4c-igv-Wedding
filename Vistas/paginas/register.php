<div class="scroll-up">
    <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
<section class="breadcumd__banner">
    <div class="container">
        <div class="breadcumd__wrapper center">
            <h1 class="left__content">
                Register
            </h1>
            <ul class="right__content">
                <li>
                    <a href="index.html">
                        Home
                    </a>
                </li>
                <li>
                    <i class="fa-solid fa-chevron-right"></i>
                </li>
                <li>
                    register
                </li>
            </ul>
        </div>
    </div>
</section>

<div class="container-fluid">
    <div class="container py-5">
        <div class="d-flex justify-content-center text-center">
            <form class="p-5 bg-light" method="post">
                <div class="form-group">
                    <label for="Nombre" class="text-dark">Nombre:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Escriba su nombre" id="nombre" name="registroNombre">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="text-dark">Email address:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                        </div>
                        <input type="email" class="form-control" placeholder="Escriba su email" id="email" name="registroEmail">
                    </div>
                </div>
                <div class="form-group">
                    <label for="pwd" class="text-dark">Contraseña:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                        </div>
                        <input type="password" class="form-control" placeholder="Escriba su password" id="pwd" name="registroPassword">
                    </div>
                </div>
                <?php 
                    $registro = ControladorFormularios::ctrRegistro();

                    if($registro == "ok"){
                        echo '<script>
                                if(window.history.replaceState) {
                                    window.history.replaceState(null, null, window.location.href);
                                }
                            </script>';
                        echo '<div class="alert alert-success">El usuario ha sido registrado</div>';
                    }
                    if($registro == "error"){
                        echo '<script>
                                if(window.history.replaceState) {
                                    window.history.replaceState(null, null, window.location.href);
                                }
                            </script>';
                        echo '<div class="alert alert-danger">Error! No se permiten carácteres especiales</div>';
                    }
                ?>
                <button type="submit" class="btn btn-primary">Regístrarse</button>
                <a href="index.php?pagina=login" class="btn btn-primary">Login</a>
            </form>
        </div>
    </div>
</div>