<?php

declare(strict_types=1);

namespace SJS\Neos\MCP\FeatureSet\Test;

use Neos\Flow\Annotations as Flow;
use SJS\Neos\MCP\FeatureSet\AbstractFeatureSet;
use SJS\Neos\MCP\FeatureSet\Test\TestFeatureSet\PingTool;
use SJS\Neos\MCP\FeatureSet\Test\TestFeatureSet\AuthenticatedUserTool;

#[Flow\Scope("singleton")]
class TestFeatureSet extends AbstractFeatureSet
{
    public function initialize(): void
    {
        $this->addTool(PingTool::class);
        $this->addTool(AuthenticatedUserTool::class);
    }
}
