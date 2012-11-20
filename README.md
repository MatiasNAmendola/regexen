regexen
=======

Function To Generate Strings Based On Regex Patterns


##Example:
```php
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
```

##Example Output:

MTc1ZDdm

24314708

002153534854246346011149

MWJM2ZNGFZDJZIZDVY2YMWRMU1M2MMYYWIOWE4YQBINPF10GZKZ76ILK0UK98CPLV7YSZC5YNPATW9W0BHLJ1GEVPKSDEQZ7EXK63OAOSGJOKJSYOPTDG8CIL1N1DU2I

151,4.06

02496699

0442x==?
