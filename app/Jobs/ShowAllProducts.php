<?php

namespace App\Jobs;

use App\Models\Product;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class ShowAllProducts implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(
    ) {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Product::all();
    }
}
