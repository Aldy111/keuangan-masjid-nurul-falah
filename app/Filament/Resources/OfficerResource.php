<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OfficerResource\Pages;
use App\Filament\Resources\OfficerResource\RelationManagers;
use App\Models\Officer;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Infolists\Infolist;
use Filament\Infolists\Components;
use Filament\Infolists\Components\Fieldset;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ImageEntry;

class OfficerResource extends Resource
{
    protected static ?string $model = Officer::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Officers Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('date_of_birth')
                    ->required(),
                Forms\Components\TextInput::make('place_of_birth')
                    ->required(),
                Forms\Components\TextInput::make('no_hp')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('position_id')
                ->relationship('position', 'name')
                ->required(),
                Forms\Components\Select::make('gender')
                    ->options([
                    'Men' => 'Men',
                    'Women' => 'Women',
                    ])
                    ->required(),
                Forms\Components\Select::make('status')
                    ->options([
                    'Married' => 'Married',
                    'Not married' => 'Not married',
                    ])
                    ->required(),
                Forms\Components\TextArea::make('address')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('image')
                    ->image()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                ->circular(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('position.name')
                    ->sortable(),
                Tables\Columns\TextColumn::make('gender'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
                
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
            'index' => Pages\ListOfficers::route('/'),
            'create' => Pages\CreateOfficer::route('/create'),
            'edit' => Pages\EditOfficer::route('/{record}/edit'),
            'view' => Pages\ViewOfficer::route('/{record}'),
        ];
    }
    public static function infolist(infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Components\Section::make()
                    ->schema([
                        Fieldset::make('Biodata')
                            ->schema([
                                Components\Split::make([
                                    Components\ImageEntry::make('image')
                                        ->hiddenLabel()
                                        ->grow(false),
                                    Components\Grid::make(2)
                                        ->schema([
                                            Components\Group::make([
                                                Components\TextEntry::make('name')
                                                ->label('Nama'),
                                                Components\TextEntry::make('position.name')
                                                ->label('Posisi'),
                                                Components\TextEntry::make('date_of_birth')
                                                ->label('Tanggal Lahir'),
                                                Components\TextEntry::make('place_of_birth')
                                                ->label('Tempat Lahir'),

                                            ])
                                            ->inlineLabel()
                                            ->columns(1),

                                            Components\Group::make([
                                                Components\TextEntry::make('gender')
                                                ->label('Jenis Kelamin'),
                                                Components\TextEntry::make('no_hp')
                                                ->label('No Hp'),
                                                Components\TextEntry::make('address')
                                                ->label('Alamat'),
                                                Components\TextEntry::make('status')
                                                ->badge()
                                                ->color(fn (string $state): string => match ($state) {
                                                    'Not married' => 'success',
                                                    'Married' => 'danger',
                                                }),
                                            ])
                                            ->inlineLabel()
                                            ->columns(1),
                                    ])

                                ])->from('lg')
                            ])->columns(1)
                    ])->columns(2)
            ]);
    }
}
