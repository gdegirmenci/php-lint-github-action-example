<?php

namespace PHPLintGithubActionExample;

/**
 * Interface CodeInterface
 * @package PHPLintGithubActionExample
 */
interface CodeInterface
{
    /**
     * @return string
     */
    public function helloWorld(): string;

    /**
     * @return array
     */
    public function someBoringMethods(): array;
}
