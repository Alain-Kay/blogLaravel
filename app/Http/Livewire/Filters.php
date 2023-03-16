<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class Filters extends Component
{
    public $categories;
    public $activeFilters = [];

    public function render()
    {
        $this->activeFilters = array_filter($this->activeFilters, function($val){
            return $val;
        });

        if (!empty($this->activeFilters)) {
            $articles = Article::whereIn('category_id', array_keys($this->activeFilters))->get();
        }else {
            $articles = Article::all();
        }

        return view('livewire.filters',[
            'articles' => $articles
        ]);
    }
}

