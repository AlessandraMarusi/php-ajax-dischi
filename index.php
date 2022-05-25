<?php 
include __DIR__. '/database.php'

?>



<?php include __DIR__. '/partials/header.php' ?>
    <main>
        <div class="row">
            <?php foreach($dischi as $disco){ ?>
            <div class="col">
                <div class="myCard">
                    <img src="<?php echo $disco['poster']?>" alt="">
                    <h2><?php echo $disco['title']?></h2>
                    <span><?php echo $disco['author']?></span>
                    <span><?php echo $disco['year']?></span>
                </div>
            </div>
            <?php }?>
        </div>
    </main>
</body>
</html>