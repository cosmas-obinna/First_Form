<?php 
    $title ='HomePage';
    include_once 'include/header.php';
    include_once 'db/config.php';

?>

    <h1 class="text-center">This is the test App to link to my DB for the first time </h1><br/>
    <h3>Kindly fill the form below and don't forget to leave us a review</h3><br/>
    <h2 class="text-center"> Registration form </h2>

<form method="post" action="success.php"> <!-- method 'get' is to get, while 'post' is to post -->
    <div class="form-group">
        <label for="firstname">First Name</label>
        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter your First Name">

    </div>
    <!-- the class="form-group" is responsible for placing the input bar on a separate line
    else, the question and the answer bars would have been on the same line
    --> 
    <!-- Take note of the fact that 'name' attribute is not compulsory in the form but;
    with the 'name' attribute, we have the entries displayed alongside the url in the browser.
        this is the CHRISTOS e-Xpert similarity for knowing which table you are in -->
    <!-- Please Note: this is not fully advisable when username and password is applied-->
    <div class="form-group">
        <label for="lastname">Last Name</label>
        <input type="text" class="form-control" id="lastname" name="lastname">

    </div>
    
    <div class="form-group">
        <label for="dob">Date of Birth</label>
        <input type="text" class="form-control" id="dob" name="dob">
    </div>
    <!-- our date may appear differently in different browsers with the format above -->
    <!-- to make it uniform across browsers, we will use one of many options -->
    <!-- go to jQueryui and select  date picker and copy the link as appropriate -->


    <div class="form-group">
        <label for="designation">Designation</label>
        <select class="form-control" id="designation" name="designation">
            <option>Team Lead</option>
            <option>Regional Manager</option>
            <option>Chief Financial Officer</option>
            <option>Chief Technical Officer</option>
            <option>Regional Supervisor</option>
        </select>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailhelp"
        placeholder="Enter your Email Address">
        <small id="emailhelp" class="form-text text-muted">your email is save with us</small>
    </div>
    <div class="form-group">
        <label for="phone">Contact Number</label>
        <input type="text" class="form-control" id="phone" name="phone" aria-describedby="phonehelp">
        <small id="phonehelp" class="form-text text-muted">We won't share your contact with anyone</small>
    </div>
    <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
</form>
<!-- To get the result of the form printed for view after submitted
     Go to the success page for the code used -->
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<?php include_once 'include/footer.php'?>


    