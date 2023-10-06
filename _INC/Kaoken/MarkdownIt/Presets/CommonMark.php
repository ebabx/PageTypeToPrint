<?php
// Commonmark default options
namespace Kaoken\MarkdownIt\Presets;


class CommonMark
{
    /**
     * @return object
     */
    public static function get(): object
    {
        $o = [
            "options" => [
                "html" =>         true,         // Enable HTML tags in source
                "xhtmlOut" =>     true,         // Use '/' to close single tags (<br />)
                "breaks" =>       false,        // Convert '\n' in paragraphs into <br>
                "langPrefix" =>   'language-',  // CSS language prefix for fenced blocks
                "linkify" =>      false,        // autoconvert URL-like texts to links

                // Enable some language-neutral replacements + quotes beautification
                "typographer" =>  false,

                // Double + single quotes replacement pairs, when typographer enabled,
                // and smartquotes on. Could be either a String or an Array.
                //
                // For example, you can use '«»„“' for Russian, '„“‚‘' for German,
                // and ['«\xA0', '\xA0»', '‹\xA0', '\xA0›'] for French (including nbsp).
                "quotes" => "“”‘’", /* “”‘’ */

                // Highlighter function. Should return escaped HTML,
                // or '' if the source string is not changed and should be escaped externaly.
                // If result starts with <pre... internal wrapper is skipped.
                //
                // function (/*str, lang*/) { return ''; }
                //
                "highlight" => null,

                "maxNesting" =>   20            // Internal protection, recursion limit
            ],

            "components" => [

                "core" => [
                    "rules" => [
                        'normalize',
                        'block',
                        'inline',
                        'text_join'
                    ]
                ],

                "block" => [
                    "rules" => [
                        'blockquote',
                        'code',
                        'fence',
                        'heading',
                        'hr',
                        'html_block',
                        'lheading',
                        'list',
                        'reference',
                        'paragraph'
                    ]
                ],

                "inline" => [
                    "rules" => [
                        'autolink',
                        'backticks',
                        'emphasis',
                        'entity',
                        'escape',
                        'html_inline',
                        'image',
                        'link',
                        'newline',
                        'text'
                    ],
                    "rules2" => [
                        'balance_pairs',
                        'emphasis',
                        'fragments_join'
                    ]
                ]
            ]
        ];
        return json_decode(json_encode($o));
    }
}