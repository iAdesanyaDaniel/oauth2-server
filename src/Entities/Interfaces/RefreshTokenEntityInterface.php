<?php
namespace League\OAuth2\Server\Entities\Interfaces;

interface RefreshTokenEntityInterface
{
    /**
     * Get the token's identifier
     * @return string
     */
    public function getIdentifier();

    /**
     * Set the token's identifier
     * @param $identifier
     */
    public function setIdentifier($identifier);

    /**
     * Get the token's expiry date time
     * @return \DateTime
     */
    public function getExpiryDateTime();

    /**
     * Set the date time when the token expires
     * @param \DateTime $dateTime
     */
    public function setExpiryDateTime(\DateTime $dateTime);

    /**
     * Set the access token that the refresh token was associated with
     *
     * @param \League\OAuth2\Server\Entities\Interfaces\AccessTokenEntityInterface $accessToken
     */
    public function setAccessToken(AccessTokenEntityInterface $accessToken);

    /**
     * Get the access token that the refresh token was originally associated with
     * @return \League\OAuth2\Server\Entities\Interfaces\AccessTokenEntityInterface
     */
    public function getAccessToken();
}