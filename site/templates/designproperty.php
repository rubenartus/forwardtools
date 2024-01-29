<?php snippet('header') ?>

<div class="border-b py-5">
  <div class="
    container mx-auto px-5 md:px-10 text-xl font-medium
    flex gap-3 items-center
  ">
    <a href="<?= page('guide')->url() ?>" class="text-gray-500 hover:text-indigo-600">Designer’s Guide to AI</a> 
    <svg width="16px" height="12px" viewBox="0 0 16 12" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="Artboard" transform="translate(-420, -107)" fill="#9E9E9E" fill-rule="nonzero"><g id="Group-2" transform="translate(209, 83)"><path d="M226.697479,29.3625914 L221.571429,24.2633229 C221.218487,23.9122257 220.647059,23.9122257 220.310924,24.2633229 C219.957983,24.6144201 219.957983,25.1828631 220.310924,25.5172414 L223.92437,29.1118077 L211.890756,29.1118077 C211.403361,29.1118077 211,29.5130617 211,29.9979101 C211,30.4827586 211.403361,30.8840125 211.890756,30.8840125 L223.907563,30.8840125 L220.310924,34.4785789 C219.957983,34.8296761 219.957983,35.3981191 220.310924,35.7324974 C220.478992,35.8996865 220.714286,36 220.94958,36 C221.184874,36 221.403361,35.9164054 221.588235,35.7324974 L226.731092,30.6165099 C226.89916,30.4493208 227,30.215256 227,29.9811912 C226.966387,29.7638454 226.865546,29.5297806 226.697479,29.3625914 Z" id="Path"></path></g></g></g></svg>
    <?= $page->parent()->parent()->title() ?>
  </div>
</div>

<main class="container mx-auto p-5 md:p-10 pt-0 md:pt-10">
  <div class="flex gap-10">
    <div class="w-1/5 shrink-0 flex flex-col gap-3">
      <?php foreach ($page->parent()->parent()->children()->listed() as $group): ?>
        <div>
          <a
            href="<?= $group->url() ?>"
            class="
              <?php if($page->parent() == $group): ?>font-medium<?php else: ?>text-gray-500 hover:text-indigo-600<?php endif; ?>
              flex gap-1 items-center
            "
          >
            <?php if($page->parent() == $group): ?>
              <svg width="15px" height="15px" viewBox="0 0 15 15" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="Artboard" transform="translate(-209, -175)" class="fill-black" fill-rule="nonzero"><g id="Group-14" transform="translate(209, 174)"><g id="Group-4" transform="translate(0, 1)"><path d="M11.1190811,9.94605366 C11.4013437,10.2140605 11.8589817,10.2140605 12.1412443,9.94605366 C12.4235068,9.6780468 12.4235068,9.24352182 12.1412443,8.97551496 L8.01108155,5.05394634 C7.72881901,4.78593946 7.27118099,4.78593946 6.98891845,5.05394634 L2.85875575,8.97551496 C2.57649318,9.24352182 2.57649318,9.6780468 2.85875575,9.94605366 C3.1410183,10.2140605 3.59865631,10.2140605 3.88091885,9.94605366 L7.50197674,6.50787749 L11.1190811,9.94605366 Z" id="Path" transform="translate(7.5, 7.5) rotate(-180) translate(-7.5, -7.5)"></path></g></g></g></g></svg>
            <?php else: ?>
              <svg width="15px" height="15px" viewBox="0 0 15 15" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="Artboard" transform="translate(-209, -193)" class="fill-gray-500" fill-rule="nonzero"><g id="Group-14" transform="translate(209, 174)"><g id="Group-4" transform="translate(0, 19)"><path d="M11.1190811,9.94605366 C11.4013437,10.2140605 11.8589817,10.2140605 12.1412443,9.94605366 C12.4235068,9.6780468 12.4235068,9.24352182 12.1412443,8.97551496 L8.01108155,5.05394634 C7.72881901,4.78593946 7.27118099,4.78593946 6.98891845,5.05394634 L2.85875575,8.97551496 C2.57649318,9.24352182 2.57649318,9.6780468 2.85875575,9.94605366 C3.1410183,10.2140605 3.59865631,10.2140605 3.88091885,9.94605366 L7.50197674,6.50787749 L11.1190811,9.94605366 Z" id="Path" transform="translate(7.5, 7.5) rotate(90) translate(-7.5, -7.5)"></path></g></g></g></g></svg>
            <?php endif; ?>

            <?= $group->title() ?>
          </a>

          <?php if ($group == $page->parent()): ?>
            <div class="ml-7 mt-1">
              <?php foreach ($group->children() as $child): ?>
                <div class="<?php if($child == $page): ?>font-medium<?php else: ?>text-gray-500 hover:text-indigo-600<?php endif; ?>">
                  <a href="<?= $child->url() ?>">
                    <?= $child->title() ?>
                  </a>
                </div>
              <?php endforeach ?>
            </div>
          <?php endif ?>
        </div >
      <?php endforeach ?>
    </div>

    <div class="">
        <h1 class="text-5xl font-medium"><?= $page->title() ?></h1>

        <p class="text-2xl font-medium mt-5">...</p>

        <div class="flex mt-5 gap-5 flex-col blocks">
          <?= $page->blocks()->toBlocks() ?>
        </div>
    </div>
  </div>
</main>

<?php snippet('footer') ?>