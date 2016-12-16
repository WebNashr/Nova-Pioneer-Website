<?php 
/**
* Template Name: Fees Structure Page
*/

$data = (object)$_REQUEST;
if(isset($data->fee_structure)):
    novap_download_file($data->fee_structure);
endif;

get_header();?>

<?php if( have_posts() ): ?>

    <?php while( have_posts() ): the_post();

        $kenya_fee_structures = get_field('kenya_fee_structures');
        $sa_fee_structures    = get_field('sa_fee_structures');
    
    ?>
        <article>
            <header>
                <h1><?php echo get_the_title(); ?></h1>
            </header>
            <section>
                <?php echo get_the_content(); ?>
            </section>
            <section>
                <h2>Kenya Fees Structures</h2>

                <?php foreach($kenya_fee_structures as $structure): $structure = (object)$structure; ?>
                    <div>
                        <a href="<?php echo $structure->file; ?>" download>
                            <h3><?php echo $structure->title; ?></h3>
                            <img style="width: 150px; height: auto;" src="<?php echo $structure->cover_photo; ?>" alt="<?php echo $structure->title; ?>" />
                        </a>
                    </div>
                    <br/>
                <?php endforeach; ?>

                <form method="POST" action="" class="fees-structures-form">
                    <select name="fee_structure">
                        <?php foreach($kenya_fee_structures as $structure): $structure = (object)$structure; ?>
                            <option value="" selected>Choose Fee Structure</option>
                            <option value="<?php echo $structure->file; ?>"><?php echo $structure->title; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <input type="submit" value="Download" />
                </form>
            </section>

            <section>
                <h2>South Africa Fees Structures</h2>

                <?php foreach($sa_fee_structures as $structure): $structure = (object)$structure; ?>
                    <div>
                        <a href="<?php echo $structure->file; ?>" download>
                            <h3><?php echo $structure->title; ?></h3>
                            <img style="width: 150px; height: auto;" src="<?php echo $structure->cover_photo; ?>" alt="<?php echo $structure->title; ?>" />
                        </a>
                    </div>
                    <br/>
                <?php endforeach; ?>

                <form method="POST" action="" class="fees-structures-form">
                    <select name="fee_structure">
                        <?php foreach($sa_fee_structures as $structure): $structure = (object)$structure; ?>
                            <option value="" selected>Choose Fee Structure</option>
                            <option value="<?php echo $structure->file; ?>"><?php echo $structure->title; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <input type="submit" value="Download" />
                </form>
            </section>
        </article>
    <?php endwhile; ?>


    <script>
        $(document).ready(function(){

            $('form.fees-structures-form').submit(function(event){

                var file_to_download = $(this).children('select').find(':selected').val();

                if(file_to_download === "")
                {
                    alert("You need to choose a fee structure.");
                    event.preventDefault();
                    return false;
                }

                return true;

            });
        });
    </script>

<?php endif; ?>

<?php get_footer(); ?>
