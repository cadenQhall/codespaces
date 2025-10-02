<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Codespaces</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Host+Grotesk:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/assets/style.css" media="all" />
        <script src="/assets/script.js"></script>
    </head>
    <body class="about">
        <div id="main" class="about">
            <a href="/"><img src="/assets/codespaces.png" /></a>
            <div class="about__container">
                <div class="about__left">
                    <img src="/assets/default.jpg" />
                </div>
                <div class="about__right">
                    <h1>About Me</h1>
                    <h3 class="about-name">Caden Hall</h3>
                    <p>Welcome to my about page! Here you can find more information about my background, skills, and interests.</p>
                    <p>My name is Caden. I am 14 years old. I like arts and crafts including epoxy resin, drawing, and pottery. I like listening to Audiobooks. My favorite books are Harry Potter, The Mysterious Benedict Society, and The Hunger Games. I have a fish named Aureus and our family has a dog named Chase. My favorite food is potatoes and my favorite dessert is chocolate trifle.</p>
                    <div class="about__socials"><?php

                        // Set socials.
                        $socials = [
                        ];

                        // Loop.
                        foreach( $socials as $social_id => $social_url ) {

                            // Output. ?>
                            <a href="<?php echo $social_url; ?>" class="about-social" target="_blank">
                                <img src="/assets/<?php echo $social_id; ?>.svg" />
                            </a><?php

                        } ?>

                    </div>
                </div>
            </div>
        </div>
    </body>
</html>