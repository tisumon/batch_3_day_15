<?php


namespace App\classes;
class Blog
{
    Protected $blogs;

    public function getAllBlog()
    {
        return[
          0=>[
              'title'       => 'A new Blog',
              'description' => 'Blog Description',
              'author'      => 'Tarikul',
              'image'       => 'p1.jpg'
          ],
            1=>[
                'title'       => 'Another Blog',
                'description' => 'Blog Description',
                'author'      => 'Tarikul',
                'image'       => 'p2.jpg'
            ],
            2=>[
                'title'       => 'About Bangladesh',
                'description' => 'Blog Description',
                'author'      => 'Tarikul',
                'image'       => 'p3.jpg'
            ],
        ];
    }
}