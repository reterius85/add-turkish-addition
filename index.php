<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

require_once("classes/class_add_turkish_additional.php");


$str_obj = new add_turkish_additional("İzmir",1," ");

echo $str_obj->text_width_additional ;

 ?>

</body>
</html>