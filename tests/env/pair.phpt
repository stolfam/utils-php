<?php
    require __DIR__ . "/../bootstrap.php";

    use Tester\Assert;

    $pair = new \Stolfam\Env\Pair(1,"test");

    Assert::same(1,$pair->getKey());
    Assert::same("test",$pair->getValue());