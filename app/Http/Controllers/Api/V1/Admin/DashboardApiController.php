<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Services\ChartsService;

class DashboardApiController extends Controller
{
    public function index()
    {
        $stats0 = new ChartsService([
            'title'              => 'Students',
            'chart_type'         => 'stats',
            'model'              => 'App\Models\User',
            'column_class'       => 'col-md-3',
            //'footer_icon'        => 'date_range',
            'aggregate_function' => 'count',
            'aggregate_field'    => '',
            //'footer_text'        => 'Lifetime total',
        ]);

        $stats1 = new ChartsService([
            'title'              => 'Courses',
            'chart_type'         => 'stats',
            'model'              => 'App\Models\Course',
            'column_class'       => 'col-md-3',
            //'footer_icon'        => 'date_range',
            'aggregate_function' => 'count',
            'aggregate_field'    => '',
            //'footer_text'        => 'Lifetime total',
        ]);

        $stats2 = new ChartsService([
            'title'              => 'Tests',
            'chart_type'         => 'stats',
            'model'              => 'App\Models\Test',
            'column_class'       => 'col-md-3',
            //'footer_icon'        => 'date_range',
            'aggregate_function' => 'count',
            'aggregate_field'    => '',
            //'footer_text'        => 'Lifetime total',
        ]);

        $stats3 = new ChartsService([
            'title'              => 'Lessons',
            'chart_type'         => 'stats',
            'model'              => 'App\Models\Lesson',
            'column_class'       => 'col-md-3',
            //'footer_icon'        => 'date_range',
            'aggregate_function' => 'count',
            'aggregate_field'    => '',
            //'footer_text'        => 'Lifetime total',
        ]);

        $line4 = new ChartsService([
            'title'              => 'Students Registration',
            'chart_type'         => 'line',
            'model'              => 'App\Models\User',
            'group_by_field'     => 'deleted_at',
            'group_by_period'    => 'month',
            'column_class'       => 'col-md-6',
            'aggregate_function' => 'count',
            'aggregate_field'    => '',
        ]);

        $pie5 = new ChartsService([
            'title'              => 'No of Students  per course',
            'chart_type'         => 'pie',
            'model'              => 'App\Models\Course',
            'group_by_field'     => 'title',
            'group_by_period'    => 'day',
            'column_class'       => 'col-md-6',
            'aggregate_function' => 'count',
            'aggregate_field'    => '',
        ]);

        $latest6 = new ChartsService([
            'title'        => 'Latest Registration',
            'chart_type'   => 'latest',
            'model'        => 'App\Models\User',
            'column_class' => 'col-md-6',
            'fields'       => ['id', 'name', 'email'],
            'limit'        => 5,
        ]);

        return response()->json(compact('stats0', 'stats1', 'stats2', 'stats3', 'line4', 'pie5', 'latest6'));
    }
}
