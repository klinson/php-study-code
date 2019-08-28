<?php
$a = 'klinson';
echo $a . ' =>' . serialize($a) . ' => ' . unserialize(serialize($a));