<?php

/** @var \Kirby\Cms\Block $block */
$alt     = $block->alt();
$caption = $block->caption();
$crop    = $block->crop()->isTrue();
$link    = $block->link();
$ratio   = $block->ratio()->or('auto');
$src     = null;

if ($block->location() == 'web') {
    $src = $block->src()->esc();
} elseif ($image = $block->image()->toFile()) {
    $alt = $alt->or($image->alt());
    $src = $image->url();
}

?>
<?php if ($src): ?>
<figure<?= Html::attr(['data-ratio' => $ratio, 'data-crop' => $crop], null, ' ') ?> class="bg-slate-100 p-2 md:p-5 rounded-md">
  <a href="<?= $link->isNotEmpty() ? Str::esc($link->toUrl()) : $src ?>" target="_blank">
    <img class="w-full" src="<?= $src ?>" alt="<?= $alt->esc() ?>">
  </a>

  <?php if ($caption->isNotEmpty()): ?>
  <figcaption class="mt-5 md:w-2/3 italic">
    <?= $caption ?>
  </figcaption>
  <?php endif ?>
</figure>
<?php endif ?>