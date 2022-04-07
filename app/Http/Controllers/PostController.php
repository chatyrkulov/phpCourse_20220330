<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function Submit(PostRequest $req){
      $name = $req->name;
      $email = $req->email;
      $comment = $req->comment;
      $money = $req->money;
      $card = $req->card;
      $month = $req->month;
      $year = $req->year;
      $cvv = $req->cvv;

      return DB::table('posts')->insert(['name' => $name, 'email' => $email, 'comment' => $comment, 'money' => $money, 'card' => $card, 'month' => $month, 'year' => $year, 'cvv' => $cvv]);

    }
}
