<?php

return [
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'permission' => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'email'                    => 'Email',
            'email_helper'             => ' ',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Password',
            'password_helper'          => ' ',
            'roles'                    => 'Roles',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
        ],
    ],
    'course' => [
        'title'          => 'Courses',
        'title_singular' => 'Course',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'teacher'             => 'Teacher',
            'teacher_helper'      => ' ',
            'title'               => 'Title',
            'title_helper'        => ' ',
            'description'         => 'Description',
            'description_helper'  => ' ',
            'price'               => 'Price',
            'price_helper'        => ' ',
            'thumbnail'           => 'Thumbnail',
            'thumbnail_helper'    => ' ',
            'is_published'        => 'Is Published',
            'is_published_helper' => ' ',
            'students'            => 'Students',
            'students_helper'     => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
            'deleted_at'          => 'Deleted at',
            'deleted_at_helper'   => ' ',
        ],
    ],
    'lesson' => [
        'title'          => 'Lessons',
        'title_singular' => 'Lesson',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'course'              => 'Course',
            'course_helper'       => ' ',
            'title'               => 'Title',
            'title_helper'        => ' ',
            'thumbnail'           => 'Thumbnail',
            'thumbnail_helper'    => ' ',
            'short_text'          => 'Short Text',
            'short_text_helper'   => ' ',
            'long_text'           => 'Long Text',
            'long_text_helper'    => ' ',
            'video'               => 'Video',
            'video_helper'        => ' ',
            'position'            => 'Position',
            'position_helper'     => ' ',
            'is_published'        => 'Is Published',
            'is_published_helper' => ' ',
            'is_free'             => 'Is Free',
            'is_free_helper'      => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
            'deleted_at'          => 'Deleted at',
            'deleted_at_helper'   => ' ',
        ],
    ],
    'test' => [
        'title'          => 'Tests',
        'title_singular' => 'Test',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'course'              => 'Course',
            'course_helper'       => ' ',
            'lesson'              => 'Lesson',
            'lesson_helper'       => ' ',
            'title'               => 'Title',
            'title_helper'        => ' ',
            'description'         => 'Description',
            'description_helper'  => ' ',
            'is_published'        => 'Is Published',
            'is_published_helper' => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
            'deleted_at'          => 'Deleted at',
            'deleted_at_helper'   => ' ',
        ],
    ],
    'question' => [
        'title'          => 'Questions',
        'title_singular' => 'Question',
        'fields'         => [
            'id'                    => 'ID',
            'id_helper'             => ' ',
            'course'                => 'Course',
            'course_helper'         => ' ',
            'question_text'         => 'Question Text',
            'question_text_helper'  => ' ',
            'question_image'        => 'Question Image',
            'question_image_helper' => ' ',
            'points'                => 'Points',
            'points_helper'         => ' ',
            'created_at'            => 'Created at',
            'created_at_helper'     => ' ',
            'updated_at'            => 'Updated at',
            'updated_at_helper'     => ' ',
            'deleted_at'            => 'Deleted at',
            'deleted_at_helper'     => ' ',
        ],
    ],
    'questionOption' => [
        'title'          => 'Question Options',
        'title_singular' => 'Question Option',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'question'           => 'Question',
            'question_helper'    => ' ',
            'option_text'        => 'Option text',
            'option_text_helper' => ' ',
            'is_correct'         => 'Is Correct',
            'is_correct_helper'  => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'testResult' => [
        'title'          => 'Test Results',
        'title_singular' => 'Test Result',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'test'              => 'Test',
            'test_helper'       => ' ',
            'student'           => 'Student',
            'student_helper'    => ' ',
            'score'             => 'Score',
            'score_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'testAnswer' => [
        'title'          => 'Test Answers',
        'title_singular' => 'Test Answer',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'test_result'        => 'Test Result',
            'test_result_helper' => ' ',
            'question'           => 'Question',
            'question_helper'    => ' ',
            'option'             => 'Option',
            'option_helper'      => ' ',
            'is_correct'         => 'Is Correect',
            'is_correct_helper'  => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'category' => [
        'title'          => 'Categories',
        'title_singular' => 'Category',
        'fields'         => [
            'id'                     => 'ID',
            'id_helper'              => ' ',
            'name'                   => 'Name',
            'name_helper'            => ' ',
            'slug'                   => 'Slug',
            'slug_helper'            => ' ',
            'parent_category'        => 'Parent Category',
            'parent_category_helper' => ' ',
            'created_at'             => 'Created at',
            'created_at_helper'      => ' ',
            'updated_at'             => 'Updated at',
            'updated_at_helper'      => ' ',
            'deleted_at'             => 'Deleted at',
            'deleted_at_helper'      => ' ',
            'thumbnail'              => 'Thumbnail',
            'thumbnail_helper'       => ' ',
            'cover_image'            => 'Cover Image',
            'cover_image_helper'     => ' ',
        ],
    ],

];
