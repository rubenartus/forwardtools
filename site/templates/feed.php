<?php
$items = page('articles')->children()->listed()->flip();

header('Content-type: application/rss+xml; charset=utf-8');
echo '<?xml version="1.0" encoding="utf-8"?>';
?>
<rss version="2.0">
  <channel>
    <title><?= $site->title() ?></title>
    <link><?= $site->url() ?></link>
    <description><?= $site->description() ?></description>
    <language>en</language>

    <?php foreach ($items as $item): ?>
      <item>
        <title><?= xml($item->title()) ?></title>
        <link><?= xml($item->url()) ?></link>
        <description><?= xml($item->text()->excerpt(300)) ?></description>
        <pubDate><?= $item->date()->toDate(DATE_RSS) ?></pubDate>
        <guid><?= xml($item->url()) ?></guid>
      </item>
    <?php endforeach ?>
  </channel>
</rss>