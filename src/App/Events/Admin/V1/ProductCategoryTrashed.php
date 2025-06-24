<?php

namespace Callmeaf\ProductCategory\App\Events\Admin\V1;

use Callmeaf\ProductCategory\App\Models\ProductCategory;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ProductCategoryTrashed
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * @param Collection<ProductCategory> $productCategories
     * Create a new event instance.
     */
    public function __construct(Collection $productCategories)
    {
        //
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('channel-name'),
        ];
    }
}
