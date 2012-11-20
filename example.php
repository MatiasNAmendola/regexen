<?php
include_once 'regexen.php';

echo regex_gen();
echo "\n";

echo regex_gen(  "[0-9]+");
echo "\n";

echo regex_gen(  "[0-9]+", 24);
echo "\n";

echo regex_gen(  "[A-Z0-9]+", 128);
echo "\n";

echo regex_gen(  "[0-9-_.,]+");
echo "\n";

echo regex_gen(  "[0-9]+");
echo "\n";

echo regex_gen(  "[0-9=\/xcv=+\[\]'\"\?]+");
echo "\n";


