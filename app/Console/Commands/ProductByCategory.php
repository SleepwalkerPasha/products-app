<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class DeactivateBanner extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'product:category {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'return category by product id';

    /**
     * Execute the console command.
     */
    public function handle() : string
    {
        try { 
            $productId = (int)$this->argument('id');

            $category_id = Product::where('id', $productId)
            ->select('category_id');

            $code = Category::where('id', $category_id)->select('code');
            return $code;
        }
        catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            $this->error("Banner with id <$productId> not exist");
        }
    }

}
