<?php
include 'Twig/Autoloader.php';
Twig_Autoloader::register();

try {
    $loader = new Twig_Loader_Filesystem('templates');
  
    $twig = new Twig_Environment($loader);

    $data = array_slice(scandir('gallery_img/big'), 2);

    $src = [
      'title' => 'Моя галерея',
      'big_img_src' => 'gallery_img/big/',
      'small_img_src' => 'gallery_img/small/',
      'images' => $data
  ];
    $template = $twig->render('mygallery.tmpl', $src);
    echo $template;
    


} catch (Exception $e) {
  die ('ERROR: ' . $e->getMessage());
}



