<?php

namespace App\Http\Controllers\Api\Snippets;

use App\Http\Controllers\Controller;
use App\Http\Resources\SnippetResource;
use App\Models\Snippet;
use Illuminate\Http\Request;

class SnippetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection|\Illuminate\Http\Response
     */
    public function index()
    {
        if (\request()->query->has('forUser')) {
            $snippets = Snippet::where('user_id', auth()->guard('api')->id)->get();
        } else {
            $snippets = Snippet::all();
        }

        return SnippetResource::collection($snippets);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return SnippetResource|\Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $snippet = auth()->guard('api')->user()->snippets()->create([
            'title' => $request->get('title'),
            'slug' => str_slug($request->get('title'), '-'),
            'description' => $request->get('description'),
            'snippet' => $request->get('snippet'),
        ]);

        return SnippetResource::make($snippet);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
