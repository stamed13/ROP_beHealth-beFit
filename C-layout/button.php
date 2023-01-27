<?php
$button = false;
$click = 0;

/*if(isset($_POST['submit'])){
    //echo "true";
    $click++;

    if($click == 0){
        $click = 1;
    } else {
        $click = 0;
    }

    /*if($button == false){
        $button = true;
        //hamSetting($fullname);
        echo "true";
        
    }
    if($button == true){
        $button = false;
        echo "false";
    }*//*

    echo $click;

} */

if(isset($_POST['close'])){

} 

function click(){
    if(isset($_POST['submit'])){
        echo "
        <div class='ham-settings'>
        <div class='name'> Stanley Medvec </div>
        <a href='' class='profile'>profil</a>
        <a href='2-tools/E-login/log-out/log-out.php' class='log-out'>log-out</a>
        </div>
        ";
    }
}

//echo $button;

?>

<div class='logins'>
    <form action='' method='post' id='sign-up-formular'>
        <input name='submit' value='SM' type='submit'>
    </form>

    <?php click(); ?>
</div>                