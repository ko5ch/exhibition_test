<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Traits\Statusable;
use App\Http\Resources\ProjectResource;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class ProjectController extends Controller
{
    use Statusable;

    /**
     * @param Project $project
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index(Project $project)
    {
        return ProjectResource::collection($project->all());
    }

    /**
     * @param Request $request
     * @return array
     */
    public function import(Request $request)
    {
        foreach ($request->all() as $array) {
            $collection = collect($array);
            $this->store($collection);
        }
        return $this->success();
    }

    /**
     * @param Collection $data
     */
    private function store(Collection $data)
    {
        $data->each(function ($exhibition){
           Project::create($exhibition);
        });
    }

}
