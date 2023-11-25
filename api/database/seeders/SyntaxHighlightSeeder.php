<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SyntaxHighlightSeeder extends Seeder
{
    public function run(): void
    {
        \App\Models\SyntaxHighlight::insert([
            ['label' => 'CSS'                              , 'value' => 'css'                     ],
            ['label' => 'C-like'                           , 'value' => 'clike'                   ],
            ['label' => 'JavaScript'                       , 'value' => 'javascript'              ],
            ['label' => 'ABAP'                             , 'value' => 'abap'                    ],
            ['label' => 'ABNF'                             , 'value' => 'abnf'                    ],
            ['label' => 'ActionScript'                     , 'value' => 'actionscript'            ],
            ['label' => 'Ada'                              , 'value' => 'ada'                     ],
            ['label' => 'Agda'                             , 'value' => 'agda'                    ],
            ['label' => 'AL'                               , 'value' => 'al'                      ],
            ['label' => 'ANTLR4'                           , 'value' => 'antlr4'                  ],
            ['label' => 'Apache Configuration'             , 'value' => 'apacheconf'              ],
            ['label' => 'Apex'                             , 'value' => 'apex'                    ],
            ['label' => 'APL'                              , 'value' => 'apl'                     ],
            ['label' => 'AppleScript'                      , 'value' => 'applescript'             ],
            ['label' => 'AQL'                              , 'value' => 'aql'                     ],
            ['label' => 'Arduino'                          , 'value' => 'arduino'                 ],
            ['label' => 'ARFF'                             , 'value' => 'arff'                    ],
            ['label' => 'ARM Assembly'                     , 'value' => 'armasm'                  ],
            ['label' => 'Atmel AVR Assembly'               , 'value' => 'asmatmel'                ],
            ['label' => 'AutoHotkey'                       , 'value' => 'autohotkey'              ],
            ['label' => 'AutoIt'                           , 'value' => 'autoit'                  ],
            ['label' => 'AviSynth'                         , 'value' => 'avisynth'                ],
            ['label' => 'Avro IDL'                         , 'value' => 'avro-idl'                ],
            ['label' => 'AWK'                              , 'value' => 'awk'                     ],
            ['label' => 'Bash'                             , 'value' => 'bash'                    ],
            ['label' => 'BASIC'                            , 'value' => 'basic'                   ],
            ['label' => 'Batch'                            , 'value' => 'batch'                   ],
            ['label' => 'BBcode'                           , 'value' => 'bbcode'                  ],
            ['label' => 'BBj'                              , 'value' => 'bbj'                     ],
            ['label' => 'Bicep'                            , 'value' => 'bicep'                   ],
            ['label' => 'Birb'                             , 'value' => 'birb'                    ],
            ['label' => 'Bison'                            , 'value' => 'bison'                   ],
            ['label' => 'BNF'                              , 'value' => 'bnf'                     ],
            ['label' => 'BQN'                              , 'value' => 'bqn'                     ],
            ['label' => 'Brainfuck'                        , 'value' => 'brainfuck'               ],
            ['label' => 'BrightScript'                     , 'value' => 'brightscript'            ],
            ['label' => 'Bro'                              , 'value' => 'bro'                     ],
            ['label' => 'BSL (1C:Enterprise)'              , 'value' => 'bsl'                     ],
            ['label' => 'C'                                , 'value' => 'c'                       ],
            ['label' => 'C#'                               , 'value' => 'csharp'                  ],
            ['label' => 'C++'                              , 'value' => 'cpp'                     ],
            ['label' => 'CFScript'                         , 'value' => 'cfscript'                ],
            ['label' => 'ChaiScript'                       , 'value' => 'chaiscript'              ],
            ['label' => 'CIL'                              , 'value' => 'cil'                     ],
            ['label' => 'Cilk/C'                           , 'value' => 'cilkc'                   ],
            ['label' => 'Cilk/C++'                         , 'value' => 'cilkcpp'                 ],
            ['label' => 'Clojure'                          , 'value' => 'clojure'                 ],
            ['label' => 'CMake'                            , 'value' => 'cmake'                   ],
            ['label' => 'COBOL'                            , 'value' => 'cobol'                   ],
            ['label' => 'CoffeeScript'                     , 'value' => 'coffeescript'            ],
            ['label' => 'Concurnas'                        , 'value' => 'concurnas'               ],
            ['label' => 'Content-Security-Policy'          , 'value' => 'csp'                     ],
            ['label' => 'Cooklang'                         , 'value' => 'cooklang'                ],
            ['label' => 'Coq'                              , 'value' => 'coq'                     ],
            ['label' => 'Crystal'                          , 'value' => 'crystal'                 ],
            ['label' => 'CSS Extras'                       , 'value' => 'css-extras'              ],
            ['label' => 'CSV'                              , 'value' => 'csv'                     ],
            ['label' => 'CUE'                              , 'value' => 'cue'                     ],
            ['label' => 'Cypher'                           , 'value' => 'cypher'                  ],
            ['label' => 'D'                                , 'value' => 'd'                       ],
            ['label' => 'Dart'                             , 'value' => 'dart'                    ],
            ['label' => 'DataWeave'                        , 'value' => 'dataweave'               ],
            ['label' => 'DAX'                              , 'value' => 'dax'                     ],
            ['label' => 'Dhall'                            , 'value' => 'dhall'                   ],
            ['label' => 'Diff'                             , 'value' => 'diff'                    ],
            ['label' => 'Django/Jinja2'                    , 'value' => 'django'                  ],
            ['label' => 'DNS zone file'                    , 'value' => 'dns-zone-file'           ],
            ['label' => 'Docker'                           , 'value' => 'docker'                  ],
            ['label' => 'DOT (Graphviz)'                   , 'value' => 'dot'                     ],
            ['label' => 'EBNF'                             , 'value' => 'ebnf'                    ],
            ['label' => 'EditorConfig'                     , 'value' => 'editorconfig'            ],
            ['label' => 'Eiffel'                           , 'value' => 'eiffel'                  ],
            ['label' => 'EJS'                              , 'value' => 'ejs'                     ],
            ['label' => 'Elixir'                           , 'value' => 'elixir'                  ],
            ['label' => 'Elm'                              , 'value' => 'elm'                     ],
            ['label' => 'Embedded Lua templating'          , 'value' => 'etlua'                   ],
            ['label' => 'ERB'                              , 'value' => 'erb'                     ],
            ['label' => 'Erlang'                           , 'value' => 'erlang'                  ],
            ['label' => 'Excel Formula'                    , 'value' => 'excel-formula'           ],
            ['label' => 'F#'                               , 'value' => 'fsharp'                  ],
            ['label' => 'Factor'                           , 'value' => 'factor'                  ],
            ['label' => 'False'                            , 'value' => 'false'                   ],
            ['label' => 'Firestore security rules'         , 'value' => 'firestore-security-rules'],
            ['label' => 'Flow'                             , 'value' => 'flow'                    ],
            ['label' => 'Fortran'                          , 'value' => 'fortran'                 ],
            ['label' => 'FreeMarker Template Language'     , 'value' => 'ftl'                     ],
            ['label' => 'GameMaker Language'               , 'value' => 'gml'                     ],
            ['label' => 'GAP (CAS)'                        , 'value' => 'gap'                     ],
            ['label' => 'G-code'                           , 'value' => 'gcode'                   ],
            ['label' => 'GDScript'                         , 'value' => 'gdscript'                ],
            ['label' => 'GEDCOM'                           , 'value' => 'gedcom'                  ],
            ['label' => 'gettext'                          , 'value' => 'gettext'                 ],
            ['label' => 'Gherkin'                          , 'value' => 'gherkin'                 ],
            ['label' => 'Git'                              , 'value' => 'git'                     ],
            ['label' => 'GLSL'                             , 'value' => 'glsl'                    ],
            ['label' => 'GN'                               , 'value' => 'gn'                      ],
            ['label' => 'GNU Linker Script'                , 'value' => 'linker-script'           ],
            ['label' => 'Go'                               , 'value' => 'go'                      ],
            ['label' => 'Go module'                        , 'value' => 'go-module'               ],
            ['label' => 'Gradle'                           , 'value' => 'gradle'                  ],
            ['label' => 'GraphQL'                          , 'value' => 'graphql'                 ],
            ['label' => 'Groovy'                           , 'value' => 'groovy'                  ],
            ['label' => 'Haml'                             , 'value' => 'haml'                    ],
            ['label' => 'Handlebars'                       , 'value' => 'handlebars'              ],
            ['label' => 'Haskell'                          , 'value' => 'haskell'                 ],
            ['label' => 'Haxe'                             , 'value' => 'haxe'                    ],
            ['label' => 'HCL'                              , 'value' => 'hcl'                     ],
            ['label' => 'HLSL'                             , 'value' => 'hlsl'                    ],
            ['label' => 'Hoon'                             , 'value' => 'hoon'                    ],
            ['label' => 'HTTP'                             , 'value' => 'http'                    ],
            ['label' => 'HTTP Public-Key-Pins'             , 'value' => 'hpkp'                    ],
            ['label' => 'HTTP Strict-Transport-Security'   , 'value' => 'hsts'                    ],
            ['label' => 'IchigoJam'                        , 'value' => 'ichigojam'               ],
            ['label' => 'Icon'                             , 'value' => 'icon'                    ],
            ['label' => 'ICU Message Format'               , 'value' => 'icu-message-format'      ],
            ['label' => 'Idris'                            , 'value' => 'idris'                   ],
            ['label' => '.ignore'                          , 'value' => 'ignore'                  ],
            ['label' => 'Inform 7'                         , 'value' => 'inform7'                 ],
            ['label' => 'Ini'                              , 'value' => 'ini'                     ],
            ['label' => 'Io'                               , 'value' => 'io'                      ],
            ['label' => 'J'                                , 'value' => 'j'                       ],
            ['label' => 'Java'                             , 'value' => 'java'                    ],
            ['label' => 'JavaDoc'                          , 'value' => 'javadoc'                 ],
            ['label' => 'JavaDoc-like'                     , 'value' => 'javadoclike'             ],
            ['label' => 'Java stack trace'                 , 'value' => 'javastacktrace'          ],
            ['label' => 'Jexl'                             , 'value' => 'jexl'                    ],
            ['label' => 'Jolie'                            , 'value' => 'jolie'                   ],
            ['label' => 'JQ'                               , 'value' => 'jq'                      ],
            ['label' => 'JSDoc'                            , 'value' => 'jsdoc'                   ],
            ['label' => 'JS Extras'                        , 'value' => 'js-extras'               ],
            ['label' => 'JSON'                             , 'value' => 'json'                    ],
            ['label' => 'JSON5'                            , 'value' => 'json5'                   ],
            ['label' => 'JSONP'                            , 'value' => 'jsonp'                   ],
            ['label' => 'JS stack trace'                   , 'value' => 'jsstacktrace'            ],
            ['label' => 'JS Templates'                     , 'value' => 'js-templates'            ],
            ['label' => 'Julia'                            , 'value' => 'julia'                   ],
            ['label' => 'Keepalived Configure'             , 'value' => 'keepalived'              ],
            ['label' => 'Keyman'                           , 'value' => 'keyman'                  ],
            ['label' => 'Kotlin'                           , 'value' => 'kotlin'                  ],
            ['label' => 'KuMir (КуМир)'                    , 'value' => 'kumir'                   ],
            ['label' => 'Kusto'                            , 'value' => 'kusto'                   ],
            ['label' => 'LaTeX'                            , 'value' => 'latex'                   ],
            ['label' => 'Latte'                            , 'value' => 'latte'                   ],
            ['label' => 'Less'                             , 'value' => 'less'                    ],
            ['label' => 'LilyPond'                         , 'value' => 'lilypond'                ],
            ['label' => 'Liquid'                           , 'value' => 'liquid'                  ],
            ['label' => 'Lisp'                             , 'value' => 'lisp'                    ],
            ['label' => 'LiveScript'                       , 'value' => 'livescript'              ],
            ['label' => 'LLVM IR'                          , 'value' => 'llvm'                    ],
            ['label' => 'Log file'                         , 'value' => 'log'                     ],
            ['label' => 'LOLCODE'                          , 'value' => 'lolcode'                 ],
            ['label' => 'Lua'                              , 'value' => 'lua'                     ],
            ['label' => 'Magma (CAS)'                      , 'value' => 'magma'                   ],
            ['label' => 'Makefile'                         , 'value' => 'makefile'                ],
            ['label' => 'Markdown'                         , 'value' => 'markdown'                ],
            ['label' => 'Markup templating'                , 'value' => 'markup-templating'       ],
            ['label' => 'Mata'                             , 'value' => 'mata'                    ],
            ['label' => 'MATLAB'                           , 'value' => 'matlab'                  ],
            ['label' => 'MAXScript'                        , 'value' => 'maxscript'               ],
            ['label' => 'MEL'                              , 'value' => 'mel'                     ],
            ['label' => 'Mermaid'                          , 'value' => 'mermaid'                 ],
            ['label' => 'METAFONT'                         , 'value' => 'metafont'                ],
            ['label' => 'Mizar'                            , 'value' => 'mizar'                   ],
            ['label' => 'MongoDB'                          , 'value' => 'mongodb'                 ],
            ['label' => 'Monkey'                           , 'value' => 'monkey'                  ],
            ['label' => 'MoonScript'                       , 'value' => 'moonscript'              ],
            ['label' => 'N1QL'                             , 'value' => 'n1ql'                    ],
            ['label' => 'N4JS'                             , 'value' => 'n4js'                    ],
            ['label' => 'Nand To Tetris HDL'               , 'value' => 'nand2tetris-hdl'         ],
            ['label' => 'Naninovel Script'                 , 'value' => 'naniscript'              ],
            ['label' => 'NASM'                             , 'value' => 'nasm'                    ],
            ['label' => 'NEON'                             , 'value' => 'neon'                    ],
            ['label' => 'Nevod'                            , 'value' => 'nevod'                   ],
            ['label' => 'nginx'                            , 'value' => 'nginx'                   ],
            ['label' => 'Nim'                              , 'value' => 'nim'                     ],
            ['label' => 'Nix'                              , 'value' => 'nix'                     ],
            ['label' => 'NSIS'                             , 'value' => 'nsis'                    ],
            ['label' => 'Objective-C'                      , 'value' => 'objectivec'              ],
            ['label' => 'OCaml'                            , 'value' => 'ocaml'                   ],
            ['label' => 'Odin'                             , 'value' => 'odin'                    ],
            ['label' => 'OpenCL'                           , 'value' => 'opencl'                  ],
            ['label' => 'OpenQasm'                         , 'value' => 'openqasm'                ],
            ['label' => 'Oz'                               , 'value' => 'oz'                      ],
            ['label' => 'PARI/GP'                          , 'value' => 'parigp'                  ],
            ['label' => 'Parser'                           , 'value' => 'parser'                  ],
            ['label' => 'Pascal'                           , 'value' => 'pascal'                  ],
            ['label' => 'Pascaligo'                        , 'value' => 'pascaligo'               ],
            ['label' => 'PATROL Scripting Language'        , 'value' => 'psl'                     ],
            ['label' => 'PC-Axis'                          , 'value' => 'pcaxis'                  ],
            ['label' => 'PeopleCode'                       , 'value' => 'peoplecode'              ],
            ['label' => 'Perl'                             , 'value' => 'perl'                    ],
            ['label' => 'PHP'                              , 'value' => 'php'                     ],
            ['label' => 'PHPDoc'                           , 'value' => 'phpdoc'                  ],
            ['label' => 'PHP Extras'                       , 'value' => 'php-extras'              ],
            ['label' => 'PlantUML'                         , 'value' => 'plant-uml'               ],
            ['label' => 'PL/SQL'                           , 'value' => 'plsql'                   ],
            ['label' => 'PowerQuery'                       , 'value' => 'powerquery'              ],
            ['label' => 'PowerShell'                       , 'value' => 'powershell'              ],
            ['label' => 'Processing'                       , 'value' => 'processing'              ],
            ['label' => 'Prolog'                           , 'value' => 'prolog'                  ],
            ['label' => 'PromQL'                           , 'value' => 'promql'                  ],
            ['label' => '.properties'                      , 'value' => 'properties'              ],
            ['label' => 'Protocol Buffers'                 , 'value' => 'protobuf'                ],
            ['label' => 'Pug'                              , 'value' => 'pug'                     ],
            ['label' => 'Puppet'                           , 'value' => 'puppet'                  ],
            ['label' => 'Pure'                             , 'value' => 'pure'                    ],
            ['label' => 'PureBasic'                        , 'value' => 'purebasic'               ],
            ['label' => 'PureScript'                       , 'value' => 'purescript'              ],
            ['label' => 'Python'                           , 'value' => 'python'                  ],
            ['label' => 'Q#'                               , 'value' => 'qsharp'                  ],
            ['label' => 'Q (kdb+ database)'                , 'value' => 'q'                       ],
            ['label' => 'QML'                              , 'value' => 'qml'                     ],
            ['label' => 'Qore'                             , 'value' => 'qore'                    ],
            ['label' => 'R'                                , 'value' => 'r'                       ],
            ['label' => 'Racket'                           , 'value' => 'racket'                  ],
            ['label' => 'Razor C#'                         , 'value' => 'cshtml'                  ],
            ['label' => 'React JSX'                        , 'value' => 'jsx'                     ],
            ['label' => 'React TSX'                        , 'value' => 'tsx'                     ],
            ['label' => 'Reason'                           , 'value' => 'reason'                  ],
            ['label' => 'Regex'                            , 'value' => 'regex'                   ],
            ['label' => 'Rego'                             , 'value' => 'rego'                    ],
            ['label' => "Ren'py"                           , 'value' => 'renpy'                   ],
            ['label' => 'ReScript'                         , 'value' => 'rescript'                ],
            ['label' => 'reST (reStructuredText)'          , 'value' => 'rest'                    ],
            ['label' => 'Rip'                              , 'value' => 'rip'                     ],
            ['label' => 'Roboconf'                         , 'value' => 'roboconf'                ],
            ['label' => 'Robot Framework'                  , 'value' => 'robotframework'          ],
            ['label' => 'Ruby'                             , 'value' => 'ruby'                    ],
            ['label' => 'Rust'                             , 'value' => 'rust'                    ],
            ['label' => 'SAS'                              , 'value' => 'sas'                     ],
            ['label' => 'Sass (Sass)'                      , 'value' => 'sass'                    ],
            ['label' => 'Sass (SCSS)'                      , 'value' => 'scss'                    ],
            ['label' => 'Scala'                            , 'value' => 'scala'                   ],
            ['label' => 'Scheme'                           , 'value' => 'scheme'                  ],
            ['label' => 'Shell session'                    , 'value' => 'shell-session'           ],
            ['label' => 'Smali'                            , 'value' => 'smali'                   ],
            ['label' => 'Smalltalk'                        , 'value' => 'smalltalk'               ],
            ['label' => 'Smarty'                           , 'value' => 'smarty'                  ],
            ['label' => 'SML'                              , 'value' => 'sml'                     ],
            ['label' => 'Solidity (Ethereum)'              , 'value' => 'solidity'                ],
            ['label' => 'Solution file'                    , 'value' => 'solution-file'           ],
            ['label' => 'Soy (Closure Template)'           , 'value' => 'soy'                     ],
            ['label' => 'SPARQL'                           , 'value' => 'sparql'                  ],
            ['label' => 'Splunk SPL'                       , 'value' => 'splunk-spl'              ],
            ['label' => 'SQF: Status Quo Function (Arma 3)', 'value' => 'sqf'                     ],
            ['label' => 'SQL'                              , 'value' => 'sql'                     ],
            ['label' => 'Squirrel'                         , 'value' => 'squirrel'                ],
            ['label' => 'Stan'                             , 'value' => 'stan'                    ],
            ['label' => 'Stata Ado'                        , 'value' => 'stata'                   ],
            ['label' => 'Structured Text (IEC 61131-3)'    , 'value' => 'iecst'                   ],
            ['label' => 'Stylus'                           , 'value' => 'stylus'                  ],
            ['label' => 'SuperCollider'                    , 'value' => 'supercollider'           ],
            ['label' => 'Swift'                            , 'value' => 'swift'                   ],
            ['label' => 'Systemd configuration file'       , 'value' => 'systemd'                 ],
            ['label' => 'T4 templating'                    , 'value' => 't4-templating'           ],
            ['label' => 'T4 Text Templates (C#)'           , 'value' => 't4-cs'                   ],
            ['label' => 'T4 Text Templates (VB)'           , 'value' => 't4-vb'                   ],
            ['label' => 'TAP'                              , 'value' => 'tap'                     ],
            ['label' => 'Tcl'                              , 'value' => 'tcl'                     ],
            ['label' => 'Template Toolkit 2'               , 'value' => 'tt2'                     ],
            ['label' => 'Textile'                          , 'value' => 'textile'                 ],
            ['label' => 'TOML'                             , 'value' => 'toml'                    ],
            ['label' => 'Tremor'                           , 'value' => 'tremor'                  ],
            ['label' => 'Turtle'                           , 'value' => 'turtle'                  ],
            ['label' => 'Twig'                             , 'value' => 'twig'                    ],
            ['label' => 'TypeScript'                       , 'value' => 'typescript'              ],
            ['label' => 'TypoScript'                       , 'value' => 'typoscript'              ],
            ['label' => 'UnrealScript'                     , 'value' => 'unrealscript'            ],
            ['label' => 'UO Razor Script'                  , 'value' => 'uorazor'                 ],
            ['label' => 'URI'                              , 'value' => 'uri'                     ],
            ['label' => 'V'                                , 'value' => 'v'                       ],
            ['label' => 'Vala'                             , 'value' => 'vala'                    ],
            ['label' => 'VB.Net'                           , 'value' => 'vbnet'                   ],
            ['label' => 'Velocity'                         , 'value' => 'velocity'                ],
            ['label' => 'Verilog'                          , 'value' => 'verilog'                 ],
            ['label' => 'VHDL'                             , 'value' => 'vhdl'                    ],
            ['label' => 'vim'                              , 'value' => 'vim'                     ],
            ['label' => 'Visual Basic'                     , 'value' => 'visual-basic'            ],
            ['label' => 'WarpScript'                       , 'value' => 'warpscript'              ],
            ['label' => 'WebAssembly'                      , 'value' => 'wasm'                    ],
            ['label' => 'Web IDL'                          , 'value' => 'web-idl'                 ],
            ['label' => 'WGSL'                             , 'value' => 'wgsl'                    ],
            ['label' => 'Wiki markup'                      , 'value' => 'wiki'                    ],
            ['label' => 'Wolfram language'                 , 'value' => 'wolfram'                 ],
            ['label' => 'Wren'                             , 'value' => 'wren'                    ],
            ['label' => 'Xeora'                            , 'value' => 'xeora'                   ],
            ['label' => 'XML doc (.net)'                   , 'value' => 'xml-doc'                 ],
            ['label' => 'Xojo (REALbasic)'                 , 'value' => 'xojo'                    ],
            ['label' => 'XQuery'                           , 'value' => 'xquery'                  ],
            ['label' => 'YAML'                             , 'value' => 'yaml'                    ],
            ['label' => 'YANG'                             , 'value' => 'yang'                    ],
            ['label' => 'Zig'                              , 'value' => 'zig'                     ]
        ]);
    }
}
