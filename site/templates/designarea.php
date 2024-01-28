<?php snippet('header') ?>

<div class="border-b py-5">
  <div class="
    container mx-auto px-5 md:px-10 text-xl font-medium
    flex gap-3 items-center
  ">
    <a href="<?= page('guide')->url() ?>" class="text-gray-500 hover:text-indigo-600">Designer’s Guide to AI</a> 
    <svg width="16px" height="12px" viewBox="0 0 16 12" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="Artboard" transform="translate(-420, -107)" fill="#9E9E9E" fill-rule="nonzero"><g id="Group-2" transform="translate(209, 83)"><path d="M226.697479,29.3625914 L221.571429,24.2633229 C221.218487,23.9122257 220.647059,23.9122257 220.310924,24.2633229 C219.957983,24.6144201 219.957983,25.1828631 220.310924,25.5172414 L223.92437,29.1118077 L211.890756,29.1118077 C211.403361,29.1118077 211,29.5130617 211,29.9979101 C211,30.4827586 211.403361,30.8840125 211.890756,30.8840125 L223.907563,30.8840125 L220.310924,34.4785789 C219.957983,34.8296761 219.957983,35.3981191 220.310924,35.7324974 C220.478992,35.8996865 220.714286,36 220.94958,36 C221.184874,36 221.403361,35.9164054 221.588235,35.7324974 L226.731092,30.6165099 C226.89916,30.4493208 227,30.215256 227,29.9811912 C226.966387,29.7638454 226.865546,29.5297806 226.697479,29.3625914 Z" id="Path"></path></g></g></g></svg>
    <?= $page->title() ?>
  </div>
</div>

<main class="container mx-auto p-5 md:p-10 pt-0 md:pt-10">
  <div class="w-2/3">
    <?= $page->intro() ?>
  </div>
</main>

<div class="grid grid-cols-4 gap-5 justify-between mx-10 mb-20">
  <?php foreach ($page->children()->listed() as $group): ?>
    <a
      href="<?= $group->url() ?>"
      class="
      rounded-xl p-4 border-2 border-gray-100 transition-all
      hover:border-indigo-600 hover:text-indigo-600
      overflow-clip
      h-24
      group
      "
    >
      <h1 class="text-xl font-medium"><?= $group->title() ?></h1>

      <div class="
        w-96 transform rotate-[-5deg] -translate-x-10 
        text-gray-300 text-sm text-center group-hover:text-indigo-300
        "
      >
        <?php foreach ($group->children() as $child): ?>
          <?= $child->title() ?><?php if($child->next()) : ?> • <?php endif ?>
        <?php endforeach ?>
      </div>
    </a>

  <?php endforeach ?>
</div>

<?php snippet('footer') ?>