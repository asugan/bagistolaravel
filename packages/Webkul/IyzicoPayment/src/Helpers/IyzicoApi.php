<?php

namespace Webkul\IyzicoPayment\Helpers;

class IyzicoApi
{
 public static function options() {
 $options = new \Iyzipay\Options();
 $options->setApiKey("sandbox-awnEOIltlyEIlB6OhtcYWcYRu2ELwlvf");
 $options->setSecretKey("sandbox-kQ7lwrcZg61OLWzx9mhvlekjTfKa2XgW");
 $options->setBaseUrl("https://sandbox-api.iyzipay.com");
 return $options;
 }
}