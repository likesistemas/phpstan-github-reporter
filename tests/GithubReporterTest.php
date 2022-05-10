<?php

namespace Like\Phpstan\Tests;

use Like\Phpstan\GithubReporter;
use PHPUnit\Framework\TestCase;

class GithubReporterTest extends TestCase {
	public function testInstance() {
		$this->assertTrue(class_exists(GithubReporter::class));
	}
}
