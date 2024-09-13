<?php
use PHPUnit\Framework\TestCase;
use Jin\Framework;

class TestTest extends TestCase
{
    public function testGenerateLayoutPath()
    {
        $framework = new Framework();
        $this->assertEquals('./templates/layouts/html_layout.inc.php', $framework->generateLayoutPath('html'));
    }
    public function testGenerateLayoutPathCanceled()
    {
        $framework = new Framework();
        $this->assertEquals('./templates/layouts/_layout.inc.php', $framework->generateLayoutPath(null));
    }
}