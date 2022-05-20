<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\ArticlesDataTable;
use Illuminate\Support\Facades\Validator;
use App\DataTables\ArticleCategorysDataTable;
use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\ArticlePhoto;
use App\Models\ArticleQuantity;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ArticlesDataTable $dataTable)
    {
        //
        
        return $dataTable->render('pages.admin.article.index-article');
        
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categorys = ArticleCategory::all();
        return view('pages.admin.article.create-article-information',['categorys' => $categorys]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $article_code = strtoupper($request->article_code);
        $request->article_code = $article_code;

        $validated = Validator::make($request->all(),[
            'article_code' => ['required','max:4'],
            'article_number' => ['required','numeric'],
            'article_name' => ['required','max:30'],
            'category' => ['required','exists:article_categorys,id'],
            'price' => ['required'],
            'desc' => ['required'],
            'details.*' => ['max:50'],
            'sizes.*' => ['required'],
            'quantitys.*' => ['required','numeric'],
        ]);

        if ($validated->fails()) {
            return response()->json(['status' => 0,'error'=>$validated->errors()]);
        }

        $create_article = Article::create([
            'id_category' => $request->category,
            'code_article' => $request->article_code,
            'no_article' => $request->article_number,
            'name_article' => $request->article_name,
            'price' => $request->price,
            'description' => $request->desc,
            'chapter' => 'unchapter',
            'status_publish' => 1
        ]);

        
        $request->request->add(['id_article' => $create_article->id]);

        $article = Article::find($request->id_article);

        foreach ($request->sizes as $size) {
            foreach ($request->quantitys as $quantity) {
                $article->quantity()->saveMany([
                    new ArticleQuantity(['quantity' => $quantity,'size' => $quantity]),
                ]);
            }
        }

        function generateRandomString($length = 25) {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }
     

        foreach ($request->image as $photo) {
            $filename = 'article_photo/'.$request->article_code.$request->article_number.'/'.generateRandomString(5).'.jpg';
            $image = str_replace('data:image/png;base64,', '', $photo);
            $image_after = str_replace(' ', '+', $image);
            $binary_data = base64_decode($image_after);

            Storage::disk('public')->put($filename, $binary_data);

            $article->photo()->saveMany([
                new ArticlePhoto(['photo' => $filename]),
            ]);
        }

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
        //
    }
}
