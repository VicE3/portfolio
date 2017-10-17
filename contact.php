<?php 
include("inc/header.php");
$pageTitle = "Contact";
include("inc/nav.php");
?>
<body id="contact">
<section class="contactContainer">
    <h1 class="contacth1">Contact</h1>
    <form onSubmit="return validate()" name="formval" method="get" class="contactContent">
      <p class="contactIntro">Please fill out this form in order to be contacted</p>
        <label>
            First name: <input type="text" name="fname">
        </label>
        <label>
            Last name: <input type="text" name="lname">
        </label>
        <label>
            Email:<input class="space" type="text" name="email">
        </label>
        <label>
            Phone Number: <input  class="space" type="tel" name="phone">
        </label>
        <label>
            Company Name: <input class="space" type="text">
         </label>
        <p class="contactTextIntro">Please enter any comments or questions.</p>
         <label>
             Comments/Questions: <textarea></textarea>
        </label>
        <label>
            <input type="submit" value="submit">
        </label>
    </form>
</section>


<?php 
include("inc/footer.php");
?>