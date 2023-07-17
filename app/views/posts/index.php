<?php require APPROOT . '/views/inc/header.php'; ?>
<h1><?php echo $data['title']; ?></h1>
<?php
foreach ($data['posts'] as $post) :
?>
  <ul>
    <li><?php echo $post->title; ?></li>
  </ul>
<?php endforeach; ?>
<?php require APPROOT . '/views/inc/footer.php'; ?>