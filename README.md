add-turkish-addition
====================

This codes adds addition of question (-mi,-mı,-mu-mü) or availability(-de,-da,-te,-ta) to the end of string .

```php
require_once("classes/class_add_turkish_additional.php");

$str_obj = new add_turkish_additional("İzmir",1,"'");

echo $str_obj->text_width_additional ;
```

<h5>This code's output</h5> :
<p>İzmir'de</p>
