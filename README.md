# yii2-tumblr-authclient

This extension adds Tumblr OAuth1 supporting for [yii2-authclient](https://github.com/yiisoft/yii2-authclient).

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist isudakoff/yii2-tumblr-authclient "*"
```

or add

```json
"isudakoff/yii2-tumblr-authclient": "*"
```

to the `require` section of your composer.json.

## Usage

You must read the yii2-authclient [docs](https://github.com/yiisoft/yii2-authclient/tree/master/docs/guide)

Register your application [in Tumblr](https://www.tumblr.com/oauth/apps)

and add the Tumblr client to your auth clients.

```php
'components' => [
    'authClientCollection' => [
        'class' => 'yii\authclient\Collection',
        'clients' => [
            'tumblr' => [
                'class' => 'isudakoff\authclient\Tumblr',
                'consumerKey' => 'tumblr_app_id',
                'consumerSecret' => 'tumblr_app_secret',
            ],
            // other clients
        ],
    ],
    // ...
 ]
 ```