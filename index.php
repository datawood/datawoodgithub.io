<?php
    session_start();
    require 'header.php';
?>




<main>

        

    <?php
        if(isset($_SESSION['userId'])) {
            echo '<p class="success err">You Have Successfully Logged In!!</p>';
            echo'<div class="test">
                <a href="./paypal.php">
                    <h3 class="h3">Buy Items</h3>
                </a>
                ';
            echo '<div class="video">
            <center><video src="./img/Pull Me In.mp4" width="25%" controls=""></video></center>
            <center><video src="./img/home.mp4" width="25%" controls=""></video></center>
            <center><video src="./img/follow.mp4" width="25%" controls=""></video></center>
            <center><video src="./img/Crazy.mp4" width="25%" controls=""></video></center>
            <center><video src="./img/ed.mp4" width="25%" controls=""></video></center>

  <center><video src="./protected/gypsy.mp4" width="25%" controls=""></video></center>
  <center><video src="./protected/carryon.mp4" width="25%" controls=""></video></center>
  <center><video src="./protected/Lila Downs, Norah Jones - Dear.mp4" width="25%" controls=""></video></center>
  <center><video src="./protected/Norah Jones - Happy Pills.mp4" width="25%" controls=""></video></center>
 <center><video src="./protected/Norah Jones and Kris Kristophe.mp4" width="25%" controls=""></video></center>
 <center><video src="./protected/Norah Jones Greatest Hits - No.mp4" width="25%" controls=""></video></center>                </div>';
            
            
        }
        else {
            echo '<div class="error-container"><p class="error err">Sorry! You Are Logged Out!!!<p> </div>';
        }
    ?>
</main>





<?php
    require 'footer.php'
?>



<!--<?php
            $sql = "SELECT * FROM article";
            $result = mysqli_query($conn ,$sql);
            $queryResult = mysqli_num_rows($result);

            if ($queryResult > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "  <div class=\"article-box\">
                            <h3>".$row['a_title']."</h3>
                            <h3>".$row['a_text']."</h3>
                            <h3>".$row['a_author']."</h3>
                            <h3>".$row['a_date']."</h3>
                            </div>";
                }
            }
        ?>-->