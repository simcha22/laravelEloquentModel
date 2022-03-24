<?php

namespace App\Observers;

use App\Models\Article;

class ArticleObserver
{

    public function creating(Article $Article)
    {
        // ביצוע משימות לפני יצירה
    }

    
    public function created(Article $Article)
    {
        // ביצוע משימות אחרי יצירה
        info('artical created!');
    }

    /**
     * Handle the Article "updated" event.
     *
     * @param  \App\Models\Article  $Article
     * @return void
     */
    public function updated(Article $Article)
    {
        //
    }

    /**
     * Handle the Article "deleted" event.
     *
     * @param  \App\Models\Article  $Article
     * @return void
     */
    public function deleted(Article $Article)
    {
        //
    }

    /**
     * Handle the Article "restored" event.
     *
     * @param  \App\Models\Article  $Article
     * @return void
     */
    public function restored(Article $Article)
    {
        //
    }

    /**
     * Handle the Article "force deleted" event.
     *
     * @param  \App\Models\Article  $Article
     * @return void
     */
    public function forceDeleted(Article $Article)
    {
        //
    }
}
