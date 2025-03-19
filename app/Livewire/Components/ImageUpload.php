<?php

namespace App\Livewire\Components;

use App\Models\Quote;
use Livewire\Component;
use Filament\Forms\Form;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Wizard\Step;
use Filament\Forms\Concerns\InteractsWithForms;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class ImageUpload extends Component implements HasForms
{
    use InteractsWithForms, WithFileUploads;

    public $images;

    public function mount()
    {
        $this->images = [];
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('images')
                    ->multiple(),
            ]);
    }

    public function update()
    {
        dd($this->images);

        session()->flash('message', __('Location updated successfully.'));
    }

    public function render()
    {
        return view('livewire.components.image-upload');
    }
}
