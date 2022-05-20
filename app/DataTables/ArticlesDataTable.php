<?php

namespace App\DataTables;

use App\Models\Article;
use App\Models\User;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class ArticlesDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('code article', function($article){
                return $article->code_article.'-'.$article->no_article;
            })
            ->addColumn('category', function($article){
                return $article->category;
            });
            // ->addColumn('price', function($article){
            //     return 'Rp. '.number_format($article->price,0,'','.');
            // })
            // ->addColumn('stock', function($article){
            //     return $article->quantity->sum('quantity');
            // });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Article $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Article $model)
    {   
        $article = Article::with(['quantity','category']);
        return $article->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('articles-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->orderBy(1);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('code article'),
            Column::make('name_article'),
            Column::make('category'),
            // Column::make('price'),
            // Column::make('stock'),
        ];
    }

    /**
     * Get filename for export.
     *
     */
    protected function filename():string
    {   
    
        return 'Articles_' . date('YmdHis');
    }
}
