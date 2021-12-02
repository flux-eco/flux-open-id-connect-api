<?php

namespace FluxOpenIdConnectApi\Adapter\Api;

use FluxOpenIdConnectApi\Adapter\Config\ProviderConfigDto;

class OpenIdConfigDto
{

    private readonly ?string $authorization_endpoint;
    private readonly ProviderConfigDto $provider_config;
    private readonly ?string $token_endpoint;
    private readonly ?string $user_info_endpoint;


    public static function new(ProviderConfigDto $provider_config, ?string $authorization_endpoint = null, ?string $token_endpoint = null, ?string $user_info_endpoint = null) : static
    {
        $dto = new static();

        $dto->provider_config = $provider_config;
        $dto->authorization_endpoint = $authorization_endpoint;
        $dto->token_endpoint = $token_endpoint;
        $dto->user_info_endpoint = $user_info_endpoint;

        return $dto;
    }


    public function getAuthorizationEndpoint() : ?string
    {
        return $this->authorization_endpoint;
    }


    public function getProviderConfig() : ProviderConfigDto
    {
        return $this->provider_config;
    }


    public function getTokenEndpoint() : ?string
    {
        return $this->token_endpoint;
    }


    public function getUserInfoEndpoint() : ?string
    {
        return $this->user_info_endpoint;
    }
}
