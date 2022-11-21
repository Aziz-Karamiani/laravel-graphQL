<?php

declare(strict_types=1);

namespace App\GraphQL\Queries;

use App\Models\Project;
use Closure;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;
use Rebing\GraphQL\Support\SelectFields;

class ProjectQuery extends Query
{
    protected $attributes = [
        'title' => 'project',
        'description' => 'A query'
    ];

    public function type(): Type
    {
        return Type::listOf(GraphQL::type('project'));
    }

    public function args(): array
    {
        return [
            'id' => ["type" => Type::nonNull(Type::int())],
            'title' => ["type" => Type::nonNull(Type::string())],
            'description' => ["type" => Type::nonNull(Type::string())],
        ];
    }

    public function resolve($root, array $args, $context, ResolveInfo $resolveInfo, Closure $getSelectFields)
    {
        /** @var SelectFields $fields */
        $fields = $getSelectFields();
        $select = $fields->getSelect();
        $with = $fields->getRelations();
        $projects = Project::select($select)->with($with);

        return $projects->get();
    }
}
