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
              'image'       => '1.jpg'
          ],
            1=>[
                'title'       => 'Another Blog',
                'description' => 'Blog Description',
                'author'      => 'Sumon',
                'image'       => '2.jpg'
            ],
            2=>[
                'title'       => 'About Bangladesh',
                'description' => 'Blog Description',
                'author'      => 'Rakib',
                'image'       => '3.jpg'
            ],
        ];
    }
}