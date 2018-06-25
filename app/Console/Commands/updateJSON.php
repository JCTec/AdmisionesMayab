<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ConnectException;
use Illuminate\Support\Facades\Storage;

class updateJSON extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:JSON';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update getProgramasActualesLC and getPreparatorias\'s cache';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info('Downloading...');

        try{
            $client = new Client([
                'base_uri' => 'https://miplana.mx/u/',
                'timeout'  => 2.0,
            ]);

            $response = $client->request('GET', 'Programa/getProgramasActualesLC');


            if($response->getStatusCode() == 200){
                $json = (string) $response->getBody();

                $cache = Storage::disk('json')->get('getProgramasActualesLC.json');

                $cache = $json;

                Storage::disk('json')->put('getProgramasActualesLC.json', $cache);
            }

            $response = $client->request('GET', 'Preparatoria/getPreparatorias');

            if($response->getStatusCode() == 200) {
                $json = (string)$response->getBody();

                $cache = Storage::disk('json')->get('getPreparatorias.json');

                $cache = $json;

                Storage::disk('json')->put('getPreparatorias.json', $cache);

            }

            $this->info('Downloaded');

        }catch (ConnectException $e) {
            $this->error('Something went wrong!');

        }
    }
}
