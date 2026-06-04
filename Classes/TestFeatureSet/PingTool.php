<?php

declare(strict_types=1);

namespace SJS\Neos\MCP\FeatureSet\Test\TestFeatureSet;

use SJS\Flow\MCP\Domain\Identity\ServerContext;
use SJS\Flow\MCP\Domain\MCP\Tool;
use SJS\Flow\MCP\Domain\MCP\Tool\Annotations;
use SJS\Flow\MCP\Domain\MCP\Tool\Content;
use SJS\Flow\MCP\JsonSchema\ObjectSchema;
use SJS\Flow\MCP\JsonSchema\StringSchema;

class PingTool extends Tool
{
    public function __construct()
    {
        parent::__construct(
            name: 'ping',
            description: 'Echoes back a message. Useful for testing connectivity to the MCP server.',
            inputSchema: new ObjectSchema(
                properties: [
                    'message' => new StringSchema(description: 'Optional message to echo back'),
                ]
            ),
            annotations: new Annotations(
                title: 'Ping',
                readOnlyHint: true,
                idempotentHint: true
            )
        );
    }

    /**
     * @param array<string,mixed> $input
     */
    public function run(ServerContext $serverContext, array $input): Content
    {
        $message = $input['message'] ?? 'pong';
        if (!\is_string($message)) {
            throw new \InvalidArgumentException("message must be of type string");
        }

        return Content::text($message);
    }
}