<?php
    include 'header.tpl.php';
    ?>
    <main>
    <section class="container">
        <h3>Todo list <?= $user['uname'];?></h3>
        <div class="row my-auto">
        <table id="mytable" class="table">
            <tr>
            <?php
                if($data){
                $columns=array_keys($data[0]);
                
                foreach ($columns as $field) {
                    echo '<th scope="row">'.$field.'</th>';
                }
                }
                
                ?>
                <th colspan="2"><strong>Actions</strong></th>   
            </tr>
        <?php
            if($data){
                foreach ($data as $row){
                    echo '<tr id="row'.$row["id"].'">';
                    foreach ($row as $column => $value) {
                       echo '<td contenteditable>'.$value.'</td>';
                    }
                    echo '<td><button class="btn btn-primary" id="update'.$row["id"].'" onclick="edit('.$row["id"].')">Update</button></td>';
                    echo '<td><button class="btn btn-danger" id="remove'.$row["id"].'" onclick="remove('.$row["id"].')">Remove</button></td>';
                    echo '</tr>';
                }   
            }
             
        ?>
        </table>
        </div>
        </section>
        <section>
        <a href="/task/new"><button class="btn btn-secondary"><strong>+</strong></button></a>
        </section>
        <section>
            <div id="message"><p></p></div>
        </section>
        
    </main>
    
<?php
    include 'footer.tpl.php';
    ?>
