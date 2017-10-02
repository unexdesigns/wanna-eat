{$scripts = [
    "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"
]}


{foreach $scripts as $s}
    <script src="{$s}"></script>
{/foreach}