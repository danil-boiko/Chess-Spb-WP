<?php
/* Template Name: Страница Расписания */
get_header();
?>
<div class="container shedule-title">
    <h1 class="page-title"><?php single_post_title() ?></h1>
    <p>Расписание очных занятий с 15 августа 2021</p>
</div>
<?php the_content()?>
	
<?php
get_footer();
