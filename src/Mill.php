<?php

namespace Dcat\Admin\Extension\Mill;

use Dcat\Admin\Extension;

class Mill extends Extension
{
    const NAME = 'mill';

    protected $serviceProvider = MillServiceProvider::class;

    protected $composer = __DIR__.'/../composer.json';

    protected $assets = __DIR__.'/../resources/assets';

    protected $views = __DIR__.'/../resources/views';

//    protected $lang = __DIR__.'/../resources/lang';

    protected $menu = [
        'title' => 'Mill',
        'path'  => 'mill',
        'icon'  => 'fa-cogs',
    ];
}
