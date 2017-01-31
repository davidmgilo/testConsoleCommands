<?php
/**
 * Created by PhpStorm.
 * User: alumne
 * Date: 31/01/17
 * Time: 21:31
 */

namespace App\Services;


use Illuminate\Filesystem\Filesystem;

class MakeReadmeCommand
{
    protected $filesystem;

    /**
     * MakeReadmeCommand constructor.
     * @param $filesystem
     */
    public function __construct(Filesystem $filesystem)
    {
        $this->filesystem = $filesystem;
    }


    public function create()
    {
        //dump("file readme created");
        //copy stub to /
        $this->filesystem->copy(__DIR__ . '/stubs/MyReadme.md', base_path('MyReadme.md'));
    }
}