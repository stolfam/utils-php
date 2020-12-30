<?php
    require __DIR__ . "/../bootstrap.php";

    use Tester\Assert;


    $name = new \Stolfam\Env\Person\Name("Miroslav Stolfa");
    $email = new \Stolfam\Env\Person\Email("miroslav.stolfa@ataccama.com");

    Assert::same("ataccama.com", $email->domain);

    Assert::same("Miroslav", $name->first);

    Assert::same("Stolfa", $name->last);

    Assert::same("Miroslav Stolfa", $name->full);