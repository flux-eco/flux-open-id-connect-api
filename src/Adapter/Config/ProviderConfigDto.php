<?php

namespace FluxOpenIdConnectApi\Adapter\Config;

class ProviderConfigDto
{

    private readonly string $client_id;
    private readonly string $client_secret;
    private readonly string $redirect_uri;
    private readonly string $scope;
    private readonly bool $supports_pkce;
    private readonly bool $trust_self_signed_certificate;
    private readonly string $url;


    public static function new(string $url, string $client_id, string $client_secret, string $redirect_uri, ?string $scope, ?bool $supports_pkce, ?bool $trust_self_signed_certificate = null) : static
    {
        $dto = new static();

        $dto->url = $url;
        $dto->client_id = $client_id;
        $dto->client_secret = $client_secret;
        $dto->redirect_uri = $redirect_uri;
        $dto->scope = $scope ?? "openid profile email";
        $dto->supports_pkce = $supports_pkce ?? true;
        $dto->trust_self_signed_certificate = $trust_self_signed_certificate ?? false;

        return $dto;
    }


    public function getClientId() : string
    {
        return $this->client_id;
    }


    public function getClientSecret() : string
    {
        return $this->client_secret;
    }


    public function getRedirectUri() : string
    {
        return $this->redirect_uri;
    }


    public function getScope() : string
    {
        return $this->scope;
    }


    public function getUrl() : string
    {
        return $this->url;
    }


    public function isSupportsPkce() : bool
    {
        return $this->supports_pkce;
    }


    public function isTrustSelfSignedCertificate() : bool
    {
        return $this->trust_self_signed_certificate;
    }
}
