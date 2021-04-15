<?php
$usuario = new UsersController();
$usuario->insertUserController(); 
?> 

 <div id="cd-signup">
                    <form class="cd-form" method="POST"  action="">
                        <p class="fieldset">
                            <label class="image-replace cd-username" for="signup-username">Nombre completo</label>
                            <input type="text" name="fullname" class="form-control" placeholder="Ingrese su nombre completo">
                        </p>
                        <p class="fieldset">
                            <label class="image-replace cd-username" for="signup-username">email</label>
                            <input type="text" name="email" class="form-control" placeholder="Ingrese su nombre completo">
                        </p>
                        <p class="fieldset">
                            <label class="image-replace cd-username" for="signup-username">password</label>
                            <input type="text" name="password" class="form-control" placeholder="Ingrese su nombre completo">
                        </p>
                        <p class="fieldset">
                            <label class="image-replace cd-username" for="signup-username">ciudad</label>
                            <input type="text" name="city" class="form-control" placeholder="Ingrese su nombre completo">
                        </p>
                        <p class="fieldset">
                        <select name="role" type="text" class="form-control" >
                            <option>Usuario</option>

                            <option>Administrador</option>

                            </select>
                        </p>
                        <p class="fieldset">
                            <input class="full-width has-padding" type="submit" value="Create account">
                        </p>
                    </form>

                    <a href="#0" class="cd-close-form">Close</a>
                </div> <!-- cd-signup -->
