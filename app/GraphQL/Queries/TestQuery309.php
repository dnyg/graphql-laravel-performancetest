<?php
namespace App\GraphQL\Queries;

use Rebing\GraphQL\Support\Facades\GraphQL;
use GraphQL\Type\Definition\ResolveInfo;
use Rebing\GraphQL\Support\Query;

class TestQuery309 extends Query
{
    protected $attributes = [
        'name' => 'test309'
    ];

    public function type(): \GraphQL\Type\Definition\Type
    {
        return GraphQL::type('test309');
    }

    public function resolve($root, $args, $context, ResolveInfo $resolveInfo)
    {
        return [
            'id' => 1
        ];
    }
}

