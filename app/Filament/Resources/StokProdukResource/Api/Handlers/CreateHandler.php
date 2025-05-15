<?php
namespace App\Filament\Resources\StokProdukResource\Api\Handlers;

use Illuminate\Http\Request;
use Rupadana\ApiService\Http\Handlers;
use App\Filament\Resources\StokProdukResource;
use App\Filament\Resources\StokProdukResource\Api\Requests\CreateStokProdukRequest;

class CreateHandler extends Handlers {
    public static string | null $uri = '/';
    public static string | null $resource = StokProdukResource::class;

    public static function getMethod()
    {
        return Handlers::POST;
    }

    public static function getModel() {
        return static::$resource::getModel();
    }

    /**
     * Create StokProduk
     *
     * @param CreateStokProdukRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function handler(CreateStokProdukRequest $request)
    {
        $model = new (static::getModel());

        $model->fill($request->all());

        $model->save();

        return static::sendSuccessResponse($model, "Successfully Create Resource");
    }
}