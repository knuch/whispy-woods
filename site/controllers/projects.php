<?php

return function($site, $pages, $page, $routerargs) {
  return [
    'foo' => 'foo',
    'bar' => [ 'some nice text', 'an item', 'another', 'some others' ]
  ];
};
