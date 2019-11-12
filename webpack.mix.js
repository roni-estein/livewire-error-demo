let mix = require('laravel-mix')
require('laravel-mix-purgecss')
let tailwindcss = require('tailwindcss')
let postcssNesting = require('postcss-nesting')
let postcssPresetEnv = require('postcss-preset-env')
let selectors = require('postcss-custom-selectors')
let colorMod = require('postcss-color-mod-function')

function isInWatch(){
    return process.argv.includes('--watch')
}

function isHot(){
    return process.argv.includes('--hot')
}

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        postcssPresetEnv(),
        postcssNesting(),
        selectors(),
        colorMod(),
        tailwindcss('tailwind-config.js'),
    ])

if (mix.inProduction()) {
    mix.version()
        .purgeCss();
}

if(isInWatch()){
    mix.version()
        .browserSync('test.test')
}