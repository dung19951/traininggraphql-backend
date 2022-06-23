<?php

namespace App\GraphQL\Mutations;

use App\Models\Post;

final class UpdatePostResolver
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        $post = Post::where('id', $args['id'])->update([
            'title' =>  $args['title'],
            'body' =>  $args['body'],
        ]);
        return  $post;
    }
}
