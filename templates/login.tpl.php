<?php

    include 'header.tpl.php';
    ?>
    <main class="container">

    <div class="d-flex justify-content-center h-100">   
    <div class="card">
    <div class="card-header">Sign in:</div>
    <div class="card-body"></div>
    <form class="form" method="POST" action="<?= BASE;?>user/log">  
        <div class="input-group form-group">
        <label for="email">Email:
            <input type="text" class="form-control" name="email" id="email" placeholder="email" value="<?php 
            if (isset($_COOKIE['active'])&& isset($_COOKIE['email'])){
                echo $_COOKIE['email'];
            }
            ?>"></label>
        </div>
        <div class="input-group form-group">
        <label for="passw">Password:
            <input type="password"  class="form-control" id="passw" name="passw" placeholder="Password">
            </label>
        </div>
        <div class="form-group">
            <button  class="btn btn-primary" type="submit">Login</button>
        </div>
       
        <div class="form-group"><input  class="" type="checkbox" name="remember-me" id="remember-me" <?php if(isset($_COOKIE["remember"])) { ?> checked <?php } ?> />
            <label for="remember-me">Remember me</label>
        </div>

    </form>
    </div> 
    
    </div>
    </main>

    <?php
    include 'footer.tpl.php';
    ?>