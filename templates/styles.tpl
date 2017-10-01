{$styles = [
    "https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese",
    "https://fonts.googleapis.com/icon?family=Material+Icons",
    "/css/style.css"
]}

{foreach $styles as $s}
    <link rel="stylesheet" href="{$s}">
{/foreach}