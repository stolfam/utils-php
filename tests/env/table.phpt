<?php
    require __DIR__ . "/../bootstrap.php";

    $row = new \Stolfam\Table\Row([
        new \Stolfam\Table\BoolColumn("foo", true),
        new \Stolfam\Table\BoolColumn("bar", false),
        new \Stolfam\Table\IntegerColumn("foo_id", 269),
        new \Stolfam\Table\NullableStringColumn("name", "foo"),
        new \Stolfam\Table\NullableStringColumn("description", null),
        new \Stolfam\Table\FloatColumn("avg", 3.7)
    ]);

    $array = $row->toArray();

    // testing for correct type
    \Tester\Assert::type("bool", $array['foo']);
    \Tester\Assert::type("bool", $array['bar']);
    \Tester\Assert::type("integer", $array['foo_id']);
    \Tester\Assert::type("string", $array['name']);
    \Tester\Assert::type("null", $array['description']);
    \Tester\Assert::type("float", $array['avg']);

    // testing for values
    \Tester\Assert::same(269, $array['foo_id']);
    \Tester\Assert::same(null, $array['description']);
    \Tester\Assert::same(3.7, $array['avg']);
    \Tester\Assert::same("foo", $array['name']);
    \Tester\Assert::same(true, $array['foo']);
    \Tester\Assert::same(false, $array['bar']);

    // testing for errors
    \Tester\Assert::exception(function () {
        new \Stolfam\Table\BoolColumn("foo", null);
    }, TypeError::class);

    \Tester\Assert::exception(function () {
        new \Stolfam\Table\StringColumn("foo", null);
    }, TypeError::class);

    \Tester\Assert::exception(function () {
        new \Stolfam\Table\FloatColumn("foo", null);
    }, TypeError::class);

    \Tester\Assert::exception(function () {
        new \Stolfam\Table\IntegerColumn("foo", null);
    }, TypeError::class);

    \Tester\Assert::exception(function () {
        $row = new \Stolfam\Table\Row([
            new stdClass()
        ]);
    }, TypeError::class);