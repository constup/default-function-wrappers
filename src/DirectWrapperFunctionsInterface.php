<?php

declare(strict_types = 1);

namespace Constup\DefaultFunctionWrappers;

/**
 * Class DirectWrapperFunctions
 *
 * @package Constup\DefaultFunctionWrappers
 */
interface DirectWrapperFunctionsInterface
{
    public function file_exists_wrapper(string $fileName): bool;

    public function is_file_wrapper(string $fileName): bool;
}
