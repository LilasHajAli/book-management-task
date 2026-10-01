<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
 public function index()
 {
    return Book::all();

 }

 public function store(StoreBookRequest $request)
 {
    Book::query()->create($request->validated());
    return "success";
 }
 public function show($id)
 {
    return Book::query()->where('id' ,$id)->get();
 }

 public function update(UpdateBookRequest $request , $id)
 {
    return Book::query()->where('id' ,$id)->update($request->all());
 }
 public function destroy(UpdateBookRequest $request , $id)
 {
    Book::query()->where('id' , $id)->update($request->validated());
 }
}
