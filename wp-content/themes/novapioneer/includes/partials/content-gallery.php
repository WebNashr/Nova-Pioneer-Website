<article>
    <header>
        <h1> <?php echo get_the_title(); ?> </h1>
    </header>
    <?php
        $classroom_pictures = get_field('classroom_pictures');
        $library_pictures   = get_field('library_pictures');
        $play_area_pictures = get_field('play_area_pictures');
        $school_ground_pictures = get_field('school_grounds_pictures');
    ?>
    <style>
        section.gallery .images{
            display: flex;
            justify-content: flex-start;
            align-items: flex-start;
        }

        section.gallery .images img {
            width: 20%;
            height: auto;
            margin-right: 1rem;
        }
    </style>
    <section class="gallery">

        <h2>Classroom Pictures</h2>

        <div class="images">
            <?php foreach($classroom_pictures as $pic): $pic = (object)$pic; ?>

                <img src="<?php echo $pic->url; ?>" alt="<?php echo $pic->caption; ?>" />

            <?php endforeach; ?>     
        </div>


    </section>


    <section class="gallery">
    
        <h2>Library Pictures</h2>

        <div class="images">
            <?php foreach($library_pictures as $pic): $pic = (object)$pic; ?>

                <img src="<?php echo $pic->url; ?>" alt="<?php echo $pic->caption; ?>" />

            <?php endforeach; ?>
        </div>

    </section>

    <section class="gallery">
    
        <h2>Play Area Pictures</h2>

        <div class="images">
                <?php foreach($play_area_pictures as $pic): $pic = (object)$pic; ?>

                    <img src="<?php echo $pic->url; ?>" alt="<?php echo $pic->caption; ?>" />

                <?php endforeach; ?>
        </div>

    </section>


    <section class="gallery">
    
        <h2>School Ground Pictures</h2>

        <div class="images">
            <?php foreach($school_ground_pictures as $pic): $pic = (object)$pic; ?>

                <img src="<?php echo $pic->url; ?>" alt="<?php echo $pic->caption; ?>" />

            <?php endforeach; ?>
        </div>

    </section>
</article>