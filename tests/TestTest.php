<?php 
use PHPUnit\Framework\TestCase;
use Godefroy\Framework;

class TestTest extends TestCase{
    public function testGenerateLayouthPath()
        {
            $framework = new Framework();
            $this->assertEquals('./templates/layouts/html_layout.inc.php', $framework->generateLayoutPath('null'));
        }   
}