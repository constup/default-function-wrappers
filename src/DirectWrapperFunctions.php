<?php

declare(strict_types = 1);

namespace Constup\DefaultFunctionWrappers;

/**
 * Class DirectWrapperFunctions
 *
 * @package Constup\DefaultFunctionWrappers
 */
class DirectWrapperFunctions implements DirectWrapperFunctionsInterface
{
    public function file_exists_wrapper(string $fileName): bool
    {
        return file_exists($fileName);
    }

    public function is_file_wrapper(string $fileName): bool
    {
        return is_file($fileName);
    }
}
