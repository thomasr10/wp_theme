<?php
/*
Template Name: Contact
*/
get_header();
?>

<section id="contact">
    <h2>Contact Me</h2>
    <form action="donne-moi-tes-infos.php" method="POST">
        <fieldset>
            <legend for="name">Name</legend>
            <input type="text" name="name" id="name" placeholder="Your name" required>
        </fieldset>
        <fieldset>
            <legend for="email">E-mail</legend>
            <input type="email" name="email" id="email" placeholder="Your e-mail" required>
        </fieldset>
        <fieldset>
            <legend for="message">Message</legend>
            <textarea name="message" id="message" placeholder="Message..." required></textarea>
        </fieldset>
        <input class="btn purple-btn white popp-medium" type="submit" value="Send">
    </form>
    <p>Or by e-mail <a href="mailto:t.rivoire01@gmail.com">here</a></p>
</section>


<?php
get_footer();
?>