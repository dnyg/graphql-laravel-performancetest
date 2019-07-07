<?php
namespace App\GraphQL\Queries;

use Rebing\GraphQL\Support\Facades\GraphQL;
use GraphQL\Type\Definition\ResolveInfo;
use Rebing\GraphQL\Support\Query;

class TestQuery1288 extends Query
{
    protected $attributes = [
        'name' => 'test1288'
    ];

    public function type(): \GraphQL\Type\Definition\Type
    {
        return GraphQL::type('test1288');
    }

    public function resolve($root, $args, $context, ResolveInfo $resolveInfo)
    {
        return [
            'id' => 1
        ];
    }
}

