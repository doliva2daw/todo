<?php
 include 'src/templates/header.tpl.php';
 ?>
 <main>
   <section class="profile">
    <h1>Username: <?= $data['uname']; ?></h1>
    <h3>Email:<?= $data['email']; ?></h3>
   </section>
   <button>Change</button>

    <a href="?url=dashboard">Back</a>
 </main>
 <?php
    include 'src/templates/footer.tpl.php';
    ?>