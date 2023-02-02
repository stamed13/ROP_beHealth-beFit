<?php
    //error_reporting(E_ERROR);// E_ALL, E_WARNING

    //funkcia pre prihlaseneho pouzivatela
    function loginComputer() {
        // prihlaseny pouzivatel
        if ( $_SESSION['login'] == true ) {
            //$_SESSION['name'] = "sm";

            $inicialy = $_SESSION['name'];
            $fullname = $_SESSION['fullname'];

            //echo $_SESSION['name'];

            echo "
                <div class='loginsC'>
                    
                    <div class='bt-logedC'>$inicialy</div>

            ";

            //hamNavC();


            echo "               
                </div>
            ";
        }

    }


    //funkcia pre prihlaseneho pouzivatela
    function loginMobile() {
        // prihlaseny pouzivatel
        if ( $_SESSION['login'] == true ) {
            //$_SESSION['name'] = "sm";

            $inicialy = $_SESSION['name'];
            $fullname = $_SESSION['fullname'];

            //echo $_SESSION['name'];

            echo "
                <div class='loginsM'>
                    
                    <div class='bt-logedM'>$inicialy</div>

            ";

            //hamNavM();


            echo "               
                </div>
            ";
        }

    }
    

    // funkcia na menu pre prihlaseneho
    function hamNavC($currentPage) {
        if ( $_SESSION['login'] == true ) {
            echo "
            <div class='profile-menuC'>
                <nav id='computer-nav'>
                    <a href=''>home</a>
                    <a href='<?php echo $currentPage; ?> .php' class='actual'>profile</a>
                </nav>
                <a href='' class='bt-logout'>log out</a>
            </div>
            ";
        }
    }

    // funkcia na menu pre prihlaseneho
    function hamNavM($currentPage) {
        echo "
        <div class='profile-menuM'>

        </div>
        ";
    }

    function profile($currentPage) {
        if($currentPage == 'profile') {echo 'actual';}
    }

?>