<?php

namespace App\Filament\Resources\StokProdukResource\Api\Handlers;

use App\Filament\Resources\SettingResource;
use App\Filament\Resources\StokProdukResource;
use Rupadana\ApiService\Http\Handlers;
use Spatie\QueryBuilder\QueryBuilder;
use Illuminate\Http\Request;
use App\Filament\Resources\StokProdukResource\Api\Transformers\StokProdukTransformer;

class DetailHandler extends Handlers
{
    public static string | null $uri = '/{id}';
    public static string | null $resource = StokProdukResource::class;


    /**
     * Show StokProduk
     *
     * @param Request $request
     * @return StokProdukTransformer
     */
    public function handler(Request $request)
    {
        $id = $request->route('id');
        
        $query = static::getEloquentQuery();

        $query = QueryBuilder::for(
            $query->where(static::getKeyName(), $id)
        )
            ->first();

        if (!$query) return static::sendNotFoundResponse();

        return new StokProdukTransformer($query);
    }
}
