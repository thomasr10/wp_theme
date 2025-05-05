<?php

get_header();
?>

<main>
<?php

// echo (isset($_POST['num-post'])) ? do_shortcode('[temoignage n=' . '"' . $_POST['num-post'] . '"' . ']') : do_shortcode('[temoignage n="3"]');

if(isset($_POST['num-post'])) {
    if(isset($_POST['tags'])) {
        echo do_shortcode('[temoignage n=' . '"' . $_POST['num-post'] . '" tag=' . '"' . $_POST['tags'] . '"]');
    } else {
        echo do_shortcode('[temoignage n=' . '"' . $_POST['num-post'] . '"]');
    }
} else {
    if(isset($_POST['tags'])) {
        echo do_shortcode('[temoignage n="3" tag=' . '"' . $_POST['tags'] . '"]');
    } else {
        echo do_shortcode('[temoignage n="3"]');
    }
}

?>
    <section id="home">
        <section id="about-me">
            <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/img/pp portfolio 1.png" alt="Photo de moi">
            <div class="circle"></div>
            </figure>
            <div id="about-me-txt">
                <p>Thomas Rivoire</p>
                <p>Web & Mobile Web developper</p>
                <p>Back-end & Front-end</p>
            </div>
            <div id="presentation">
                <p>Currently, I am in a one-year training program in Web and Mobile Web Development, where I am gaining skills in web languages such as <strong>HTML</strong>, <strong>CSS</strong>, <strong>JavaScript</strong> , and <strong>PHP</strong>. In parallel, I am learning the basics of <strong>Python</strong> to expand my knowledge. To further enhance my expertise in modern development, I am also learning to work with popular frameworks like <strong>React</strong>, <strong>Symfony</strong>, and <strong>Bootstrap</strong>. These tools enable me to create dynamic user interfaces, manage more complex web applications, and optimize the layout of my projects to be responsive and adaptable to all types of devices. This training allows me to deepen my skills and stay up to date with the latest trends in web development.</p>
            </div>
            <div class="btn-container">
            <a class="btn purple-btn" target="_blank"
                href="<?= get_template_directory_uri(); ?>/RIVOIRE_Thomas - CV.pdf"
                download="RIVOIRE_Thomas - CV">Download Resume</a>
            </div>
            <div id="links">
                <a href="https://github.com/thomasr10" target="_blank"><i class="fa-brands fa-github"></i></a>
                <a href="https://www.linkedin.com/in/thomas-rivoire-843916192/" target="_blank"><i class="fa-brands fa-linkedin"></i></i></a>
            </div>
        </section>
    </section>
</main>

<?php
get_footer();
?>