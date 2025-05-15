<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PenjualanResource\Pages;
use App\Filament\Resources\PenjualanResource\RelationManagers;
use App\Models\Penjualan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PenjualanResource extends Resource
{
    protected static ?string $model = Penjualan::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-cart';

    protected static ?string $navigationlabel = 'Laporan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\DatePicker::make('tanggal_transaksi')
                    ->required(),
                Forms\Components\TextInput::make('kode_produk')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nama_produk')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('jumlah')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('harga')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('pembayaran')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('sisa_stok')
                    ->required()
                    ->numeric(),
                Forms\Components\FileUpload::make('produk')
                    ->image()
                    ->disk('public')
                
               
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('tanggal_transaksi')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kode_produk')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama_produk')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jumlah')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('harga')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('pembayaran')
                    ->searchable(),
                Tables\Columns\TextColumn::make('sisa_stok')
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
                Tables\Columns\ImageColumn::make('produk')
                     ->square()
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
            'index' => Pages\ListPenjualans::route('/'),
            'create' => Pages\CreatePenjualan::route('/create'),
            'edit' => Pages\EditPenjualan::route('/{record}/edit'),
        ];
    }
}
