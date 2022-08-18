<!DOCTYPE html>
<html lang="en">
<head>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet" href="<?= base_url('/assets/css/style.css'); ?>">
</head>
<body>

<div class="container">
    <div class="box">
        <div class="title">
            <span class="block"></span>
                <h1>Hi <?php if($sapaanGuest == NULL){ echo $namaGuest; }else{ echo $sapaanGuest.". ".$namaGuest; } ?>!<span></span></h1>
        </div>
        <br>
        <br>
        <div class="role">
            <div class="block"></div>
            <p>You're invited on Febro and Mustika Wedding's</p>
        </div>
        
        <br><br><i style="font-family:Verdana, Geneva, Tahoma, sans-serif; font-size:10px; color: white;">This page best viewed in Google Chrome</i><br>
    </div>


<footer>
    <a href="<?= base_url('/'.$nickname.'/main') ?>" style="text-decoration: none;">
        <span><i><i class="fa fa-envelope-open-text"></i> View Invitation</i></span>
    </a>
</footer>


</div> <!-- end of Container -->
</body>
</html>