<?php 
    $title ='Success';
    include_once 'include/header.php';

?>

    <h1 class="text-center text-success">You have successfully submitted this record</h1><br/>
    <h1 class="text-center">Thank You</h1><br/>
    <!-- to display what is filled in the form after submission using method='get' -->
<!--
<div class="card" style="width: 20rem;">
      <h5>  <?php
       // echo $_GET['firstname'] . ' '. $_GET['lastname']
        ?>
      </h5>
      <?php // echo '<h5> Email:' . $_GET['email'] .'</h5>'; echo '<h6>'. $_GET['dob'].'</h6>';
      // echo $_GET['phone'] ?>
      <h5> Full name:  <?php // echo $_GET['firstname'] . ' '. $_GET['lastname'] ?>
      </h5>
      <p class="card-text"> <h6>Phone: <?php // echo $_GET['phone'] ?></h6>
      <h6>Dat of birth: <?php // echo $_GET['dob'] ?></h6>
      <h6>Email: <?php // echo $_GET['email'] ?></h6>

       
</div> -->
<!-- The reason for the various method above is to tell you that you can achieve same thing in 
           different ways  NB: The above is for the 'GET' Method-->
<!-- By changing the method = 'get' to method = 'post' in the form class, we get the below -->
    <div class="card" style="width: 20rem;">
    <div class="card-body">
    <h5 class="card-title"> 
        FullName:  <?php echo $_POST['firstname'].' '. $_POST['lastname'];?>
    </h5>
    </div>
    </div>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>

<?php include_once 'include/footer.php'?>