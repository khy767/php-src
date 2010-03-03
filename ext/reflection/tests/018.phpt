--TEST--
Reflection::getModifierNames
--SKIPIF--
<?php extension_loaded('reflection') or die('skip'); ?>
--FILE--
<?php
var_dump(Reflection::getModifierNames(ReflectionMethod::IS_FINAL | ReflectionMethod::IS_PROTECTED));
?>
--EXPECT--	
array(2) {
  [0]=>
  unicode(5) "final"
  [1]=>
  unicode(9) "protected"
}