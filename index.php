<?php
require 'asset/function/functions.php';
require 'asset/function/data.php';

if (isset($_POST["submit"])) {
    if (book($_POST) == 0) {
        echo "<script>alert('see you in barber');</script>";
    } else {
        echo "<script>alert('error to process book');</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelly's Barbershop</title>
    <link rel="stylesheet" href="asset/style.css">
</head>

<body id="home">
    <?php require_once('asset/component/navbar.php'); ?>

    <div class="hero">
        <div class="hero-text d-flex f-column align-items-center justify-content-center">
            <h1 class="main-title title capitalize text-center">best choice for men</h1>
            <p class="capitalize paragraph text-white">find the best of you here</p>
            <a href="#footer" class="btn capitalize a-unset text-white inline-block">book now</a>
        </div>
    </div>
    <div class="about" id="about">
        <div class="container d-flex f-column justify-content-center align-items-center">
            <h1 class="capitalize text-black">about us</h1>
            <div class="container about-content d-flex f-res justify-content-center align-items-center">
                <img src="asset/image/hair-spies-lmZ_JVfbmY4-unsplash.webp" class="img-fliud" alt="about us">
                <p class="paragraph text-justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dicta
                    impedit molestiae possimus culpa praesentium, veritatis qui eius similique commodi blanditiis
                    laboriosam aliquam. Recusandae repellendus reprehenderit expedita ullam harum culpa ipsum illum
                    earum blanditiis delectus impedit, aliquam, soluta, nostrum sint similique? Culpa alias cum vel! Ut
                    quis repudiandae reiciendis voluptas ab ducimus aspernatur consectetur. Ex obcaecati illum in quia?
                    Quos iste maxime repellendus nobis, sit dolore expedita atque saepe quas praesentium, voluptatum at
                    quam rem necessitatibus error. At unde nostrum fuga delectus aut illum vel facere soluta quod?
                    Accusantium officiis voluptatibus perferendis ipsa rerum omnis perspiciatis in, illo doloremque
                    molestiae repudiandae vel labore ipsam adipisci, sunt quasi possimus delectus id libero! Fuga
                    adipisci alias rerum nesciunt, consequuntur culpa, voluptate sapiente nobis unde quos iure rem
                    quaerat, quas soluta natus molestias blanditiis ducimus laboriosam praesentium ea autem. Nobis
                    dolores eaque ea accusantium veritatis non optio quis quos adipisci suscipit, culpa, perspiciatis
                    explicabo magnam nisi, ducimus commodi eum voluptatum earum dignissimos? Accusantium delectus ut
                    aliquam, praesentium libero error odit consequatur id possimus sint eaque illo ex! Doloribus
                    consequatur necessitatibus eligendi hic quasi, perferendis cumque natus neque animi esse explicabo
                    expedita, laboriosam voluptates tempore veniam ea sit nihil, unde repellat dignissimos aperiam!
                    Recusandae, quae.</p>
            </div>
        </div>
    </div>
    <div class="barber" id="barber">
        <div class="container d-flex f-column justify-content-center align-items-center">
            <h1 class="capitalize text-white">meet your barber</h1>
            <div class="barber-gallery d-flex f-res justify-content-center align-items-center">
                <?php foreach ($barbers as $barber) : ?>
                <div class="img-container">
                    <img src="asset/image/<?= $barber["image"] ?>" class="img-fluid p-block image-barber" alt="">
                    <div class="overlay">
                        <div class="text text-white text-center">
                            <?= $barber["name"] ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="testimonial" id="testimonial">
        <div class="container d-flex f-column justify-content-center align-items-center">
            <h1 class="text-black capitalize text-center">what they say about us</h1>
            <div class="container testimonial-content d-flex f-column justify-content-center align-items-center">
                <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati est ab
                    temporibus
                    possimus
                    praesentium? Earum ipsa quas qui, maiores totam ad ea explicabo perspiciatis quae natus numquam cum!
                    Aspernatur ut quisquam reiciendis exercitationem ab, hic quasi nesciunt quos quas asperiores
                    corporis illum beatae in harum sapiente placeat nemo aperiam. Et.</p>
                <img src="asset/image/wells-chan-l3hwxnGJXn8-unsplash.webp" class="img-fluid img-testimonial" alt="">
                <h3 class="capitalize costumer">jimmy yang</h3>
                <p>businessman</p>
            </div>
        </div>
    </div>

    <?php //require_once('asset/component/footer.php'); 
    ?>

    <footer id="footer">
        <div class="container d-flex f-column justify-content-center align-items-center">
            <h1 class="capitalize text-white text-center">make an appointment here</h1>
            <div class="container footer-content">
                <form class="d-flex f-column justify-content-center align-items-start" action="" method="post">
                    <label for="name" class="text-white">name : </label><br>
                    <input type="text" name="name" id="name" placeholder="enter your name" autocomplete="off"
                        require><br>
                    <label for="email" class="text-white">phone : </label><br>
                    <input type="number" name="phone" id="phone" placeholder="enter your phone number"
                        autocomplete="off" require><br>
                    <label for="time" class="text-white">date : </label><br>
                    <input type="datetime-local" name="time" id="time" require><br>
                    <button type="submit" value="submit" name="submit"
                        class="btn btn-button capitalize a-unset inline-block text-white m-auto">book
                        now</button>
                </form>
            </div>
            <div class="attribution mt-2 text-white text-center">
                <a href="book.php" class="hidden">see custumer</a>
                <p>Photo by <a
                        href="https://unsplash.com/@reis26af?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText"
                        class="text-white">Reis
                        26</a> on <a
                        href="https://unsplash.com/s/visual/9eb78f60-6549-4db0-9c45-2f38fce6e53c?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText"
                        class="text-white">Unsplash</a>
                </p>
                <p>Photo by <a
                        href="https://unsplash.com/@albertdera?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText"
                        class="text-white">Albert Dera</a> on <a
                        href="https://unsplash.com/s/visual/e0e519d5-fcc8-4d1d-abe0-2f89719d980d?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText"
                        class="text-white">Unsplash</a>
                </p>
                <p>
                    Photo by <a
                        href="https://unsplash.com/@mebradus?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText"
                        class="text-white">M. Brauer</a> on <a
                        href="https://unsplash.com/s/visual/5dc9b256-5ee8-4f3b-a51f-dc0a8715e3a2?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText"
                        class="text-white">Unsplash</a>

                </p>
                <p>Photo by <a
                        href="https://unsplash.com/@hairspies?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText"
                        class="text-white">Hair Spies</a> on <a
                        href="https://unsplash.com/s/visual/3f62f9c8-bcb8-4b95-b4d2-0dffa0d025cb?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText"
                        class="text-white">Unsplash</a>
                </p>
                <p>Photo by <a
                        href="https://unsplash.com/@vshnv_c?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText"
                        class="text-white">Vaishnav Chogale</a> on <a
                        href="https://unsplash.com/s/visual/e3563fc8-14de-4166-9325-a43d0514b6c3?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText"
                        class="text-white">Unsplash</a>
                </p>
                <p>Photo by <a
                        href="https://unsplash.com/es/@vahidkanani?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText"
                        class="text-white">vahid kanani</a> on <a
                        href="https://unsplash.com/s/visual/a79927bd-a122-489b-af41-b9d53ca49835?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText"
                        class="text-white">Unsplash</a>
                </p>
                <p>Photo by <a
                        href="https://unsplash.com/@wellsschan?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText"
                        class="text-white">Wells Chan</a> on <a
                        href="https://unsplash.com/s/visual/19b30120-5d72-4b06-bcf2-f507f3e13172?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText"
                        class="text-white">Unsplash</a>
                </p>
            </div>
        </div>
    </footer>

    <script src="asset/script.js"></script>
</body>

</html>