<?php  include "includes/db.php"; ?>
<?php  include "includes/header.php"; ?>

<?php


echo loggedInUserId();
if(userLikedThisPost(4)){
    echo "user liked this post";
}else
{
    echo "did not";
}

?>



<?php
$a = '15';
$b = 450;
echo $a+$b;
?>
