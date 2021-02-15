<?php

    include 'src/templates/header.tpl.php';
    
    ?>

    <main>
    
    
    <form class="form" method="POST" action="?url=regaction">
    <legend>
        <p>Sign up please...</p>
        <div class="form-row">
        <input type="text" name="uname" placeholder="uname">
        </div>
        <div class="form-row">
        <input type="text" name="email" placeholder="email">
        </div>
        <div class="form-row">
        <input type="password" name="passw" placeholder="Password">
        </div>
        <div class="form-row">
        <input type="password" name="passw2" placeholder="Repeat password">
        </div>
        <div class="form-row">
        <button class="but-login" type="submit">Register</button>
        </div>
        
        </legend>
    </form>
    </main>

    <?php
    include 'src/templates/footer.tpl.php';
    ?>