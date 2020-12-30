<?php

    require __DIR__ . "/../bootstrap.php";

    use Tester\Assert;


    $pairArray = new \Stolfam\Arrays\PairArray([
        new \Stolfam\Env\Pair(1, "test")
    ]);

    $pairArray->add(new \Stolfam\Env\Pair(2, "foo"));

    Assert::count(2, $pairArray);
    Assert::same(1,$pairArray->get(0)->getKey());
    Assert::same(2,$pairArray->get(1)->getKey());
    Assert::same("test",$pairArray->get(0)->getValue());
    Assert::same("foo",$pairArray->get(1)->getValue());

