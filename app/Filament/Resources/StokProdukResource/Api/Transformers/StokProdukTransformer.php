<?php
namespace App\Filament\Resources\StokProdukResource\Api\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\StokProduk;

/**
 * @property StokProduk $resource
 */
class StokProdukTransformer extends JsonResource
{

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return $this->resource->toArray();
    }
}
