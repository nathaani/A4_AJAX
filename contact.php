
<!--HEADER-->
<?php include("header.php");

?>
<!--CONTACT FORM-->
<main>
    <h2>Contact Us</h2>
    <form id="contactForm" action="insert-for-contact.php" method="post">
        <fieldset>
            <legend>Contact Information</legend>

            <label for="fname">First name:</label>
            <input name="fname" required>

            <label for="lname">Last name:</label>
            <input name="lname" required>

            <label for="email">Email:</label>
            <input type="mail" name="email" placeholder="johndoe.@gmail.com" required>

        </fieldset>
        <!--CHECKBOXES-->
        <fieldset>
            <legend>Your Interests</legend>

            <input type="checkbox" name="industry">
            <label for="industry">Industry</label>

            <input type="checkbox" name="technical">
            <label for="technical">Technical</label>

            <input type="checkbox" name="career">
            <label for="career">Career</label>
        </fieldset>

        <!--DROPDOWN-->
        <fieldset>
            <legend>Your Role</legend>

            <select name="role">
                <option value="Writer">Writer</option>
                <option value="Contributor">Contributor</option>
                <option value="Administrator">Administrator</option>
            </select>
        </fieldset>

        <input type="submit" id="submitForm" value="Submit">

    </form>

    <div id="formMessage"></div>

</main>

<?php

