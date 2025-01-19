<?php

namespace App\Filament\Resources;

use AmidEsfahani\FilamentTinyEditor\TinyEditor;
use App\Filament\Resources\AnnouncementResource\Pages;
use App\Filament\Resources\AnnouncementResource\RelationManagers;
use App\Models\Announcement;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Set;
use Illuminate\Support\Str;
use Filament\Forms\Get;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AnnouncementResource extends Resource
{
    protected static ?string $model = Announcement::class;

    protected static ?string $navigationIcon = 'heroicon-o-megaphone';
    protected static ?string $navigationLabel = 'Pengumuman';
    protected static ?string $modelLabel = 'Pengumuman';

    public static function getBreadcrumb(): string
    {
        return 'Pengumuman';
    }
    public static function getPermissionPrefixes(): array
    {
        return [
            'view',
            'view_any',
            'create',
            'update',
            'delete',
            'delete_any',
            'publish'
        ];
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        Fieldset::make()
                            ->schema([
                                Forms\Components\TextInput::make('title')
                                    ->label('Judul')
                                    ->autofocus()
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(function (Get $get, Set $set, ?string $old, ?string $state) {
                                        if (($get('slug') ?? '') !== Str::slug($old)) {
                                            return;
                                        }
                                        $set('slug', Str::slug($state));
                                    })
                                    ->maxLength(255)
                                    ->required(),
                                Forms\Components\TextInput::make('slug')
                                    ->readOnly()
                                    ->maxLength(255)
                                    ->helperText('Slug akan terisi otomatis berdasarkan title.')
                                    ->required(),
                                Forms\Components\DatePicker::make('published_at')
                                    ->label('Tanggal')
                                    ->placeholder('Tgl Bln Thn')
                                    ->native(false)
                                    ->displayFormat('d F Y')
                                    ->required(),
                            ])->columns(3),
                        Fieldset::make()
                            ->schema([
                                Forms\Components\FileUpload::make('image')
                                    ->label('Gambar')
                                    ->image()
                                    ->required()->columnSpan('full'),
                            ]),
                        Fieldset::make()
                            ->schema([
                                TinyEditor::make('content')
                                    ->label('Konten')
                                    ->fileAttachmentsDisk('public')
                                    ->fileAttachmentsVisibility('public')
                                    ->fileAttachmentsDirectory('uploads')
                                    ->profile('default')
                                    ->ltr() // Set RTL or use ->direction('auto|rtl|ltr')
                                    ->columnSpan('full')
                                    ->required()
                            ]),
                    ])->columns(3)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('published_at')
                    ->date()
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
            'index' => Pages\ListAnnouncements::route('/'),
            'create' => Pages\CreateAnnouncement::route('/create'),
            'edit' => Pages\EditAnnouncement::route('/{record}/edit'),
        ];
    }
}
