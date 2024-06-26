--TEST--
bug #71428: Validation type inheritance with = NULL
--FILE--
<?php
class A { }
class B           {  public function m(A $a = NULL, $n) { echo "B.m";} };
class C extends B {  public function m(A $a       , $n) { echo "C.m";} };
?>
--EXPECTF--
Deprecated: Implicitly marking parameter $a as nullable is deprecated, the explicit nullable type must be used instead in %s on line %d

Fatal error: Declaration of C::m(A $a, $n) must be compatible with B::m(?A $a, $n) in %sbug71428.3.php on line 4
