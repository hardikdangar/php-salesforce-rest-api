<?php

namespace hardikdangar\Salesforce\Authentication;

interface AuthenticationInterface
{
    public function getAccessToken();

    public function getInstanceUrl();
}

?>