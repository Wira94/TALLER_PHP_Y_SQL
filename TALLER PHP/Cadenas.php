<?php
//NOWDOC
header('Content-type: text/plain'); //Permite el salto de linea
$animal = "Panda";
$test = 'test';
$texto = <<<'TEXTO'
$animal \n "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget pharetra lacus, ac eleifend erat. 
Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc tellus nunc, sollicitudin a elementum dapibus, posuere a eros. Mauris dapibus 
sed ligula eu gravida. Donec lacinia arcu aliquam sapien blandit, sed efficitur tellus ultrices. Etiam id nunc in orci faucibus aliquam ut vitae ipsum. 
Etiam iaculis cursus erat eget gravida. $test"
TEXTO;
//PHP 5.3.0 -> se puede almacenar HEREDOC Y NOWDOC
echo $animal;
echo $texto;

?>