<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">   
    <link href="<?= BASE;?>public/css/cover.css" rel="stylesheet">
    <title><?php echo $title??'Td-list'; ?></title>
 
</head>
<body class="text-center">  
  <header class="masthead mb-auto">
    <div class="inner">
      <h3 class="masthead-brand">Cover</h3>
      <nav class="nav nav-masthead justify-content-center">
        <a class="nav-link active" href="<?= BASE;?>">Home</a>
        <?php 
                if (isset($_SESSION['user']['email'])){
                   echo '<a class="nav-link" href="<?= BASE;?>logout">Logout</a></li>';
                   echo '<a class="nav-link" href="<?= BASE;?>profile">'.$_SESSION['user']['uname'].'</a></li>';
                }
                else{
                    echo '<a class="nav-link" href="'.BASE.'user/login">Login</a></li>';
                    echo '<a class="nav-link" href="'.BASE.'user/register">Register</a></li>';
                }
        ?>
        <a class="nav-link" href="<?= BASE;?>index/contact">Contact</a>
      </nav>
    
  </header>