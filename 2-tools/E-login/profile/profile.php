<?php
    //aktualna stranka
    $currentPage = 'profile';

    //pripojenie header casti
    include('layout/header.php');

    $_SESSION["location"] = "../../../index.php";

    //session_destroy();
?>

    <div id="profile">

    </div>
    
<?php
    //pripojenie footer casti
    include('../../../C-layout/footer.php');
?>

</body>

</html>