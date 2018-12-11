<?php 
    $banners = 
    [
        [
            'width' => '250px',
            'image' => 'http://placehold.it/250x100'
        ],
        [
            'width' => '100px',
            'image' => 'http://placehold.it/100x100'
        ],
        [
            'width' => '500px',
            'image' => 'http://placehold.it/500x100'
        ],
        [
            'width' => '50px',
            'image' => 'http://placehold.it/50x100'
        ]
    ];
?>
<!-- <?php //include 'header.php'; ?> -->
<section id=banner>
    <div class="container">
      <div class="banners owl-carousel owl-theme">
        <?php foreach ($banners as $banner):?>
            <div class="item" style="width:<?php echo $banner['width'] ?>"><img src="<?php echo $banner['image'] ?>" alt=""></div>
            <div class="item" style="width:<?php echo $banner['width'] ?>"><img src="<?php echo $banner['image'] ?>" alt=""></div>
        <?php endforeach; ?>
    </div>
</div>   
</section>
<!-- <?php //include 'footer.php'; ?> -->