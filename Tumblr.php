<?php
/**
 * Project: yii2-tumblr-authclient
 * User: isudakoff
 * Date: 24.05.17
 * Time: 16:16
 */

namespace isudakoff\authclient;

use yii\authclient\OAuth1;

class Tumblr extends OAuth1
{
    /**
     * @inheritdoc
     */
    public $authUrl = 'https://www.tumblr.com/oauth/authorize';
    /**
     * @inheritdoc
     */
    public $requestTokenUrl = 'https://www.tumblr.com/oauth/request_token';
    /**
     * @inheritdoc
     */
    public $requestTokenMethod = 'POST';
    /**
     * @inheritdoc
     */
    public $accessTokenUrl = 'https://www.tumblr.com/oauth/access_token';
    /**
     * @inheritdoc
     */
    public $accessTokenMethod = 'POST';
    /**
     * @inheritdoc
     */
    public $apiBaseUrl = 'https://api.tumblr.com/v2';

    /**
     * @inheritdoc
     */
    protected function initUserAttributes()
    {
        return $this->createApiRequest()
            ->setMethod('GET')
            ->setUrl('user/info')
            ->addHeaders(['Content-Type' => "application/x-www-form-urlencoded"])
            ->send();
    }

    /**
     * @inheritdoc
     */
    protected function defaultName()
    {
        return 'tumblr';
    }

    /**
     * @inheritdoc
     */
    protected function defaultTitle()
    {
        return 'Tumblr';
    }
}