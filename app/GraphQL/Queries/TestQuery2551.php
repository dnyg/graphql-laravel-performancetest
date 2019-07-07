<?php
namespace App\GraphQL\Queries;

use Rebing\GraphQL\Support\Facades\GraphQL;
use GraphQL\Type\Definition\ResolveInfo;
use Rebing\GraphQL\Support\Query;

class TestQuery2551 extends Query
{
    protected $attributes = [
        'name' => 'test2551'
    ];

    public function type(): \GraphQL\Type\Definition\Type
    {
        return GraphQL::type('test2551');
    }

    public function resolve($root, $args, $context, ResolveInfo $resolveInfo)
    {
        return [
            'id' => 1
        ];
    }
}

