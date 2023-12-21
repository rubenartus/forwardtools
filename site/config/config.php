<?php

return [
  'debug'  => true,
  'routes' => [
    [
      'pattern' => 'feed',
      'action'  => function () {
        return page('feed');
      }
    ],
    // Other routes...
  ]
];