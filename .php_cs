<?php

use Symfony\CS\Config\Config;
use Symfony\CS\FixerInterface;
use Symfony\CS\Finder\DefaultFinder;

$fixers = [
    'blankline_after_open_tag',
    'braces',
    'concat_without_spaces',
    'encoding',
    'eof_ending',
    'extra_empty_lines',
    'function_call_space',
    'function_declaration',
    'include',
    'indentation',
    'join_function',
    'line_after_namespace',
    'linefeed',
    'list_commas',
    'logical_not_operators_with_successor_space',
    'lowercase_constants',
    'lowercase_keywords',
    'multiline_array_trailing_comma',
    'multiline_spaces_before_semicolon',
    'multiple_use',
    'namespace_no_leading_whitespace',
    'no_blank_lines_after_class_opening',
    'no_empty_lines_after_phpdocs',
    'object_operator',
    'operators_spaces',
    'parenthesis',
    'phpdoc_indent',
    'phpdoc_inline_tag',
    'phpdoc_no_access',
    'phpdoc_scalar',
    'phpdoc_short_description',
    'phpdoc_to_comment',
    'phpdoc_trim',
    'phpdoc_type_to_var',
    'phpdoc_var_without_name',
    'short_array_syntax',
    'short_echo_tag',
    'short_tag',
    'short_bool_cast',
    'single_array_no_trailing_comma',
    'single_blank_line_before_namespace',
    'single_line_after_imports',
    'spaces_before_semicolon',
    'spaces_cast',
    'standardize_not_equal',
    'ternary_spaces',
    'trailing_spaces',
    'trim_array_spaces',
    'unalign_double_arrow',
    'unalign_equals',
    'unary_operators_spaces',
    'unused_use',
    'visibility',
    'whitespacy_lines',
];

return Config::create()
    ->finder(DefaultFinder::create()->in(__DIR__))
    ->fixers($fixers)
    ->level(FixerInterface::NONE_LEVEL)
    ->setUsingCache(true);
