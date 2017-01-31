<?php
/**
 * Created by PhpStorm.
 * User: alumne
 * Date: 31/01/17
 * Time: 21:31
 */

namespace App\Services;


use App\Compiler\StubFileCompiler;
use Illuminate\Filesystem\Filesystem;

/**
 * Class MakeReadmeCommand
 * @package App\Services
 */
class MakeReadmeCommand
{
    protected $filesystem;
    protected $compiler;

    /**
     * MakeReadmeCommand constructor.
     * @param $filesystem
     */
    public function __construct(Filesystem $filesystem, StubFileCompiler $compiler)
    {
        $this->filesystem = $filesystem;
        $this->compiler = $compiler;
    }


    /**
     * @param $title
     */
    public function create($title)
    {
        //dump("file readme created");
        //copy stub to /

        $file = $this->compiler->compile(__DIR__ . '/stubs/MyReadme.md',['title'=> $title]);

        $this->filesystem->copy($file, base_path('MyReadme.md'));
    }
}