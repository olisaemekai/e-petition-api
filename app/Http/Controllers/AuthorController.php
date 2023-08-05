<?php

namespace App\Http\Controllers;

use App\Http\Resources\AuthorCollection;
use App\Http\Resources\AuthorResource;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Http\JsonResponse
    {
        return response()->json(new AuthorCollection(Author::all()), Response::HTTP_OK);
    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author): \Illuminate\Http\JsonResponse
    {
        return response()->json(new AuthorResource($author));
    }

}
