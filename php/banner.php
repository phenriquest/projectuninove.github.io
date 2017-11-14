<?php
$imagens = array (
// banners e links devem estar na ordem de adição
// para colocar + banners faça cópias da 1ª linha abaixo
"img/banner_1.jpg",
"img/banner_2.jpg", // o último banner sem ,
"img/banner_3.jpg",
"img/banner_4.jpg"
);
$imagenstotal = count($imagens);
$imagenstotal--;
$randomimagens = rand(0,$imagenstotal);
$URL = array (
// para colocar + links faça cópias da 1ª linha abaixo
"img/banner_1.jpg",
"img/banner_2.jpg", // o último banner sem ,
"img/banner_3.jpg",
"img/banner_4.jpg" // o último link sem ,
);
echo "<a href='$URL[$randomimagens]' target='_blank'><img border='0' width='940' height='270' src='$imagens[$randomimagens]'></a>"; // mude o tamanho da imagem em width e height de acordo com sua imagem
?>