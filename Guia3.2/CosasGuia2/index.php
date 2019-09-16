<?php
    include "header.html";
?>
    <form action="../tratamiento.php" name="formulario" method="GET">
        <label for="nombre" class="abajo">Name</label>
        <input type="text" name="nombre" class="abajo">
        <label for="mail" class="abajo">Email</label>
        <input type="email" name="mail" class="abajo">
        <label for="pass" class="abajo">Password</label>
        <input type="password" name="pass" class="abajo">
        <label for="bday" class="abajo">Birthday</label>
        <input type="date" name="bday" class="abajo">
        <label for="" >Sex: </label>
        <label for="sex" >Male</label>
        <input type="radio" name="sex" value = "male">
        <label for="sex" >Female</label>
        <input type="radio" name="sex" value="female">



        <label for="" class="abajo">Your profile</label>
        <label for="about_you" class="abajo">About you</label>
        <textarea name=" about_you"  class="abajo"></textarea>

        <label for="roles" class="abajo">Role</label>
        <select name="roles" class="abajo">
            <option value="Programador">Programador</option>
            <option value="Desarrolador">Desarrolador</option>
        </select>

        <label for="" class="abajo">Interes</label>
        <label >DataBase</label>
        <input type="checkbox" value="DataBase" name = "intereses1">
        <label >Design</label>
        <input type="checkbox" value="Design" name = "intereses2">
        <label >Bussiness</label>
        <input type="checkbox" value="Bussiness" name = "intereses3">
        <label >Unit Test</label>
        <input type="checkbox" value="Unit Test" name = "intereses4">
        <label >Cloud Development</label >
        <input type="checkbox" value="Cloud Development" name = "intereses5">
        <label >Web Development</label>
        <input type="checkbox" value="Web Development" name = "intereses6">
        <br>
        <button type="submit" >Send</button>
        <button type="reset" >Reset</button>
    </form>
<?php
    include "footer.html";
?>