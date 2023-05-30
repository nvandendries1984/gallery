<?php namespace Nielsvandendries\Gallery\Components;

use Cms\Classes\ComponentBase;

/**
 * Gallery Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class Gallery extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Gallery',
            'description' => 'Show Gallery'
        ];
    }

    /**
     * @link https://docs.octobercms.com/3.x/element/inspector-types.html
     */
    public function defineProperties()
    {
        return [];
    }
}