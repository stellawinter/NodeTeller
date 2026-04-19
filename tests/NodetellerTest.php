<?php
/**
 * Tests for NodeTeller
 */

use PHPUnit\Framework\TestCase;
use Nodeteller\Nodeteller;

class NodetellerTest extends TestCase {
    private Nodeteller $instance;

    protected function setUp(): void {
        $this->instance = new Nodeteller(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Nodeteller::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
