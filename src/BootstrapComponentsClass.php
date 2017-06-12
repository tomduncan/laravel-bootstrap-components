<?php

namespace Appstract\BootstrapComponents;

use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class BootstrapComponentsClass
{
    public function __construct()
    {
        // constructor body
    }

    /*
     * Render pagination buttons
     *
     * @param       $items
     * @param int   $page
     * @param int   $perPage
     * @param       $path
     * @param array $componentOptions
     */
    public function pagination($items, $page = 1, $perPage = 25, $path = '', array $componentOptions = [])
    {
        $items = $items instanceof Collection ? $items : Collection::make($items);

        $paginator = (new LengthAwarePaginator($items, $items->count(), (int) $perPage, (int) $page))
            ->withPath($path);

        return $paginator->render('bootstrap-components::render.pagination', $componentOptions);
    }
}
