<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FridayOfficerResource\Pages;
use App\Filament\Resources\FridayOfficerResource\RelationManagers;
use App\Models\FridayOfficer;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FridayOfficerResource extends Resource
{
    protected static ?string $model = FridayOfficer::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Officers Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\DatePicker::make('date_fridayOfficer')
                    ->required(),
                Forms\Components\Select::make('officer_id')
                    ->relationship('officer', 'name')
                    ->required(),
                Forms\Components\Select::make('part_id')
                    ->relationship('part', 'name')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('date_fridayOfficer')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('officer.name')
                    ->sortable(),
                Tables\Columns\TextColumn::make('part.name')
                    ->sortable(),
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
            'index' => Pages\ListFridayOfficers::route('/'),
            'create' => Pages\CreateFridayOfficer::route('/create'),
            'edit' => Pages\EditFridayOfficer::route('/{record}/edit'),
        ];
    }
}
