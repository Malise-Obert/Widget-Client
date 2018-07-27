<?php

namespace shared;

class CallAPI
{
    /**
     * @var string $uri
     */
    protected $uri;

    /**
     * @var string $method
     */
    protected $method;

    /**
     * @var string $header
     */
    protected $header;

    /**
     * @var string $content
     */
    protected $content;

    public function requestInfo(string $uri, string $method, string $header, string $content = null) {
        $this->uri = $uri;
        $this->method = $method;
        $this->header = $header;
        $this->content = $content;
    }

    public function makeRequest()
    {
        $stream = [
            'http'=>[
                'method'=>"{$this->method}",
                'header'  => "{$this->header}",
                'content' => json_encode($this->content),
            ]
        ];

        $context = stream_context_create($stream);

        $response = json_decode(file_get_contents("{$this->uri}", false, $context));

        return $response;

    }
}
