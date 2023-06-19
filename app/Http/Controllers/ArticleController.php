<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Article;
use Carbon\Carbon;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::liste_articles();
        return view('forum.index',['articles' =>  $articles ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){


    $validatedData = $request->validate([
        'titre' => 'required|min:2|max:50',
        'contenu_fr' => 'required|min:2|max:1000',
        'contenu_en' => 'required|min:2|max:1000',
    ]);

    $validatedData['date_publication'] = Carbon::now()->format('Y-m-d H:i:s');
    $validatedData['etudiant_id'] = Auth::id();

    $article = Article::create($validatedData);

    if($article)
        return redirect(route('forum.index'))->withSuccess(trans('create_article.text_success_user'));
    else
       return redirect(route('forum.index'))->withError(trans('forum.message_error_user_create'));



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('forum.create');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
       $article = Article::findOrFail($id);
      
        if (/* $article->etudiant_id */ 1  != Auth::id()) {
            // L'étudiant n'est pas autorisé à supprimer cet article
            return redirect(route('forum.index'))->withError(trans('forum.message_error_user_delete'));
        }

         if($article->delete()){
            $articles = Article::liste_articles();
            return redirect(route('forum.index'))->with(['articles' => $articles])->withSuccess(trans('forum.message_success_user_deleted'));

         }
        else
            return redirect(route('forum.index'))->withError(trans('forum.message_error_user_deleted'));

    }
}
