<?php

namespace App\Models;

class Listing
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'title' => 'Help me find a home for my dog',
                'description' => 'I have a dog that needs a new home. He loves to play and is good with kids. Can you help?',
            ],
            [
                'id' => 2,
                'title' => 'Need a sitter for my cat',
                'description' => 'I will be out of town for a few days and need someone to feed my cat.',
            ]
        ];
    }
}

?>
