<?php
namespace Tests\Framework;

use PHPUnit\Framework\TestCase;
use Framework\Renderer;

class RendererTest extends TestCase{
    private $renderer;

    public function setUp()/* The :void return type declaration that should be here would cause a BC issue */
    {
        $this->renderer = new Renderer();
    }
}