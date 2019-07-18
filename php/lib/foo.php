<?php
namespace Etollefson\ObjectOriented;
require_once('../Classes/Foo.php');


$myAuthor = new author('10554ef5-6a07-42ae-adbc-1aa63d56cc15', 'https://www.uuidgenerator.net/', null, 'dude@email.net', '$argon2i$v=19$m=1024,t=2,p=2$QWVYSXM1Tm92ekpBTlpYdg$oqc0fn/lGJ06bENiDk+bm2EWub5jOOuuqPBlqXl+f+A', 'myUsername');

var_dump($myAuthor);
?>
