<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TippaniResource\Pages;
use App\Filament\Resources\TippaniResource\RelationManagers;
use App\Models\Tippani;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TippaniResource extends Resource
{
    protected static ?string $model = Tippani::class;

    protected static ?string $navigationIcon = 'heroicon-s-book-open';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('fisical_year_id')
                    ->relationship('fisical_year', 'name')
                    ->required(),
                Forms\Components\TextInput::make('tippani_number')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('tippani_employee')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('tippani_date_bs')
                    ->required(),
                Forms\Components\DatePicker::make('tippani_date_ad')
                    ->required(),
                Forms\Components\TextInput::make('file_number')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('subject')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('image')
                    ->image()
                    ->required(),
                Forms\Components\Select::make('department_id')
                    ->relationship('department', 'name')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                     ->numeric()
                         ->sortable(),
                Tables\Columns\TextColumn::make('fisical_year.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tippani_number')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tippani_employee')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tippani_date_bs')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tippani_date_ad')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('file_number')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('subject')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('department.name')
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
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListTippanis::route('/'),
            'create' => Pages\CreateTippani::route('/create'),
            'view' => Pages\ViewTippani::route('/{record}'),
            'edit' => Pages\EditTippani::route('/{record}/edit'),
        ];
    }
}
