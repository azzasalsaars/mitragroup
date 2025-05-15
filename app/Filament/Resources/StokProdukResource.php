<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StokProdukResource\Pages;
use App\Filament\Resources\StokProdukResource\RelationManagers;
use App\Models\StokProduk;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StokProdukResource extends Resource
{
    protected static ?string $model = StokProduk::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('kode_produk')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nama_produk')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('stok')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('harga')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kode_produk')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama_produk')
                    ->searchable(),
                Tables\Columns\TextColumn::make('stok')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('harga')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListStokProduks::route('/'),
            'create' => Pages\CreateStokProduk::route('/create'),
            'edit' => Pages\EditStokProduk::route('/{record}/edit'),
        ];
    }
    public static function getNavigationLabel(): string
    {
        return 'Stok Produk';
    }

    public static function getTitle(): string
    {
        return 'Stok Produk';
    }

}
