<?php 

use App\Support\Console\Console;

Console::command('make:test {name} {config}', function() {
    $name = $this->input->getArgument('name');

    $this->info($name);
})->setDescription('Make Test Scaffold File');

Console::command('show:example {file}', function(){
    $this->info($this->input->getArgument('file'));
});