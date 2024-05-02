<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ChalaniResource\Pages;
use App\Filament\Resources\ChalaniResource\RelationManagers;
use App\Models\Chalani;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ChalaniResource extends Resource
{
    protected static ?string $model = Chalani::class;

    protected static ?string $navigationIcon = 'heroicon-s-book-open';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('fisical_year_id')
                    ->relationship('fisical_year', 'name')
                    ->required(),
                Forms\Components\TextInput::make('chalani_number')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('chalani_employee')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('chalani_date_bs')
                    ->required(),
                Forms\Components\DatePicker::make('chalani_date_ad')
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
                Forms\Components\TextInput::make('receiver_person')
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
                Tables\Columns\TextColumn::make('chalani_number')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('chalani_employee')
                    ->searchable(),
                Tables\Columns\TextColumn::make('chalani_date_bs')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('chalani_date_ad')
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
                Tables\Columns\TextColumn::make('receiver_person')
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
            'index' => Pages\ListChalanis::route('/'),
            'create' => Pages\CreateChalani::route('/create'),
            'view' => Pages\ViewChalani::route('/{record}'),
            'edit' => Pages\EditChalani::route('/{record}/edit'),
        ];
    }
}
