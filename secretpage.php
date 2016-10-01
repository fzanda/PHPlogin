<?php

include "header.php";

if (isset($_SESSION['id'])){
echo '<h1>Hello!</h1>';
            
}else{
echo "You are not logged in!";
}
?>

</body>
</html>