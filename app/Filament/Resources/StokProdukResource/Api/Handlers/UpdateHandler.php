<?php
namespace App\Filament\Resources\StokProdukResource\Api\Handlers;

use Illuminate\Http\Request;
use Rupadana\ApiService\Http\Handlers;
use App\Filament\Resources\StokProdukResource;
use App\Filament\Resources\StokProdukResource\Api\Requests\UpdateStokProdukRequest;

class UpdateHandler extends Handlers {
    public static string | null $uri = '/{id}';
    public static string | null $resource = StokProdukResource::class;

    public static function getMethod()
    {
        return Handlers::PUT;
    }

    public static function getModel() {
        return static::$resource::getModel();
    }


    /**
     * Update StokProduk
     *
     * @param UpdateStokProdukRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function handler(UpdateStokProdukRequest $request)
    {
        $id = $request->route('id');

        $model = static::getModel()::find($id);

        if (!$model) return static::sendNotFoundResponse();

        $model->fill($request->all());

        $model->save();

        return static::sendSuccessResponse($model, "Successfully Update Resource");
    }
}