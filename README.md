# SweetAlert2-Laravel Livewire Demo

A demonstration of [SweetAlert2-Laravel](https://github.com/sweetalert2/sweetalert2-laravel) integration with Livewire.

## Installation

```bash
composer install
bun install
cp .env.example .env
php artisan key:generate
php artisan migrate
```

## Setup SweetAlert2-Laravel

Install the package:

```bash
composer require sweetalert2/laravel
```

Include the SweetAlert2 template in your layout file (e.g., `resources/views/layouts/app.blade.php`):

```blade
@include('sweetalert2::index')
```

## Usage in Livewire Components

Add the `WithSweetAlert` trait to your Livewire component:

```php
use Livewire\Component;
use SweetAlert2\Laravel\Traits\WithSweetAlert;

class Counter extends Component
{
    use WithSweetAlert;

    public function increment(): void
    {
        $this->swalSuccess([
            'title' => 'Success!',
            'text' => 'Your action was successful.',
            'toast' => true,
            'showConfirmButton' => false,
            'position' => 'top-end',
            'timer' => 1500,
            'timerProgressBar' => true,
            'didOpen' => '(toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }',
        ]);
    }
}
```

## Running the Demo

```bash
composer run dev
```

Visit the application and interact with the Livewire counter component to see SweetAlert2 in action.

## Testing

```bash
php artisan test
```

## License

MIT
