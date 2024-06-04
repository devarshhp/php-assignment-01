<?php

/*******w******** 
    
    Name: Devarsh Patel
    Date: May 20th 2024
    Description: Intro to PHP using Unsplash Image

****************/
$config = [

    'gallery_name' => 'Nature Marvels',
 
    'unsplash_categories' => ['Valley', 'Village', 'Highway', 'Cars', 'Forests', 'Bridge', 'Rain', 'Flowers'],
 
    'local_images' => [
        [
            'filename' => 'brightsky.jpg',
            'photographer' => 'Kristap Singers',
            'homepage' => 'https://unsplash.com/@kristapsungurs'
        ],
        [
            'filename' => 'denseforest.jpg',
            'photographer' => 'Tim Swaan',
            'homepage' => 'https://unsplash.com/@timswaanphotography'
        ],
        [
            'filename' => 'hangingbridge.jpg',
            'photographer' => 'Tim Meyer',
            'homepage' => 'https://unsplash.com/@timmeyer'
        ],
        [
            'filename' => 'stunninghighway.jpg',
            'photographer' => 'Thomas Kelley',
            'homepage' => 'https://unsplash.com/@thkelley'
        ]
    ]
 
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <title>Assignment 1</title>
</head>
<body>
    <!-- Remember that alternative syntax is good and html inside php is bad -->
    <h1>
        <?php echo $config['gallery_name']; ?>
    </h1>

    <div id="gallery">
        <?php foreach($config['unsplash_categories'] as $category): ?>
        <div>
            <h2><?php echo $category;?></h2>
            <img src="https://source.unsplash.com/300x200/?<?php echo $category;?>" alt="<?php echo $category ?> image">
        </div>
        <?php endforeach; ?>
    </div>

    <h1>
        <?php echo count($config['local_images']). " Large Images";?>
    </h1>

    <div id="large-images">
        <?php foreach($config['local_images'] as $image):?>
            <?php
                $file_path = "images/" . $image['filename'];
                if (file_exists($file_path)):
            ?>
            <img src="<?php echo $file_path ?>" alt="local image">
            <h3 class="photographer">
                <a href="<?php echo $image['homepage'];?>"><?php echo $image['photographer'];?></a>
            </h3>
            <?php else: ?>
                <p>Image <?php echo $image['filename']; ?> not found.</p>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</body>
</html>