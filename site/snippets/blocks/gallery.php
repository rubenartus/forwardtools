<?php
/** @var \Kirby\Cms\Block $block */
$caption = $block->caption();
$crop    = $block->crop()->isTrue();
$ratio   = $block->ratio()->or('auto');
?>
<figure<?= Html::attr(['data-ratio' => $ratio, 'data-crop' => $crop], null, ' ') ?> class="bg-slate-100 p-5 rounded-md">
  <div class="grid md:grid-cols-2 gap-4">
  <?php 
  $images = $block->images()->toFiles();
  $numImages = count($images);
  $i = 0;
  
  foreach ($images as $image): 
    $colspan = $numImages % 2 == 1 && $i == $numImages - 1 ? 'md:col-span-2' : '';
  ?>
    <div class="<?= $colspan ?>">
        <a href="<?= $image->url() ?>" target="_blank">
          <?= $image ?>
        </a>
    </div>
  <?php $i++; endforeach; ?>
</div>


  <?php if ($caption->isNotEmpty()): ?>
  <figcaption class="mt-5 md:w-2/3 italic">
    <?= $caption ?>
  </figcaption>
  <?php endif ?>
</figure>