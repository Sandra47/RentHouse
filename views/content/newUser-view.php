<?php
$usuario = new UsersController();
$usuario->insertUserController(); 
?> 

                <h2 style="text-align: center;">REGISTRO USUARIO</h2>
                    <form class="cd-form" method="POST"  action="">
                        <p class="fieldset">
                            <label for="signup-username">Nombre completo</label>
                            <input type="text" name="fullname" class="form-control" placeholder="Ingrese su nombre completo">
                        </p>
                        <p class="fieldset">
                            <label for="signup-username">email</label>
                            <input type="text" name="email" class="form-control" placeholder="Ingrese su correo">
                        </p>
                        <p class="fieldset">
                            <label for="signup-username">password</label>
                            <input type="text" name="password" class="form-control" placeholder="Ingrese su contraseña">
                        </p>
                        <p class="fieldset">
                            <label for="signup-username">ciudad</label>
                            <input type="text" name="city" class="form-control" placeholder="Ingrese su ciudad">
                        </p>
                        <p class="fieldset">
                        <label for="signup-username">Rol</label>
                        <select name="roles" type="text" class="form-control" >
                            <option>Usuario</option>

                            <option>Administrador</option>
                            </select>
                        </p>
                        <p class="fieldset">
                            <label for="signup-username"> Acpeta Terminos y condiciones</label>
                            <input type="text" name="dpr" class="form-control" ">
                        </p>
                        <p class="fieldset">
                            <input class="full-width has-padding" type="submit" value="Crear cuenta">
                        </p>
                    </form>

                    <a href="#0" class="cd-close-form">Close</a>
              
