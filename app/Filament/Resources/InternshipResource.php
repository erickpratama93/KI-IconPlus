<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InternshipResource\Pages;
use App\Filament\Resources\InternshipResource\RelationManagers;
use App\Models\Internship;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use League\Flysystem\Visibility;

class InternshipResource extends Resource
{
    protected static ?string $model = Internship::class;
    protected static ?string $navigationGroup = 'Homepage';
    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('location')
                    ->required(),
                Forms\Components\TextInput::make('position')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('major')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('asal_sekolah')
                    ->required(),
                Forms\Components\TextInput::make('durasi_pkl')
                    ->required(),
                Forms\Components\DatePicker::make('tanggal_masuk')
                    ->required(),
                Forms\Components\DatePicker::make('tanggal_keluar')
                    ->required(),
                Forms\Components\FileUpload::make('path_pengajuan')
                    ->preserveFilenames()
                    ->disk('local')
                    ->directory('uploads')
                    ->enableDownload()
                    ->enableOpen()
                    ->minSize(50)
                    ->maxSize(5024),
                Forms\Components\FileUpload::make('path_balasan')
                    ->preserveFilenames()
                    ->disk('local')
                    ->directory('uploads')
                    ->enableDownload()
                    ->enableOpen()
                    ->minSize(50)
                    ->maxSize(5024),
                Select::make('jenis_kelamin')
                    ->options([
                        'Laki Laki' => 'Laki Laki',
                        'Perempuan' => 'Perempuan',

                    ])->default('Laki Laki'),
                Select::make('status')
                    ->options([
                        'approved' => 'Approved',
                        'pending' => 'Pending',
                        'declined' => 'Declined',
                    ])->default('pending'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('location')->limit(50),
                Tables\Columns\TextColumn::make('position'),
                Tables\Columns\TextColumn::make('major'),
                Tables\Columns\TextColumn::make('asal_sekolah'),
                Tables\Columns\TextColumn::make('jenis_kelamin'),
                Tables\Columns\TextColumn::make('durasi_pkl'),
                Tables\Columns\TextColumn::make('tanggal_masuk')->date(),
                Tables\Columns\TextColumn::make('tanggal_keluar')->date(),
                Tables\Columns\TextColumn::make('surat_pengajuan'),
                Tables\Columns\TextColumn::make('surat_balasan'),
                Tables\Columns\TextColumn::make('status'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListInternships::route('/'),
            'create' => Pages\CreateInternship::route('/create'),
            'edit' => Pages\EditInternship::route('/{record}/edit'),
        ];
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
