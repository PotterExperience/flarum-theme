<?php
/*
 * This file is part of potterexp/theme.
 *
 * Copyright (c) PotterExperience / Shahiem sEymor
 *
 * http://potterexp.com / https://www.shahiemseymor.com
 *
 * For the full copyright and license information, please view the license.md
 * file that was distributed with this source code.
 */
namespace PotterExp\Theme\Listeners;

use DirectoryIterator;
use Flarum\Event\ConfigureLocales;
use Flarum\Event\ConfigureWebApp;
use Illuminate\Contracts\Events\Dispatcher;

class AddClientAssets
{

    public function subscribe(Dispatcher $events)
    {
        $events->listen(ConfigureWebApp::class, [$this, 'addAssets']);
    }

    /**
     * @param ConfigureWebApp $app
     */
    public function addAssets(ConfigureWebApp $app)
    {
        if ($app->isForum()) {
            $app->addAssets([
                __DIR__ . '/../../resources/less/forum.less'
            ]);

        }
    }

}
