<h5 class="faq-q">
    <a data-toggle="collapse" data-parent="#accordion" href="#faq-a<?php the_ID(); ?>" aria-expanded="true" aria-controls="faq-qid=faq-q<?php the_ID(); ?>">
        <?php the_title(); ?>
    </a>
</h5>
<div id="faq-a<?php the_ID(); ?>" class="collapse" role="tabpanel" aria-labelledby="faq-q<?php the_ID(); ?>">
    <?php the_content(); ?>
</div>