<?php
include __DIR__ . '/Views/header.php';
include __DIR__ .'/Models/Movie.php';
include __DIR__ .'/Models/Book.php';
//MOVIES($title, $price, $rating, $cover, $language)
//BOOKS($title, $price, $rating, $cover, $numPages)
$movies= [
    new Movie('Babylon A.D.','19,99','4,5','https://image.tmdb.org/t/p/w342/kt9nqD0uOar8IVE9191HXhWOXKI.jpg','en'),
    new Movie('Zero Fucks Given','12,99','2,9','https://image.tmdb.org/t/p/w342/wLZ5jijVpOxHuBLmsICKLXwlldu.jpg','fr')
];
$books=[
    new Book('Unlocking Android','8,99','3,5','https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/ableson.jpg','416'),
    new Book('Distributed Application Development with PowerBuilder 6.0','10,99','2,5','https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/ableson.jpg','504')
];
?>

<main>
    <h2>Movies</h2>
    <?php foreach ($movies as $movie) { ?>
    <div>
        <?php showMovie();?>
    </div>
    <?php } ?>
</main>

<?php
include __DIR__ .'/Views/footer.php';
?>