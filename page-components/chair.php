<?php
$posttags = get_the_tags();
if ($posttags) {
    foreach($posttags as $tag) {
        $year = $tag->name . ' ';
        break;
    }
}
?>


<!-- Buffer to center chair on their own line at larger screen sizes -->
<div class="col-lg-3"></div>

<div class="col-md-6 person">
    <div class="card card-outline-secondary">
        <div class="card-body">
            <h3 class="card-title"><?php the_title(); ?><span class="text-info"> <?php if ($year){echo $year;} ?></span></h3>
            <h6 class="card-subtitle mb-2 text-info">Chair</h6>
            <span class="card-text">
                <?php the_content(); ?>
            </span>
        </div>
    </div>
</div>

<!-- Buffer to center chair on their own line at larger screen sizes-->
<div class="col-lg-3"></div>
