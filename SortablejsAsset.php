<?php
namespace sashsvamir\sortablejs;

use yii\web\AssetBundle;


class SortablejsAsset extends AssetBundle
{
    public $sourcePath = '@bower/sortablejs';
    public $js = [
        'Sortable.min.js',
    ];
}