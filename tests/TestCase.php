<?php

namespace Tests;

use LaravelTestingConcerns\HasJsonHelpers;
use LaravelTestingConcerns\HasDatabaseHelpers;
use LaravelTestingConcerns\HasCollectionHelpers;
use LaravelTestingConcerns\HasTestResponseHelpers;
use LaravelTestingConcerns\RunsTraitSetupFunctions;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication, RunsTraitSetupFunctions,
        HasDatabaseHelpers, HasTestResponseHelpers, HasJsonHelpers, HasCollectionHelpers;
}
