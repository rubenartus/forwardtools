<?php

$level = $block->level()->or('h2');
$text = $block->text();

$anchor = Str::slug($text);

?>

<<?= $level ?> id="<?= $anchor ?>"><a href="#<?= $anchor ?>"><?= $text ?></a></<?= $level ?>>
