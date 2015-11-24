<?php

$finder = Symfony\CS\Finder\DefaultFinder::create()
    ->exclude('resources/assets')
    ->exclude('resources/views')
    ->exclude('storage')
    ->exclude('node_modules')
    ->in(__DIR__);

$fixers = [
  '-psr0',
  '-phpdoc_no_empty_return',
  '-phpdoc_no_package',
  '-phpdoc_params',
  '-phpdoc_short_description',
  '-unalign_double_arrow',
  '-unalign_equals',
];

return Symfony\CS\Config\Config::create()
    ->fixers($fixers)
    ->finder($finder)
    ->setUsingCache(true);

