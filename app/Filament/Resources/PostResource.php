<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Set;
use Illuminate\Support\Str;
use Filament\Forms\Get;
use Filament\Infolists;
use Filament\Infolists\Infolist;
use Filament\Infolists\Components;
use Filament\Resources\Pages\Page;
use Filament\Pages\SubNavigationPosition;
use AmidEsfahani\FilamentTinyEditor\TinyEditor;
use BezhanSalleh\FilamentShield\Contracts\HasShieldPermissions;
class PostResource extends Resource implements HasShieldPermissions
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-folder-open';
    protected static SubNavigationPosition $subNavigationPosition = SubNavigationPosition::Top;
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
                    ->columns([
                        'sm' => 3,
                        'xl' => 6,
                        '2xl' => 8,
                    ])
                    ->schema([
                        // Forms\Components\Select::make('user_id')
                        //     ->relationship('user', 'name')
                        //     ->required()
                        //     ->columnSpan([
                        //         'sm' => 3,
                        //         'xl' => 3,
                        //         '2xl' => 4,
                        //     ]),
                        Forms\Components\Select::make('category_id')
                            ->relationship('category', 'name')
                            ->required()
                            ->columnSpan([
                                'sm' => 3,
                                'xl' => 3,
                                '2xl' => 4,
                            ]),
                        DatePicker::make('published_at')
                            ->native(false)
                            ->displayFormat('d-M-Y')
                            ->columnSpan([
                                'sm' => 3,
                                'xl' => 3,
                                '2xl' => 4,
                            ])
                            ->required(),
                        Forms\Components\TextInput::make('title')
                            ->live(onBlur: true)
                            ->afterStateUpdated(function (Get $get, Set $set, ?string $old, ?string $state) {
                                if (($get('slug') ?? '') !== Str::slug($old)) {
                                    return;
                                }

                                $set('slug', Str::slug($state));
                            })
                            ->required()
                            ->maxLength(255)
                            ->columnSpan([
                                'sm' => 3,
                                'xl' => 3,
                                '2xl' => 4,
                            ]),
                        Forms\Components\TextInput::make('slug')
                            ->readOnly()
                            ->required()
                            ->maxLength(255)
                            ->columnSpan([
                                'sm' => 3,
                                'xl' => 3,
                                '2xl' => 4,
                            ]),
                        // Forms\Components\Textarea::make('content')
                        //     ->required()
                        //     ->columnSpanFull(),

                        FileUpload::make('image')
                            ->image()
                            ->imageEditor()
                            ->columnSpan([
                                'sm' => 3,
                                'xl' => 6,
                                '2xl' => 8,
                            ])
                            ->required(),
                            TinyEditor::make('content')
                            ->label('Konten')
                            ->fileAttachmentsDisk('public')
                            ->fileAttachmentsVisibility('public')
                            ->fileAttachmentsDirectory('uploads')
                            ->profile('default')
                            ->ltr() // Set RTL or use ->direction('auto|rtl|ltr')
                            ->columnSpan('full')
                            ->required(),
                        // ...
                    ])

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label('Image'),
                Tables\Columns\TextColumn::make('user.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('category.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
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

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Components\Section::make()
                    ->schema([
                        Components\Split::make([
                            Components\Grid::make(2)
                                ->schema([
                                    Components\Group::make([
                                        Components\TextEntry::make('title'),
                                        Components\TextEntry::make('slug'),
                                        Components\TextEntry::make('published_at')
                                            ->badge()
                                            ->date()
                                            ->color('success'),
                                    ]),
                                    // Components\Group::make([
                                    //     Components\TextEntry::make('author.name'),
                                    //     Components\TextEntry::make('category.name'),
                                    //     Components\SpatieTagsEntry::make('tags'),
                                    // ]),
                                ]),
                            Components\ImageEntry::make('image')
                                ->hiddenLabel()
                                ->grow(false),
                        ])->from('lg'),
                    ]),
                Components\Section::make('Content')
                    ->schema([
                        Components\TextEntry::make('content')
                            ->prose()
                            ->markdown()
                            ->hiddenLabel(),
                    ])
                    ->collapsible(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'view' => Pages\ViewPost::route('/{record}'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
            'comments' => Pages\ManagePostComments::route('/{record}/comments'),
        ];
    }

    public static function getRecordSubNavigation(Page $page): array
    {
        return $page->generateNavigationItems([
            Pages\ViewPost::class,
            Pages\EditPost::class,
            Pages\ManagePostComments::class,
        ]);
    }
}
