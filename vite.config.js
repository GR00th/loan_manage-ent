<<<<<<< HEAD
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
=======
import { defineConfig } from 'vite'
import laravel, { refreshPaths } from 'laravel-vite-plugin'
>>>>>>> 835038c2e68d061091e2e27633b00e9a18feeed0

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
<<<<<<< HEAD
            refresh: true,
        }),
    ],
});
=======
            refresh: [
                ...refreshPaths,
                'app/Filament/**',
                'app/Forms/Components/**',
                'app/Livewire/**',
                'app/Infolists/Components/**',
                'app/Providers/Filament/**',
                'app/Tables/Columns/**',
            ],
        }),
    ],
})
>>>>>>> 835038c2e68d061091e2e27633b00e9a18feeed0
