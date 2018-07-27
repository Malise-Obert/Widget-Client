<?php

namespace interfaces;

Interface ApiInterface
{
    public function requestInfo(string $uri, string $request, string $header, string $content = null);
}