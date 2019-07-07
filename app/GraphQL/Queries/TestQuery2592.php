<?php
namespace App\GraphQL\Queries;

use Rebing\GraphQL\Support\Facades\GraphQL;
use GraphQL\Type\Definition\ResolveInfo;
use Rebing\GraphQL\Support\Query;

class TestQuery2592 extends Query
{
    protected $attributes = [
        'name' => 'test2592'
    ];

    public function type(): \GraphQL\Type\Definition\Type
    {
        return GraphQL::type('test2592');
    }

    public function resolve($root, $args, $context, ResolveInfo $resolveInfo)
    {
        return [
            'id' => 1
        ];
    }
}

