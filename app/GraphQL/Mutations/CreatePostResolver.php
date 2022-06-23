<?php

namespace App\GraphQL\Mutations;
use App\Models\Post;

final class CreatePostResolver
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        return Post::create([
            'title'=>$args['title'],
            'body'=>$args['body'],
            'user_id'=>$args['user_id'],
        ]);
    }
}
