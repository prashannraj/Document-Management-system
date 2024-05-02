<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DartaResource\Pages;
use App\Filament\Resources\DartaResource\RelationManagers;
use App\Models\Darta;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DartaResource extends Resource
{
    protected static ?string $model = Darta::class;

    protected static ?string $navigationIcon = 'heroicon-s-book-open';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('fisical_year_id')
                    ->relationship('fisical_year', 'name')
                    ->required(),
                Forms\Components\TextInput::make('darta_number')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('darta_employee')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('darta_date_bs')
                    ->required(),
                Forms\Components\DatePicker::make('darta_date_ad')
                    ->required(),
                Forms\Components\TextInput::make('patra_number')
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
                Forms\Components\TextInput::make('patra_sender_office')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('patra_sender_person')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('delivery_person')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('fisical_year.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('darta_number')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('darta_employee')
                    ->searchable(),
                Tables\Columns\TextColumn::make('darta_date_bs')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('darta_date_ad')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('patra_number')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('subject')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('department.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('patra_sender_office')
                    ->searchable(),
                Tables\Columns\TextColumn::make('patra_sender_person')
                    ->searchable(),
                Tables\Columns\TextColumn::make('delivery_person')
                    ->searchable(),
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
            'index' => Pages\ListDartas::route('/'),
            'create' => Pages\CreateDarta::route('/create'),
            'view' => Pages\ViewDarta::route('/{record}'),
            'edit' => Pages\EditDarta::route('/{record}/edit'),
        ];
    }
}
