<?php

declare(strict_types=1);

namespace App\GraphQL\Types;

use App\Models\Project;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class ProjectType extends GraphQLType
{
    protected $attributes = [
        'title' => 'project',
        'description' => 'A project',
        'model' => Project::class,
    ];

    public function fields(): array
    {
        return [
            'id' => ["type" => Type::nonNull(Type::int())],
            'title' => ["type" => Type::nonNull(Type::string())],
            'description' => ["type" => Type::nonNull(Type::string())],
        ];
    }






















}
