# Yii2 Asset sortablejs


## Installation

`composer require sashsvamir/yii2-js.sortablejs`




## Using


in `AppAsset`:
```php
class AppAsset extends AssetBundle
{
	// ...
    public $depends = [
        // ...
        'sashsvamir\sortablejs\SortablejsAsset'
    ];
}

```


in view:
```php
$this->registerAssetBundle(\sashsvamir\sortablejs\SortablejsAsset::className());
```


