<?php
 
namespace App\Providers;
 
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use App\Models\Profil;

 
class ConvertRupiahServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
 
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    { 
        
        Blade::directive('toRupiah', function ($expression) {
            return "<?php echo 'RP' . number_format($expression, 2,',','.'); ?>";
        });

    }
}