<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Contracts\Console\PromptsForMissingInput;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\search;

class TemplateFormCommand extends Command implements PromptsForMissingInput
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:template-form {tables}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Dynamic Form and CRUD Controller';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $table = $this->argument('tables');
        $tableName = $table;
        $data = getListTable()->where('name', $table)->first();

        if ($data == null) {
            $this->error('Table yang anda masukkan tidak ditemukan!');
        } else {
            $table = implode('_', array_map('ucfirst', explode('_', $table)));
            if (substr($table, -3) == 'ies') {
                $table = substr($table, 0, -3) . 'y';
            } else if (substr($table, -1) == 's') {
                $table = substr($table, 0, -1);
            }

            $controllerForm = base_path('app/Http/Controllers/TemplateController.pug');
            $controllerTo = base_path('app/Http/Controllers/' . ucfirst(str_replace("_", "", $table)) . 'Controller.php');

            $this->info('Table ' . $tableName . ' Ditemukan!');
            $this->warn('Proses pembuatan Templating untuk table ' . $tableName);
            copy($controllerForm, $controllerTo);
            $this->info('Berhasil membuat Controller ke ' . $controllerTo . ' !');
            if (!copy($controllerForm, $controllerTo)) {
                $this->error("failed to copy $controllerForm...\n");
            }
            $this->warn('Proses pembuatan function untuk controller ' . ucfirst(str_replace("_", "", $table) . 'Controller'));

            $file_contents = file_get_contents($controllerTo);
            $file_contents = str_replace("Template", ucfirst(str_replace("_", "", $table)), $file_contents);
            $file_contents = str_replace("tableName", $tableName, $file_contents);
            file_put_contents($controllerTo, $file_contents);

            $this->info('Berhasil menulis function ke Controller ' . ucfirst(str_replace("_", "", $table) . 'Controller'));
            $this->info("\nGimana,mantap kan? wkwkk");
        }
    }

    /**
     * Prompt for missing input arguments using the returned questions.
     *
     * @return array
     */
    protected function promptForMissingArgumentsUsing()
    {
        return [
            // 'tables' => ['Anda akan membuat Template untuk table apa?', 'E.g. users'],
            'tables' => fn () => search(
                label: 'Search for a table name:',
                placeholder: 'E.g. users',
                options: fn ($value) => (strlen($value) > 0
                    ? (getListTable()->where('name', $value)->first() != NULL ? ['success' => 'Tabel Ditemukan!'] : ['error' => 'Tabel tidak ditemukan'])
                    : []
                )
            ),
        ];
    }
}
