<?php

namespace Like\Phpstan;

use PHPStan\Command\ErrorFormatter\GithubErrorFormatter;
use PHPStan\Command\AnalysisResult;
use PHPStan\Command\Output;

class GithubReporter extends GithubErrorFormatter {
	public function formatErrors(AnalysisResult $analysisResult, Output $output): int {
		$return = parent::formatErrors($analysisResult, $output);
		return $return;
	}
}
