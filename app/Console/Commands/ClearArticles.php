<?php

namespace App\Console\Commands;

use App\Models\Article;
use Illuminate\Console\Command;

class ClearArticles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'clear:articles {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear all articles';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $id = $this->argument('id');
        $article = Article::find($id);
        $article->delete();
    }
}
