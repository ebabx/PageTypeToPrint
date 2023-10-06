<?php
namespace Kaoken\MarkdownIt\Presets;


class PresetDefault
{
    /**
     * @return object
     */
    public static function get(): object
    {
        $o = [
            "options"=> [
                "html"=>         false,        // Enable HTML tags in source
                "xhtmlOut"=>     false,        // Use '/' to close single tags (<br />)
                "breaks"=>       false,        // Convert '\n' in paragraphs into <br>
                "langPrefix"=>   'language-',  // CSS language prefix for fenced blocks
                "linkify"=>      false,        // autoconvert URL-like texts to links

                // Enable some language-neutral replacements + quotes beautification
                "typographer"=>  false,

                // Double + single quotes replacement pairs, when typographer enabled,
                // and smartquotes on. Could be either a String or an Array.
                //
                // For example, you can use '«»„“' for Russian, '„“‚‘' for German,
                // and ['«\xA0', '\xA0»', '‹\xA0', '\xA0›'] for French (including nbsp).
                "quotes"=> "“”‘’", /* “”‘’ */

                // Highlighter function. Should return escaped HTML,
                // or '' if the source string is not changed and should be escaped externaly.
                // If result starts with <pre... internal wrapper is skipped.
                //
                // function (/*str, lang*/) { return ''; }
                //
                "highlight"=> null,

                "maxNesting"=>   100            // Internal protection, recursion limit
            ],

            "components"=> [

                "core"=> [],
                "block"=> [],
                "inline"=> []
            ]
        ];
        return json_decode(json_encode($o));
    }
}