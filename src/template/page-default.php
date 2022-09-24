<?php include 'header.php' ?>

<div class="page-wrapper content-wrapper page-default">
    <section class="default">
        <div class="container">
            <h2>Lorem Ipsum</h2>
            <h3>Lorem Ipsum</h3>
            <h4>Lorem Ipsum</h4>
            <img src="https://picsum.photos/1200/600?random=1" alt="">
            <?php for ($i = 0; $i < 4; $i++) : ?>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae eaque natus 
                    sint itaque eum eos hic praesentium vitae aperiam ab recusandae, aspernatur fugit 
                    ad amet mollitia nesciunt accusamus illo deserunt cupiditate labore! Doloribus odio 
                    iusto nostrum voluptatem voluptas nisi numquam, fugit odit rem, eaque quaerat adipisci 
                    consequatur.
                </p>
            <?php endfor ?>
            <ul>
                <?php for ($j = 0; $j < 10; $j++) : ?>
                    <li>Lorem ipsum dolor</li>
                <?php endfor ?>
            </ul>
        </div>
    </section>
</div>

<?php include 'footer.php' ?>
